<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class MainController extends Controller
{
    public function index() {
        $jobs = Jobs::orderBy('created_at', 'desc')->paginate(12);
        foreach ($jobs as $job) {
            $job->title = $this->buildJobTitle($job->title);
            $job->image = $this->buildBackGroundURL($job);
            $job->creation_date = date("d-m-Y", strtotime($job->created_at));
        }

        return view('welcome', ['jobs' => $jobs]);
    }

    public function getJobs($city) {
        $jobs = Jobs::where('city', $city)->orderBy('created_at', 'desc')->paginate(12);
        foreach ($jobs as $job) {
            $job->title = $this->buildJobTitle($job->title);
            $job->image = $this->buildBackGroundURL($job);
            $job->creation_date = date("d-m-Y", strtotime($job->created_at));
        }

        return view('jobsPerCity', ['jobs' => $jobs]);
    }

    private function buildBackGroundURL($job){
        $city_array = ['athens', 'sofia', 'paris', 'berlin', 'krakow', 'prague', 'amsterdam', 'barcelona', 'budapest', 'dublin', 'lissabon', 'malta'];
        
        if(in_array(strtolower($job->city), $city_array)) {
            return "/img/" . strtolower($job->city) . ".jpg";
        } else {
            return "img/jobsearch.jpg";
        }
    }

    private function buildJobTitle ($title) {
        if (strlen($title) > 50) {
            $splitted_title = preg_split( "/(-|–|\?|\.|!|,)/", $title);
            $title = $splitted_title[0];
        }

        return $title;
    }

}
