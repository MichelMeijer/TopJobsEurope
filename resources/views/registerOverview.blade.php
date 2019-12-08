@extends('layout')

@section('content')

<div class="row text-center maincontent">                
                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <h3><b>I am a recruiter</b></h3>
                  <div class="card-img-top" style="background-image: url('/img/recphoto.jpg')">  
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b></b></p>
                      <h4 class="card-text"><span>Register and post jobs to find the perfect candidates</span></h4>
                    </div>
                    <div class="card-footer">
                      <a href="/register/recruiter" class="btn btn-primary">{{ __('Register') }}</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <h3><b>I want to use recruitment services</b></h3>
                  <div class="card-img-top" style="background-image: url('/img/jobsearch.jpg')">
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b></b></p>
                      <h4 class="card-text"><span>Register and let us find the perfect candidates for your company</span></h4>
                    </div>
                    <div class="card-footer">
                      <a href="/register/recruitment_services" class="btn btn-primary">{{ __('Register') }}</a>
                    </div>
                  </div>
                </div> 

                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card h-100">
                  <h3><b>I search a job</b></h3>
                  <div class="card-img-top" style="background-image: url('/img/img1.jpg')">
                  </div>
                    <div class="card-body">
                      <p class="card-title"><b></b></p>
                      <h4 class="card-text"><span>Register and find a job in our job database or upload your CV and wait 
                        for the recruiters to contact you</span></h4>
                    </div>
                    <div class="card-footer">
                      <a href="/register/job_search" class="btn btn-primary">{{ __('Register') }}</a>
                    </div>
                  </div>
                </div>                    
    </div>


@endsection