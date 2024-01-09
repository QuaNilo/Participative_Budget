<!-- Start Section-->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="lg:flex justify-center">
            <div class="lg:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <form wire:submit="submit" class="text-start">
                        <div class="grid grid-cols-1">
                            <h5 class="text-lg font-semibold">Crie uma proposta :</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="RegisterName">Proposal Title:</label>
                                <input wire:model="title" id="RegisterName" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Titulo da proposta">
                            </div>

                            <div class="col-span-12 text-start">
                                <label for="comments" class="font-semibold">Proposal Content: </label>
                                <textarea wire:model="content" name="comments" id="comments" class="form-input mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Descrição da proposta :"></textarea>
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">Proposal Categories:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">Localização :</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="Skillname">Rua :</label>
                                <input id="Skillname" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Rua ">
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="Qualificationname">Codigo Postal :</label>
                                <input id="Qualificationname" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Codigo Postal">
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="Experiencename">Cidade :</label>
                                <input id="Experiencename" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Cidade">
                            </div>
                        </div>

                        <div class="col-span-12 text-start">
                                    <x-frontend.show-map-mini/>
                        </div>


                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">Imagem :</h5>
                            <div class="mb-3">
{{--                                <livewire:files-upload--}}
{{--                                    inputName="cover"--}}
{{--                                    :isMultiple="false"--}}
{{--                                    maxFiles="1"--}}
{{--                                    maxFileSize="10240"--}}
{{--                                    :previousFiles="$proposal->getMedia('cover')"--}}
{{--                                    :label="__('Upload Cover')"--}}
{{--                                    acceptedFileTypes="image/*"--}}
{{--                                    :uploadFieldMainLabel="__('Upload an image')"--}}
{{--                                />--}}
                                <input
                                    type="file"
                                    wire:model="files"
                                    accept="image/*"

                                >
                            </div>
                            @error('files.*') <span class="error">{{ $message }}</span> @enderror
                        </div>




                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div>
                                <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Post Now</button>
                            </div>
                        </div>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->
