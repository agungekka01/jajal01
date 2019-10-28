 
<?php
 
include 'koneksi.php';
 
$id_barang      = $_POST['id_barang'];
$kode           = $_POST['kode'];
$nama           = $_POST['nama'];
$deskripsi      = $_POST['deskripsi'];
$stok           = $_POST['stok'];
 
$update         = mysqli_query($conn, "UPDATE barang SET kode = '$kode', nama = '$nama', deskripsi = '$deskripsi', stok = '$stok' WHERE id_barang = '$id_barang'");
 
if($update){
    echo "<script>alert('Data Berhasil Diedit');doc
    ument.location.href='index.php'</script>";
       
}else{
    echo "<script>alert('Data Gagal Diedit');document.location.href='edit.php?id_barang='$id_barang''</script>";
       
}
?>