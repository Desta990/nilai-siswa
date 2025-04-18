@extends('layouts.home')

@section('content')
<div class="container">
    <h2>Detail Siswa</h2>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $siswa->nama }}</h5>
            <p class="card-text"><strong>NISN:</strong> {{ $siswa->nisn }}</p>
            <p class="card-text"><strong>Kelas:</strong> {{ $siswa->kelas->nama }}</p>
            <p class="card-text"><strong>Jurusan:</strong> {{ $siswa->jurusan->nama }}</p>
        </div>
    </div>

    <h3>Nilai</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mata Pelajaran</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $n)
            <tr>
                <td>{{ $n->mapel->nama }}</td>
                <td>{{ $n->uts }}</td>
                <td>{{ $n->uas }}</td>
                <td>{{ $n->tugas }}</td>
                <td>{{ $n->grade->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
