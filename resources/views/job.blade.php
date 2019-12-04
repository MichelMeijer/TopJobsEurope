@extends('layout')

@section('content')
    <!-- {{ $job }} -->
    <div class="jobinfo">
    <h1 class="jobtitle">{{ $job->title}}</h1> 
    <hr>
    <div class="row justify-content-center">
    <div class="col-sm-6">
    <h2><b>City: </b>{{ $job->city}}</h2>
</div>
    <div class="col-sm-6">
    <h2><b>Country: </b>{{ $job->country}}</h2>
</div>
    <div class="col-sm-6">
    <h2><b>Language: </b>{{ $job->language}}</h2>
</div>
<div class="col-sm-6">
        <h2><b>Salary: </b>{{ $job->salary}}</h2>
    </div>
    </div>
 <div class="column justify-content-center">
        <h2><b>Date posted: </b>{{ $job->creation_date}}</h2>
    </div><hr>
    <div><h3><b>Full Description: </b>{!! $job->description !!}</h3></div>
    <div class="row justify-content-center">
    <a href="{{ $job->url }}" class="btn btn-primary1">Apply!</a></div><br><br><br><br><br><br><br><br>
    </div>
@endsection

