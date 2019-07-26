<?php
include 'header.php';
include 'koneksi.php';

if(isset ($_POST['submit'])){
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $total_transaksi = $_POST['total_transaksi'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_produk = $_POST['id_produk'];

    $query = mysqli_query ($db, "INSERT INTO transaksi SET tanggal_transaksi = '$tanggal_transaksi',
                                                            total_transaksi = '$total_transaksi',
                                                            id_pelanggan = '$id_pelanggan',
                                                            id_produk = '$id_produk'");
    if($query){
        echo "
            <script>
                alert ('tambah data transaksi berhasil');
                document.location.href = 'transaksi.php';
            </script>
        ";
    }
}
?>

<div class="form-group">
    <div class="container">
        <form action="" method="POST">
            <br><br><br>
            <h3>FORM TAMBAH TRANSAKSI</h3><br>
            <div class="row">
                <div class="col-md-3">
                    <label>TANGGAL TRANSAKSI</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" type="date" name="tanggal_transaksi">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>TOTAL TRANSAKSI</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="total_transaksi" id="">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>PELANGGAN</label>
                </div>
                <div class="col-md-5">
                    <select class="form-control" name="id_pelanggan">
                        <?php
                            $pelanggan = mysqli_query($db, "SELECT * FROM pelanggan");
                            foreach($pelanggan as $list_pelanggan){
                                echo '<option value="'.$list_pelanggan['id_pelanggan'].'">'.$list_pelanggan['nama_pelanggan'].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>PRODUK</label>        
                </div>
                <div class="col-md-5">
                    <select class="form-control" name="id_produk">
                        <?php
                            $produk = mysqli_query ($db, "SELECT * FROM produk");
                            foreach($produk as $list_produk){
                                echo '<option value="'.$list_produk['id_produk'].'">'.$list_produk['nama_produk'].'</option>';
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
                    <input class="btn btn-primary" type="submit" name="submit" id="" value="SIMPAN TRANSAKSI">
                </div>
            </div>
        </form>
    </div>
</div>