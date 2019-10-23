<?php

namespace App\Http\Controllers\API;

use App\Files;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Completed;
use ZipArchive;
use File;
use Illuminate\Support\Facades\Storage;

class CompletedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $orderId)
    {
        $request->validate([
            'pics' => 'required',
        ]);

        if ($request->pics) {
            $uploadedFiles = $request->pics;
            foreach ($uploadedFiles as $file) {
                $filename = $file->store('uploads');
                // echo $filename;
                $file = new Completed();
                $file->task_id = $orderId;
                $file->path = $filename;
                $file->user_id = auth()->user()->id;
                $file->save();
            }
        }
        return response(['status' => 'success'], 200);
    }

    public function downloadCompleted($id)
    {
        // echo $path;
        $path = Completed::where('id', $id)->value('path');

        return response()->download(storage_path('app/' . $path));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($orderId)
    {
        return Completed::where('task_id', $orderId)->get();
    }

    public function downloadAll($orderId)
    {
        $zip = new ZipArchive;
        $fileName = 'Task#' . $orderId . '.zip';

        if ($zip->open(storage_path('app/uploads/' . $fileName), ZipArchive::CREATE) === TRUE) {
            $files = Files::where('task_id', $orderId)->get();

            foreach ($files as $file){
                $individual = Storage::get('app/'.$file['path']);

                $zip->addFile($individual, $file['path']);
            }

            $zip->close();
        }
        return response()->download(storage_path('app/uploads/'.$fileName));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
