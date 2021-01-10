@props([
    'disabled' => false,
])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-green-100 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
