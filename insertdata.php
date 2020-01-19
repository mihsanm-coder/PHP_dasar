<?php

    include "koneksi.php";

    $sql = "INSERT INTO anjing
    (
        id,
        nama,
        role,
        avaiability,
        age,
        location,
        years,
        email
    )VALUE
    (
        '1',
        'ihsan',
        'Front end dev',
        'full time',
        '23',
        'PLG',
        '1',
        'can@gmail.com'
    )";

    if ($koneksi->query($sql) == TRUE) {
        echo "Insert data berhasil";
    }else{
        echo "Insert gagal";
    }

   