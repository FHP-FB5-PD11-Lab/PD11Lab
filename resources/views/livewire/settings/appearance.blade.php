<section>
    @include('partials.settings-heading')

    <x-settings.layout
        :heading="__('Appearance')"
        :subheading="__('Update the appearance settings for your account')"
    >
        <div class="btn-group" role="group" aria-label="{{ __('Appearance settings') }}">
            <input
                type="radio"
                class="btn-check"
                name="appearance"
                id="appearanceLight"
                wire:model="$flux.appearance"
                value="light"
                autocomplete="off"
            />
            <label class="btn btn-outline-primary small" for="appearanceLight">
                <i class="bi bi-sun-fill me-1"></i>{{ __('Light') }}
            </label>

            <input
                type="radio"
                class="btn-check"
                name="appearance"
                id="appearanceDark"
                wire:model="$flux.appearance"
                value="dark"
                autocomplete="off"
            />
            <label class="btn btn-outline-primary small" for="appearanceDark">
                <i class="bi bi-moon-fill me-1"></i>{{ __('Dark') }}
            </label>

            <input
                type="radio"
                class="btn-check"
                name="appearance"
                id="appearanceSystem"
                wire:model="$flux.appearance"
                value="system"
                autocomplete="off"
            />
            <label class="btn btn-outline-primary small" for="appearanceSystem">
                <i class="bi bi-display-fill me-1"></i>{{ __('System') }}
            </label>
        </div>
    </x-settings.layout>
</section>
