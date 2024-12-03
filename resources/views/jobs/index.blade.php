<x-layout>
   
    <h1 class="font-bold text-xl text-blue-700"> List of Jobs </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
        <div>{{$job->title}}</div>
        @empty
        <li>No jobs available!</li>
        @endforelse
    </div>
</x-layout>