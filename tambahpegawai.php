<html>
<head>
    <title>My App | Halaman Tambah Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pegawai</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="id">ID Pegawai</label>
                        <input type="text" class="form-control" name="id" placeholder="ID Pegawai">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama Pegawai</label>
                        <input type text="text" class="form-control" name="Nama" placeholder="Nama Pegawai">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki">Laki-laki
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="jabatan">Jabatan</label>
                        <input type text="text" class="form-control" name="Jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>