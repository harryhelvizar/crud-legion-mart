<?php
include 'koneksi.php';
include 'header.php';

$id_produk = $_GET['id_produk'];



$query = mysqli_query ($db, "SELECT * FROM produk INNER JOIN kategori_produk ON produk.id_kategori=kategori_produk.id_kategori INNER JOIN merk ON produk.id_merk=merk.id_merk WHERE produk.id_produk = '$id_produk' ");
$produk = mysqli_fetch_all ($query, MYSQLI_ASSOC);


if (isset ($_POST['submit'])){

    $nama_produk = $_POST['nama_produk'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];
    $id_merk = $_POST['id_merk'];
    $id_kategori = $_POST['id_kategori'];

    $edit_produk = mysqli_query ($db, "UPDATE produk SET nama_produk = '$nama_produk',
                                                        warna = '$warna',
                                                        jumlah = '$jumlah',
                                                        id_merk = '$id_merk',
                                                        id_kategori = '$id_kategori'
                                                        WHERE id_produk = '$id_produk' ");
    if ($edit_produk){
        echo "
            <script>
                alert ('produk berhasil dirubah!!!');
                document.location.href = 'produk.php';
            </script>
        ";
    }
}


$warna = array ("merah", "hijau", "hitam", "putih", "silver", "ungu", "biru");


?>

<div class="container">
    <br>
    <h3>EDIT PRODUK</h3>
    
    <br>
    <div class="form-group">
        <form action="" method="POST">

            <div class="row">
                    <div class="col-md-3">
                        <label>ID PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <input disabled class="form-control" type="text" name="id_produk" value="<?= $produk[0]['id_produk'] ?>">
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3">
                        <label>NAMA PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="nama_produk" value="<?= $produk[0]['nama_produk'] ?>">
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3">
                        <label>WARNA PRODUK</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="warna">
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
                        <input class="form-control" type="number" name="jumlah" value="<?= $produk[0]['jumlah'] ?>">
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
                                $merk1 = $produk[0]['id_merk'];
                                   
                                $merk = mysqli_query($db, "SELECT * FROM merk");
                                foreach ($merk as $merk_list) {
                                    if($merk1 == $merk_list['id_merk']){
                                        echo '<option value="'.$merk_list['id_merk'].'" selected>'.$merk_list['nama_merk'].'</option>';
                                    }else{
                                        echo '<option value="'.$merk_list['id_merk'].'">'.$merk_list['nama_merk'].'</option>';
                                    }
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
                                $kategori1 = $produk[0]['id_kategori'];
                                   
                                $kategori = mysqli_query($db, "SELECT * FROM kategori_produk");
                                foreach ($kategori as $kategori_list) {
                                    if($kategori1 == $kategori_list['id_kategori']){
                                        echo '<option value="'.$kategori_list['id_kategori'].'" selected>'.$kategori_list['nama_kategori'].'</option>';
                                    }else{
                                        echo '<option value="'.$kategori_list['id_kategori'].'">'.$kategori_list['nama_kategori'].'</option>';
                                    }
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
                        <input class="btn btn-success" type="submit" name="submit" value="EDIT PRODUK">
                    </div>
            </div>

        </form>
    </div>
</div>