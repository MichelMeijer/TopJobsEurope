<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class JobsController extends Controller
{
    public function showJob($id){
        $job = Jobs::where('id', $id)->first();

        return view('job', compact('job'));

    }
}
