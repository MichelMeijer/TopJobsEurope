<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class ApiController extends Controller
{
    public function test() {
        return view('test');
    }

    public function index() {
        return view('');
    }

    public function createJobForm() {
        return view('createJob');
    }

    public function createJob() {
        Jobs::create(request()->all());

        return redirect("/");
    }
}
