<div class="d-flex align-items-start flex-column flex-md-row">
    <!-- Sidebar Navigation -->
    <nav class="nav flex-column me-md-4 mb-4 mb-md-0" style="width:220px;">
        <a class="nav-link {{ request()->routeIs('settings.profile') ? 'active' : '' }}" 
           href="{{ route('settings.profile') }}" 
           wire:navigate>
            {{ __('Profile') }}
        </a>
        <a class="nav-link {{ request()->routeIs('settings.password') ? 'active' : '' }}" 
           href="{{ route('settings.password') }}" 
           wire:navigate>
            {{ __('Password') }}
        </a>
        <a class="nav-link {{ request()->routeIs('settings.appearance') ? 'active' : '' }}" 
           href="{{ route('settings.appearance') }}" 
           wire:navigate>
            {{ __('Appearance') }}
        </a>
    </nav>

    <!-- Separator for mobile -->
    <hr class="d-md-none w-100 mb-4">

    <!-- Content Area -->
    <div class="flex-grow-1">
        @isset($heading)
            <h2 class="h4 mb-1">{{ $heading }}</h2>
        @endisset
        @isset($subheading)
            <p class="text-muted mb-4">{{ $subheading }}</p>
        @endisset

        <div class="mt-4 w-100" style="max-width:32rem;">
            {{ $slot }}
        </div>
    </div>
</div>
