<div class="mt-4 d-flex flex-column gap-4">

    <flux:text class="text-center">
        {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
    </flux:text>

    @if (session('status') === 'verification-link-sent')
        <flux:text class="text-center fw-semibold text-success">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </flux:text>
    @endif

    <div class="d-flex flex-column align-items-center gap-3 w-100">
        <flux:button
            wire:click="sendVerification"
            variant="primary"
            class="w-100"
        >
            {{ __('Resend verification email') }}
        </flux:button>

        <flux:link
            wire:click="logout"
            class="small text-decoration-none"
        >
            {{ __('Log out') }}
        </flux:link>
    </div>
</div>
