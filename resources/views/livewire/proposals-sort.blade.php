<div>
    <button id="dropDownSort" data-dropdown-toggle="dropdownDelaySort" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-white bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary font-semibold rounded-lg text-sm px-2 py-2 text-center inline-flex items-center dark:bg-primary" type="button">{{__('Sort By')}} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownDelaySort" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropDownSort">
          <li>
            <a wire:click="sortToParent('created_at','desc')" class="@if($sorter == 'created_at' && $order == 'desc') text-primary bg-primary/20 @endif block px-4 py-2 hover:bg-primary-hover">Most Recent</a>
          </li>
          <li>
            <a wire:click="sortToParent('created_at','asc')" class="@if($sorter == 'created_at' && $order == 'asc') text-primary bg-primary/20 @endif block px-4 py-2 hover:bg-primary-hover">Least Recent</a>
          </li>
          <li>
            <a wire:click="sortToParent('impressions','desc')" class="@if($sorter == 'impressions' && $order == 'desc') text-primary bg-primary/20 @endif block px-4 py-2 hover:bg-primary-hover">Most Impressions</a>
          </li>
          <li>
            <a wire:click="sortToParent('impressions','asc')" class="@if($sorter == 'impressions' && $order == 'asc') text-primary bg-primary/20 @endif block px-4 py-2 hover:bg-primary-hover">Least Impressions</a>
          </li>
        </ul>
    </div>
</div>
