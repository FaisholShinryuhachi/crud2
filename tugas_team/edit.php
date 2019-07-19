<?php
if(isset($_GET['nis'])){
    // dapetin data
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // sql to delete a record
    $sql = "SELECT nis,nama,alamat FROM siswa WHERE nis=".$_GET['nis'];
    $result = mysqli_query($conn, $sql);
    $arrSiswa = array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $arrSiswa['nis'] = $row['nis'];
            $arrSiswa['nama'] = $row['nama'];
            $arrSiswa['alamat'] = $row['alamat'];
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}
?>
<html>
    <head>
        <title>tabel siswa</title>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
            </style>
    </head>
    <body>
        <h3>Edit Siswa</h3>
        <form action="edit.php" method="post">
            <input type="number" name="nis" placeholder="NIS" value="<?php echo $arrSiswa['nis'];?>"><br>
            <input type="text" name="nama" placeholder="Nama" value="<?php echo $arrSiswa['nama'];?>"><br>
            <textarea name="alamat" rows="5" placeholder="Alamat"><?php echo $arrSiswa['alamat'];?></textarea>
            <br><br>
            <button type="submit">Simpan</button>
        </form>
    </body>
</html>