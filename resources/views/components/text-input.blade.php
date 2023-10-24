@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-md shadow-sm']) !!}>

