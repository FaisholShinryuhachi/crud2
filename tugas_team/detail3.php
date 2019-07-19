<?php

    include "koneksi.php";

    if($_POST['idx']) {

        $id = $_POST['idx'];      

        $sql = "SELECT * FROM kategori_produk WHERE id_kategori = $id";

        $result = mysqli_query( $conn, $sql);

        while ($row = mysqli_fetch_array($result)){

        ?>  <input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori']; ?>">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input class="form-control" type="text" name="nama_kategori" value="<?php echo $row['nama_kategori']; ?>">
            </div>
        <?php } }

?>


