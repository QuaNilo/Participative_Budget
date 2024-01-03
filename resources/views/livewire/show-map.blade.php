<div class="">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 800px;
        }
    </style>
    <div class="h-screen w-screen bg-gray-100" id="map"></div>
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 39.45881646622997, lng: -8.43029715113065 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
          });

          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Rajkot!",
          });
        }

        window.initMap = initMap;
    </script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
</div>
