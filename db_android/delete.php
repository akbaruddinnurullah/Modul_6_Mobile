<?php

    $id = $_GET['id'];

    require_once('koneksi.php');

    $sql = "DELETE FROM mahasiswa WHERE id=$id;";
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Menghapus Mahasiswa';
    }else{
        echo 'Gagal Menghapus Mahasiswa';
    }
    mysqli_close($con);
?>