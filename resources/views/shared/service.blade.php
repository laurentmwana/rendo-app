@php
$services = getService()
@endphp


<div>
    <h4 class="text-gray-700  text-md font-semibold mb-3 dark:text-gray-100">
        Service
    </h4>
    @if ($services->count() === 0)
    <p class="text-muted-foreground text-[13px]">
        pas de service disponible
    </p>
    @else
    <ul class="space-y-1 text-gray-600 list-none list-inside text-sm dark:text-gray-100">
        @foreach ($services as $service)
        <li>
            <a :href="route('.service', ['id' => $service->id])"
                class="flex gap-x-2 mb-3 items-center text-muted-foreground hover:text-muted-foreground/75  duration-1">
                <i class="bi bi-circle"></i>
                {{ Str::limit($service->name, 16, '...') }}
            </a>
        </li>
        @endforeach
    </ul>
    @endif
</div>