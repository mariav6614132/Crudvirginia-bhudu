<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-penduduk.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_penduduk WHERE id=$id";
$query = mysqli_query($db, $sql);
$penduduk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit penduduk | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit penduduk</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $penduduk['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $penduduk['nama'] ?>" />
        </p>
        <p>
            <label for="umur">umur: </label>
            <?php $umur = $penduduk['agama']; ?>
            <select name="umur">
                <option <?php echo ($umur == '20') ? "selected": "" ?>>20</option>
                <option <?php echo ($umur == '21') ? "selected": "" ?>>21</option>
                <option <?php echo ($umur == '22') ? "selected": "" ?>>22</option>
                <option <?php echo ($umur == '23') ? "selected": "" ?>>23</option>
                <option <?php echo ($umur == '24') ? "selected": "" ?>>24</option>
            </select>
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <textarea name="alamat"><?php echo $penduduk['alamat'] ?></textarea>  
        </p>
        <p>
            <label for="agama">agama: </label>
            <?php $agama = $penduduk['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Protestan') ? "selected": "" ?>>Protestan</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
            </select>
        </p>
        <p>
      
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>