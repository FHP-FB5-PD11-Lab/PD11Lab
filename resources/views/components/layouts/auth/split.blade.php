<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partials.head')
  </head>
  <body class="d-flex align-items-center justify-content-center vh-100 bg-light text-dark">
    <div class="container-fluid px-0">
      <div class="row g-0 vh-100">
        <!-- Left split panel -->
        <div class="col-lg-6 d-none d-lg-flex flex-column position-relative bg-dark text-white p-4 p-lg-5">
          <a href="{{ route('home') }}" class="d-flex align-items-center mb-4 text-decoration-none">
            <span class="d-flex align-items-center justify-content-center me-2 rounded" style="width:4.5rem; height:2.5rem;">
              <x-app-logo-icon class="w-100 h-100 text-white" />
            </span>
            <span class="fs-4 fw-medium">{{ config('app.name', 'Laravel') }}</span>
          </a>

          @php
              [$message, $author] = Str::of(Illuminate\Foundation\Inspiring::quotes()->random())->explode('-');
          @endphp

          <div class="mt-auto">
            <blockquote class="blockquote">
              <p class="mb-3">&ldquo;{{ trim($message) }}&rdquo;</p>
              <footer class="blockquote-footer text-white">{{ trim($author) }}</footer>
            </blockquote>
          </div>
        </div>

        <!-- Right content panel -->
        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center p-4 p-lg-5">
          <div class="w-100" style="max-width:22rem;">
            <!-- Logo for small screens -->
            <a href="{{ route('home') }}" class="d-flex flex-column align-items-center mb-4 text-decoration-none d-lg-none">
              <span class="d-flex align-items-center justify-content-center mb-2 rounded" style="width:2.25rem; height:2.25rem;">
                <x-app-logo-icon class="w-100 h-100 text-dark" />
              </span>
              <span class="visually-hidden">{{ config('app.name', 'Laravel') }}</span>
            </a>

            {{ $slot }}
          </div>
        </div>
      </div>
    </div>

    @fluxScripts
  </body>
</html>
