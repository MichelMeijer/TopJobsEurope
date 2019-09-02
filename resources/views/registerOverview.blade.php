@extends('layout')

@section('content')

<div class="row text-center maincontent">                
                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <div class="card-img-top" style="background-image: url('/img/jobsearch.jpg')">
                  <h4><b>I am recruiter</b></h4>
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b></b></p>
                      <p class="card-text"><span>Register and post jobs to find the perfect candidates</span></p>
                    </div>
                    <div class="card-footer">
                      <a href="/register/recruiter" class="btn btn-primary">{{ __('Register') }}</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <div class="card-img-top" style="background-image: url('/img/jobsearch.jpg')">
                  <h4><b>I want to use recruitment services</b></h4>
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b></b></p>
                      <p class="card-text"><span>Register and let us find the perfect candidates for your company</span></p>
                    </div>
                    <div class="card-footer">
                      <a href="/register/recruitment_services" class="btn btn-primary">{{ __('Register') }}</a>
                    </div>
                  </div>
                </div> 

                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <div class="card-img-top" style="background-image: url('/img/jobsearch.jpg')">
                  <h4><b>I search a job</b></h4>
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b></b></p>
                      <p class="card-text"><span>Register and find a job in our job database or upload your cv and wait for the recruiters to contact you</span></p>
                    </div>
                    <div class="card-footer">
                      <a href="/register/job_search" class="btn btn-primary">{{ __('Register') }}</a>
                    </div>
                  </div>
                </div>                    
    </div>


@endsection