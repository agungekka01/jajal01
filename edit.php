 
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
                    <a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
                    <br>
                    <br>
                    <div class="panel panel-default">
                        <?php
                            include 'koneksi.php';
 
                            $id_barang   = $_GET['id_barang'];
 
                            $lihat      = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
                            if (mysqli_num_rows($lihat) == 0) {
                                echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
                            }else{
                            $no = 1;
                            while($data = mysqli_fetch_array($lihat)) {
                        ?>
                        <div class="panel-heading">
                            <span class="title"><b>Edit Data Barang <span class="text text-danger"></span></b></span>
                        </div>
                        <div class="panel-body">
                            <form action="proses_edit.php" method="POST" class="form">
                                <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']?>">
                                <div class="form-group">
                                    <label class="title">Kode</label>
                                    <input type="number" name="kode" class="form-control" value="<?php echo $data['kode']?>">
                                </div>
                                <div class="form-group">
                                    <label class="title">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label class="title">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control"><?php echo $data['deskripsi']?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title">Stok</label>
                                    <input type="number" name="stok" class="form-control" value="<?php echo $data['stok']?>">
                                </div>
                                <div class="form-group">
                                    <label class="title">Harga</label>
                                    <input type="number" name="stok" class="form-control" value="<?php echo $data['harga']?>">
                                </div>
                                <div class="form-group">
                                    <label class="title">Berat</label>
                                    <input type="number" name="berat" class="form-control" value="<?php echo $data['berat']?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                                </div>
                            </form>
                        </div>
                        <?php }}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>