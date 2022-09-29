<?php
    include 'nav.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3 class = "text-center mt-3 mb-5">History Lelang</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID LELANG</th>
                <th>NAMA BARANG</th>
                <th>PENAWARAN</th>
                <th>NAMA PENAWAR</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
            $query = "SELECT lelang.id, barang.nama_barang, history_lelang.penawaran_harga, masyarakat.nama FROM history_lelang, lelang, barang, masyarakat WHERE history_lelang.id_lelang = lelang.id AND history_lelang.id_barang = barang.id AND history_lelang.id_masyarakat = masyarakat.id ORDER BY history_lelang.id, history_lelang.penawaran_harga;";
            $hasil =mysqli_query($connect, $query);
            
            while($data=mysqli_fetch_assoc($hasil)){
                $query_menang = "SELECT MAX(penawaran_harga) AS menang FROM history_lelang WHERE id_lelang=".$data['id']."";
                $hasil_menang = mysqli_query($connect, $query_menang);
                $data_menang = mysqli_fetch_assoc($hasil_menang);
            ?>
            <tr>              
            <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['penawaran_harga'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php if($data['penawaran_harga']==$data_menang['menang'] && $data['nama'] != '-') {
                    
                    echo 'Pemenang';}?></td>
            </tr>
            <?php 
            }
            ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>







