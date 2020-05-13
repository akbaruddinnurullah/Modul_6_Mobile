<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    $sql = "INSERT INTO mahasiswa (nama,jurusan,email) VALUES ('$nama','$jurusan','$email')";
    
    require_once('koneksi.php');
    
    if(mysqli_query($con,$sql)){
    echo 'Berhasil Menambahkan Mahasiswa';
    }else{
    echo 'Gagal Menambahkan Mahasiswa';
    }
    mysqli_close($con);
}
?>