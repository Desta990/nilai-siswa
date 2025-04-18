<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->kelas->nama_kelas ?? '-' }}</td>
                <td>{{ $s->jurusan->nama_jurusan ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
