<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .action-link {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border-radius: 3px;
        }
        .action-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <p>Mahasiswa dengan IPK diatas 2.75, menyelesaikan 105 SKS dan sudah semester 5</p>
    <table>
        <thead>
            <tr>
                <th style="width: 2%;">ID</th>
                <th style="width: 10%;">NIM</th>
                <th style="width: 20%;">Nama</th>
                <th style="width: 10%;">Kelas</th>
                <th style="width: 10%;">IPK</th>
                <th style="width: 10%;">Semester</th>
                <th style="width: 10%;">SKS</th>
                <th style="width: 10%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->rekapHasilBelajar->id }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->rekapHasilBelajar->kelas }}</td>
                <td>{{ $mhs->rekapHasilBelajar->ipk }}</td>
                <td>{{ $mhs->rekapHasilBelajar->semester }}</td>
                <td>{{ $mhs->rekapHasilBelajar->sks }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mhs->rekapHasilBelajar->id) }}" class="action-link">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p style="margin-top: 20px; text-align: center;">Dibuat oleh Vincentius Kennedy Winardinata (2111070) IFB6C</p>
</body>
</html>
