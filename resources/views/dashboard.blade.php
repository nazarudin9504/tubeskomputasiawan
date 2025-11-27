<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">

            {{-- info login --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            {{-- alternatif tombol kelola akun --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-3">
                    <h3 class="text-lg font-semibold">Kelola Akun</h3>

                    <div class="flex flex-wrap gap-3">
                        {{-- Lihat daftar akun + jumlah --}}
                        <a href="{{ route('users.index') }}"
                           class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm">
                            Lihat & Kelola Semua Akun
                        </a>

                        {{-- Tambah akun langsung dari dashboard --}}
                        <a href="{{ route('users.create') }}"
                           class="px-4 py-2 bg-green-600 text-white rounded-md text-sm">
                            Tambah Akun Baru
                        </a>
                    </div>

                    <p class="text-sm text-gray-500 mt-2">
                        Edit dan hapus akun bisa dilakukan di halaman "Lihat & Kelola Semua Akun".
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
