<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        require_once('koneksi.php');
        $sql = "UPDATE mahasiswa SET nama = '$nama',
        jurusan = '$jurusan', email = '$email' WHERE id = $id;";
        if(mysqli_query($con,$sql)){
            echo 'Berhasil Update Data Mahasiswa';
        }else{
            echo 'Gagal Update Data Mahasiswa';
        }
    mysqli_close($con);
    }
?>