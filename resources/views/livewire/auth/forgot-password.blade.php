<div class="d-flex flex-column gap-4">

    <x-auth-header
        :title="__('Forgot password')"
        :description="__('Enter your email to receive a password reset link')"
    />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="d-flex flex-column gap-4">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email Address')"
            type="email"
            required
            autofocus
            placeholder="email@example.com"
        />

        <div class="d-flex justify-content-end">
            <flux:button variant="primary" type="submit" class="w-100">
                {{ __('Email password reset link') }}
            </flux:button>
        </div>
    </form>

    <div class="d-flex justify-content-center gap-1 small text-muted">
        {{ __('Or, return to') }}
        <flux:link :href="route('login')" wire:navigate>
            {{ __('log in') }}
        </flux:link>
    </div>

</div>
