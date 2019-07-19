<?php

include('koneksi.php');

if ($_POST['button'] == "update produk") {
	$sql = "UPDATE produk SET  
				nama_produk = '".$_POST['nama_produk']."', 
				jumlah = '".$_POST['jumlah']."', 
				id_merk = '".$_POST['merk']."', 
				id_kategori = '".$_POST['nama_kategori']."' 
				WHERE id_produk = '".$_POST['id_produk']."'
			";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}

elseif ($_POST['button'] == "update merk") {
	$sql = "UPDATE merk SET  
				nama_merk = '".$_POST['nama_merk']."' 
				WHERE id_merk = '".$_POST['id_merk']."'
			";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}

elseif ($_POST['button'] == "update kategori") {
	$sql = "UPDATE kategori_produk SET  
				nama_kategori = '".$_POST['nama_kategori']."' 
				WHERE id_kategori = '".$_POST['id_kategori']."'
			";

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