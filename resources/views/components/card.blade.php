@props(['highlight'=>false])
<div @class (['highlight'=>$highlight,"card"])>
    {{ $slot }}
    <a class="btn" href = "{{ $attributes->get("href") }}">
         View Detail
    </a>
</div>