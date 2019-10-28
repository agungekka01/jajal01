 
<html>
<head>
    <title>CRUD PHP MYSQL</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="row">
        <div class="container-fuild">
            <div class="row">
                <br>
                <br>
                <div class="col-md-8 col-md-offset-2">
                    <a href="tambah.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    <br>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="title"><b>Data Barang</b></span>
                        </div>
                        <div class="panel-body">
                            <table class="table table-stripped" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Berat</th>
                                    </tr>
                                </thead>
                                <?php
                                    include 'koneksi.php';
 
                                    $lihat  = mysqli_query($conn, "SELECT * FROM barang");
                                    if (mysqli_num_rows($lihat) == 0) { //jika hasil dari query menampilkan 0 data maka akan memperlihatkan data kosong
                                        echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
                                    }else{
                                    $no     = 1;
                                    while($data = mysqli_fetch_array($lihat)) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $data['kode']?></td>
                                        <td><?php echo $data['nama']?></td>
                                        <td><?php echo $data['deskripsi']?></td>
                                        <td><?php echo $data['stok']?></td>
                                        <td><?php echo $data['harga']?></td>
                                        <td><?php echo $data['berat']?></td>
                                        <td>
                                            <a href="edit.php?id_barang=<?php echo $data['id_barang']?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                            <a href="proses_hapus.php?id_barang=<?php echo $data['id_barang']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-erase"></i> Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php $no++;}}?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
