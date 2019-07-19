<?php

include('koneksi.php');

if ($_POST['button'] == "tambah produk") {
	$sql = "INSERT INTO produk (nama_produk, jumlah, id_merk, id_kategori)
			VALUES (
				'".$_POST['nama_produk']."', 
				'".$_POST['jumlah']."', 
				'".$_POST['merk']."', 
				'".$_POST['nama_kategori']."'
				)";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}

elseif ($_POST['button'] == "tambah merk") {
	$sql = "INSERT INTO merk (nama_merk)
			VALUES ( 
				'".$_POST['nama_merk']."'
				)";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}

elseif ($_POST['button'] == "tambah kategori") {
	$sql = "INSERT INTO kategori_produk (nama_kategori)
			VALUES (
				'".$_POST['nama_kategori']."'
				)";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}

else
	echo "error lek";
	mysqli_close($conn);
	


?>