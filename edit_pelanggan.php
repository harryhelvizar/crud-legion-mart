<?php
include 'header.php';
include 'koneksi.php';

$id_pelanggan = $_GET['id_pelanggan'];

$query = mysqli_query($db, "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");

$pelanggan = mysqli_fetch_all($query, MYSQLI_ASSOC);

if(isset ($_POST['submit'])){

    $id_pelanggan   = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat         = $_POST['alamat'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    $edit_pel = mysqli_query ($db, "UPDATE pelanggan SET nama_pelanggan = '$nama_pelanggan',
                                                    alamat = '$alamat',
                                                    jenis_kelamin = '$jenis_kelamin',
                                                    username = '$username',
                                                    password = '$password'
                                                    WHERE id_pelanggan = '$id_pelanggan'");

    if($edit_pel){
        echo"
            <script>
                alert ('berhasil edit data pelanggan');
                document.location.href = 'pelanggan.php';
            </script>
        ";
    }


}


?>

<form action="" method="POST">
    <div class="container">
    <br><br><br>
    <h3>FROM EDIT PELANGGAN</h3>
    <br>
        <div class="form-group">
            <input type="hidden" name="id_pelanggan" value="<?= $pelanggan[0]['id_pelanggan']?>">
            <div class="row">
                <div class="col-md-3">
                    <label>NAMA PELANGGAN</label>
                </div>
                <div class="col-md-7">
                    <input type="text" name="nama_pelanggan" id="" class="form-control" placeholder="input nama pelanggan" value="<?= $pelanggan[0]['nama_pelanggan']?>">
                </div>
            </div>
            <br>    
            <div class="row">
                <div class="col-md-3">
                    <label>ALAMAT PELANGGAN</label>
                </div>
                <div class="col-md-7">
                    <textarea class="form-control" name="alamat" id="" cols="10" rows="10" placeholder="input alamat"><?= $pelanggan[0]['alamat']?></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>JENIS KELAMIN</label>
                </div>
                <div class="col-md-7">
                    <select class="form-control" name="jenis_kelamin" id="">
                        <option value="L" <?php echo ($pelanggan[0]['jenis_kelamin'] == "L" ) ? "selected" : "" ;?>>laki - laki</option>
                        <option value="P" <?php echo ($pelanggan[0]['jenis_kelamin'] == "P" ) ? "selected" : "" ;?>>perempuan</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>USERNAME</label>
                </div>
                <div class="col-md-7">
                    <input type="text" name="username" id="" class="form-control" placeholder="input username pelanggan" value="<?= $pelanggan[0]['username']?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>PASSWORD</label>
                </div>
                <div class="col-md-7">
                    <input type="password" name="password" id="" class="form-control" placeholder="input password pelanggan" value="<?= $pelanggan[0]['password']?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col">
                    <input class="btn btn-success" type="submit" name="submit" id="" value="SIMPAN PELANGGAN">
                </div>
            </div><br><br>

        </div>
    </div>
</form>