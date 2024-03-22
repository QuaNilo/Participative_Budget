@props(['edition'])
<div class="container border-gray-100">
    <div class="grid md:grid-cols-6 grid-cols-2 gap-[30px]">
        <div class="lg:col-span-8 md:col-span-6">

            <div class="container relative">

                <livewire:show-proposal-grid :edition="$edition"/>

            </div>
        </div>
    </div>
</div><!--end container-->
