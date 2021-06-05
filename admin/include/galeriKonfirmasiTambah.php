<?php 
$nama = $_POST['nama'];
$foto = $_POST['foto'];

if (empty($nama)) {
    header("Location:index.php?include=galeriTambah&notif=namaKosong");
} else if (empty($foto)) {
    header("Location:index.php?include=galeriTambah&notif=hargaKosong");
} else {
    $sql = "insert into `tabel_galery` values ('','$nama', '$foto')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=galeri&notif=tambahberhasil");
}
