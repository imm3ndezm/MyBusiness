@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'p-1.5 text-gray-700 focus:outline-nones transition-colors duration-700 rounded-lg dark:text-gray-200 dark:bg-gray-700 bg-gray-200'
            : 'p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:hover:bg-gray-800 hover:bg-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


