@props(['active' => false])

@php
    $classes = $active ?? false ? 'nav-link active' : 'nav-link';
@endphp

<li class="nav-item">
    {{-- attribut hover tdk di saran kan di pakai karna mempengaruhi perfomance website --}}
    {{-- a wire:navigate.hover --}}
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
</li>
