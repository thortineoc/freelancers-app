@props([
    'href'
])

<div class="rounded-lg shadow text-white bg-green-900 max-w-40">
    <a class="block py-2 px-3 text-center hover:text-yellow-300" href="{{ $href }}">{{ $slot }}</a>
</div>
