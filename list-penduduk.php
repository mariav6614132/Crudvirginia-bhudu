<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran penduduk</title>
</head>

<body>
    <header>
        <h3>Penduduk yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>umur</th>
            <th>alamat</th>
            <th>agama</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_penduduk";
        $query = mysqli_query($db, $sql);

        while($penduduk = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$penduduk['nama']."</td>";
            echo "<td>".$penduduk['umur']."</td>";
            echo "<td>".$penduduk['alamat']."</td>";
            echo "<td>".$penduduk['agama']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$penduduk['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$penduduk['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>