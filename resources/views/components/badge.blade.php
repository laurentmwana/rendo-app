@props(['type' => null,])

@if ($type === 'success')
<div class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset
ring-green-600/20">
    {{ $slot }}
</div>
@elseif($type === 'destructive')
<div
    class="inline-flex items-center rounded-md bg-pink-50 px-2 py-1 text-xs font-medium text-pink-700 ring-1 ring-inset ring-pink-700/10">
    {{ $slot }}
</div>

@else
<div
    class="inline-flex items-center rounded-md bg-slate-50 px-2 py-1 text-xs font-medium text-slate-700 ring-1 ring-inset ring-slate-700/10">
    {{ $slot }}
</div>
@endif
