<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <!-- Tombol Delete Account -->
    <button type="button" class="bg-red-600 text-white px-4 py-2 rounded-md shadow hover:bg-red-700 transition"
        data-bs-toggle="modal" data-bs-target="#confirmUserDeletion">
        {{ __('Delete Account') }}
    </button>

    <!-- Modal Konfirmasi Hapus Akun -->
    <div class="modal fade" id="confirmUserDeletion" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content dark:bg-gray-800 dark:text-white">
                <div class="modal-header">
                    <h5 class="modal-title text-lg font-medium text-gray-900 dark:text-gray-100" id="confirmUserDeletionLabel">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h5>
                    <button type="button" class="btn-close dark:text-gray-100" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <!-- Form Konfirmasi -->
                    <form method="post" action="{{ route('profile.destroy') }}" class="mt-4">
                        @csrf
                        @method('delete')

                        <div class="mb-3">
                            <label for="password" class="form-label text-gray-700 dark:text-gray-300">
                                {{ __('Password') }}
                            </label>
                            <input type="password" id="password" name="password" placeholder="{{ __('Password') }}"
                                class="form-control border-gray-300 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
                            @error('password')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tombol Konfirmasi -->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">
                                {{ __('Cancel') }}
                            </button>
                            <button type="submit" class="btn btn-danger">
                                {{ __('Delete Account') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
