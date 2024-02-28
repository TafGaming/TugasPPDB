<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB App Test</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <header>
        <h1>Webpro PPDB</h1>
        <h3>Penerimaan Peserta Didik Baru</h3>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <h5>Formulir PPDB</h5>
    <div>
        <form action="proses-pendaftaran.php" method="post">
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Alamat Lengkap</label>
            <textarea name="alamat" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kong Hu Chu">Kong Hu Chu</option>
            </select>
        </div>
        <div>
            <label for="">Sekolah Asal</label>
            <input type="text" name="sekolah_asal">
        </div>
        <div>
            <input type="reset">
            <input type="submit" name="Simpan" value="Simpan">
        </div>
        </form>
    </div>
    <footer>
        <hr>
        <i>Kopirek 2024</i>
    </footer>
</body>
</html>