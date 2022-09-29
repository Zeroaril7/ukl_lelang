<?php

include 'connect.php';


if ($_POST['level']=='masyarakat'){
    $nama=$_POST['nama'];
    $telp=$_POST['telp'];
    $user=$_POST['username'];
    $pass=md5($_POST['password']);
    
    $query = "INSERT INTO masyarakat (nama, username, password, tlp) VALUES ('$nama', '$user', '$pass','$telp')";
    
    $hasil = mysqli_query($connect, $query);
    
    $num = mysqli_affected_rows($connect);
    
    if ($num>0) {
        echo '<script>alert("Registrasi Berhasil");location.href="registrasi.php";</script>';
    } else {
        echo '<script>alert("Registrasi Gagal");location.href="registrasi.php"</script>';
    }
} else{
    $nama=$_POST['nama'];
    $user=$_POST['username'];
    $pass=md5($_POST['password']);
    $level=$_POST['level'];
    
    $query = "INSERT INTO petugas (nama_petugas, username, password, level) VALUES ('$nama', '$user', '$pass','$level')";
    
    $hasil = mysqli_query($connect, $query);
    
    $num = mysqli_affected_rows($connect);
    
    if ($num>0) {
        echo '<script>alert("Registrasi Berhasil");location.href="registrasi.php";</script>';
    } else {
        echo '<script>alert("Registrasi Gagal");location.href="registrasi.php"</script>';
    }
} 


?>