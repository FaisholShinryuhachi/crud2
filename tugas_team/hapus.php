<?php

include('koneksi.php');

if ($_GET['id_button'] == "1") {
		$data = $_GET['id_produk'];
		$sql = "DELETE FROM produk WHERE id_produk = $data ";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}

elseif ($_GET['id_button'] == "2") {
		$data = $_GET['id_merk'];
		$sql = "DELETE FROM merk WHERE id_merk = $data ";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}

elseif ($_GET['id_button'] == "3") {

		$data = $_GET['id_kategori'];
		$sql = "DELETE FROM kategori_produk WHERE id_kategori = $data ";

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