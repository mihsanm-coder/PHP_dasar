<?php
    include "koneksi.php";

    $sql = "CREATE TABLE hahahaha(
        id int PRIMARY KEY,
        nama varchar(50),
        role varchar(50),
        avaiability varchar (50),
        age int,
        location varchar (50),
        years varchar (50),
        email varchar (50)
    )";

    if($koneksi->query($sql) == TRUE) {
        echo "table berhasil dibuat";
    }else{
        echo "table gagal dibuat";
    }

?>