<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('mahasiswa.update', $data->id) }}" class="flex-row mb-6">
                @csrf
                @method('PUT')
                <div class="col-6">
                    <x-jet-label for="nama" value="{{ __('Nama') }}" />
                    <x-jet-input id="nama" class="block mt-1 w-full" type="text" name="nama" value="{{ $data->nama }}"/>
                </div>

                <div class="mt-4 col-6">
                    <x-jet-label for="nim" value="{{ __('Nim') }}" />
                    <x-jet-input id="nim" class="block mt-1 w-full" type="text" name="nim" value="{{ $data->nim }}"/>
                </div>

                <div class="mt-4 col-span-6">
                    <x-jet-label for="kontak" value="{{ __('Kontak') }}" />
                    <x-jet-input id="kontak" class="block mt-1 w-full" type="text" name="kontak" value="{{ $data->kontak }}"/>
                </div>

                <div class="flex items-center justify-end mt-4">

                    <x-jet-button class="ml-4">{{ __('Simpan Perubahan') }}</x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
