<?php
include 'header.php';
include 'koneksi.php';

$query = mysqli_query ($db, "SELECT * FROM merk");
$merk = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (isset ($_GET['hapus'])){
    $id_merk = $_GET['hapus'];

    // buat query

    $query = mysqli_query ($db, "DELETE FROM merk WHERE id_merk = '$id_merk'");

    if($query){
        echo "
            <script>
                alert ('merk berhasil di hapus');
                document.location.href = 'merk.php';
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
    <title>merk</title>
</head>
<body>
    <br><br><br>
    <center>
    <h3>TABEL MERK</h3>
    <a class="btn btn-primary" href="add_merk.php">tambah merk</a><br><br>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th class="text-center">NOMOR</th>
                    <th class="text-center">ID MERK</th>
                    <th>NAMA MERK</th>
                    <th class="text-center">PILIHAN</th>
                </tr>
                <?php $i=1; ?>
                <?php foreach ($merk as $form) :?>
                <tr>
                    <td class="text-center"><?= $i; ?></td>
                    <td class="text-center"><?= $form['id_merk']?></td>
                    <td><?= $form['nama_merk']?></td>
                    <td class="text-center">
                    <form action="edit_merk.php" method="POST">
                        <a class="btn btn-warning" href="edit_merk.php?id_merk=<?= $form['id_merk'];?>">edit</a> 
                        <a class="btn btn-danger" href="merk.php?hapus=<?= $form['id_merk'];?>">x</a>
                    </form>
                    </td>
                </tr>
                <?php $i++; ?>    
                <?php endforeach; ?>    
            </table>
        </div>
    </center>
</body>
</html>