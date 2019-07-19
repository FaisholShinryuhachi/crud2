<?php

    include "koneksi.php";

    if($_POST['idx']) {

        $id = $_POST['idx'];      

        $sql = "SELECT * FROM merk WHERE id_merk = $id";

        $result = mysqli_query( $conn, $sql);

        while ($row = mysqli_fetch_array($result)){

        ?>  <input type="hidden" name="id_merk" value="<?php echo $row['id_merk']; ?>">
            <div class="form-group">
                <label>Nama Merk</label>
                <input class="form-control" type="text" name="nama_merk" value="<?php echo $row['nama_merk']; ?>">
            </div>
        <?php } }

?>