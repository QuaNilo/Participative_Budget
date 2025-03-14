@props(['height', 'width', 'lat' , 'lng'])
<div class="">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: {{$height}}px;
            width:{{$width}}px
        }
    </style>
    <div class="h-screen w-screen bg-gray-100" id="map"></div>
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: {{$lat}}, lng: {{$lng}} };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: myLatLng,
          });

          const marker = new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Localização Proposta",
          });
        }

        window.initMap = initMap;
    </script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&callback=initMap" ></script>
</div>
