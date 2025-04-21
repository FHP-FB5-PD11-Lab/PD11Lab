<section>
    @include('partials.settings-heading')

    <x-settings.layout
        :heading="__('Update password')"
        :subheading="__('Ensure your account is using a long, random password to stay secure')"
    >
        <form wire:submit="updatePassword" class="mt-4 d-flex flex-column gap-4">
            <flux:input
                wire:model="current_password"
                :label="__('Current password')"
                type="password"
                required
                autocomplete="current-password"
            />
            <flux:input
                wire:model="password"
                :label="__('New password')"
                type="password"
                required
                autocomplete="new-password"
            />
            <flux:input
                wire:model="password_confirmation"
                :label="__('Confirm Password')"
                type="password"
                required
                autocomplete="new-password"
            />

            <div class="d-flex align-items-center gap-3">
                <div class="ms-auto">
                    <flux:button variant="primary" type="submit">
                        {{ __('Save') }}
                    </flux:button>
                </div>
                <x-action-message on="password-updated" class="ms-3">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section>
