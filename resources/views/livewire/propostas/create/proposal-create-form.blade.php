<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="lg:flex justify-center">
            <div class="lg:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <form wire:submit.prevent="store" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1">
                            <h5 class="text-lg font-semibold">{{__("Create your Proposal")}}:</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="title">{{ __('Proposal Title') }}:</label>
                                <input id="title" wire:model="title" name="title" type="text" value="{{ old('title') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('Proposal Title') }}" >
                                @error('title')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-span-12 text-start">
                                <label for="content" class="font-semibold">{{__('Proposal Content')}}: </label>
                                <textarea id="content" wire:model="content" name="content" class="form-input mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('Proposal Description') }} :">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-span-4 md:inline-block text-start">
                                <label class="font-semibold" for="budget_estimate">{{ __('Budget Estimate') }} :</label>
                                <input id="budget_estimate" wire:model="budget_estimate" type="text" name="budget_estimate" value="{{ old('budget_estimate') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('Budget Estimate') }}">
                                @error('budget_estimate')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-4 md:block col-span-6 text-start">
                                <label for="category_id" class="font-semibold">{{ __('Proposal Categories') }}:</label>
                                <select id="category_id" wire:model="category_id" name="category_id" value="{{ old('category_id') }}" class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option >{{ __('Select a Category') }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="md:col-span-4 col-span-6 text-start">
                                <label class="font-semibold" for="url">{{ __('Video URL') }} :</label>
                                <input id="url" type="text" wire:model="url" name="url"  value="{{ old('url') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('Video URL') }}">
                                @error('url')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">{{ __('location') }} :</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="street">{{ __('street') }} :</label>
                                <input  id="street" type="text" wire:model="street" name="street" value="{{ old('street') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('street') }}">
                                @error('street')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-2 col-span-12 text-start">
                                <label class="font-semibold" for="postal_code">{{ __('Postal Code') }} :</label>
                                <input id="postal_code" wire:model="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('Postal Code') }}">
                                @error('postal_code')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="city">{{ __('City') }} :</label>
                                <input id="city" type="text" wire:model="city" name="city"  value="{{ old('city') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('City') }}">
                                @error('city')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="freguesia">{{ __('County') }} :</label>
                                <input id="freguesia" type="text" wire:model="freguesia" name="freguesia" value="{{ old('freguesia') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('County') }}">
                                @error('freguesia')
                                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">{{ __('Leave your marker on the map') }} :</h5>
                        </div>
                            <x-button wire:click.prevent="getCoordinates()">{{ __('Search') }}</x-button>
                        <div class="col-span-12 text-start mt-8">
                            <input id="lng" hidden wire:model="lng" name="lng" type="text"  class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 " placeholder="{{ __('Longitude') }}">
                            <input id="lat" hidden wire:model="lat" name="lat" type="text"  class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{ __('Latitude') }}">
                            <div class="" wire:ignore>
                                <style type="text/css">
                                    #map {
                                      height: 20rem;
                                        width: auto;
                                    }

                                </style>
                                <div class="h-screen w-screen bg-gray-100" id="map"></div>
                                <script type="text/javascript">
                                    async function initMap() {
                                      const { Map } = await google.maps.importLibrary("maps");
                                          map = new Map(document.getElementById("map"), {
                                            center: { lat: {{App\Models\Setting::first()->map_lat}}, lng: {{App\Models\Setting::first()->map_lng}} },
                                            zoom: 8,
                                            mapTypeId: "satellite"
                                      });

                                      const marker = new google.maps.Marker({
                                        position: { lat: 39.137612, lng: -8.201025 },
                                        map,
                                        title: "{{__("Proposal's Location")}}",
                                      });

                                        // Add click event listener to capture coordinates
                                      map.addListener('click', function(event) {
                                        const clickedLatLng = {
                                          lat: event.latLng.lat(),
                                          lng: event.latLng.lng()
                                        };
                                        document.getElementById('lat').value = clickedLatLng['lat']
                                        document.getElementById('lng').value = clickedLatLng['lng']
                                        // Update marker position
                                        marker.setPosition(clickedLatLng);
                                        centerMap(marker.getPosition());
                                        @this.set('lat', clickedLatLng.lat);
                                        @this.set('lng', clickedLatLng.lng);
                                      });
                                        Livewire.on('changedCoordinates', function (coordinates){
                                            latlng = {
                                                lat: coordinates[0],
                                                lng: coordinates[1]
                                            }
                                            marker.setPosition(latlng);
                                            centerMap(marker.getPosition());
                                        });
                                    }
                                    function centerMap(position)
                                    {
                                        map.panTo(position);
                                    }
                                    window.initMap = initMap;

                                </script>
                               <script async
                                    src="https://maps.googleapis.com/maps/api/js?key={{ config('app.GOOGLE_API_KEY') }}&loading=async&callback=initMap">
                               </script>
                            </div>
                        </div>


                        <div class="grid grid-cols-1 mt-8">
                            <div class="mb-3" wire:ignore.self>
{{--                                <input type="file" wire:model="photo">--}}
                               <livewire:files-upload-f-e
                                    inputName="files"
                                    :isMultiple="false"
                                    :isCover="true"
                                    maxFiles="3"
                                    maxFileSize="10240"
                                    :previousFiles="collect()"
                                    :label="__('Upload Highlighted image')"
                                    acceptedFileTypes="image/*"
                                    :uploadFieldMainLabel="__('Upload an image')"
                               />


                               <livewire:files-upload-f-e
                                    inputName="files"
                                    :isMultiple="true"
                                    :isCover="false"
                                    maxFiles="3"
                                    maxFileSize="10240"
                                    :previousFiles="collect()"
                                    :label="__('Upload Gallery')"
                                    acceptedFileTypes="image/*"
                                    :uploadFieldMainLabel="__('Upload an image')"
                               />
                            </div>


                            <div class="mb-3">
                                <livewire:files-upload-f-e
                                    inputName="files"
                                    :isMultiple="true"
                                    :isDocument="true"
                                    maxFiles="10"
                                    maxFileSize="10240"
                                    :previousFiles="collect()"
                                    :label="__('Upload Files')"
                                    acceptedFileTypes="*/*"
                                    :uploadFieldMainLabel="__('Upload files')"
                                />
                            </div>


                            @error('files') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div>
                                <button type="submit" id="submit" name="send" value="1" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">{{ __('Create Proposal') }}</button>
                            </div>
                        </div>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->
