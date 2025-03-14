<div class="relative overflow-x-auto shadow rounded-md bg-white p-5">
    <h5 class="text-lg font-semibold mb-4">{{__('Personal Detail')}} :</h5>
    <form wire:submit="update" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
            <div>
                <label class="form-label font-medium">{{__('Name')}} : <span class="text-red-600">*</span></label>
                <div class="form-icon relative mt-2">
                    <input type="text" wire:model="name" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('First Name')}}:" id="firstname" name="name" required="">
                    @error('name')
                        <div class="mt-2 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Your Email')}} : <span class="text-red-600">*</span></label>
                <div class="form-icon relative mt-2">
                    <input type="email" wire:model="email" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('Email')}}" name="email" required="">
                    @error('email')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Occupation')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="occupation" wire:model="occupation" id="occupation" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('Occupation')}} :">
                    @error('occupation')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Citizen Card')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="CC" wire:model="CC" id="CC" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('Citizen Card')}} :">
                    @error('CC')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Address')}} : </label>

                <div class="form-icon relative mt-2">
                    <input name="address" wire:model="address" id="address" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('Address')}} :">
                    @error('address')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="flex flex-col flex-grow">
                    <label class="form-label font-medium">{{__('Locality')}} : </label>
                    <div class="form-icon relative mt-2">
                        <input name="localidade" wire:model="localidade" id="localidade" type="text" class="form-input mt-2 w-fit py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('Locality')}} :">
                        @error('localidade')
                            <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold" for="cod_postal">{{__('Postal Code')}} :</label>
                    <div class="form-icon relative mt-2">
                        <input id="cod_postal" wire:model="cod_postal" type="text" name="cod_postal" value="{{ old('cod_postal') }}" class="mt-2 py-2 w-10/12 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('Postal Code')}}">
                        @error('cod_postal')
                            <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div>
                <label class="form-label font-medium">{{__('County')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="freguesia" wire:model="freguesia" id="freguesia" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('County')}} :">
                    @error('freguesia')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label class="form-label font-medium">{{__('Gender')}} : </label>
                <div class="form-icon relative mt-2">
                    <select id="gender" wire:model="gender" name="gender" value="{{ old('gender') }}" class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0">
                        @if(!empty($gender))
                            <option value="{{$gender}}">{{$genderArray[$gender]}}</option>
                            @foreach(\App\Models\Citizen::getGenderArray() as $key => $label)
                                @if($key != $gender)
                                    <option value="{{$key}}">{{$label}}</option>
                                @endif
                            @endforeach

                        @else
                            @foreach(\App\Models\Citizen::getGenderArray() as $key => $label)
                                    <option value="{{$key}}">{{$label}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('gender')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="">
                <label class="font-semibold" for="telemovel">{{__('Cellphone')}} :</label>
                <input id="telemovel" wire:model="telemovel" type="text" name="telemovel" value="{{ old('telemovel') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" placeholder="{{__('CellPhone')}}">
                @error('telemovel')
                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <x-base.form-label for="birth_date">Birth Date</x-base.form-label>
                <x-base.input-group
                    class="flatpickr"
                    data-wrap="true"
                    data-enable-time="false"
                    data-date-format='Y-m-d'
                    data-time_24hr='false'
                    data-minute-increment='1'
                    inputGroup
                >
                    <x-base.input-group.text class="cursor-pointer" title="{{ __('Toggle') }}" data-toggle>
                        <x-base.lucide
                            class="h-5 w-5"
                            icon="Calendar"
                        />
                    </x-base.input-group.text>
                    <x-base.flatpickr
                        class="{{ ($errors->has('birth_date') ? 'border-danger' : '') }} [&[readonly]]:bg-white"
                        id="birth_date"
                        name="birth_date"
                        wire:model="birth_date"
                        :value="old('birth_date', $citizen->birth_date ?? '')"
                        data-input
                    />
                    <x-base.input-group.text class="cursor-pointer" title="{{ __('Clear') }}" data-clear>
                        <x-base.lucide
                            class="h-5 w-5 "
                            icon="x"
                        />
                    </x-base.input-group.text>
                </x-base.input-group>
                @error('birth_date')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div><!--end grid-->
        @if($citizen->getMedia('cc'))
            <livewire:files-upload-f-e
            inputName="files"
            :isMultiple="true"
            :isCitizen="true"
            maxFiles="2"
            maxFileSize="10240"
            :previousFiles="$citizen->getMedia('cc') ?? collect()"
            :label="__('Upload Passport')"
            acceptedFileTypes="application/pdf"
            :uploadFieldMainLabel="__('Upload Front and Back of Citizen Card')"
            />
        @else
            <livewire:files-upload-f-e
            inputName="files"
            :isMultiple="true"
            :isCitizen="true"
            maxFiles="2"
            maxFileSize="10240"
            :previousFiles="collect()"
            :label="__('Upload Passport')"
            acceptedFileTypes="application/pdf"
            :uploadFieldMainLabel="__('Upload Front and Back of Citizen Card')"
            />
        @endif
        <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-hover border-primary hover:border-primary-hover text-white rounded-md mt-5" value="Save Changes">
    </form><!--end form-->

</div>
