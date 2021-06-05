<?php
$id_user = $_SESSION['id_user'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$direktori = 'foto/' . $nama_file;


if (empty($_POST['nama'])) {
    header("Location:index.php?include=tambahUser&notif=tambahkosong&jenis=nama");
} elseif (empty($_POST['email'])) {
    header("Location:index.php?include=tambahUser&notif=tambahkosong&jenis=email");
} elseif (empty($_POST['password'])) {
    header("Location:index.php?include=tambahUser&notif=tambahkosong&jenis=password");
} elseif (empty($_POST['level'])) {
    header("Location:index.php?include=tambahUser&notif=tambahkosong&jenis=level");
} elseif (move_uploaded_file($lokasi_file, $direktori)) {
    $sql = "INSERT into `tabel_user` values ('', '$nama', '$telepon','$email', md5('$password'), '$level', '$nama_file')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=user&notif=tambahberhasil");
} elseif (empty($nama_file)) {
    $sql = "INSERT into `tabel_user` values ('', '$nama', '$telepon','$email', md5('$password'), '$level', '')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=user&notif=tambahberhasil");
} else if (!empty($nama_file)) {
    $sql = "INSERT into `tabel_user` values ('', '$nama', '$telepon', '$email', md5('$password'), '$level', '$nama_file')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=user&notif=tambahberhasil");
}
