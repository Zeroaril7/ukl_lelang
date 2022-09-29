<?php 
    include "nav.php";
    include "connect.php";

    $query_lelang = "SELECT * FROM lelang WHERE id='".$_GET['id_lelang']."'";
    $hasil_lelang = mysqli_query($connect, $query_lelang);
    $data_lelang = mysqli_fetch_assoc($hasil_lelang);

    $query_barang = "SELECT * FROM barang WHERE id='".$data_lelang['id_barang']."'";
    $hasil_barang = mysqli_query($connect, $query_barang);
    $data_barang = mysqli_fetch_assoc($hasil_barang);

    if (isset($_POST['btnTawar'])){  
        if($data_lelang['harga_akhir'] < $_POST['harga_tawar']){
        $harga = $_POST['harga_tawar'];

        $query_masyarakat = "SELECT * FROM masyarakat WHERE nama='".$_SESSION['user']."'";
        $hasil_masyarakat = mysqli_query($connect,$query_masyarakat);
        $data_masyarakat = mysqli_fetch_assoc($hasil_masyarakat);

        $query_tawar = "UPDATE lelang SET harga_akhir=$harga, id_masyarakat=".$data_masyarakat['id']." WHERE id=".$data_lelang['id']."";
        $hasil_tawar = mysqli_query($connect, $query_tawar);
        
        $hasil_update = mysqli_query($connect, $query_lelang);
        $data_update = mysqli_fetch_assoc($hasil_update);
 
        $query_history = "SELECT * FROM history_lelang WHERE id_lelang=".$data_lelang['id']."";
        $hasil_history = mysqli_query($connect, $query_history);
        $data_history = mysqli_fetch_assoc($hasil_history);
    
        $query_insert = "INSERT INTO history_lelang (id, id_lelang, id_barang, id_masyarakat, penawaran_harga) VALUES (".$data_history['id'].", ".$data_lelang['id'].", ".$data_update['id_barang'].", ".$data_update['id_masyarakat'].", $harga)";
        $hasil_insert = mysqli_query($connect, $query_insert);
            
        echo '<script>alert("Penawaran Berhasil");location.href="pelelangan.php?id_lelang='.$data_lelang['id'].'";</script>';


        } else {
            echo '<script>alert("Harga tawar harus lebih tinggi daripada harga akhir");location.href="pelelangan.php?id_lelang='.$data_lelang['id'].'";</script>';
        }
    } 
?>
<title>Pelelangan</title>
<h2 class="text-center mt-3">Pelelangan</h2>
<div class="row mt-5 justify-content-center">
    <div class="col-md-8">
        <form action="pelelangan.php?id_lelang=<?=$data_lelang['id']?>" method="POST">
            <table class="table table-hover table-striped  ">
                <thead>
                    <tr>
                        <td>Nama Buku</td><td><?=$data_barang['nama_barang']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$data_barang['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Harga :</td>
                        <td><?php echo $data_lelang['harga_akhir'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga Tawar:</td>
                        <td><input type="number" name="harga_tawar"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" name="btnTawar" value="Tawar"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
