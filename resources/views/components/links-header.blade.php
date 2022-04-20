@php
$base = 'p-2 px-3 border-2 border-blue-600 rounded-full text-sm ';
$active = $base . 'bg-blue-600 text-white';
$inactive = $base . 'bg-transparent text-black hover:bg-blue-600 hover:text-white';
@endphp

<header class="flex justify-around w-1/4 mx-auto top">
    <a href="/projects">
        <button class="{{ request()->routeIs('projects') ? $active : $inactive }}">
            Projects
        </button>
    </a>
    <a href="/offers">
        <button class="{{ request()->routeIs('offers') ? $active : $inactive }}">
            Offers
        </button>
    </a>
</header>
