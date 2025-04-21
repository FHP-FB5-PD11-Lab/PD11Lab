<div class="d-flex flex-column gap-4">

    <x-auth-header
        :title="__('Confirm password')"
        :description="__('This is a secure area of the application. Please confirm your password before continuing.')"
    />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="confirmPassword" class="d-flex flex-column gap-4">
        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
        />

        <div class="d-flex justify-content-end">
            <flux:button variant="primary" type="submit" class="w-100">
                {{ __('Confirm') }}
            </flux:button>
        </div>
    </form>
</div>
