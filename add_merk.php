<?php
include 'header.php';
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama_merk = $_POST['nama_merk'];

    $merk = mysqli_query ($db, "INSERT INTO merk SET nama_merk = '$nama_merk'");

    if($merk){
        echo"
            <script>
                alert ('berhasil menambahkan!!');
                document.location.href= 'merk.php';
            </script>
        ";
    }
}
?>


<div class="form-group">
    <br><br><br>
    <form action="" method="POST">
        <div class="container">
        <h3>FORM TAMBAH MERK</h3><br>
            <div class="row">
                <div class="col-md-3">
                    <label>NAMA MERK</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="nama_merk">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col">
                    <input class="btn btn-primary" type="submit" name="submit" value="simpan merk">
                </div>
            </div>
        </div>
    </form>
</div>  
