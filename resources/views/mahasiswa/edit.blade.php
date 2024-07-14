<!DOCTYPE html>
<html>
<head>
    <title>Edit Rekap Hasil Belajar</title>
    <style>
        body {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        label {
            display: block;
            margin-bottom: 5px;
            width: 100%;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit Rekap Hasil Belajar</h1>
    <form action="{{ route('mahasiswa.update', $rekap->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>NIM:</label>
        <input type="text" value="{{ $rekap->nim }}" readonly><br>
        <label>Nama:</label>
        <input type="text" value="{{ $rekap->mahasiswa->nama }}" readonly><br>
        <label>Kelas:</label>
        <input type="text" name="kelas" value="{{ $rekap->kelas }}"><br>
        <label>IPK:</label>
        <input type="text" name="ipk" value="{{ $rekap->ipk }}"><br>
        <label>Semester:</label>
        <input type="text" name="semester" value="{{ $rekap->semester }}"><br>
        <label>Total SKS:</label>
        <input type="text" name="sks" value="{{ $rekap->sks }}"><br>
        <button type="submit">Update</button>
    </form>
    <p style="margin-top: 20px; text-align: center;">Dibuat oleh Vincentius Kennedy Winardinata (2111070) IFB6C</p>
</body>
</html>
