@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#fd7b1e] focus:ring-[#fd7b1e] rounded-md shadow-sm']) !!}>
