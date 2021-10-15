<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran penduduk </title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran penduduk</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="umur">umur: </label>
            <select name="umur">
                <option>20 tahun</option>
                <option>21 tahun</option>
                <option>22 tahun</option>
                <option>23 tahun</option>
                <option>24 tahun</option>
            </select>
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <input type="text" name="alamat" placeholder="alamat" />   
        </p>
        <p>
            <label for="agama">agama: </label>
            <select name="agama">
                <option>Katolik</option>
                <option>Islam</option>
                <option>Protestan</option>
                <option>Hindu</option>
                <option>Budha</option>
            </select>
        
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>