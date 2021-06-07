<?php
$id_user = $_SESSION['id_user'];
$id_kategori = $_POST['kategori_blog'];
$judul = $_POST['judul'];
$isi = addslashes($_POST['isi']);
$insert_at = date('Y-m-d\TH:i:s.00+00:00');
$kata = strlen($isi);

$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$direktori = 'foto/' . $nama_file;

if (empty($id_kategori)) {
    header("Location:index.php?include=blogTambah&notif=tambahkosong&jenis=kategoriblog");
} else if (empty($judul)) {
    header("Location:index.php?include=blogTambah&notif=tambahkosong&jenis=judul");
} else if (empty($isi)) {
    header("Location:index.php?include=blogTambah&notif=tambahkosong&jenis=isi");
} elseif ($kata < 150) {
    header("Location:index.php?include=blogTambah&notif=kurangdari150");
} elseif (empty($nama_file)) {
    $sql = "INSERT into `tabel_blog` values ('', '$id_kategori', '$judul', '$isi', '', '$insert_at', '$id_user', '', NULL)";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=blog&notif=tambahberhasil");
} elseif (move_uploaded_file($lokasi_file, $direktori)) {
    $sql = "INSERT into `tabel_blog` values ('', '$id_kategori', '$judul', '$isi', '$nama_file', '$insert_at', '$id_user', '', NULL)";
    mysqli_query($koneksi, $sql);
    //echo $sql;
    header("Location:index.php?include=blog&notif=tambahberhasil");
}
