<section>
    @include('partials.settings-heading')

    <x-settings.layout
        :heading="__('Profile')"
        :subheading="__('Update your name and email address')"
    >
        <form wire:submit="updateProfileInformation" class="mt-4 d-flex flex-column gap-4 w-100">

            <flux:input
                wire:model="name"
                :label="__('Name')"
                type="text"
                required
                autofocus
                autocomplete="name"
            />

            <div>
                <flux:input
                    wire:model="email"
                    :label="__('Email')"
                    type="email"
                    required
                    autocomplete="email"
                />

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! auth()->user()->hasVerifiedEmail())
                    <div class="mt-3 small text-muted">
                        {{ __('Your email address is unverified.') }}

                        <flux:link
                            class="text-decoration-none ms-1"
                            wire:click.prevent="resendVerificationNotification"
                        >
                            {{ __('Click here to re-send the verification email.') }}
                        </flux:link>
                    </div>

                    @if (session('status') === 'verification-link-sent')
                        <div class="mt-2 small fw-semibold text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif
                @endif
            </div>

            <div class="d-flex align-items-center gap-3">
                <div class="ms-auto">
                    <flux:button variant="primary" type="submit">
                        {{ __('Save') }}
                    </flux:button>
                </div>
                <x-action-message on="profile-updated" class="ms-3">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-settings.layout>
</section>
