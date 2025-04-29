@props(['src', 'alt', 'class' => '', 'width' => null, 'height' => null])

<img 
    src="{{ asset('images/loading.gif') }}" 
    data-src="{{ $src }}" 
    alt="{{ $alt }}" 
    class="lazy {{ $class }}"
    @if($width) width="{{ $width }}" @endif
    @if($height) height="{{ $height }}" @endif
    loading="lazy"
>
