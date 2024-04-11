@props(['votes'])
<div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md">
    <table class="w-full text-start text-slate-500 dark:text-slate-400">
        <thead class="text-sm uppercase bg-slate-100">
            <tr class="text-start">
                <th scope="col" class="px-2 py-3 text-center">{{__('Vote no.')}}</th>
                <th scope="col" class="px-2 py-3 text-center">{{__('Created')}}</th>
                <th scope="col" class="px-2 py-3 text-center">{{__('Proposal')}}</th>
                <th scope="col" class="px-2 py-3 text-center">{{__('Action')}}</th>
            </tr>
        </thead>
        @foreach($votes as $vote)
        <tbody>
            <tr class="bg-white dark:bg-slate-900 text-start">
                <th class="px-2 py-3 text-center" scope="row">{{ $vote->id }}</th>
                <td class="px-2 py-3 text-center">{{ \Carbon\Carbon::parse($vote->created_at)->diffForHumans() }}</td>
                <td class="px-2 py-3 text-center">{{$vote->proposal->title}}</td>
                <td class="px-2 py-3 text-center">
                    <a href="{{route('proposta-detail', $vote->proposal->id)}}" class="font-bold text-indigo-600">{{__('View')}}</a>
                    @if(in_array($vote->proposal->edition->status, $validEditionStatusToDeleteVote))
                        <form method="POST" action="{{ route('proposta-remove-vote', $vote->proposal->id) }}">
                            @csrf
                            @method('DELETE') <!-- Assuming you're using DELETE method for removing the vote -->
                            <button type="submit" class="font-bold text-red-600">{{__('Delete')}}</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="p-10 bg-white/50">
        {{$votes->links()}}
    </div>
</div>
