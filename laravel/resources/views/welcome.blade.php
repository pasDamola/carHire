<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fiki Hire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Styles -->
        
    </head>
    <body>
       <!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Fiki Hire</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="{{ URL::to('/') }}" class="mdl-layout__tab">Home</a>
       <a href="{{ URL::to('about') }}" class="mdl-layout__tab">About</a>
        <a href="{{ URL::to('team') }}" class="mdl-layout__tab">Team</a>
        <a href="{{ URL::to('services') }}" class="mdl-layout__tab">Services</a>
           <a href="{{ URL::to('contact') }}" class="mdl-layout__tab">Contact</a>

    </div>
  </header>
 
  
</div> 

<!-- <img src="/images/car1.jpg" width="100%"/> -->
<div class="container">
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
        <img src="/images/car4.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
     <!--      <h3>Fiki Hire</h3> -->
          <h3>Fiki Hire offers a wide variety of rental cars that will best serve your requirements</h3>
        </div>
      </div>

      <div class="item">
        <img src="/images/car5.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Easy, Safe and Secured Platform to book a cab to your destinations around Abuja city and beyond</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="/images/car6.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3> We provide airport pickup to make sure you arrive conveniently after boarding a flight</h3>
        </div>
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
</div>

  
    </body>

    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
