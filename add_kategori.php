<?php
include 'koneksi.php';
include 'header.php';

if(isset ($_POST['submit'])){
    $nama_kategori = $_POST['nama_kategori'];
    $kategori = mysqli_query($db, "INSERT INTO kategori_produk SET nama_kategori = '$nama_kategori'");
    if($kategori){
        echo "
            <script>
                document.location.href = 'kategori.php';
            </script>
        ";
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add kategori</title>
</head>
<body><br><br><br>
    <div class="container">
        <h3>FORM TAMBAH KATEGORI PRODUK</h3>
        <br>
        <form action="" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label>Kategori produk</label>             
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="nama_kategori" placeholder="input kategori produk">                
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col">
                        <input class="btn btn-primary" type="submit" name="submit" value="Simpan Kategori">            
                    </div>
                </div>    
            </div>
            <br>
        </form>
    </div>    
</body>
</html>