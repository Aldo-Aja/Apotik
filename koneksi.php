<?php
$koneksi = new mysqli('localhost', 'root', '', 'apotik')
or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $jk = $_POST['jk'];
    $jabatan = $_POST['jabatan'];
    $koneksi->query("INSERT INTO pegawai (id, pegawai, jk, jabatan) VALUES ('$id', '$Nama', '$jk', '$jabatan')");

    header('location: pegawai.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM pegawai WHERE id = '$id'");
    header('location: pegawai.php');
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $jk = $_POST['jk'];
    $jabatan = $_POST['jabatan'];
    $koneksi->query("UPDATE pegawai SET id='$id', Nama='$Nama', jk='$jk', jabatan='$jabatan' WHERE id='$id'");
    header("location: pegawai.php");
}


?>
