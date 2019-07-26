<?php
include 'header.php';
include 'koneksi.php';

$id_kategori = $_GET['id_kategori'];

$query = mysqli_query ($db, "SELECT * FROM kategori_produk WHERE id_kategori = '$id_kategori' ");

$kategori = mysqli_fetch_all ($query, MYSQLI_ASSOC);

if(isset ($_POST['submit'])){
    $nama_kategori = $_POST['nama_kategori'];

    $edit_kategori = mysqli_query ($db, "UPDATE kategori_produk SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori' ");

    if($edit_kategori){
        echo "
            <script>
                alert ('kategori berhasil di edit!!!');
                document.location.href = 'kategori.php';
            </script>
        ";
    }
}


?>

    <div class="container"><br><br><br>
        <h3>FORM EDIT KATEGORI PRODUK</h3>
        <br>
        <form action="" method="POST">
        <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label>id Kategori</label>             
                    </div>
                    <div class="col-md-6"> 
                        <input class="form-control" disabled type="text" name="nama_kategori" placeholder="input id kategori produk" value="<?= $kategori[0]['id_kategori']; ?>">                
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <label>Kategori produk</label>             
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="nama_kategori" placeholder="input kategori produk" value="<?= $kategori[0]['nama_kategori']; ?>">                
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col">
                        <input class="btn btn-primary" type="submit" name="submit" value="EDIT KATEGORI">          
                    </div>
                </div>    
            </div>
            <br>
        </div> 
        </form>
    </div>    