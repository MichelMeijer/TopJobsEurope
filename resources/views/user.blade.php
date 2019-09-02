@extends('layout')

@section('content')
<div class="container maincontent bottom_margin">
    <p>Welcome {{ $user->name}}</p>
    <p>This is a {{ $user->type}} account</p>
   
    @if ( $user->type == "recruiter")

        <h2>My posted jobs</h2>

        @foreach ($jobs as $job)
         <p> <a href="/jobs/ {{ $job->id}}">{{ $job->title}}</a></p>
        @endforeach

        <div class= "column text-center">
            <div class="mypagination">
                {{ $jobs->links() }}
            </div>
        </div>
    
    @endif
</div>
    
   
@endsection

