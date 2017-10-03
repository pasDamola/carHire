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
        <style>
              .another {
        align-items: center;
        justify-content: center;
                }
      .mdl-layout__content {
        padding: 24px;
        flex: none;
      }
       
       .mdl-card{
        height: 420px;
        width: 350px;

       }

</style>
        
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

   <iframe width="600" height="450" frameborder="0" style="border:0;padding-top:110px";
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJWwEKpMsNThARSY-8UwrGn5w&key=AIzaSyD7cSt7tvUBrsI4ERvS5ZEpY4FbMdhfzEc" allowfullscreen></iframe>
 <br><br>
 <div class="mdl-layout another mdl-js-layout layout">
  <main class="mdl-layout__content">
    <div class="mdl-card mdl-shadow--6dp">
      <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
        <h2 class="mdl-card__title-text" ui-sref="home">Send us a message @FikiHire</h2>
      </div>
      <div class="mdl-card__supporting-text">
        
        </div>
        <form>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="email" />
            <label class="mdl-textfield__label" for="email">Name</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
       <input class="mdl-textfield__input" type="email" id="userpass"/>
            <label class="mdl-textfield__label" for="userpass">Email Address</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
       <input class="mdl-textfield__input" type="text" id="userpass"/>
            <label class="mdl-textfield__label" for="userpass">Location</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
       <input class="mdl-textfield__input" type="text" id="userpass"/>
            <label class="mdl-textfield__label" for="userpass">Message</label>
          </div>
           <button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Send</button>
        </form>
      </div>
      </div>
    </div>
  </main>
</div>

    </body>

    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</html>
