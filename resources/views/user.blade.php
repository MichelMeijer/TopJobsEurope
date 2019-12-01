@extends('layout')

@section('content')
<div class="container maincontent bottom_margin">
    <p>Welcome {{ $user->name}}!</p>
    <!-- <p>This is a {{ $user->type}} account</p> -->
   
    @if ( $user->type == "recruiter")
        <br>

        <h2 id="posted_jobs" class="titlejobs">Your posted jobs</h2>&nbsp;
        
        <ol>
        @foreach ($jobs as $job)
            <div class="row">
                <div class="col-sm-12">               
                    <li>
                        <a href="/jobs/{{ $job->id}}">{{ $job->title}}</a>&nbsp;
                        <span class="description"> {{$job->description}}</span>&nbsp;

                        <a href="/update/jobs/{{ $job->id}}">
                            <button class="edit">Edit
                                <span class="glyphicon glyphicon-edit"></span>
                                </button>
                        </a>

                        <form method="POST" action="/api/jobs/{{$job->id}}">
                        {{ csrf_field() }}&nbsp;
                        {{ method_field('DELETE') }}&nbsp;
                            <button type="submit" class="delete"> Delete
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>              
                        </form>
                    </li>

                </div>
            </div>
        @endforeach
        </ol>
        <div class= "column text-center">
            <div class="mypagination">
                {{ $jobs->links() }}
            </div>
        </div>
    
    @endif
</div>
    
   
@endsection

