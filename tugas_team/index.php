<html>
    <head>
        <title>tabel siswa</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <style rel="stylesheet">
            .container {
                padding-top : 20px;
            }
        </style>
    </head>
    <body>
        <?php session_start() ?>
        <div class="container">

            <h2 class="text-center">Tugas Team</h2>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Produk
            </button> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_merk">
                Tambah Merk
            </button> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_kategori">
                Tambah Kategori
            </button>
            <br><br>
            <!-- Modal Produk -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="tambah.php" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input class="form-control" type="text" name="nama_produk" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input class="form-control" type="number" name="jumlah" placeholder="Jumlah" min="0" max="1500000000">
                </div>
                
                    <?php
                        echo "<div class='form-group'>
                        <label>Nama Merk</label>
                        <select name='merk' class='form-control' >";

                        include('koneksi.php');
                        $query = "SELECT * FROM merk";
                        $result = mysqli_query($conn, $query);
                        while ( $row = mysqli_fetch_array($result)) {
                           echo "<option value='$row[0]'>".ucwords($row[1])."</option>";
                        }
                        
                        echo "   </select>
                        </div>";

                        echo "<div class='form-group'>
                        <label>Nama Kategori</label>
                        <select name='nama_kategori' class='form-control' >";

                        $query = "SELECT * from kategori_produk";
                        $result = mysqli_query($conn, $query);
                        while ( $row = mysqli_fetch_array($result)) {
                            echo "<option value='$row[0]'>".ucwords($row[1])."</option>";
                        }
                        
                        echo "   </select>
                        </div>";
                    ?>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" name="button" value="tambah produk">Simpan</button>
                </div>
                </div>
            </div>
            </form>
            </div>

             <!-- Modal Merk-->
            <div class="modal fade" id="tambah_merk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="tambah.php" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Merk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                    <div class="form-group">
                        <label>Nama Merk</label>
                        <input class="form-control" type="text" name="nama_merk" placeholder="Nama Merk">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                   <button type="submit" class="btn btn-primary" name="button" value="tambah merk">Simpan</button>
                </div>
                </div>
            </div>
            </form>
            </div>

             <!-- Modal Kategori-->
            <div class="modal fade" id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="tambah.php" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input class="form-control" type="text" name="nama_kategori" placeholder="Nama Kategori">
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                   <button type="submit" class="btn btn-primary" name="button" value="tambah kategori">Simpan</button>
                </div>
                </div>
            </div>
            </form>
            </div>

            <!-- Modal Produk Data Update-->
            <div class="modal fade" id="update_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="update.php" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                     <div class="hasil-data-produk"></div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                   <button type="submit" class="btn btn-primary" name="button" value="update produk">Simpan</button>
                </div>
                </div>
            </div>
            </form>
            </div>

            <!-- Modal Merk Data Update-->
            <div class="modal fade" id="update_merk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="update.php" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Merk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                     <div class="hasil-data-merk"></div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                   <button type="submit" class="btn btn-primary" name="button" value="update merk">Simpan</button>
                </div>
                </div>
            </div>
            </form>
            </div>
           
            <!-- Modal Kategori Data Update-->
            <div class="modal fade" id="update_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="update.php" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                     <div class="hasil-data-kategori"></div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                   <button type="submit" class="btn btn-primary" name="button" value="update kategori">Simpan</button>
                </div>
                </div>
            </div>
            </form>
            </div>
            <div class="row">
            <?php


                if(isset($_SESSION['pesan'])){
                    echo "<div class='row'>
                       <div class='col-md-12'>
                           <div class='alert alert-dismissible alert-".$_SESSION['type']."'>
                             <button type='button' class='close' data-dismiss='alert'>×</button>
                             <strong>".$_SESSION['pesan']."
                             </strong>
                           </div>
                      </div>
                   </div>";
                }                
                unset($_SESSION['pesan']);
            ?>
            </div>


            
            <h4 class="text-center">Produk</h4>
            <div class="row">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>Id Produk</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Nama Merk</th>
                    <th>Nama Kategori</th>
                    <th>Pilihan</th>
                </tr>
                </thead>
                <!-- datanya disini -->
                <?php
                   
                   include('koneksi.php');

                    $sql = "SELECT produk.id_produk, produk.nama_produk, produk.jumlah, merk.nama_merk, kategori_produk.nama_kategori 
                            FROM produk, merk, kategori_produk WHERE produk.id_merk = merk.id_merk AND produk.id_kategori = kategori_produk.id_kategori ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo    "<tr>
                                        <td>" . $row["id_produk"]. "</td>
                                        <td>" . $row["nama_produk"]. "</td>
                                        <td>" . $row["jumlah"]. "</td>
                                        <td>" . $row["nama_merk"]. "</td>
                                        <td>" . $row["nama_kategori"]. "</td>
                                        <td>
                                            <a class='btn btn-danger' href='hapus.php?id_button=1&id_produk=".$row["id_produk"]."'>hapus</a>
                                            <a class='btn btn-primary' href='#update_produk' class='btn btn-default btn-small' data-toggle='modal' data-id=".$row['id_produk'].">Edit</a>
                                        </td>
                                     </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
            </table> 
            </div>
            <div class="row">
            <div class="col-md-6">
            <h4 class="text-center">Merk</h4>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>Id Merk</th>
                    <th>Nama Merk</th>
                    <th>Pilihan</th>
                </tr>
               </thead>
                <!-- datanya disini -->
                <?php
                   
                   include('koneksi.php');

                    $sql = "SELECT id_merk,nama_merk FROM merk";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo    "<tr>
                                        <td>" . $row["id_merk"]. "</td>
                                        <td>" . $row["nama_merk"]. "</td>
                                        <td>
                                            <a class='btn btn-danger' href='hapus.php?id_button=2&id_merk=".$row["id_merk"]."'>hapus</a>
                                            <a class='btn btn-primary' href='#update_merk' class='btn btn-default btn-small' data-toggle='modal' data-id=".$row['id_merk'].">Edit</a>
                                        </td>
                                     </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
            </table> 
            </div>
             <div class="col-md-6">
            <h4 class="text-center">Kategori</h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <thead class="thead-dark">
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Pilihan</th>
                </tr>
                </thead>
                <!-- datanya disini -->
                <?php

                    include('koneksi.php');
                    $sql = "SELECT id_kategori, nama_kategori FROM kategori_produk";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo    "<tr>
                                        <td>" . $row["id_kategori"]. "</td>
                                        <td>" . $row["nama_kategori"]. "</td>
                                        <td>
                                            <a class='btn btn-danger' href='hapus.php?id_button=3&id_kategori=".$row["id_kategori"]."'>hapus</a>
                                            <a class='btn btn-primary' href='#update_kategori' class='btn btn-default btn-small' data-toggle='modal' data-id=".$row['id_kategori'].">Edit</a>
                                        </td>
                                     </tr>";

                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
            </table>
        </div>
            </div>
        </div>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

        $('#update_produk').on('show.bs.modal', function (e) {

            var idx = $(e.relatedTarget).data('id');

            //menggunakan fungsi ajax untuk pengambilan data

            $.ajax({

                type : 'post',

                url : 'detail1.php',

                data :  'idx='+ idx,

                success : function(data){

                $('.hasil-data-produk').html(data);//menampilkan data ke dalam modal

                }

            });

         });

    });
        
    $(document).ready(function(){

        $('#update_merk').on('show.bs.modal', function (e) {

            var idx = $(e.relatedTarget).data('id');

            //menggunakan fungsi ajax untuk pengambilan data

            $.ajax({

                type : 'post',

                url : 'detail2.php',

                data :  'idx='+ idx,

                success : function(data){

                $('.hasil-data-merk').html(data);//menampilkan data ke dalam modal

                }

            });

         });

    });

    $(document).ready(function(){

        $('#update_kategori').on('show.bs.modal', function (e) {

            var idx = $(e.relatedTarget).data('id');

            //menggunakan fungsi ajax untuk pengambilan data

            $.ajax({

                type : 'post',

                url : 'detail3.php',

                data :  'idx='+ idx,

                success : function(data){

                $('.hasil-data-kategori').html(data);//menampilkan data ke dalam modal

                }

            });

         });

    });
    </script>
</body>
</html>