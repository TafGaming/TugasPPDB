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
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    <footer>
        <hr>
        <i>Kopirek 2024</i>
    </footer>
</body>
</html>