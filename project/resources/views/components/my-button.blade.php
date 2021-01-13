<button type="submit" {!! $attributes->merge(['class' => "rounded-lg shadow text-white bg-green-900 max-w-40 block py-2 px-3 text-center hover:text-yellow-300"]) !!}>
    {{ $slot }}
</button>
