<x-filament-panels::page>
    <div class="text-2xl font-bold">Selamat datang di Sistem Informasi Mahasiswa</div>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-filament::card>
            <div class="text-lg font-semibold">Total Mahasiswa</div>
            <div class="text-3xl mt-2">{{ \App\Models\Student::count() }}</div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-semibold">Jumlah Dosen</div>
            <div class="text-3xl mt-2">12</div>
        </x-filament::card>
    </div>
</x-filament-panels::page>
