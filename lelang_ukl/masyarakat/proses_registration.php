<?php

include '../connect.php';

$nama=$_POST['nama'];
$telp=$_POST['telp'];
$user=$_POST['username'];
$pass=md5($_POST['password']);

$query = "INSERT INTO masyarakat (nama, username, password, tlp) VALUES ('$nama', '$user', '$pass','$telp')";

$hasil = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if ($num>0) {
    echo '<script>alert("Registrasi Berhasil");location.href="login.php";</script>';
} else {
    echo '<script>alert("Registrasi Gagal");location.href="registration.php"</script>';
}

?>