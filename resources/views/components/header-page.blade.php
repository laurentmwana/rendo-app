@props(['class' => '', 'admin' => false])

@if ($admin)
<div @class([$class, 'max-w-lg' ])>
    <h1 class="mb-3 text-base  text-gray-800 dark:text-gray-300">
        {{ $title }}
    </h1>

    @if (isset($description))
    <p class="text-muted-foreground text-sm">
        {{ $description }}
    </p>
    @endif
</div>


@else
<div @class([$class, 'max-w-lg' ])>
    <h1 class="mb-3 text-xl font-semibold text-gray-800 dark:text-gray-300">
        {{ $title }}
    </h1>

    @if (isset($description))
    <p class="text-muted-foreground text-sm">
        {{ $description }}
    </p>
    @endif
</div>

@endif
