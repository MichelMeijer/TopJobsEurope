@extends('layout')

@section('content')

  <!-- Jumbotron Header -->
  <!-- <header class="jumbotron my-4">
      <div class="column text-center">
      <h1 class="display-3">Welcome to TopJobsEurope!</h1>
      <p class="lead">
      </p>
      <a href="#" class="btn btn-primary btn-lg">Get in touch</a>
    </div>
  </header> -->

  <!-- <header> -->
  
      <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img class="carrouselPicture" src="img/amsterdam.jpg" alt="Amsterdam" width="460" height="345">
          <div class="carousel-caption">
            <a class="mystyle" href="/jobs/cityfilter/amsterdam" target="_blank">Jobs in Amsterdam</a>
          </div>
        </div>

        <div class="item">
          <img src="img/berlin.jpg" alt="Berlin" width="460" height="345">
          <div class="carousel-caption">
            <a class="mystyle" href="/jobs/cityfilter/berlin" target="_blank">Jobs in Berlin</a>
          </div>
        </div>

        <div class="item">
          <img src="img/prague.jpg" alt="Prague" width="460" height="345">
          <div class="carousel-caption">
            <a class="mystyle" href="/jobs/cityfilter/prague" target="_blank">Jobs in Prague</a>
          </div>
        </div>
      </div>

    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <!--<a class="left carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>-->
<!-- </header> -->


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
     <div class= "column text-center">
       <div class="mypagination">
       {{ $jobs->links() }}
       </div>
     </div>
</div>
@endsection
