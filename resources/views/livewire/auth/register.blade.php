<div class="card shadow-sm mx-auto" style="max-width: 24rem; width: 100%;">
  <div class="card-body p-4">

    {{-- Header --}}
    <h1 class="h4 text-center mb-2">
      {{ __('Create an account') }}
    </h1>
    <p class="text-muted text-center mb-4">
      {{ __('Enter your details below to create your account') }}
    </p>

    {{-- Session Status --}}
    @if (session('status'))
      <div class="alert alert-success small text-center mb-3" role="alert">
        {{ session('status') }}
      </div>
    @endif

    {{-- Form --}}
    <form wire:submit.prevent="register" novalidate>
      {{-- Name --}}
      <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input
          type="text"
          id="name"
          class="form-control @error('name') is-invalid @enderror"
          wire:model.defer="name"
          required
          autofocus
          autocomplete="name"
          placeholder="{{ __('Full name') }}"
        >
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Email --}}
      <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email address') }}</label>
        <input
          type="email"
          id="email"
          class="form-control @error('email') is-invalid @enderror"
          wire:model.defer="email"
          required
          autocomplete="email"
          placeholder="email@example.com"
        >
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Password --}}
      <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input
          type="password"
          id="password"
          class="form-control @error('password') is-invalid @enderror"
          wire:model.defer="password"
          required
          autocomplete="new-password"
          placeholder="{{ __('Password') }}"
        >
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Confirm Password --}}
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">{{ __('Confirm password') }}</label>
        <input
          type="password"
          id="password_confirmation"
          class="form-control @error('password_confirmation') is-invalid @enderror"
          wire:model.defer="password_confirmation"
          required
          autocomplete="new-password"
          placeholder="{{ __('Confirm password') }}"
        >
        @error('password_confirmation')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Submit --}}
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary">
          {{ __('Create account') }}
        </button>
      </div>
    </form>

    {{-- Login Link --}}
    @if (Route::has('login'))
      <div class="text-center small text-muted">
        {{ __("Already have an account?") }}
        <a href="{{ route('login') }}">
          {{ __('Log in') }}
        </a>
      </div>
    @endif

  </div>
</div>
