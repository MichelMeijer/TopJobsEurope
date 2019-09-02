<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
// use App\User;
// use App\Http\Controllers\Auth;

class JobsController extends Controller
{
    public function showJob($id){
        $job = Jobs::where('id', $id)->first();
        $job->creation_date = date("d-m-Y", strtotime($job->created_at));
        
        return view('job', compact('job'));

    }

    public function createJobForm() {
        $user_id = auth()->user()->id;
        
        return view('createJob', compact('user_id'));
    }

}
