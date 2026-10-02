<x-layout>

    <x-slot:heading> 
        Create Job
    </x-slot:heading>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="p-1 text-red-500 text-sm bg-red-200 border border-1 border-red-400 text-center rounded-md mt-2 mb-2"> {{ $error }} </li>
            @endforeach
        </ul>
    @endif

    <form class="max-w-sm mx-auto" method="POST" action="/jobs">
        @csrf
        <div class="mb-5">
            <label for="title" class="block mb-2.5 text-sm font-medium text-heading">Title</label>
            <input type="text" id="title" name="title" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body" placeholder="Junior Developer" required />
        </div>
        <div class="mb-5">
            <label for="salary" class="block mb-2.5 text-sm font-medium text-heading">Yearly Salary</label>
            <input type="text" id="salary" name="salary" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body" placeholder="$50,000" required />
        </div>
        <button type="submit" class="text-black bg-white box-border border border-transparent hover:transform hover:scale-105 transition-all duration-200 ease-in-out focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
    </form>

</x-layout>