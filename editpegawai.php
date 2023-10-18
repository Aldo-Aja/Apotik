<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | Halaman Edit Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pegawai</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM pegawai WHERE id='$_GET[edit]'");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="id">ID Pegawai</label>
                        <input type="text" class="form-control" name="id" placeholder="ID Pegawai" value="<?= $row['id'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama Pegawai</label>
                        <input type="text" class="form-control" name="Nama" value="<?= $row['Nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?php if ($row['jk'] == "Perempuan") { echo 'checked'; } ?>>Perempuan
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?php if ($row['jk'] == "Laki-laki") { echo 'checked'; } ?>>Laki-laki
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="jabatan">Jabatan</label>
                        <textarea class="form-control" name="jabatan" id="jabatan" cols="5" rows="3" placeholder="jabatan"><?= $row['jabatan'] ?></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
