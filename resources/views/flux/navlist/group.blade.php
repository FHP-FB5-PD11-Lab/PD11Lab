@props([
    'expandable' => false,
    'expanded'   => true,
    'heading'    => null,
])

@php
    // Einzigartige ID für das Collapse-Element
    $collapseId = 'navlist-group-' . uniqid();
@endphp

@if ($expandable && $heading)
    <div {{ $attributes->class('mb-2') }}>
        {{-- Toggler-Button --}}
        <button
            type="button"
            class="
                d-flex align-items-center justify-content-between
                w-100 px-3 py-2 rounded
                text-body-secondary text-decoration-none
                btn-toggle collapsed
            "
            data-bs-toggle="collapse"
            data-bs-target="#{{ $collapseId }}"
            aria-expanded="{{ $expanded ? 'true' : 'false' }}"
            aria-controls="{{ $collapseId }}"
        >
            <span class="fw-semibold small">{{ $heading }}</span>
            {{-- Pfeil-Icon (Bootstrap Icons oder Flux-Icon) --}}
            <flux:icon.chevron-down class="ms-2 small" />
        </button>

        {{-- Collapsible Content --}}
        <div
            id="{{ $collapseId }}"
            class="collapse position-relative ps-3 {{ $expanded ? 'show' : '' }}"
        >
            {{-- vertikale Trennlinie --}}
            <div
                class="position-absolute start-0 ms-3"
                style="top:3px; bottom:3px; width:1px; background-color: #e5e5e5;"
            ></div>

            {{-- Deine Listenelemente --}}
            {{ $slot }}
        </div>
    </div>

@elseif ($heading)
    {{-- Gruppe mit Überschrift, aber nicht ausklappbar --}}
    <div {{ $attributes->class('mb-2') }}>
        <div class="px-2 py-1">
            <div class="small text-body-secondary mb-1">{{ $heading }}</div>
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>

@else
    {{-- Ganz ohne Überschrift --}}
    <div {{ $attributes->class('mb-2') }}>
        {{ $slot }}
    </div>
@endif
