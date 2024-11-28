<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form method="POST" action="/mahsiswa">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div>
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas">
        </div>
        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir">
        </div>
        <div>
            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    </form>
</body>
</html>