@props(['proposals'])

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
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: { lat: 39.92126926355065, lng: -8.43029715113065 },
          });

          @foreach ($proposals as $proposal)
              addMarker(map, {{ $proposal->coordinateX }}, {{ $proposal->coordinateY }}, "{{ $proposal->title }}", "{{ $proposal->summary }}");
          @endforeach
        }

        function addMarker(map, lat, lng, title, description) {
            const marker = new google.maps.Marker({
                position: { lat, lng },
                map,
                title: title,
            });

            const contentString = `
                <div>
                    <h2>Title : ${title}</h2>
                    <p> Descrição : ${description}</p>
                    <button onclick="window.location.href='propostas/{{$proposal->id}}'">View Proposal</button>
                </div>
            `;

            const infoWindow = new google.maps.InfoWindow({
                content: contentString,
            });

            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });
        }

        window.initMap = initMap;
    </script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&callback=initMap" ></script>
</div>
