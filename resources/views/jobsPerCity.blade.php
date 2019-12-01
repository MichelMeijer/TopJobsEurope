@extends('layout')

@section('content')

      <div class="container">

    <div class="row text-center">
            @foreach ($jobs as $job)         
                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <div class="card-img-top" style="background-image: url('{{ $job->image }}')">
                  <h4><b>{{$job->city}}</b></h4>
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b>{{ $job->title}}</b></p>
                      <p class="card-text">Salary: <span>{{ $job->salary}}</span></p>
                      <p class="card-text"><span>{{ $job->creation_date}}</span></p>
                    </div>
                    <div class="card-footer">
                      <a href="/jobs/ {{ $job->id}}" class="btn btn-primary">Find Out More</a>
                    </div>
                  </div>
                </div>                    
            @endforeach
    </div>
    </div>
<div class= "column text-center">
  <div class="mypagination">
  {{ $jobs->links() }}
  </div>
</div>
@endsection