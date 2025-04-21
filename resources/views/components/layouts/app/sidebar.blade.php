<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partials.head')
  </head>
  <body class="d-flex bg-white text-dark">
    <!-- Mobile Offcanvas Sidebar -->
    <div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="mobileSidebar"
      aria-labelledby="mobileSidebarLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileSidebarLabel">
          <x-app-logo />
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body d-flex flex-column">
        <nav class="nav nav-pills flex-column mb-3">
          <a
            class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
            href="{{ route('dashboard') }}"
            wire:navigate
          >
            {{ __('Dashboard') }}
          </a>
        </nav>
        <hr>
        <nav class="nav nav-pills flex-column mb-3">
          <a
            class="nav-link"
            href="https://github.com/laravel/livewire-starter-kit"
            target="_blank"
          >
            {{ __('Repository') }}
          </a>
          <a
            class="nav-link"
            href="https://laravel.com/docs/starter-kits"
            target="_blank"
          >
            {{ __('Documentation') }}
          </a>
        </nav>
        <div class="mt-auto">
          <!-- Mobile User Menu -->
          <div class="dropdown">
            <a
              class="d-flex align-items-center text-decoration-none dropdown-toggle"
              href="#"
              id="mobileUserMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <span
                class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-2"
                style="width:2rem; height:2rem; line-height:2rem;"
              >
                {{ auth()->user()->initials() }}
              </span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="mobileUserMenu">
              <li class="dropdown-header">
                <strong>{{ auth()->user()->name }}</strong><br>
                <small class="text-muted">{{ auth()->user()->email }}</small>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a
                  class="dropdown-item"
                  href="{{ route('settings.profile') }}"
                  wire:navigate
                >
                  {{ __('Settings') }}
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="dropdown-item" type="submit">
                    {{ __('Log Out') }}
                  </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Desktop Sidebar -->
    <aside
      class="d-none d-lg-flex flex-column position-fixed vh-100 bg-light border-end p-3"
      style="width:16rem;"
    >
      <a
        href="{{ route('dashboard') }}"
        class="d-flex align-items-center mb-4 text-decoration-none"
        wire:navigate
      >
        <x-app-logo />
      </a>
      <nav class="nav nav-pills flex-column mb-3">
        <a
          class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
          href="{{ route('dashboard') }}"
          wire:navigate
        >
          {{ __('Dashboard') }}
        </a>
      </nav>
      <hr>
      <nav class="nav nav-pills flex-column mb-3">
        <a
          class="nav-link"
          href="https://github.com/laravel/livewire-starter-kit"
          target="_blank"
        >
          {{ __('Repository') }}
        </a>
        <a
          class="nav-link"
          href="https://laravel.com/docs/starter-kits"
          target="_blank"
        >
          {{ __('Documentation') }}
        </a>
      </nav>
      <div class="mt-auto">
        <!-- Desktop User Menu -->
        <div class="dropdown">
          <a
            class="d-flex align-items-center text-decoration-none dropdown-toggle"
            href="#"
            id="desktopUserMenu"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <span
              class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-2"
              style="width:2rem; height:2rem; line-height:2rem;"
            >
              {{ auth()->user()->initials() }}
            </span>
            <span class="fw-medium">
              {{ auth()->user()->name }}
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="desktopUserMenu">
            <li>
              <a
                class="dropdown-item d-flex align-items-center"
                href="{{ route('settings.profile') }}"
                wire:navigate
              >
                {{ __('Settings') }}
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="dropdown-item d-flex align-items-center" type="submit">
                  {{ __('Log Out') }}
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </aside>

    <!-- Page Content -->
    <div class="flex-grow-1" style="margin-left:16rem;">
      <!-- Mobile toggle -->
      <button
        class="btn btn-outline-secondary d-lg-none m-3"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobileSidebar"
        aria-controls="mobileSidebar"
      >
        <i class="bi bi-list"></i>
      </button>

      {{ $slot }}
    </div>

    @fluxScripts
  </body>
</html>
