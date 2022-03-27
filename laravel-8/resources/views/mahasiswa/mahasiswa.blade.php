<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('mahasiswa.store') }}" class="flex-row mb-6">
                @csrf

                <div class="col-6">
                    <x-jet-label for="nama" value="{{ __('Nama') }}" />
                    <x-jet-input id="nama" class="block mt-1 w-full" type="text" name="nama"/>
                </div>

                <div class="mt-4 col-6">
                    <x-jet-label for="nim" value="{{ __('Nim') }}" />
                    <x-jet-input id="nim" class="block mt-1 w-full" type="text" name="nim" />
                </div>

                <div class="mt-4 col-span-6">
                    <x-jet-label for="kontak" value="{{ __('Kontak') }}" />
                    <x-jet-input id="kontak" class="block mt-1 w-full" type="text" name="kontak" />
                </div>

                <div class="flex items-center justify-end mt-4">

                    <x-jet-button class="ml-4">{{ __('Simpan') }}</x-jet-button>
                </div>
            </form>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Nim</th>
                        <th class="px-4 py-2">Kontak</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $item)
                            <tr>
                                <td class="border px-4 py-2">{{ $item->nama }}</td>
                                <td class="border px-4 py-2">{{ $item->nim }}</td>
                                <td class="border px-4 py-2">{{ $item->kontak }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('mahasiswa.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
