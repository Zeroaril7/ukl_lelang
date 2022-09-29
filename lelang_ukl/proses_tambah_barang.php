<?php

include 'connect.php';

session_start();

$namaBarang=$_POST['nama_barang'];
$date=$_POST['tgl_daftar'];
$hargaAwal=$_POST['harga_awal'];
$deskripsi=($_POST['deskripsi']);

$query = "INSERT INTO barang (nama_barang, tgl_daftar, harga_awal, deskripsi) VALUES ('$namaBarang', '$date', $hargaAwal,'$deskripsi')";

$hasil = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if ($num>0) {

    $query1 = "SELECT * FROM barang ORDER BY id DESC LIMIT 1";
    $hasil1 = mysqli_query($connect, $query1);
    $data_barang=mysqli_fetch_assoc($hasil1);

    $query2 = "SELECT * FROM petugas WHERE nama_petugas = '".$_SESSION['user']."'";
    $hasil2 = mysqli_query($connect, $query2);
    $data_petugas=mysqli_fetch_assoc($hasil2);

    $query3 = "INSERT INTO lelang (id_barang, tgl_lelang, harga_akhir, id_petugas, status) VALUES ('".$data_barang['id']."','".$date."','".$hargaAwal."','".$data_petugas['id']."', 'dilelang')";
    $hasil3 = mysqli_query($connect, $query3);

    $query4 = "SELECT * FROM lelang ORDER BY id DESC LIMIT 1";
    $hasil4 = mysqli_query($connect, $query4);
    $data_pelelangan = mysqli_fetch_assoc($hasil4);
    
    $query_history = "SELECT * FROM history_lelang ORDER BY id DESC LIMIT 1";
    $hasil_history = mysqli_query($connect, $query_history);
    $id_history=mysqli_fetch_assoc($hasil_history);

    $query5 = "INSERT INTO history_lelang (id, id_lelang, id_barang, penawaran_harga) VALUES (".($id_history['id']+1).", '".$data_pelelangan['id']."','".$data_barang['id']."','".$hargaAwal."')";
    $hasil5 = mysqli_query($connect, $query5);

    echo '<script>alert("Registrasi Barang Berhasil");location.href="tambah_barang.php";</script>';
} else {
    echo '<script>alert("Registrasi Barang Gagal");location.href="tambah_barang.php"</script>';
}

?>