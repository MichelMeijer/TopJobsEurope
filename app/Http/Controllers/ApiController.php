<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Rules\NoDuplicate;
use Auth;

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

    public function destroy($id) {
        $job = Jobs::select("user_id")->where("id", $id)->first();
        Jobs::where("id", $id)->delete();
        $redirect_url = "/users/" . $job->user_id;
         
        return redirect($redirect_url);
    }
   
    public function update($id) {
        request()->validate([
            'short_description' => ['required', new NoDuplicate]
        ]);

        $job = Jobs::where("id", $id)->first();
        $job->update(request()->all());

        $redirect_url = "/users/" . $job->user_id;

        return redirect($redirect_url);
    }
    
}

