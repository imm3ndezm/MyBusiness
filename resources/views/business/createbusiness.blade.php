<x-app-layout>
    @section('title')
        Create business
    @endsection

    @section('content')
        <form action="{{ route('business.create') }}" method="POST">
            @csrf
            <div
                class="bg-gray-100 dark:bg-gray-800 transition-colors duration-700 rounded-md w-full p-5 mx-auto max-w-screen-xl shadow-xl">
                <div class="flex flex-row gap-5">
                    <div class="w-full flex flex-col gap-3 py-3" x-data="{
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
                        <x-input-label for="business_photo" :value="__('Upload business photo')" />



                        <div class="flex items-center justify-center w-full">
                            <label for="business_photo"
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

                                <input id="business_photo" name="business_photo" type="file" class="hidden"
                                    accept=".jpeg, .png, .jpg, .svg" @change="previewPhoto">
                            </label>
                        </div>
                        <x-input-error class="mt-2" :messages="$errors->get('business_photo')" />
                    </div>


                    <div class="w-full flex flex-col gap-3 py-3" x-data="{
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



                        <x-input-label for="business_banner" :value="__('Upload business banner')" />
                        <div class="flex items-center justify-center w-full">
                            <label for="business_banner"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 transition-all duration-700">

                                <!-- Preview Section -->
                                <template x-if="photo">
                                    <div class="flex flex-col items-center">
                                        <img :src="photo" alt="Selected Image"
                                            class="h-32 w-64 object-contain rounded-sm mb-4">
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

                                <input id="business_banner" name="business_banner" type="file" class="hidden"
                                    accept=".jpeg, .png, .jpg, .svg" @change="previewPhoto">
                            </label>
                        </div>
                        <x-input-error class="mt-2" :messages="$errors->get('business_banner')" />
                    </div>
                </div>


                <div class="flex flex-row gap-5 py-3">
                    <div class="w-full">
                        <x-input-label for="business_name" :value="__('Business name')" />
                        <x-text-input id="business_name" class="block mt-1 w-full" type="text" name="business_name"
                            :value="old('business_name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('business_name')" class="mt-2" />
                    </div>
                    <div class="w-full">
                        <x-input-label for="business_nickname" :value="__('Business nickname')" />
                        <x-text-input id="business_nickname" class="block mt-1 w-full" type="text"
                            name="business_nickname" :value="old('business_nickname')" required autofocus
                            autocomplete="business_nickname" />
                        <x-input-error :messages="$errors->get('business_nickname')" class="mt-2" />
                    </div>
                    <div x-data="idMask" class="w-full">
                        <x-input-label for="business_owner_id" :value="__('Business owner ID')" />
                        <x-text-input id="business_owner_id" class="block mt-1 w-full" type="text"
                            name="business_owner_id" x-model="id" @input="applyMask" required autofocus
                            autocomplete="business_owner_id" maxlength="10" />
                        <x-input-error :messages="$errors->get('business_owner_id')" class="mt-2" />
                    </div>
                </div>

                <div class="w-full py-3">
                    <x-input-label for="business_email" :value="__('Business email')" />
                    <x-text-input id="business_email" class="block mt-1 w-full" type="email" name="business_email"
                        :value="old('business_email')" required autofocus autocomplete="business_email" />
                    <x-input-error :messages="$errors->get('business_email')" class="mt-2" />
                </div>
                <div class="w-full py-3">
                    <x-input-label for="business_description" :value="__('Business description')" />


                    <x-textareainput id="business_description" class="block mt-1 w-full" type="text"
                        name="business_description" :value="old('business_description')" required autofocus
                        autocomplete="business_description" />


                    <x-input-error :messages="$errors->get('business_description')" class="mt-2" />
                </div>
                <div class="w-full py-3">
                    <x-input-label for="business_location" :value="__('Business location (lat, lng)')" />
                    <x-text-input id="business_location" class="block mt-1 w-full" type="text" required autofocus
                        autocomplete="off" />
                    <div class="mt-2 text-sm text-red-600" id="input-error"></div>
                </div>

                <div class="w-full py-3">
                    <div class="relative w-full h-96">
                        <iframe id="map-frame" class="absolute top-0 left-0 w-full h-full rounded-md"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3946.546878692708!2d-89.26537168533176!3d13.678357393157322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sus!4v1697397598655!5m2!1ses!2sus"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>

                <div class="flex justify-between w-full py-3">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('home') }}">
                        {{ __('Go back home') }}
                    </a>
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </div>
            </div>
        </form>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('idMask', () => ({
                    id: '',

                    applyMask() {
                        // Elimina cualquier caracter que no sea un dígito
                        let value = this.id.replace(/\D/g, '');

                        // Aplica la máscara 00000000-0
                        if (value.length > 8) {
                            value = value.slice(0, 8) + '-' + value.slice(8);
                        }

                        this.id = value;
                    }
                }));
            });

            const input = document.getElementById('business_location');
            const mapFrame = document.getElementById('map-frame');
            const inputError = document.getElementById('input-error');


            input.addEventListener('keyup', () => {
                const coords = input.value.split(',').map(coord => coord.trim());


                if (coords.length === 2 && !isNaN(coords[0]) && !isNaN(coords[1])) {
                    const lat = parseFloat(coords[0]);
                    const lng = parseFloat(coords[1]);


                    const newSrc =
                        `https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3946.546878692708!2d${lng}!3d${lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sus!4v1697397598655!5m2!1ses!2sus`;
                    mapFrame.src = newSrc;
                    inputError.textContent = '';
                } else {
                    inputError.textContent =
                        'Please, add valid coordinates with format: latitude, length';
                }
            });
        </script>
    @endsection

</x-app-layout>
