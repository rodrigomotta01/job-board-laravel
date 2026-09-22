<x-layout>
    <!-- slot que fornece a variavel heading -->
    <x-slot:heading> 
        Jobs Listing
    </x-slot:heading>
    <h1>
        
    </h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong> {{ $job['title'] }} </strong>  - Salary: {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>