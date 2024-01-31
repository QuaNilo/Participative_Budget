<div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md">
    <table class="w-full text-start text-slate-500 dark:text-slate-400">
        <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
            <tr class="text-start">
                <th scope="col" class="px-2 py-3 text-start">Vote no.</th>
                <th scope="col" class="px-2 py-3 text-start">Created</th>
                <th scope="col" class="px-2 py-3 text-start">Proposal</th>
                <th scope="col" class="px-2 py-3 text-start">Action</th>
            </tr>
        </thead>
        @foreach($votes as $vote)
        <tbody>
            <tr class="bg-white dark:bg-slate-900 text-start">
                <th class="px-2 py-3 text-start" scope="row">{{ $vote->id }}</th>
                <td class="px-2 py-3 text-start">{{ \Carbon\Carbon::parse($vote->created_at)->diffForHumans() }}</td>
                <td class="px-2 py-3 text-start">{{$vote->proposal->title}}</td>
                <td class="px-2 py-3 text-start"><a href="/edition/proposta/{{$vote->proposal->id}}" class="text-indigo-600">View <i class="uil uil-arrow-right"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
