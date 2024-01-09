<div class="">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 20rem;
            width: auto;
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

          const marker = new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Localização Proposta",
          });

            // Add click event listener to capture coordinates
          map.addListener('click', function(event) {
            const clickedLatLng = {
              lat: event.latLng.lat(),
              lng: event.latLng.lng()
            };

            // Store or use the clicked coordinates as needed
            console.log("Clicked Coordinates:", clickedLatLng);

            document.getElementById('coordinateX').value = clickedLatLng['lat']
            document.getElementById('coordinateY').value = clickedLatLng['lng']
            // Update marker position
            marker.setPosition(clickedLatLng);
          });
        }

        window.initMap = initMap;
    </script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&callback=initMap" ></script>
    <input id="coordinateX" type="text" readonly class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Latitude">
    <input id="coordinateY" type="text" readonly class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 " placeholder="Longitude">

</div>
