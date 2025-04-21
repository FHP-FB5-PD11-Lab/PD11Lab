<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partials.head')
  </head>
  <body class="d-flex min-vh-100 align-items-center justify-content-center bg-light text-dark">
    <div class="container d-flex align-items-center justify-content-center min-vh-100 py-4 py-md-5">
      <div class="w-100" style="max-width: 24rem;">
        <a href="{{ route('home') }}" class="d-flex flex-column align-items-center mb-4 text-decoration-none" wire:navigate>
          <span class="d-flex align-items-center justify-content-center mb-2 rounded" style="width:10rem; height:4rem;">
            <x-app-logo-icon class="w-200 h-200" />
          </span>
          <span class="visually-hidden">{{ config('app.name', 'Laravel') }}</span>
        </a>

        <div class="d-flex flex-column gap-3">
          {{ $slot }}
        </div>
      </div>
    </div>

    @fluxScripts
  </body>
</html>