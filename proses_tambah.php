<?php
 
include 'koneksi.php';
 
$id_barang      = $_POST['id_barang'];
$kode           = $_POST['kode'];
$nama           = $_POST['nama'];
$deskripsi      = $_POST['deskripsi'];
$stok           = $_POST['stok'];
$harga          = $_POST['harga'];
$berat          = $_POST['berat'];
 
$input          = mysqli_query($conn, "INSERT INTO barang (kode, nama, deskripsi, stok, harga, berat) VALUES ('$kode', '$nama','$deskripsi' , '$stok', '$harga', '$berat')");
 
if($input){
    echo "<script>alert('Data Berhasil Ditambah');document.location.href='index.php'</script>";
       
}else{
    echo "<script>alert('Data Gagal Ditambah');document.location.href='tambah.php'</script>";
       
}
?> 
