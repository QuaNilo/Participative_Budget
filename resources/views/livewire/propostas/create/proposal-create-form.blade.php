<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="lg:flex justify-center">
            <div class="lg:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <form action="{{ route('propostasFE-store') }}" wire:submit.prevent="store" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1">
                            <h5 class="text-lg font-semibold">Crie uma proposta :</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="title">Proposal Title:</label>
                                <input id="title" wire:model="title" name="title" type="text" value="{{ old('title') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Titulo da proposta" >
                                @error('title')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-span-12 text-start">
                                <label for="content" class="font-semibold">Proposal Content: </label>
                                <textarea id="content" wire:model="content" name="content" class="form-input mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Descrição da proposta :">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label for="category_id" class="font-semibold">Proposal Categories:</label>
                                <select id="category_id" wire:model="category_id" name="category_id" value="{{ old('category_id') }}" class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option >Selecione uma categoria</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">Localização :</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="street">Rua :</label>
                                <input  id="street" type="text" wire:model="street" name="street" value="{{ old('street') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Rua ">
                                @error('street')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-2 col-span-12 text-start">
                                <label class="font-semibold" for="postal_code">Codigo Postal :</label>
                                <input id="postal_code" wire:model="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Codigo Postal">
                                @error('postal_code')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="city">Cidade :</label>
                                <input id="city" type="text" wire:model="city" name="city"  value="{{ old('city') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Cidade">
                                @error('city')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="freguesia">Freguesia :</label>
                                <input id="freguesia" type="text" wire:model="freguesia" name="freguesia" value="{{ old('freguesia') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Freguesia">
                                @error('freguesia')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">Ou deixe um pin no mapa :</h5>
                        </div>
                        <div class="col-span-12 text-start mt-8">
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
                                            @this.set('coordinateX', clickedLatLng.lat);
                                            @this.set('coordinateY', clickedLatLng.lng);
                                      });
                                    }

                                    window.initMap = initMap;
                                </script>
                                <script type="text/javascript"
                                    src="https://maps.google.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&callback=initMap" ></script>
                                <input id="coordinateX"  wire:model="coordinateX" name="coordinateX" type="text" readonly class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Latitude">
                                <input id="coordinateY" wire:model="coordinateY" name="coordinateY" type="text" readonly class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 " placeholder="Longitude">

                            </div>
                        </div>


                        <div class="grid grid-cols-1 mt-8">
                            <div class="mb-3">
                                <input type="file" wire:model="photo">

                                @error('photo') <span class="error">{{ $message }}</span> @enderror
                            </div>
{{--                           <livewire:files-upload-f-e--}}
{{--                                inputName="files"--}}
{{--                                :isMultiple="true"--}}
{{--                                maxFiles="3"--}}
{{--                                maxFileSize="10240"--}}
{{--                                    :previousFiles="$proposal->getMedia('cover')"--}}
{{--                                :label="__('Upload Cover')"--}}
{{--                                acceptedFileTypes="image/*"--}}
{{--                                :uploadFieldMainLabel="__('Upload an image')"--}}
{{--                            />--}}

                            @error('files') <span class="error">{{ $message }}</span> @enderror
                        </div>




                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div>
                                <button type="submit" id="submit" name="send" value="1" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Criar Proposta</button>
                            </div>
                        </div>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->
