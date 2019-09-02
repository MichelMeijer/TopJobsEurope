<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Rules\NoDuplicate;

class ApiController extends Controller
{
    public function test() {
        return view('test');
    }

    public function index() {
        return view('');
    }

    public function store() {
        //TODO check why no validation errors are shown
        request()->validate([
            'short_description' => ['required', new NoDuplicate]
        ]);
        // $this->validate(request(), ['short_description' => new NoDuplicate]);

        Jobs::create(request()->all());
       
        return redirect("/");
    }
}
