<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Task;
use App\Files;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
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

        $task_id = $task->id;


       
        $uploadedFiles=$request->pics;
        foreach ($uploadedFiles as $file){
            $filename = $file->store('dummy');
            // echo $filename;
            $file = new Files();
            $file->task_id = $task_id;
            $file->path = $filename;
            $file->user_id = auth()->user()->id;
            $file->save();

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
        $user = User::findOrFail($id);
        $user->delete();
        return ['message'=> 'user deleted'];
    }
    public function search(){
        if ($search = \Request::get('q')) {
            $users = User::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                    ->orWhere('email','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $users = User::latest()->paginate(10);
        }
        return $users;
    }
}
