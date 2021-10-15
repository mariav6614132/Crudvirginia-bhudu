<!DOCTYPE html>
<html>
<head>
    <title>penduduk</title>
</head>

<body>
    <header>
        <h3>penduduk</h3>
    </header>

    <h4>MENU</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Penduduk</a></li>
            <li><a href="list-penduduk.php">daftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran penduduk berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>