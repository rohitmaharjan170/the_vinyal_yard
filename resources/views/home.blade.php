@extends('layouts.app')

@section('content')
    <header>
        <a class="#home">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{ asset('image/slider-1.jpg') }}" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{ asset('image/slider-2.jpg') }}" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{ asset('image/slider-3.jpg') }}" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

   </a> </header>


    <div class="event">
        <a name="event">
            <h1 class="heading-1"> EVENTS</h1>

            <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
              </div>
            </div>

        </a>
    </div>

        <div class="gallery">
        <a name="gallery">
            <h1 class="heading-1"> GALLERY</h1>
            
            <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
              </div>
            </div>

        </a>
    </div>


        <div class="contact">
        <a name="contact">
            <h1 class="heading-1"> CONTACT US</h1>
            
            <div class="wrapper">
              <div><h1 class="heading-2">Contact Details</h1></div>
              <div><h1 class="heading-2">Map</h1></div>
            </div>

        </a>
    </div>

@endsection