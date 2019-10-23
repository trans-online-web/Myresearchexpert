<?php

namespace App\Http\Controllers\API;

use App\Completed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Task;
use App\Files;
use App\Subject;
use App\Document;

class TaskController extends Controller
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
        return Task::latest()->paginate(20);
    }

    public function student()
    {
        $user = auth()->user()->id;
        return Task::where('user_id', $user)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'type' => 'required',
            'price' => 'required',
            'title' => 'required',
        ]);

        $task = new Task();
        $task->user_id = auth()->user()->id;
        $task->name = auth()->user()->name;
        $task->email = auth()->user()->email;
        $task->subject_name = $request->subject;
        $task->documentType_name = $request->type;
        $task->deadline_datetime = $request->date;
        $task->price = $request->price;
        $task->level = $request->level;
        $task->title = $request->title;
        $task->task = $request->task;
        $task->pages = $request->pages;
        $task->spacing = $request->spacing;
        $task->save();
        $task_id = $task->id;

        if ($request->pics) {
            $uploadedFiles = $request->pics;
            foreach ($uploadedFiles as $file) {
                $filename = $file->store('uploads');
                // echo $filename;
                $file = new Files();
                $file->task_id = $task_id;
                $file->path = $filename;
                $file->user_id = auth()->user()->id;
                $file->save();
            }
        }
        return response(['status' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Task::where('id', $id)->first();
    }

    public function ifFiles($orderId)
    {
        return Files::where('task_id', $orderId)->count();
    }

    public function ifCompleted($orderId)
    {
        return Completed::where('task_id', $orderId)->count();
    }

    public function getFiles($orderId)
    {
        return Files::where('task_id', $orderId)->get();
    }
    public function user($orderId)
    {
        return Task::where('id', $orderId)->value('user_id');
    }
    public function ThisUser($orderId)
    {
        $id = Task::where('id', $orderId)->value('user_id');
        $user = User::where('id',$id)->first();
        return $user;
    }
    public function admin()
    {
        return User::where('role','admin')->value('id');
    }
    public function addFiles(Request $request, $orderId)
    {
        $request->validate([
            'pics' => 'required',
        ]);

        if ($request->pics) {
            $uploadedFiles = $request->pics;
            foreach ($uploadedFiles as $file) {
                $filename = $file->store('uploads');
                // echo $filename;
                $file = new Files();
                $file->task_id = $orderId;
                $file->path = $filename;
                $file->user_id = auth()->user()->id;
                $file->save();
            }
        }
    }

    public function downloadFile($id)
    {
        // echo $path;
        $path = Files::where('id', $id)->value('path');

        return response()->download(storage_path('app/' . $path));
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
        $request->validate([
            'status' => 'required',
        ]);

        if ($request->status == 'Paid') {
            $task = Task::findOrFail($id);
            $task->status = $request->status;
            $task->paid = 0;
            $task->update();
        } elseif ($request->status == 'Pending') {
            $task = Task::findOrFail($id);
            $task->status = $request->status;
            $task->paid = 1;
            $task->update();
        } else {
            $task = Task::findOrFail($id);
            $task->status = $request->status;
            $task->update();
        }
    }

/**
 * Remove the specified resource from storage.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function destroy($id)
{
    //
}
}
