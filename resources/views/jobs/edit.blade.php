<x-layout>

    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="p-1 text-red-500 text-sm bg-red-200 border border-1 border-red-400 text-center rounded-md mt-2 mb-2">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <form id="edit-job-form" class="max-w-sm mx-auto" method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="mb-5">
            <label for="title" class="block mb-2.5 text-sm font-medium text-heading">
                Title
            </label>

            <input
                type="text"
                value="{{ $job->title }}"
                id="title"
                name="title"
                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body"
                placeholder="Junior Developer"
                required
            />
        </div>

        <div class="mb-5">
            <label for="salary" class="block mb-2.5 text-sm font-medium text-heading">
                Yearly Salary
            </label>

            <input
                type="text"
                value="{{ $job->salary }}"
                id="salary"
                name="salary"
                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body"
                placeholder="$50,000"
                required
            />
        </div>
    </form>

    <div class="max-w-sm mx-auto flex items-center justify-between">

        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="text-white bg-red-500 hover:bg-red-600 hover:scale-105 transition-all duration-200 font-medium text-sm px-4 py-2.5"
            >
                Delete
            </button>
        </form>

        <button
            type="submit"
            form="edit-job-form"
            class="text-black bg-white box-border border border-transparent hover:scale-105 transition-all duration-200 ease-in-out focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
        >
            Update
        </button>

    </div>

</x-layout>