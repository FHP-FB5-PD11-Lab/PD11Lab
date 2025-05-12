<section class="mt-5">

    {{-- Heading --}}
    <div class="mb-4">
        <h2 class="h4 mb-1">{{ __('Delete account') }}</h2>
        <p class="text-muted mb-0">
            {{ __('Delete your account and all of its resources') }}
        </p>
    </div>

    {{-- Trigger Button --}}
    <button
        type="button"
        class="btn btn-danger mb-4"
        data-bs-toggle="modal"
        data-bs-target="#confirmUserDeletionModal"
    >
        {{ __('Delete account') }}
    </button>

    {{-- Confirmation Modal --}}
    <div
        class="modal fade"
        id="confirmUserDeletionModal"
        tabindex="-1"
        aria-labelledby="confirmUserDeletionLabel"
        aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="confirmUserDeletionLabel">
              {{ __('Are you sure you want to delete your account?') }}
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="{{ __('Close') }}"
            ></button>
          </div>

          <div class="modal-body">
            <p class="text-muted">
              {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mb-3">
              <label for="confirmPassword" class="form-label">
                {{ __('Password') }}
              </label>
              <input
                type="password"
                id="confirmPassword"
                class="form-control"
                wire:model="password"
              />
            </div>
          </div>

          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              {{ __('Cancel') }}
            </button>
            <button
              type="button"
              class="btn btn-danger"
              wire:click="deleteUser"
            >
              {{ __('Delete account') }}
            </button>
          </div>

        </div>
      </div>
    </div>

</section>
