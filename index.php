<?php
include 'header.php';
include 'koneksi.php';
    // impor library phpspreadsheet
    // require 'vendor/autoload.php';

    // menggunakan teks
    // use PhpOffice\PhpSpreadsheet\Spreadsheet;
    // use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    // membuat objek baru dari kelas Spreadsheet
    // $spreadsheet = new Spreadsheet();

    // mendapatkan sheet aktif
    // $sheet = $spreadsheet->getActiveSheet();

    // memberikan nilai ke kolom A baris ke-1
    // $sheet->setCellValue('A2', 'pemrograman web!!');

    // menulis file spreadsheet
    // $writer = new Xlsx($spreadsheet);
    // $writer->save('hello world.xlsx');
?>
    <br><br>

<div class="container">
<br>
    <br><br>
    <div class="row">
        <div class="col-md-6 text-center">
            <h2>Judul Gambar</h2>
            <img class="img-fluid" src="assets/img/laptop.png" alt="">
        </div>

        <div class="col-md-6">
            <h2>Judul Keterangan</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam neque eligendi asperiores,
                dignissimos delectus laudantium maiores debitis dolorum deserunt.
                Cum perspiciatis fuga vitae nostrum hic magni? Eos expedita delectus minima.
            </p>
        </div>
    </div>
    <br>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">LEGION SHOP</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">lanjutkan belanja</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Judul Keterangan</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam neque eligendi asperiores,
                dignissimos delectus laudantium maiores debitis dolorum deserunt.
                Cum perspiciatis fuga vitae nostrum hic magni? Eos expedita delectus minima.
            </p>
        </div>

        <div class="col-md-6 text-center">
            <h2>Judul Gambar</h2>
            <img class="img-fluid" src="assets/img/isometric-office.gif" alt="">
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-md-6">
            <h3>CONTACT</h3><br>
            <b>EMAIL     : </b>
            <p>helvizar@gmail.com</p>

            <b>TELEPHONE : </b>
            <p>0823140000000</p>
        </div>
        <div class="col-md-6 bg-light">
            <h3 class="text-light">KRITIK DAN SARAN</h3><br>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="nama lengkap">
                </div>
            </form>

            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="email">
                </div>
            </form>

            <form>
                <div class="form-group">
                    <input type="number" class="form-control" name="nomor_handphone" placeholder="nomor handphone">
                </div>
            </form>

            <form>
                <div class="form-group">
                    <textarea class="form-control" name="komentar" id="" cols="30" rows="10" placeholder="komentar anda"></textarea>
                </div>
            </form>

            <form>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="button" value="kirim komentar">
                </div>
            </form>
            <br><br>
        </div>
    </div>
</div>