<x-layout>
    <!-- slot que fornece a variavel heading -->
    <x-slot:heading> 
        Jobs Listing
    </x-slot:heading>
    <h1>
        
    </h1>
    <div class="space-y-4">
        @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 bg-gray-800/50 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm"> {{ $job->employer->name }} </div>
                    <div>
                        <strong> {{ $job['title'] }} </strong>  - Salary: {{ $job['salary'] }} per year.
                    </div>   
                </a>
        @endforeach

        {{ $jobs->links() }}
    </div>
</x-layout>