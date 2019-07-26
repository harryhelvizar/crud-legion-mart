<?php
    include 'header.php';
    include 'koneksi.php';

    // membuat query


    $query = mysqli_query($db, "SELECT * FROM produk INNER JOIN kategori_produk ON produk.id_kategori=kategori_produk.id_kategori INNER JOIN merk ON produk.id_merk=merk.id_merk");
    // "SELECT * FROM `produk` INNER JOIN merk ON produk.id_merk=merk.id_merk OR "SELECT * FROM produk INNER JOIN kategori_produk ON produk.id_kategori=kategori_produk=id_produk");
    $produkk = mysqli_fetch_all($query, MYSQLI_ASSOC);

    // $produkkk = mysqli_query ($db, "SELECT * FROM produk ");

    if(isset($_GET['hapus'])){
        $id_produk = $_GET['hapus'];

        $hapus = mysqli_query ($db, "DELETE FROM produk WHERE id_produk = '$id_produk'");

        if ($hapus){
            echo "
                <script>
                    alert ('data produk di hapus');
                    document.location.href = 'produk.php';
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
    <title>produk</title>
</head>
<body>
    <br><br><br>
    <center>
        <h3>TABEL PRODUK</h3>
        <a class="btn btn-primary" href="add_produk.php">tambah produk</a><br><br>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>NOMOR</th>
                    <th>ID PRODUK</th>
                    <th>NAMA PRODUK</th>
                    <th>WARNA PRODUK</th>
                    <th>JUMLAH</th>
                    <th>MERK</th>
                    <th>KATEGORI</th>
                    <th>PILIHAN</th>
                </tr>
                <?php $i=1; ?>
                <?php foreach($produkk as $row) :?>
                    <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td class="text-center"><?= $row['id_produk'] ?></td>
                        <td><?= $row['nama_produk'] ?></td>
                        <td><?= $row['warna'] ?></td>
                        <td class="text-center"><?= $row['jumlah'] ?></td>
                        <td><?= $row['nama_merk'] ?></td>
                        <td><?= $row['nama_kategori'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit_produk.php?id_produk=<?= $row['id_produk']; ?>">EDIT</a>
                            <a class="btn btn-danger" href="produk.php?hapus=<?= $row['id_produk']; ?>">x</a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </center>
</body>
</html>