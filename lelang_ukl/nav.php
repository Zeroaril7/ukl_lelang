<?php 
session_start();
    if($_SESSION['status_login']!=true && $_SESSION['akses']=='masyarakat'){
      header('location: ../masyarakat/login.php');
    } elseif ($_SESSION['status_login']!=true) {
      header('location: ../karyawan/login.php');
    }  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary shadow sticky-top ">
    <div class="container-fluid ">
      <h1 class="navbar-brand ms-5 text-white pt-2">Hello, <?php echo $_SESSION['user'] ?></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav fs-5 ">
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="home.php">Home</a>
          </li>
          <?php
            if($_SESSION['akses']!="masyarakat"){
          ?>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="tambah_barang.php">Tambah Barang</a>
          </li>
          <?php
            }
          ?>
          <?php
            if($_SESSION['akses']=="masyarakat"){
          ?>
          <li class="nav-item me-5">
            <a class="nav-link text-white" href="lelang.php">Lelang</a>
          </li>
          <?php
            }
          ?>
          <?php
            if($_SESSION['akses']=="petugas"){
          ?>
          <li class="nav-item me-5">
            <a class="nav-link text-white"  href="status_lelang.php">Status Lelang</a>
          </li>
          <?php
            }
          ?>
          <?php
            if($_SESSION['akses']!="masyarakat"){
          ?>
          <li class="nav-item me-5">
            <a class="nav-link text-white"  href="laporan.php">Laporan</a>
          </li>
          <?php
            }
          ?>
          <?php
            if($_SESSION['akses']=="admin"){
          ?>
          <li class="nav-item me-5">
            <a class="nav-link text-white"  href="registrasi.php">Tambah User</a>
          </li>
          <?php
            }
          ?>
          <li class="nav-item me-5">
            <a class="nav-link text-white"  href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>