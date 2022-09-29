<?php 
    include "connect.php";
    include "nav.php";
?>

<title>Barang Lelang</title>
<h2 class="mb-5 mt-4 text-center">Daftar Barang Lelang</h2>
<div class="row">
    <?php 

    $query_barang = "SELECT * FROM barang";
    $hasil_barang = mysqli_query($connect, $query_barang);
    
    while($data_barang=mysqli_fetch_assoc($hasil_barang)){

        $query_lelang = "SELECT * FROM lelang WHERE id_barang='".$data_barang['id']."'";
        $hasil_lelang = mysqli_query($connect, $query_lelang);
        $data_lelang=mysqli_fetch_assoc($hasil_lelang);
        
        if($data_lelang['status']=='Dilelang'){
        ?>
        <div class="col-2 ms-5">
            <div class="card">
              <div class="card-body me-2 ms-2 mt-2">
                <h3 class="card-title mb-3"><?php echo $data_barang['nama_barang']?></h3><hr>
                <p class="card-text mb-5"><?php echo $data_barang['deskripsi'] ?></p>
                <table>
                    <tr>
                        <td><h6 class="card-text me-4">Rp. <?php echo $data_lelang['harga_akhir']?></h6></td>
                        <td><h6 class="card-text ms-3"><?php echo $data_barang['tgl_daftar']?></h6></td>
                    </tr>
                </table>
                <a href='pelelangan.php?id_lelang=<?=$data_lelang['id']?>' class='btn btn-primary col-12 text-center mt-3'>Tawar</a>
              </div>
            </div>
        </div>
        <?php
        }
    }
    ?>
</div>