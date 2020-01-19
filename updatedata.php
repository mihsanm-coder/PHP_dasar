<?php
    include "koneksi.php";

    if (isset($_POST['submit'])) { //dari index.php
        $id_user = $_POST["id_user"];
        $nama = $_POST["nama"];
        $role = $_POST["role"];
        $avaiability = $_POST["avaiability"];
        $age = $_POST["age"];
        $location = $_POST["location"];
        $years = $_POST["years"];
        $email = $_POST["email"];

        $sql = "UPDATE anjing SET nama = '$nama', role = '$role', avaiability = '$avaiability', age = '$age', location = '$location', years = '$years', email = '$email' WHERE id = '$id_user'";

        if ($koneksi->query($sql) == TRUE) {
            echo "update data berhasil";
        }else{
            echo "update gagal";
        }
    }
?>