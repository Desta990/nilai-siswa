<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Nilai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Formulir Tambah Nilai -->
                <form action="{{ route('nilai.store') }}" method="POST" id="form-nilai">
                    @csrf
                    <div class="mb-4">
                        <label for="siswa_id" class="block text-sm font-medium text-gray-700">Siswa</label>
                        <select name="siswa_id" id="siswa_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required {{ isset($siswa) ? 'disabled' : '' }}>
                            <option value="" disabled {{ isset($siswa) ? '' : 'selected' }}>Pilih Siswa</option>
                            @foreach ($allSiswa as $item)
                                <option value="{{ $item->id }}" {{ isset($siswa) && $siswa->id == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                    
                        @if(isset($siswa))
                            <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                        @endif
                    </div>
                    
          <!-- Pilih Guru -->
          <div class="mb-4">
            <label for="guru_id" class="block text-sm font-medium text-gray-700">Guru</label>
            <select name="guru_id" id="guru_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                <option value="" disabled selected>Pilih Guru</option>
                @foreach ($guru as $item)
                    <option value="{{ $item->id }}" data-mapel="{{ $item->mapel_id }}">{{ $item->nama_guru }}</option>
                @endforeach
            </select>
        </div>
        
        <!-- Pilih Mata Pelajaran -->
        <div class="mb-4">
            <label for="mapel_id" class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
            <select name="mapel_id" id="mapel_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required readonly>
                <option value="" disabled selected>Pilih Mata Pelajaran</option>
                @foreach ($mapel as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_mapel }}</option>
                @endforeach
            </select>
        </div>
        
       
                     <!-- Nilai UTS -->
                     <div class="mb-4">
                        <label for="uts" class="block text-sm font-medium text-gray-700">Nilai UTS</label>
                        <input type="number" name="uts" id="uts" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" oninput="hitungNilaiAkhir()">
                        @error('uts') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <!-- Nilai UAS -->
                    <div class="mb-4">
                        <label for="uas" class="block text-sm font-medium text-gray-700">Nilai UAS</label>
                        <input type="number" name="uas" id="uas" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" oninput="hitungNilaiAkhir()">
                        @error('uas') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <!-- Nilai Tugas -->
                    <div class="mb-4">
                        <label for="tugas" class="block text-sm font-medium text-gray-700">Nilai Tugas</label>
                        <input type="number" name="tugas" id="tugas" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" oninput="hitungNilaiAkhir()">
                        @error('tugas') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <!-- Nilai Akhir -->
                    <div class="mb-4">
                        <label for="nilai_akhir" class="block text-sm font-medium text-gray-700">Nilai Akhir</label>
                        <input type="number" name="nilai_akhir" id="nilai_akhir" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" readonly>
                        @error('nilai_akhir') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

            
                     <!-- Grade -->
                     <div class="mb-4">
                        <label for="grade_id" class="block text-sm font-medium text-gray-700">Grade</label>
                        <select name="grade_id" id="grade_id" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200">
                            <option value="">Pilih Grade</option>
                            @foreach($grades as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_grade }}</option>
                            @endforeach
                        </select>
                        @error('grade_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>


                    <!-- Tombol Aksi -->
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('nilai.index', ['siswa_id' => $siswa->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Batal
                        </a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function hitungNilaiAkhir() {
            // Ambil nilai dari input
            const uts = parseFloat(document.getElementById('uts').value) || 0;
            const uas = parseFloat(document.getElementById('uas').value) || 0;
            const tugas = parseFloat(document.getElementById('tugas').value) || 0;

            // Hitung nilai akhir
            const nilaiAkhir = (uts + uas + tugas) / 3;

            // Tampilkan nilai akhir di input nilai_akhir
            document.getElementById('nilai_akhir').value = nilaiAkhir.toFixed(2);

            // Tentukan grade berdasarkan nilai akhir
            let grade;
            if (nilaiAkhir >= 85) grade = 'A';
            else if (nilaiAkhir >= 70) grade = 'B';
            else if (nilaiAkhir >= 55) grade = 'C';
            else if (nilaiAkhir >= 40) grade = 'D';
            else grade = 'E';

            // Pilih grade yang sesuai di dropdown grade
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

