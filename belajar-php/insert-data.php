<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availabelity,
        age,
        location,
        years_experience,
        email
    ) VALUE
    (
        '1',
        'Arkademy',
        'Frontend Developer',
        'Full time',
        '20',
        'Jakarta',
        '2',
        'user@akademy.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>