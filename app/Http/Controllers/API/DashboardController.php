<?php

namespace App\Http\Controllers\API;

use App\Application;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index()
    {
        $total_pending_orders = Task::where('status','pending')->count();
        $total_approved_orders = Task::where('status','paid')->count();
        $total_completed_orders = Task::all()->count();
        $total_latest_proposal = Task::where('status','1')->count();
        $data = array(
            'total_pending'=>$total_pending_orders,
            'total_appproved'=>$total_approved_orders,
            'total_completed'=> $total_completed_orders,
            'total_latest'=> $total_latest_proposal,
        );
        return['data'=>$data];

    }
}
