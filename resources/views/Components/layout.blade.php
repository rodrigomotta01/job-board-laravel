<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 dark:text-gray-100">
    <!-- Page Container -->
    <div id="page-container" class="mx-auto flex min-h-dvh w-full min-w-80 flex-col">
        <!-- Page Header -->
        <header id="page-header" class="z-10 flex flex-none items-center bg-white shadow-xs dark:bg-gray-800">
            <div class="container mx-auto px-4 lg:px-8 xl:max-w-7xl">
                <div class="flex justify-between py-4">
                    <!-- Left Section -->
                    <div class="flex items-center gap-2 lg:gap-6">
                        <!-- Logo -->
                        <a
                            href="/"
                            class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300"
                        >
                            <svg
                                class="inline-block size-5 text-blue-600 transition group-hover:scale-110 dark:text-blue-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M9.638 1.093a.75.75 0 01.724 0l2 1.104a.75.75 0 11-.724 1.313L10 2.607l-1.638.903a.75.75 0 11-.724-1.313l2-1.104zM5.403 4.287a.75.75 0 01-.295 1.019l-.805.444.805.444a.75.75 0 01-.724 1.314L3.5 7.02v.73a.75.75 0 01-1.5 0v-2a.75.75 0 01.388-.657l1.996-1.1a.75.75 0 011.019.294zm9.194 0a.75.75 0 011.02-.295l1.995 1.101A.75.75 0 0118 5.75v2a.75.75 0 01-1.5 0v-.73l-.884.488a.75.75 0 11-.724-1.314l.806-.444-.806-.444a.75.75 0 01-.295-1.02zM7.343 8.284a.75.75 0 011.02-.294L10 8.893l1.638-.903a.75.75 0 11.724 1.313l-1.612.89v1.557a.75.75 0 01-1.5 0v-1.557l-1.612-.89a.75.75 0 01-.295-1.019zM2.75 11.5a.75.75 0 01.75.75v1.557l1.608.887a.75.75 0 01-.724 1.314l-1.996-1.101A.75.75 0 012 14.25v-2a.75.75 0 01.75-.75zm14.5 0a.75.75 0 01.75.75v2a.75.75 0 01-.388.657l-1.996 1.1a.75.75 0 11-.724-1.313l1.608-.887V12.25a.75.75 0 01.75-.75zm-7.25 4a.75.75 0 01.75.75v.73l.888-.49a.75.75 0 01.724 1.313l-2 1.104a.75.75 0 01-.724 0l-2-1.104a.75.75 0 11.724-1.313l.888.49v-.73a.75.75 0 01.75-.75z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                        <!-- END Logo -->

                        <!-- Desktop Navigation -->
                        <nav class="hidden items-center gap-2 lg:flex">
                            <x-nav-link href="/" :active="request()->is('/')">
                                <span>Home</span>
                            </x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">
                                <span>Contact</span>
                            </x-nav-link>
                             <x-nav-link href="/jobs" :active="request()->is('jobs')">
                                <span>Jobs</span>
                            </x-nav-link>
                        </nav>
                        <!-- END Desktop Navigation -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="flex items-center gap-2">
                        <!-- Toggle Mobile Navigation Button -->
                        <div class="lg:hidden">
                            <button
                                type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
                                aria-label="Toggle navigation"
                            >
                                <svg
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="inline-block size-5"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <!-- END Toggle Mobile Navigation Button -->
                    </div>
                    <!-- END Right Section -->
                </div>

                <!-- Mobile Navigation -->
                <div class="lg:hidden">
                    <nav class="flex flex-col gap-2 border-t border-gray-200 py-4 dark:border-gray-700">
                        <a
                            href="/"
                            class="group flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-semibold transition {{ request()->is('/') ? 'border border-blue-50 bg-blue-50 text-blue-600 dark:border-transparent dark:bg-gray-700/75 dark:text-white' : 'border border-transparent text-gray-800 hover:bg-blue-50 hover:text-blue-600 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600' }}"
                        >
                            <span>Home</span>
                        </a>
                        <a
                            href="/jobs"
                            class="group flex items-center gap-2 rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition {{ request()->is('about') ? 'border-blue-50 bg-blue-50 text-blue-600 dark:bg-gray-700/75 dark:text-white' : 'text-gray-800 hover:bg-blue-50 hover:text-blue-600 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600' }}"
                        >
                            <span>Jobs</span>
                        </a>
                        <a
                            href="/contact"
                            class="group flex items-center gap-2 rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition {{ request()->is('contact') ? 'border-blue-50 bg-blue-50 text-blue-600 dark:bg-gray-700/75 dark:text-white' : 'text-gray-800 hover:bg-blue-50 hover:text-blue-600 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600' }}"
                        >
                            <span>Contact</span>
                        </a>
                    </nav>
                </div>
                <!-- END Mobile Navigation -->
            </div>
        </header>
        <!-- END Page Header -->

        <!-- Page Content -->
        <main id="page-content" class="flex max-w-full flex-auto flex-col">
            <!-- Page Heading -->
            <div class="bg-gray-50 dark:bg-gray-800/50">
                <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
                    <div class="space-y-2 py-2 text-center sm:flex sm:items-center sm:justify-between sm:space-y-0 sm:text-left lg:py-0">
                        <div class="grow">
                            <h1 class="mb-1 text-xl font-bold">{{ $heading }}</h1>
                            <h2 class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Welcome, everything seems great!
                            </h2>
                        </div>
                        <div class="flex flex-none items-center justify-center gap-2 rounded-sm px-2 py-3 sm:justify-end sm:bg-transparent sm:px-0">

                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Heading -->

            <!-- Page Section: Slot / Main Content -->
            <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
                {{ $slot }}
            </div>
            <!-- END Page Section -->
        </main>
        <!-- END Page Content -->

        <!-- Page Footer -->
        <footer id="page-footer" class="flex flex-none items-center bg-white dark:bg-gray-800">
            <div class="container mx-auto flex flex-col px-4 text-center text-sm md:flex-row md:justify-between md:text-left lg:px-8 xl:max-w-7xl">
            </div>
        </footer>
        <!-- END Page Footer -->
    </div>
    <!-- END Page Container -->
</body>
</html>
