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
                        <div class="panel-heading">
                            <span class="title"><b>Tambah Data Siswa</b></span>
                        </div>
                        <div class="panel-body">
                            <form action="proses_tambah.php" method="POST" class="form">
                                <div class="form-group">
                                    <label class="title">Kode</label>
                                    <input type="number" name="kode" class="form-control" placeholder="Kode Barang">
                                </div>
                                <div class="form-group">
                                    <label class="title">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label class="title">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title">Stok</label>
                                    <input type="number" name="stok" class="form-control" placeholder="Stok">
                                </div>
                                <div class="form-group">
                                    <label class="title">Harga</label>
                                    <input type="number" name="harga" class="form-control" placeholder="Harga">
                                    <div class="form-group">
                                    <label class="title">Berat</label>
                                    <input type="number" name="berat" class="form-control" placeholder="Berat">
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    </html>

