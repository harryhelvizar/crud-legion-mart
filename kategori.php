<?php
include'header.php';
include'koneksi.php';

// membuat query untuk select data dari tabel database  
    $query = mysqli_query($db, "SELECT * FROM kategori_produk");

    // mengeluarkan isi tabel query

    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
    if (isset ($_GET['hapus'])){
        $id_kategori = $_GET['hapus'];

        $kategori = mysqli_query ($db, "DELETE FROM kategori_produk WHERE id_kategori = '$id_kategori'");

        if($kategori){
            echo "
                <script>
                    alert ('kategori berhasil di hapus');
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
    <title>kategori</title>
</head>
<body>
    <br><br><br>
    <center>
        <h3>TABEL KATEGORI PRODUK</h3>
        <a class="btn btn-primary" href="add_kategori.php">tambah kategori</a><br><br>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th class="text-center">NOMOR</th>
                    <th class="text-center">ID KATEGORI PRODUK</th>
                    <th>NAMA KATEGORI PRODUK</th>
                    <th class="text-center">PILIHAN</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($results as $row) :?>
                    <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td class="text-center"><?= $row['id_kategori']; ?></td>
                        <td><?= $row['nama_kategori']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="edit_kategori.php?id_kategori=<?= $row['id_kategori']; ?>">edit</a> 
                            <a class="btn btn-danger" href="kategori.php?hapus=<?= $row['id_kategori']; ?>">x</a>
                        </td>
                    </tr>
                <?php $i ++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </center>
</body>
</html>

