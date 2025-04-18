<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Nilai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Form Edit Nilai -->
                <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Pilih Siswa -->
                    <div class="mb-4">
                        <label for="siswa_id" class="block text-sm font-medium text-gray-700">Siswa</label>
                        <select name="siswa_id" id="siswa_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required disabled>
                            @foreach ($allSiswa as $item)
                                <option value="{{ $item->id }}" {{ $nilai->siswa_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        <input type="hidden" name="siswa_id" value="{{ $nilai->siswa_id }}">
                    </div>

                    <!-- Pilih Guru -->
                    <div class="mb-4">
                        <label for="guru_id" class="block text-sm font-medium text-gray-700">Guru</label>
                        <select name="guru_id" id="guru_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                            @foreach ($guru as $item)
                                <option value="{{ $item->id }}" data-mapel="{{ $item->mapel_id }}" {{ $nilai->guru_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama_guru }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Pilih Mata Pelajaran -->
                    <div class="mb-4">
                        <label for="mapel_id" class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
                        <select name="mapel_id" id="mapel_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required readonly>
                            @foreach ($mapel as $item)
                                <option value="{{ $item->id }}" {{ $nilai->mapel_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama_mapel }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Nilai UTS -->
                    <div class="mb-4">
                        <label for="uts" class="block text-sm font-medium text-gray-700">Nilai UTS</label>
                        <input type="number" name="uts" id="uts" value="{{ $nilai->uts }}" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" oninput="hitungNilaiAkhir()">
                    </div>

                    <!-- Nilai UAS -->
                    <div class="mb-4">
                        <label for="uas" class="block text-sm font-medium text-gray-700">Nilai UAS</label>
                        <input type="number" name="uas" id="uas" value="{{ $nilai->uas }}" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" oninput="hitungNilaiAkhir()">
                    </div>

                    <!-- Nilai Tugas -->
                    <div class="mb-4">
                        <label for="tugas" class="block text-sm font-medium text-gray-700">Nilai Tugas</label>
                        <input type="number" name="tugas" id="tugas" value="{{ $nilai->tugas }}" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" oninput="hitungNilaiAkhir()">
                    </div>

                    <!-- Nilai Akhir -->
                    <div class="mb-4">
                        <label for="nilai_akhir" class="block text-sm font-medium text-gray-700">Nilai Akhir</label>
                        <input type="number" name="nilai_akhir" id="nilai_akhir" value="{{ $nilai->nilai_akhir }}" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" readonly>
                    </div>

                    <!-- Grade -->
                    <div class="mb-4">
                        <label for="grade_id" class="block text-sm font-medium text-gray-700">Grade</label>
                        <select name="grade_id" id="grade_id" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200">
                            @foreach($grades as $item)
                                <option value="{{ $item->id }}" {{ $nilai->grade_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama_grade }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="flex items-center justify-end mt-4">
                     
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function hitungNilaiAkhir() {
            const uts = parseFloat(document.getElementById('uts').value) || 0;
            const uas = parseFloat(document.getElementById('uas').value) || 0;
            const tugas = parseFloat(document.getElementById('tugas').value) || 0;
            const nilaiAkhir = (uts + uas + tugas) / 3;

            document.getElementById('nilai_akhir').value = nilaiAkhir.toFixed(2);

            let grade;
            if (nilaiAkhir >= 85) grade = 'A';
            else if (nilaiAkhir >= 70) grade = 'B';
            else if (nilaiAkhir >= 55) grade = 'C';
            else if (nilaiAkhir >= 40) grade = 'D';
            else grade = 'E';

            const gradeSelect = document.getElementById('grade_id');
            for (let i = 0; i < gradeSelect.options.length; i++) {
                if (gradeSelect.options[i].text === grade) {
                    gradeSelect.selectedIndex = i;
                    break;
                }
            }
        }

        document.getElementById('guru_id').addEventListener('change', function() {
            let selectedGuru = this.options[this.selectedIndex];
            let mapelId = selectedGuru.getAttribute('data-mapel');

            let mapelSelect = document.getElementById('mapel_id');
            for (let option of mapelSelect.options) {
                if (option.value === mapelId) {
                    mapelSelect.value = mapelId;
                    break;
                }
            }
        });
    </script>
</x-app-layout>
