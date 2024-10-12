<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" class="mt-1 block w-full" :value="old('username', $user->username)"
                required autofocus autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>



        <div class="flex flex-col gap-3" x-data="{
            photo: null,
            photoName: '',
            errorMessage: '',
            allowedTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/svg+xml'],
            previewPhoto(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!this.allowedTypes.includes(file.type)) {
                        this.errorMessage = 'Invalid file type. Please upload an image (PNG, JPG, JPEG, or SVG).';
                        this.reset();
                        return;
                    }
                    this.errorMessage = ''; // Clear error if valid
                    this.photoName = file.name;
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        this.photo = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            },
            reset() {
                this.photo = null;
                this.photoName = '';
                event.target.value = ''; // Reset the input value
            }
        }">

       

           

            @if (Auth::user()->profile_photo != null)
            <x-input-label for="profile_photo" :value="__('Current profile picture')" />
            <img class="rounded w-36 h-36" src="{{ asset(Auth::user()->profile_photo) }}" alt="{{Auth::user()->username}} avatar">

            <x-input-label for="profile_photo" :value="__('Update profile photo')" />
            @else
            <x-input-label for="profile_photo" :value="__('Upload profile photo')" />
            @endif

            
            <div class="flex items-center justify-center w-full">
                <label for="profile_photo"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 transition-all duration-700">

                    <!-- Preview Section -->
                    <template x-if="photo">
                        <div class="flex flex-col items-center">
                            <img :src="photo" alt="Selected Image"
                                class="h-32 w-32 object-cover rounded-full mb-4">
                            <p class="text-sm text-gray-500 dark:text-gray-400" x-text="photoName"></p>
                        </div>
                    </template>

                    <!-- Default Upload UI -->
                    <template x-if="!photo && !errorMessage">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                <span class="font-semibold">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 10MB)</p>
                        </div>
                    </template>

                    <!-- Error Message -->
                    <template x-if="errorMessage">
                        <div class="text-red-500 text-sm mt-2" x-text="errorMessage"></div>
                    </template>

                    <input id="profile_photo" name="profile_photo" type="file" class="hidden"
                        accept=".jpeg, .png, .jpg, .svg" @change="previewPhoto">
                </label>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('profile_photo')" />
        </div>



        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        toastAlert('success', 'Profile Updated', 'Profile information was updated successfully');
                    });
                </script>
            @endif
        </div>
    </form>
</section>
