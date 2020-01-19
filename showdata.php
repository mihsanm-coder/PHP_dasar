<?php
    include "koneksi.php";

    $sql = " SELECT * FROM anjing";
    $result = $koneksi->query($sql);

    foreach ($result as $result) {
        $id = $result["id"];
        $nama = $result["nama"];
        $role = $result["role"];
        $avaiability = $result ["avaiability"];
        $age = $result["age"];
        $location = $result["location"];
        $years = $result["years"];
        $email = $result["email"];

       
    }

?>