<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>{{ $title ?? 'Laravel' }}</title>

<!-- Webfont -->
<link rel="preconnect" href="https://fonts.bunny.net" />
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<!-- Bootstrap Icons (optional, falls du die <i class="bi …"> nutzt) -->
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
  rel="stylesheet"
/>

<!-- Deine CSS/JS‑Assets via Vite (bootstrap wird in app.css importiert) -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Flux Dark/Light‑Mode Toggle -->
@fluxAppearance
