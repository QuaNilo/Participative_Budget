@props(['edition_id'])
<div class="container border-2 border-b-0 border-t-0 border-gray-100">
    <div class="grid md:grid-cols-6 grid-cols-2 gap-[30px]">
        <div class="lg:col-span-8 md:col-span-6">

            <div class="container relative">

                <livewire:show-proposal-grid :edition_id="$edition_id"/>

            </div>
        </div>
    </div>
</div><!--end container-->
