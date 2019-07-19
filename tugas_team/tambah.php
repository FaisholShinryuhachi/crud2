<?php

include('koneksi.php');
session_start();

if ($_POST['button'] == "tambah produk") {
	$sql = "INSERT INTO produk (nama_produk, jumlah, id_merk, id_kategori)
			VALUES (
				'".$_POST['nama_produk']."', 
				'".$_POST['jumlah']."', 
				'".$_POST['merk']."', 
				'".$_POST['nama_kategori']."'
				)";

		if (mysqli_query($conn, $sql)) {
    			$_SESSION['pesan'] = "Insert Berhasil";
				$_SESSION['type'] = "primary";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		header("location:index.php");	
}

elseif ($_POST['button'] == "tambah merk") {
	$sql = "INSERT INTO merk (nama_merk)
			VALUES ( 
				'".$_POST['nama_merk']."'
				)";

		if (mysqli_query($conn, $sql)) {
    			$_SESSION['pesan'] = "Insert Berhasil";
				$_SESSION['type'] = "primary";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		header("location:index.php");	
}

elseif ($_POST['button'] == "tambah kategori") {

		if(empty($_POST['nama_kategori'])){
			$_SESSION['pesan'] = "Form Tidak Boleh Kosong";
			$_SESSION['type'] = "danger";
		}
		else{

			$sql = "INSERT INTO kategori_produk (nama_kategori)
				VALUES (
					'".$_POST['nama_kategori']."'
					)";

			if (mysqli_query($conn, $sql)) {
				$_SESSION['pesan'] = "Insert Berhasil";
				$_SESSION['type'] = "primary";	
			} else {
	    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		header("location:index.php");	
}

else
	echo "error lek";
	mysqli_close($conn);
	


?>