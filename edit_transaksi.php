<?php
include 'header.php';
include 'koneksi.php';
    
    $id_transaksi = $_GET['id_transaksi'];
    $query = mysqli_query($db, "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'");
    $tran = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(isset ($_POST['submit'])){
        $tgl_transaksi = $_POST['tanggal_transaksi'];
        $tot_transaksi = $_POST['total_transaksi'];
        $pelanggan = $_POST['id_pelanggan'];
        $produk = $_POST['id_produk'];

        $transaksi = mysqli_query($db, "UPDATE transaksi SET tanggal_transaksi = '$tgl_transaksi',
                                                                    total_transaksi = '$tot_transaksi',
                                                                    id_pelanggan = '$pelanggan',
                                                                    id_produk = '$produk'
                                                                    WHERE id_transaksi = '$id_transaksi' ");
        
        if($transaksi){
            echo"
                <script>
                    alert ('berhasil edit!!');
                    document.location.href = 'transaksi.php';
                </script>
            ";
        }
    }

?>

<div class="form-group">
    <form action="" method="POST">
        <div class="container">
            <br><br><br>
            <h3>FORM EDIT TRANSAKSI</h3><br>

            <div class="row">
                <div class="col-md-3">
                    <label>ID TRANSAKSI</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" disabled type="text" name="id_transaksi" value="<?= $tran[0]['id_transaksi']; ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>TANGGAL TRANSAKSI</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" type="date" name="tanggal_transaksi" value="<?= $tran[0]['tanggal_transaksi']; ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>TOTAL TRANSAKSI</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="total_transaksi" value="<?= $tran[0]['total_transaksi']; ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>PELANGGAN</label>
                </div>
                <div class="col-md-5">
                    <select class="form-control" name="id_pelanggan" id="">
                        <?php
                            $pelanggan = $tran[0]['id_pelanggan'];
                            $pelanggan1 = mysqli_query($db, "SELECT * FROM pelanggan");
                            foreach($pelanggan1 as $list_pelanggan){
                                if($pelanggan == $list_pelanggan['id_pelanggan']){
                                    echo'<option value="'.$list_pelanggan['id_pelanggan'].'"selected>'.$list_pelanggan['nama_pelanggan'].'</option>';
                                }else{
                                    echo'<option value="'.$list_pelanggan['id_pelanggan'].'">'.$list_pelanggan['nama_pelanggan'].'</option>';
                                }
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
                        $produk = $tran[0]['id_produk'];
                        $produk1 = mysqli_query ($db, "SELECT * FROM produk");
                        foreach($produk1 as $list_produk){
                            if($produk == $list_produk['id_produk']){
                                echo'<option value="'.$list_produk['id_produk'].'"selected>'.$list_produk['nama_produk'].'</option>';
                            }else{
                                echo'<option value="'.$list_produk['id_produk'].'">'.$list_produk['nama_produk'].'</option>';
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
                    <input class="btn btn-primary" type="submit" name="submit" id="" value="edit transaksi">
                </div>
            </div>
        </div>
    </form>
</div>
