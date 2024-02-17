<div>
    <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
    <form wire:submit="update" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
            <div>
                <label class="form-label font-medium">Name : <span class="text-red-600">*</span></label>
                <div class="form-icon relative mt-2">
                    <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                    <input type="text" wire:model="name" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="First Name:" id="firstname" name="name" required="">
                    @error('name')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                <div class="form-icon relative mt-2">
                    <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                    <input type="email" wire:model="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email" name="email" required="">
                    @error('email')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">Occupation : </label>
                <div class="form-icon relative mt-2">
                    <i data-feather="bookmark" class="w-4 h-4 absolute top-3 start-4"></i>
                    <input name="occupation" wire:model="occupation" id="occupation" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Occupation :">
                    @error('occupation')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">Cartão Cidadão : </label>
                <div class="form-icon relative mt-2">
                    <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                    <input name="CC" wire:model="CC" id="CC" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Cartão Cidadão :">
                    @error('CC')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">Morada : </label>
                <div class="form-icon relative mt-2">
                    <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                    <input name="address" wire:model="address" id="address" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Cartão Cidadão :">
                    @error('address')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label class="form-label font-medium">Localidade : </label>
                <div class="form-icon relative mt-2">
                    <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                    <input name="localidade" wire:model="localidade" id="localidade" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Localidade :">
                    @error('localidade')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label class="form-label font-medium">Freguesia : </label>
                <div class="form-icon relative mt-2">
                    <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                    <input name="freguesia" wire:model="freguesia" id="freguesia" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Freguesia :">
                    @error('freguesia')
                        <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="">
                <label class="font-semibold" for="cod_postal">Codigo Postal :</label>
                <input id="cod_postal" wire:model="cod_postal" type="text" name="cod_postal" value="{{ old('cod_postal') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Codigo Postal">
                @error('cod_postal')
                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="">
                <label class="font-semibold" for="telemovel">Telemovel :</label>
                <input id="telemovel" wire:model="telemovel" type="text" name="telemovel" value="{{ old('telemovel') }}" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Telemovel">
                @error('telemovel')
                    <div class="mt-2 ps-4 mb-4 text-danger">{{ $message }}</div>
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
