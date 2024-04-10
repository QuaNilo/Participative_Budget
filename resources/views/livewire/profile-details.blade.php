<div>
    <h5 class="text-lg font-semibold mb-4">{{__('Personal Detail')}} :</h5>
    <form wire:submit="update" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
            <div>
                <label class="form-label font-medium">{{__('Name')}} : <span class="text-red-600">*</span></label>
                <div class="form-icon relative mt-2">
                    <input type="text" wire:model="name" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('First Name')}}:" id="firstname" name="name" required="">
                    @error('name')
                        <div class="mt-2 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Your Email')}} : <span class="text-red-600">*</span></label>
                <div class="form-icon relative mt-2">
                    <input type="email" wire:model="email" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('Email')}}" name="email" required="">
                    @error('email')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Occupation')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="occupation" wire:model="occupation" id="occupation" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('Occupation')}} :">
                    @error('occupation')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Citizen Card')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="CC" wire:model="CC" id="CC" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('Citizen Card')}} :">
                    @error('CC')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Address')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="address" wire:model="address" id="address" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('Address')}} :">
                    @error('address')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">{{__('Locality')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="localidade" wire:model="localidade" id="localidade" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('Locality')}} :">
                    @error('localidade')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label class="form-label font-medium">{{__('County')}} : </label>
                <div class="form-icon relative mt-2">
                    <input name="freguesia" wire:model="freguesia" id="freguesia" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('County')}} :">
                    @error('freguesia')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="">
                <label class="font-semibold" for="cod_postal">{{__('Postal Code')}} :</label>
                <input id="cod_postal" wire:model="cod_postal" type="text" name="cod_postal" value="{{ old('cod_postal') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('Postal Code')}}">
                @error('cod_postal')
                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="">
                <label class="font-semibold" for="telemovel">{{__('Cellphone')}} :</label>
                <input id="telemovel" wire:model="telemovel" type="text" name="telemovel" value="{{ old('telemovel') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('CellPhone')}}">
                @error('telemovel')
                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                @enderror
            </div>

{{--            <div class="">--}}
{{--                <label class="font-semibold" for="birth_date">{{__('birth_date')}} :</label>--}}
{{--                <input id="birth_date" wire:model="birth_date" type="text" name="birth_date" value="{{ old('birth_date') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="{{__('CellPhone')}}">--}}
{{--                @error('birth_date')--}}
{{--                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="mb-3">
                <x-base.form-label for="edition_end">Birth Date</x-base.form-label>
                <x-base.input-group
                    class="flatpickr"
                    data-wrap="true"
                    data-enable-time="false"
                    data-date-format='Y-m-d'
                    data-time_24hr='true'
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
                        class="{{ ($errors->has('edition_end') ? 'border-danger' : '') }} [&[readonly]]:bg-white"
                        id="edition_end"
                        name="edition_end"
                        :value="old('edition_end', $edition->edition_end ?? '')"
                        data-input
                    />
                    <x-base.input-group.text class="cursor-pointer" title="{{ __('Clear') }}" data-clear>
                        <x-base.lucide
                            class="h-5 w-5 "
                            icon="x"
                        />
                    </x-base.input-group.text>
                </x-base.input-group>
                @error('edition_end')
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
            acceptedFileTypes="files/*"
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
            acceptedFileTypes="files/*"
            :uploadFieldMainLabel="__('Upload Front and Back of Citizen Card')"
            />
        @endif

{{--        <div class="grid grid-cols-1">--}}
{{--            <div class="mt-5">--}}
{{--                <label class="form-label font-medium">Description : </label>--}}
{{--                <div class="form-icon relative mt-2">--}}
{{--                    <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>--}}
{{--                    <textarea name="description" wire:model="description" id="description" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>--}}
{{--                </div>--}}
{{--                @error('description')--}}
{{--                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div><!--end row-->--}}
        <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5" value="Save Changes">
    </form><!--end form-->

</div>
