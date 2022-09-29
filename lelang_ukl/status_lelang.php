<?php 
    include "connect.php";
    include "nav.php";
if (isset($_POST['btnUbah'])){  
    if($_POST['btnUbah']=='Dilelang'){
        $id1=$_POST['id_barang'];
        $query_ubah1 = "UPDATE lelang SET status='Terjual' WHERE id_barang=$id1";
        $hasil_ubah1 = mysqli_query($connect, $query_ubah1); 
    } elseif ($_POST['btnUbah']=='Terjual') {
        $id2=$_POST['id_barang'];
        $query_ubah2 = "UPDATE lelang SET status='Terjual' WHERE id_barang=$id2";
        $hasil_ubah2 = mysqli_query($connect, $query_ubah2);
    } 
} elseif (isset($_POST['btnDel'])) {
    $id3=$_POST['id_barang'];
    $query_ubah3 = "DELETE FROM lelang WHERE id_barang=$id3";
    $hasil_ubah3 = mysqli_query($connect, $query_ubah3);
    
    $query_ubah4 = "DELETE FROM barang WHERE id=$id3";
    $hasil_ubah4 = mysqli_query($connect, $query_ubah4);
}
?>

<title>Status</title>
<h2 class="mb-5 mt-4 text-center">Daftar Barang Lelang</h2>
<div class="row">
    <?php 
    $query = "SELECT * FROM barang";
    $hasil = mysqli_query($connect, $query);

    while($data_barang=mysqli_fetch_assoc($hasil)){
        $query_status = "SELECT * FROM lelang WHERE id_barang = '".$data_barang['id']."'";
        $hasil_status = mysqli_query($connect, $query_status);
        $data_status=mysqli_fetch_assoc($hasil_status);
        ?>
        <div class="col-3 ms-5">
            <div class="card">
              <div class="card-body me-2 ms-2 mt-2">
                <h3 class="card-title mb-3"><?php echo $data_barang['nama_barang']?></h3><hr>
                <p class="card-text mb-4"><?php echo $data_barang['deskripsi'] ?></p>
                <form action="status_lelang.php" method="POST">
                <table>
                    <tr>
                        <td><h6 class="card-text me-4 mb-2">Harga Awal : Rp. <?php echo $data_barang['harga_awal']?></h6></td>
                    </tr>
                    <tr>
                        <td><h6 class="card-text me-4 mb-2">Harga Akhir : Rp. <?php echo $data_status['harga_akhir']?></h6></td>
                    </tr>
                    <tr>
                        <td><h6 class="card-text me-4">Tanggal Daftar : <?php echo $data_barang['tgl_daftar']?></h6></td>
                    </tr>
                    <tr class="justify-content-center">
                        <?php

                        if ($data_status['status']=='Dilelang'){
                            ?>
                            <td><input type="submit" class='btn btn-warning p-3 pe-4 ps-4 text-center alert alert-success mt-3' onclick='return confirm("Yakin mengganti status?")' name="btnUbah" value="Terjual"></input></td>
                            <td><input type="submit" class='btn btn-danger p-3 pe-4 ps-4 text-center' onclick='return confirm("Yakin mengghapus?")' name="btnDel" value="Delete"></input></td>
                            <td><input type="hidden" name="id_barang" value="<?php echo $data_barang['id'];?>"></td>
                        <?php
                        } else{
                            ?>
                            <td><h5 class='mt-3 text-center alert alert-danger' value="Terjual">Terjual</h5></td>
                            <td><input type="submit" class='btn btn-danger p-3 pe-4 ps-4 text-center' onclick='return confirm("Yakin mengghapus?")' name="btnDel" value="Delete"></input></td>
                            <td><input type="hidden" name="id_barang" value="<?php echo $data_barang['id'];?>"></td>
                        <?php
                        }
                        ?>
                    </tr>
                </table>
                </form>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>