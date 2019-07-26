<?php
include 'header.php';
include 'koneksi.php';

    $id_merk = $_GET['id_merk'];

    $query = mysqli_query ($db, "SELECT * FROM merk WHERE id_merk = '$id_merk'");

    $merk = mysqli_fetch_all ($query, MYSQLI_ASSOC);

    if(isset ($_POST['submit'])){
        
        $nama_merk = $_POST['nama_merk'];

        $edit_merk = mysqli_query ($db, "UPDATE merk SET nama_merk = '$nama_merk' WHERE id_merk = '$id_merk' ");

        if($edit_merk){
            echo "
                <script>
                    alert ('berhasil edit merk!!');
                    document.location.href = 'merk.php';
                </script>
            ";
        }
    }

?>

<div class="form-group">
    <div class="container">
        <form action="" method="POST">
            <br><br><br>
            <h3>FORM EDIT MERK</h3><br>
            <div class="row">
                <div class="col-md-3">
                    <label>ID MERK</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" disabled type="text" name="id_merk" value="<?= $merk[0]['id_merk']; ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>NAMA MERK</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="nama_merk" value="<?= $merk[0]['nama_merk']; ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col">
                    <input class="btn btn-primary" type="submit" name="submit" value="EDIT MERK">
                </div>
            </div>
        </form>
    </div>
</div>