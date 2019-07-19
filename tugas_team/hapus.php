<?php

session_start();
include('koneksi.php');

if ($_GET['id_button'] == "1") {
		$data = $_GET['id_produk'];
		$sql = "DELETE FROM produk WHERE id_produk = $data ";

		if (mysqli_query($conn, $sql)) {
    		$_SESSION['pesan'] = "Hapus Berhasil";
			$_SESSION['type'] = "primary";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		header("location:index.php");	

}

elseif ($_GET['id_button'] == "2") {
		$data = $_GET['id_merk'];
		$sql = "DELETE FROM merk WHERE id_merk = $data ";

		if (mysqli_query($conn, $sql)) {
    		$_SESSION['pesan'] = "Hapus Berhasil";
			$_SESSION['type'] = "primary";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		header("location:index.php");	

}

elseif ($_GET['id_button'] == "3") {

		$data = $_GET['id_kategori'];
		$sql = "DELETE FROM kategori_produk WHERE id_kategori = $data ";

		if (mysqli_query($conn, $sql)) {
    		$_SESSION['pesan'] = "Hapus Berhasil";
			$_SESSION['type'] = "primary";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		header("location:index.php");	

}

else
	echo "error lek";
	mysqli_close($conn);
	


?>