<?php

namespace App\Http\Controllers;
use App\User;
use App\Jobs;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser($id){
        $user = User::where('id', $id)->first();
        $jobs = Jobs::where('user_id', $id)->paginate(10);
    
        return view('user', compact('user', 'jobs'));

    }
}
