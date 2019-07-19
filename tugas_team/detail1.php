<?php

    include "koneksi.php";

    if($_POST['idx']) {

        $id = $_POST['idx'];      

        $sql = "SELECT * FROM produk WHERE id_produk = $id";

        $result = mysqli_query( $conn, $sql);

        while ($row = mysqli_fetch_array($result)){

        ?>  <input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>">
            <div class="form-group">
                    <label>Nama Produk</label>
                    <input class="form-control" type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input class="form-control" type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>">
                </div>
                
                    <?php
                        echo "<div class='form-group'>
                        <label>Nama Merk</label>
                        <select name='merk' class='form-control' >";

                        include('koneksi.php');
                        $query = "SELECT * FROM merk";
                        $result = mysqli_query($conn, $query);
                        while ( $merk = mysqli_fetch_array($result)) {
                           
                            if($merk['id_merk'] == $row['id_merk'])
                                echo "<option selected='true' value='$merk[0]'>".ucwords($merk[1])."</option>";
                            else
                                echo "<option value='$merk[0]'>".ucwords($merk[1])."</option>";
                        }
                        
                        echo "   </select>
                        </div>";

                        echo "<div class='form-group'>
                        <label>Nama Kategori</label>
                        <select name='nama_kategori' class='form-control' >";

                        $query = "SELECT * from kategori_produk";
                        $result = mysqli_query($conn, $query);
                        while ( $kategori = mysqli_fetch_array($result)) {
                            if($kategori['id_kategori'] == $row['id_kategori'])
                                echo "<option selected='true' value='$kategori[0]'>".ucwords($kategori[1])."</option>";
                            else
                                echo "<option value='$kategori[0]'>".ucwords($kategori[1])."</option>";
                        }
                        
                        echo "   </select>
                        </div>";
                    
         } }

?>