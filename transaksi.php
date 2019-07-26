<?php
include 'header.php';
include 'koneksi.php';

if(isset($_GET['hapus'])){
    $id_transaksi = $_GET['hapus'];
    $transaksi_del = mysqli_query ($db, "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi' ");
    if($transaksi_del){
        echo "
            <script>
                alert ('berhasil hapus!!');
                document.location.href = 'transaksi.php';
            </script>
        ";
    }
}

    // $query = mysqli_query($db, "SELECT * FROM produk INNER JOIN kategori_produk ON produk.id_kategori=kategori_produk.id_kategori INNER JOIN merk ON produk.id_merk=merk.id_merk");
    $query = mysqli_query ($db, "SELECT * FROM transaksi INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan INNER JOIN produk ON transaksi.id_produk = produk.id_produk ");
    $results = mysqli_fetch_all ($query, MYSQLI_ASSOC);
?>
<center><br><br><br>
    <div class="container">
    <h3>FORM TAMBAH TRANSAKSI</h3> 
    <a class="btn btn-primary" href="add_transaksi.php">TAMBAH TRANSAKSI</a><br><br>
        <table class="table table-striped">
            <tr>
                <th>NOMOR</th>
                <th>ID TRANSAKSI</th>
                <th>TANGGAL TRANSAKSI</th>
                <th>TOTAL TRANSAKSI</th>
                <th>PELANGGAN</th>
                <th>PRODUK</th>
                <th>PILIHAN</th>
            </tr>
            <?php $i=1; ?>
            <?php foreach($results as $result) :?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $result['id_transaksi']; ?></td>
                    <td><?= $result['tanggal_transaksi']; ?></td>
                    <td><?= $result['total_transaksi']; ?></td>
                    <td><?= $result['nama_pelanggan']; ?></td>
                    <td><?= $result['nama_produk']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_transaksi.php?id_transaksi=<?= $result['id_transaksi']; ?>">edit</a>
                        <a class="btn btn-danger" href="transaksi.php?hapus=<?= $result['id_transaksi']; ?>">x</a>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    
</center>