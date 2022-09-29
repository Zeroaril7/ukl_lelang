<?php

include 'nav.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Muhamad Nauval Azhar">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="This is a login page template based on Bootstrap 5">
  <title>Tambah Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-sm-10" style="margin-top: 10rem">
          <div class="card shadow-lg">
            <div class="card-body pt-5 ps-5 pe-5 pb-4">
              <h1 class="fs-4 card-title fw-bold mb-5 text-center">Registrasi Barang</h1>
                <form action="proses_tambah_barang.php" method="POST">
                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama Barang</label>
                        <div class="col-md-8">
                            <input type="text" id="nama_barang" class="form-control" name="nama_barang" required>
                        </div> 
                    </div>
                    <div class="form-group row mb-3">
                        <label for="telepon" class="col-md-4 col-form-label text-md-right">Tanggal Daftar</label>
                        <div class="col-md-8">
                            <input type="date" id="tgl_daftar" class="form-control" name="tgl_daftar" required>
                        </div> 
                    </div>

                    <div class="form-group row mb-3">
                        <label for="username" class="col-md-4 col-form-label text-md-right">Harga Awal</label>
                        <div class="col-md-8">
                            <input type="number" id="harga_awal" class="form-control" name="harga_awal" required>
                        </div> 
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Deskripsi</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                        </div> 
                    </div>
                    <div class="d-flex align-items-center justify-content-sm-center">
                        <button type="submit" class="btn btn-primary col-12 mt-2" name="btnRegist">
                            Register
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>