var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.9183, lng: 7.50871},
          zoom: 8
        });
      }