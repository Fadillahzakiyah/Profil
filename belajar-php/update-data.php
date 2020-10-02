<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $id_user = $_POST['id_user'];
        $nama = $_POST["name"];
        $role = $_POST["role"];
        $availabelity = $_POST["availabelity"];
        $age = $_POST["age"];
        $location = $_POST["location"];
        $experience = $_POST["years"];
        $email = $_POST["email"];

        $query = "UPDATE user SET nama = '$nama', role = '$role', availabelity = '$availabelity', age = '$age', location = '$location', years_experience = '$experience', email = '$email' WHERE id = '$id_user'";
        $sql = mysql_query($query);
        if($sql){
            echo "Update data berhasil";
        } else {
            echo "Update data gagal";
        }
    }
?>