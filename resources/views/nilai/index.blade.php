<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Nilai Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-4">
                    <!-- Data Siswa -->
                    <div class="mb-6">
                        <h3 class="font-semibold text-lg">Data Siswa</h3>
                        <p><strong>Nama Siswa:</strong> {{ $siswa->nama }}</p>
                        <p><strong>NISN:</strong> {{ $siswa->nisn }}</p>
                    </div>

                    <!-- Tombol Tambah Nilai dan Cetak -->
                    <a href="{{ route('nilai.create', ['siswa_id' => $siswa->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Tambah Nilai
                    </a>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-2" onclick="printData()">
                        Cetak
                    </button>
                </div>

                <!-- Area yang Akan Dicetak -->
                <div id="printArea">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Guru</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Mata Pelajaran</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">UTS</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">UAS</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Tugas</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Nilai Akhir</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Grade</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($nilai as $item)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item->guru->nama_guru }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item->mapel->nama_mapel }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item->uts }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item->uas }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item->tugas }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item->nilai_akhir }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item->grade->nama_grade }}</td>
                                        <td class="border border-gray-300 px-4 py-2 print-hidden">
                                            <a href="{{ route('nilai.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                                Edit
                                            </a>
                                            <form action="{{ route('nilai.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="border border-gray-300 px-4 py-2 text-center">Tidak ada data nilai.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript untuk Cetak -->
    <script>
        function printData() {
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload(); // Reload halaman agar tetap normal setelah cetak
        }
    </script>

    <!-- CSS untuk menyembunyikan aksi saat mencetak -->
    <style>
        @media print {
            .print-hidden {
                visibility: hidden !important;
            }
        }
    </style>

</x-app-layout>
