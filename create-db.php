<?php
    include "koneksi.php";

    $sql = "CREATE DATABASE haha";

    if($koneksi->query($sql)=== TRUE ){
        echo "DB BERHASIL DIBUAT";
    }
    else{
        echo "DB GAGAL DIBUAT";
    }

?>