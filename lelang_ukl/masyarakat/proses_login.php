<?php

session_start();

include '../connect.php';

$user=$_POST['username'];
$pass=md5($_POST['password']);

$query= "SELECT * FROM masyarakat WHERE username='$user' AND password='$pass'";
$hasil = mysqli_query($connect, $query);
$num = mysqli_num_rows($hasil);
$data=mysqli_fetch_assoc($hasil);
$akses="masyarakat";

if ($num == 1) {
    $_SESSION['user']=$data['nama'];
    $_SESSION['akses']="masyarakat";
    $_SESSION['status_login']=true;
    echo '<script>alert("Login Berhasil");location.href="../home.php";</script>';
} else {
    echo '<script>alert("Username atau Password salah");location.href="login.php"</script>';
}

?>