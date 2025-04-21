<div class="card shadow-sm mx-auto" style="max-width: 24rem; width: 100%;">
  <div class="card-body p-4">

    {{-- Header --}}
    <h1 class="h4 text-center mb-2">
      {{ __('Log in to your account') }}
    </h1>
    <p class="text-muted text-center mb-4">
      {{ __('Enter your email and password below to log in') }}
    </p>

    {{-- Session Status --}}
    @if (session('status'))
      <div class="alert alert-success small text-center mb-3" role="alert">
        {{ session('status') }}
      </div>
    @endif

    {{-- Form --}}
    <form wire:submit.prevent="login" novalidate>
      {{-- Email --}}
      <div class="mb-3">
        <label for="email" class="form-label">
          {{ __('Email address') }}
        </label>
        <input
          type="email"
          id="email"
          class="form-control @error('email') is-invalid @enderror"
          wire:model.defer="email"
          required
          autocomplete="email"
          autofocus
          placeholder="email@example.com"
        >
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Password --}}
      <div class="mb-3">
        <label for="password" class="form-label">
          {{ __('Password') }}
        </label>
        <input
          type="password"
          id="password"
          class="form-control @error('password') is-invalid @enderror"
          wire:model.defer="password"
          required
          autocomplete="current-password"
          placeholder="{{ __('Password') }}"
        >
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Remember & Forgot --}}
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check mb-0">
          <input
            type="checkbox"
            class="form-check-input"
            id="remember"
            wire:model="remember"
          >
          <label for="remember" class="form-check-label small">
            {{ __('Remember me') }}
          </label>
        </div>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="small">
            {{ __('Forgot your password?') }}
          </a>
        @endif
      </div>

      {{-- Submit --}}
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary">
          {{ __('Log in') }}
        </button>
      </div>
    </form>

    {{-- Sign up Link --}}
    @if (Route::has('register'))
      <div class="text-center small text-muted">
        {{ __("Don't have an account?") }}
        <a href="{{ route('register') }}">
          {{ __('Sign up') }}
        </a>
      </div>
    @endif

  </div>
</div>
