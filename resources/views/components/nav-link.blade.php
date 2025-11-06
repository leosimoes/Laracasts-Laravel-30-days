@props(['type' => 'a'])
@if($type === 'button')
    <button {{$attributes}}> {{$slot}} </button>
@else
    <a {{$attributes}}> {{$slot}} </a>
@endif
