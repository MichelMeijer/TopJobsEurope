<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class MainController extends Controller
{
    public function index() {
        $jobs = Jobs::all();
        return view('welcome', ['jobs' => $jobs]);
    }
}
