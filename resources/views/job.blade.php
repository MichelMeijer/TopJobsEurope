@extends('layout')

@section('content')
    <!-- {{ $job }} -->
    <h1>{{ $job->title}}</h1>
    <p><b>City: </b>{{ $job->city}}</p>
    <p><b>Country: </b>{{ $job->country}}</p>
    <p><b>Salary: </b>{{ $job->salary}}</p>
    <p><b>Language: </b>{{ $job->language}}</p>
    <p><b>Date posted: </b>{{ $job->creation_date}}</p>
    <div><b>Full Description: </b>{!! $job->description !!}</div>
    <a href="{{ $job->url }}" class="btn btn-primary">Apply!</a>
@endsection

