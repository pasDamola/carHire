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
 
  <main class="mdl-layout__content">
   <p> We enables your easy access for pick ups </p>
  </main>
</div> 
    </body>

    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>
