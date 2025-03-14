@props(['proposals'])
<x-app-layout>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('home') }}
    @endsection
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">{{__("Dados gerais")}}</h2>
                        <a
                            class="ml-auto flex items-center text-primary"
                            href=""
                        >
                            <x-base.lucide
                                class="mr-3 h-4 w-4"
                                icon="RefreshCcw"
                            /> {{__('Atualizar dados')}}
                        </a>
                    </div>
                    <div class="mt-5 grid grid-cols-12 gap-6">
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                'before:content-[\'\'] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70',
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-[28px] w-[28px] text-primary"
                                            icon="bar-chart-4"
                                        />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{$votes_count}}</div>
                                    <div class="mt-1 text-base text-slate-500">{{__('Votos')}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                'before:content-[\'\'] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70',
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-[28px] w-[28px] text-pending"
                                            icon="CreditCard"
                                        />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{ $edition_count }}</div>
                                    <div class="mt-1 text-base text-slate-500">{{__('Edições')}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                'before:content-[\'\'] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70',
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-[28px] w-[28px] text-warning"
                                            icon="mail-check"
                                        />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{$proposal_count}}</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        {{__('Propostas')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                'before:content-[\'\'] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70',
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-[28px] w-[28px] text-success"
                                            icon="User"
                                        />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{$user_count}}</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        {{__('Utilizadores')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 mt-6">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">
                            {{__('Últimas propostas adicionadas')}}
                        </h2>
                        <div class="mt-3 flex items-center sm:ml-auto sm:mt-0">
                            @if(false)
                            <x-base.button class="!box flex items-center text-slate-600 dark:text-slate-300">
                                <x-base.lucide
                                    class="mr-2 hidden h-4 w-4 sm:block"
                                    icon="FileText"
                                />
                                {{__('Export to Excel')}}
                            </x-base.button>
                            <x-base.button class="!box ml-3 flex items-center text-slate-600 dark:text-slate-300">
                                <x-base.lucide
                                    class="mr-2 hidden h-4 w-4 sm:block"
                                    icon="FileText"
                                />
                                {{__('Export to PDF')}}
                            </x-base.button>
                            @endif
                        </div>
                    </div>
                    <div class="intro-y mt-8 overflow-auto sm:mt-0 lg:overflow-visible">
                        <x-base.table class="border-separate border-spacing-y-[10px] sm:mt-2">
                            <x-base.table.thead>
                                <x-base.table.tr>
                                    <x-base.table.th class="whitespace-nowrap border-b-0">
                                        {{__('Name')}}
                                    </x-base.table.th>
                                    <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                                        {{__('Date')}}
                                    </x-base.table.th>
                                    <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                                        {{__('Status')}}
                                    </x-base.table.th>
                                    <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                                        {{__('Actions')}}
                                    </x-base.table.th>
                                </x-base.table.tr>
                            </x-base.table.thead>
                            <x-base.table.tbody>
                                @foreach($proposals as $proposal)
                                    <x-base.table.tr class="intro-x">
                                        <x-base.table.td
                                            class="border-b-0 bg-white shadow-[20px_3px_20px_#0000000b] first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600"
                                        >
                                            <a
                                                class="whitespace-nowrap font-medium"
                                                href="{{route('proposals.show', ['proposal' => $proposal])}}"
                                            >
                                                {{$proposal->title}}
                                            </a>
                                            <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                {{__('Edition')}} {{$proposal->edition->identifier}}
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-b-0 bg-white text-center shadow-[20px_3px_20px_#0000000b] first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600"
                                        >
                                            {{ \Carbon\Carbon::parse($proposal->created_at)->diffForHumans() }}
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="w-40  border-b-0 bg-white shadow-[20px_3px_20px_#0000000b] first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600"
                                        >
                                            <div class="@if($proposal->status !== 2) text-black @else text-red-600 @endif flex flex-row" @class([
                                                'flex items-center justify-center',
                                                'text-success' => true,
                                                'text-danger' => !true,
                                            ])>
                                                    <x-base.lucide
                                                        class="mr-1 h-4 w-5"
                                                        icon="minus"
                                                    />
                                                {{ $proposal->status_label }}
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="relative w-56 border-b-0 bg-white py-0 shadow-[20px_3px_20px_#0000000b] before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600 before:dark:bg-darkmode-400"
                                        >
                                            <div class="flex items-center justify-center">
                                                <a
                                                    class="mr-3 flex items-center"
                                                    href="{{ route('proposals.edit', $proposal) }}"
                                                >
                                                    <x-base.lucide
                                                        class="mr-1 h-4 w-4"
                                                        icon="CheckSquare"
                                                    />
                                                    {{__('Edit')}}
                                                </a>
                                                <a
                                                    class="flex items-center text-danger"
                                                    href="{{ route('proposals.destroy', $proposal) }}"
                                                >
                                                    <x-base.lucide
                                                        class="mr-1 h-4 w-4"
                                                        icon="Trash"
                                                    />
                                                    {{__('Delete')}}
                                                </a>
                                            </div>
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                @endforeach
                            </x-base.table.tbody>
                        </x-base.table>
                    </div>
                    <div class="intro-y mt-3 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                        <x-base.pagination class="w-full sm:mr-auto sm:w-auto">
                            <x-base.pagination.link>
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ChevronsLeft"
                                />
                            </x-base.pagination.link>
                            <x-base.pagination.link>
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ChevronLeft"
                                />
                            </x-base.pagination.link>
                            <x-base.pagination.link>...</x-base.pagination.link>
                            <x-base.pagination.link>1</x-base.pagination.link>
                            <x-base.pagination.link active>2</x-base.pagination.link>
                            <x-base.pagination.link>3</x-base.pagination.link>
                            <x-base.pagination.link>...</x-base.pagination.link>
                            <x-base.pagination.link>
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ChevronRight"
                                />
                            </x-base.pagination.link>
                            <x-base.pagination.link>
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ChevronsRight"
                                />
                            </x-base.pagination.link>
                        </x-base.pagination>
                        <x-base.form-select class="!box mt-3 w-20 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </x-base.form-select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>

    </div>


</x-app-layout>
