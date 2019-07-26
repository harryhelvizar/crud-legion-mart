<?php

include 'header.php';
include 'koneksi.php';

if (isset ($_POST['submit'])){
        
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat         = $_POST['alamat'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    $pelanggan = mysqli_query($db, "INSERT INTO pelanggan SET nama_pelanggan = '$nama_pelanggan',
                                            alamat = '$alamat', jenis_kelamin = '$jenis_kelamin',
                                            username = '$username', password = '$password' ");
    if($pelanggan){
        echo "
            <script>
                alert ('data pelanggan berhasil ditambahkan');
                document.location.href = 'pelanggan.php';
            </script>
        ";
    }                                        
}

?>

<form action="" method="POST">
    <div class="container">
    <br><br><br>
    <h3>FROM TAMBAH PELANGGAN</h3>
    <br>
        <div class="form-group">

            <div class="row">
                <div class="col-md-3">
                    <label>NAMA PELANGGAN</label>
                </div>
                <div class="col-md-7">
                    <input type="text" name="nama_pelanggan" id="" class="form-control" placeholder="input nama pelanggan">
                </div>
            </div>
            <br>    
            <div class="row">
                <div class="col-md-3">
                    <label>ALAMAT PELANGGAN</label>
                </div>
                <div class="col-md-7">
                    <textarea class="form-control" name="alamat" id="" cols="10" rows="10" placeholder="input alamat"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>JENIS KELAMIN</label>
                </div>
                <div class="col-md-7">
                    <select class="form-control" name="jenis_kelamin" id="">
                        <option value="L">laki - laki</option>
                        <option value="P">perempuan</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>USERNAME</label>
                </div>
                <div class="col-md-7">
                    <input type="text" name="username" id="" class="form-control" placeholder="input username pelanggan">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>PASSWORD</label>
                </div>
                <div class="col-md-7">
                    <input type="password" name="password" id="" class="form-control" placeholder="input password pelanggan">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col">
                    <input class="btn btn-primary" type="submit" name="submit" id="" value="SIMPAN PELANGGAN">
                </div>
            </div><br><br>

        </div>
    </div>
</form>