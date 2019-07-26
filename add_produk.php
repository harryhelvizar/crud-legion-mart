<?php
include 'koneksi.php';
include 'header.php';

if(isset($_POST['submit'])){

    $nama_produk    = $_POST['nama_produk'];
    $warna          = $_POST['warna'];
    $jumlah         = $_POST['jumlah'];
    $id_merk        = $_POST['id_merk'];
    $id_kategori    = $_POST['id_kategori'];

    $produk = mysqli_query($db, "INSERT INTO produk SET nama_produk='$nama_produk', warna='$warna', 
                                    jumlah='$jumlah', id_merk='$id_merk', id_kategori='$id_kategori'");

    if($produk){
        echo"
            <script>
                alert ('berhasil menambah produk');
                document.location.href = 'produk.php';
            </script>
        ";
    }else{
        echo"
        <script>
            alert ('gagal menambah produk');
            document.location.href = 'add_produk.php';
        </script>
    ";
    }
}

        

    $warna = array ("merah", "hijau", "hitam", "putih", "silver", "ungu", "biru");

?>
<div class="container">
    <br><br><br>
    <h3>TAMBAH PRODUK</h3>
    <br>
    <div class="form-group">
        <form action="" method="POST">
            
            <div class="row">
                    <div class="col-md-3">
                        <label>NAMA PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="nama_produk">
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3">
                        <label>WARNA PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="warna" id="" >
                                <option>pilih warna</option>
                            <?php foreach ($warna as $key) :?>
                                <option><?= $key?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3">
                        <label>JUMLAH PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="number" name="jumlah">
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3">
                        <label>MERK PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="id_merk" placeholder="merk produk">
                            <?php 
                                $merk = mysqli_query($db, "SELECT * FROM merk");
                                foreach ($merk as $merk_list) {
                                    echo '<option value="'.$merk_list['id_merk'].'">'.$merk_list['nama_merk'].'</option>';
                                }
                            ?>    
                        </select>
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3">
                        <label>KATEGORI PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="id_kategori" id="" placeholder="kategori produk" >
                            <?php    
                                $kategori = mysqli_query($db, "SELECT * FROM kategori_produk");
                                foreach ($kategori as $kategori_list) {
                                    echo'<option value="'.$kategori_list['id_kategori'].'">'.$kategori_list['nama_kategori'].'</option>';
                                }
                            ?>    
                        </select>
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col">
                        <input class="btn btn-success" type="submit" name="submit" value="tambah data">
                    </div>
            </div>

        </form>
    </div>
</div>