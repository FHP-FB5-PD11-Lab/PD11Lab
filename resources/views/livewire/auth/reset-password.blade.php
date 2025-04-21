<div class="d-flex flex-column gap-4">

    <x-auth-header
        :title="__('Reset password')"
        :description="__('Please enter your new password below')"
    />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="resetPassword" class="d-flex flex-column gap-4">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email')"
            type="email"
            required
            autocomplete="email"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
        />

        <div class="d-flex justify-content-end">
            <flux:button type="submit" variant="primary" class="w-100">
                {{ __('Reset password') }}
            </flux:button>
        </div>
    </form>
</div>
