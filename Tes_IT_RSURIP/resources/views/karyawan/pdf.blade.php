<!DOCTYPE html>
<html>
<head>
    <title>Laporan Karyawan</title>
</head>
<body>
    <h1>Laporan Data Karyawan</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawan as $k)
            <tr>
                <td>{{ $k->nama }}</td>
                <td>{{ $k->tgl_lahir }}</td>
                <td>{{ $k->gaji }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
