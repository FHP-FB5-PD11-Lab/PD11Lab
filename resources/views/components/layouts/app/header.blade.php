<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partials.head')
  </head>
  <body>
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <div class="container-fluid">
        <!-- Mobile sidebar toggle -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#mobileSidebar"
          aria-controls="mobileSidebar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand / Dashboard Link -->
        <a
          class="navbar-brand d-flex align-items-center ms-2 me-5"
          href="{{ route('dashboard') }}"
          wire:navigate
        >
          <x-app-logo />
        </a>

        <!-- Navbar items -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}"
                wire:navigate
              >
                {{ __('Dashboard') }}
              </a>
            </li>
          </ul>

          <ul class="navbar-nav d-flex align-items-center me-3">
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                data-bs-toggle="tooltip"
                title="{{ __('Search') }}"
              >
                <i class="bi bi-search"></i>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a
                class="nav-link"
                href="https://github.com/laravel/livewire-starter-kit"
                target="_blank"
                data-bs-toggle="tooltip"
                title="{{ __('Repository') }}"
              >
                <i class="bi bi-folder2-open"></i>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a
                class="nav-link"
                href="https://laravel.com/docs/starter-kits"
                target="_blank"
                data-bs-toggle="tooltip"
                title="Documentation"
              >
                <i class="bi bi-book"></i>
              </a>
            </li>

            <!-- User dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle d-flex align-items-center"
                href="#"
                id="userMenu"
                role="button"
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
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                <li class="dropdown-header">
                  <strong>{{ auth()->user()->name }}</strong><br>
                  <small class="text-muted">{{ auth()->user()->email }}</small>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="{{ route('settings.profile') }}"
                    wire:navigate
                  >
                    <i class="bi bi-gear me-2"></i>{{ __('Settings') }}
                  </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item d-flex align-items-center" type="submit">
                      <i class="bi bi-box-arrow-right me-2"></i>{{ __('Log Out') }}
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
      <div class="offcanvas-body">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a
              class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
              href="{{ route('dashboard') }}"
              wire:navigate
            >
              {{ __('Dashboard') }}
            </a>
          </li>
        </ul>
        <hr>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a
              class="nav-link"
              href="https://github.com/laravel/livewire-starter-kit"
              target="_blank"
            >
              {{ __('Repository') }}
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="https://laravel.com/docs/starter-kits"
              target="_blank"
            >
              {{ __('Documentation') }}
            </a>
          </li>
        </ul>
      </div>
    </div>

    {{ $slot }}

    @fluxScripts
  </body>
</html>
