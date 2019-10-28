<?php
 
include 'koneksi.php';
 
$id_siswa       = $_GET['id_barang'];
 
$hapus          = mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id_barang'");
 
if($hapus){
    echo "<script>alert('Data Berhasil Dihapus');document.location.href='index.php'</script>";
       
}else{
    echo "<script>alert('Data Gagal Dihapus');document.location.href='index.php''</script>";
       
}
 
?> 
