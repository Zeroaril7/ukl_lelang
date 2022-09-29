<?php
    session_start();

if($_SESSION['akses']=="masyarakat"){
    session_destroy();
    
    header('location: masyarakat/login.php');
} else {
    session_destroy();
    
    header('location: karyawan/login.php');
}


?>