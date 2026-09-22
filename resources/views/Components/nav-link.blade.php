@props(['active' => false])
<a
    class="group flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium transition {{ $active ? 'border border-blue-100 bg-blue-50 text-blue-600 dark:border-transparent dark:bg-gray-700 dark:text-white' : 'border border-transparent text-gray-800 hover:bg-blue-50 hover:text-blue-600 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600' }}"
    {{ $attributes }}
    >
    <span>{{ $slot }}</span>
</a>
