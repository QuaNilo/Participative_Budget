@props(['proposals'])
<div class="flex-grow relative overflow-x-auto shadow rounded-md">
    <table class="w-full text-start text-slate-500">
        <thead class="text-sm uppercase bg-slate-100">
        <tr class="text-start">
            <th  class="px-1 py-3 text-center overflow-hidden">{{__('Proposal Title')}}</th>
            <th  class="px-2 py-3 text-center">{{__('Proposal no.')}}</th>
            <th  class="px-2 py-3 text-center">{{__('Created')}}</th>
            <th  class="px-2 py-3 text-center">{{__('Status')}}</th>
            <th  class="px-2 py-3 text-center">{{__('Votes')}}</th>
            <th  class="px-2 py-3 text-center">{{__('Actions')}}</th>
        </tr>
        </thead>
        @foreach($proposals as $proposal)
            <tbody>
                <tr class="bg-white text-center">
                    <th class="px-1 py-3 text-center overflow-hidden" >{{ substr($proposal->title, 0 ,32) }}</th>
                    <th class="px-2 py-3 text-center" >{{ $proposal->id }}</th>
                    <td class="px-2 py-3 text-center">{{ \Carbon\Carbon::parse($proposal->created_at)->diffForHumans() }}</td>
                    <td class="px-2 py-3 text-center text-green-600">{{$proposal->status_label}}</td>
                    <td class="px-2 py-3 text-center">{{$proposal->votes_count}}</td>
                    <td class="px-2 py-3 text-center">
                        <a href="/edition/proposta/{{$proposal->id}}" class="font-bold text-primary hover:text-primary-hover">{{__('View')}} </a>
                        @if($proposal->edition->status_label === 'Aberta')
                            <a href="{{route("FEproposals.edit", $proposal)}}" class="block font-bold text-yellow-600 hover:text-primary-hover">{{__('Edit')}}</a>
                            <form method="POST" action="{{ route('FEproposals.destroy', $proposal) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold text-red-600">{{__('Delete')}}</button>
                            </form>
                        @endif
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    <div class="p-10 bg-white/50">
        {{$proposals->links()}}
    </div>
</div>
