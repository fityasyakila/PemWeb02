<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th, 
        td, table {
            border:1px solid black
        }
        th, td {
            padding: 1rem;
        }
        table {
            border-spacing: 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Form Tambah Data</h1>
        <form action="/mobil/simpanData" method="POST">
            @csrf
            <div>
                <label for="">Nama Mobil</label>
                <input type="text" name="nama_mobil" required><br>
            </div>
            <div>
                <label for="">Merk Mobil</label>
                <input type="text" name="merk_mobil" required><br>
            </div>
            <div>
                <label for="">CC</label>
                <input type="text" name="cc" required><br>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>