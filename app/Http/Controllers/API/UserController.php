<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Task;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function checkUser(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request['email'])->get();

        if(count($user) > 0){
            return response()->json([
                'status' => 'error',
                'msg'    => 'The Email already exists',
            ], 422);
        }else{
            return 'success';
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'level' => 'required',
            'pages' => 'required',
            'spacing' => 'required',
            'subject' => 'required',
            'task' => 'required',
            'time' => 'required',
            'title' => 'required',
            'type' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::login($user);

        $task = new Task();
        $task->user_id = auth()->user()->id;
        $task->subject_id = $request->subject;
        $task->documentType_id = $request->type;
        $task->deadline_date = $request->date;
        $task->deadline_time = $request->time;
        $task->level = $request->level;
        $task->title = $request->title;
        $task->task = $request->task;
        $task->pages = $request->pages;
        $task->spacing = $request->spacing;
        $task->save();

        echo $task->id;


       
        $uploadedFiles=$request->pics;
        foreach ($uploadedFiles as $file){
            // $ext = pathinfo($file, PATHINFO_EXTENSION);
            // $uniquesavename=time().uniqid(rand()). '.' . $ext;
            // echo $uniquesavename;
            $file->store('dummy');
        }
        return response(['status'=>'success'],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
