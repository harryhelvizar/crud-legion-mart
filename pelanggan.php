<?php
include 'header.php';
include 'koneksi.php';

$query = mysqli_query ($db, "SELECT * FROM pelanggan");

$pelanggan = mysqli_fetch_all($query, MYSQLI_ASSOC);

if(isset ($_GET['hapus'])){
    $id_pelanggan = $_GET['hapus'];

    $hapus = mysqli_query($db, "DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan");
    if($hapus){
        echo"
            <script>
                document.location.href = 'pelanggan.php';
            </script>
        ";
    }
}

?>
<br><br><br><br>
<!-- modal -->

<!-- Button trigger modal -->


<!-- akhir modal -->
    <center>
        <h3>FORM PELANGGAN</h3>
        <a class="btn btn-primary" href="add_pelanggan.php">TAMBAH PELANGGAN</a><br><br>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th class="text-center">NOMOR</th>
                    <th class="text-center">ID PELANGGAN</th>
                    <th>NAMA PELANGGAN</th>
                    <th>ALAMAT</th>
                    <th class="text-center">JENIS KELAMIN</th>
                    <th class="text-center">USERNAME</th>
                    <th class="text-center">PASSWORD</th>
                    <th class="text-center">PILIHAN</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($pelanggan as $row) :?>
                    <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td class="text-center"><?= $row['id_pelanggan']; ?></td>
                        <td><?= $row['nama_pelanggan']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td class="text-center"><?= $row['jenis_kelamin']; ?></td>
                        <td class="text-center"><?= $row['username']; ?></td>
                        <td class="text-center"><?= $row['password']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="edit_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan']; ?>">edit</a>
                            <a class="btn btn-danger" href="pelanggan.php?hapus=<?= $row['id_pelanggan'];?>">x</a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>    
    </center>