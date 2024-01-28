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
              addMarker(map, {{ $proposal->lat }}, {{ $proposal->lng }}, "{{ $proposal->title }}", "{{ $proposal->summary }}", {{$proposal->id}}, "{{$proposal->user->name}}", "{{$proposal->category->name}}");
          @endforeach
        }

        function addMarker(map, lat, lng, title, description, id, author, category_name,) {
            const marker = new google.maps.Marker({
                position: { lat, lng },
                map,
                title: title,
            });

            const contentString = `
                <div>
                    <div class="">
                        <dl class="grid grid-cols-12 mb-0">
                            <dt class="md:col-span-4 col-span-5 mt-2">Autor :</dt>
                            <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">${author}</dd>
                            <dt class="md:col-span-4 col-span-5 mt-2">Category :</dt>
                            <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">${category_name}</dd>
                            <dt class="md:col-span-4 col-span-5 mt-2">Titulo :</dt>
                            <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">${title}</dd>
                        </dl>
                    </div>
                    <x-button class="mt-4"  onclick="window.location.href='edition/proposta/${id}'">View Proposal</x-button>
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
