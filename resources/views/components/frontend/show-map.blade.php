@props(['proposals'])
<div class="">
    <style type="text/css">
        #map {
          height: 800px;
        }
    </style>
    <div class="h-screen w-screen bg-gray-100" id="map"></div>
    <script type="text/javascript">
        let map;
        let openInfoWindow;

        async function initMap() {
          const { Map } = await google.maps.importLibrary("maps");
          map = new Map(document.getElementById("map"), {
            center: { lat: {{App\Models\Setting::first()->map_lat}}, lng: {{App\Models\Setting::first()->map_lng}} },
            zoom: 8,
            mapTypeId: "satellite"
          });
              @foreach ($proposals as $proposal)
                  addMarker(map, {{ $proposal->lat }}, {{ $proposal->lng }}, "{{ $proposal->title }}", "{{ $proposal->summary }}", {{$proposal->id}}, "{{$proposal->user->name}}", "{{$proposal->category->name}}");
              @endforeach

            map.addListener('click', function() {
            if (openInfoWindow) {
                openInfoWindow.close();
                openInfoWindow = null;
            }
            });
        }

        function addMarker(map, lat, lng, title, description, id, author, category_name) {
            const marker = new google.maps.Marker({
                position: { lat, lng },
                map,
                title: title
            });

            const contentString =
            `
                <div>
                    <div class="">
                        <dl class="grid grid-cols-12 mb-0">
                            <dt class="md:col-span-4 col-span-5 mt-2">{{__('Author')}} :</dt>
                            <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">${author}</dd>
                            <dt class="md:col-span-4 col-span-5 mt-2">{{__('Category')}} :</dt>
                            <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">${category_name}</dd>
                            <dt class="md:col-span-4 col-span-5 mt-2">{{__('Title')}} :</dt>
                            <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">${title}</dd>
                        </dl>
                    </div>
                    <x-button class="mt-4"  onclick="window.location.href='http://127.0.0.1:8000/edition/proposta/${id}'">{{__('View Proposal')}}</x-button>
                </div>
            `;

            const infoWindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                // Close previously open info window if exists
                if (openInfoWindow) {
                    openInfoWindow.close();
                }
                infoWindow.open(map, marker);
                openInfoWindow = infoWindow;
            });
        }
        window.initMap = initMap;
    </script>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&loading=async&callback=initMap">
    </script>
</div>
