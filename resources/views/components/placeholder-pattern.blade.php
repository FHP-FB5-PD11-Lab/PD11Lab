@props([
    'id' => uniqid(),
])

<svg
    {{ $attributes->merge([
        'xmlns'                  => 'http://www.w3.org/2000/svg',
        'width'                  => '100%',
        'height'                 => '100%',
        'preserveAspectRatio'    => 'none',
        'fill'                   => 'none',
    ]) }}
>
    <defs>
        <pattern
            id="pattern-{{ $id }}"
            x="0" y="0"
            width="8" height="8"
            patternUnits="userSpaceOnUse"
        >
            <path
                d="M-1 5L5 -1M3 9L8.5 3.5"
                stroke="currentColor"
                stroke-width="0.5"
            />
        </pattern>
    </defs>

    <rect
        width="100%"
        height="100%"
        fill="url(#pattern-{{ $id }})"
    />
</svg>
