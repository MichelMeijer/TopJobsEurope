@extends('layout')

@section('content')
<h2>All jobs</h2>

<div>
<a href="/api/jobs/create">Post a job
</a>
</div>

    <ul>
            @foreach ($jobs as $job)         
              <li>
              <a href="/jobs/ {{ $job->id}}">              
              {{ $job->title}}
              <!-- {{ $job->id}} -->
              </a>            
              </li>
            @endforeach
    </ul>

  

@endsection