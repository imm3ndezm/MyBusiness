<x-app-layout>
    @section('title')
        Create business
    @endsection

    @section('content')
        <div class="w-full">
            <div class="flex justify-center p-5 mx-auto max-w-screen-2xl w-auto shadow-xl h-full">
                <div class="flex flex-row gap-5">
                    <div class="w-full">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="w-full">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
