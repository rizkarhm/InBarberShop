<?php
if (isset($_SESSION['id_kategori'])) {
    $id_kategori = $_SESSION['id_kategori'];
    $kategori = $_POST['kategori'];
    if (empty($kategori)) {
        header("Location:index.php?include=kategoriBlogEdit&data=" . $id_kategori . "&pesan=namaKosong");
    } else {
        $sql = "UPDATE `tabel_kategori_blog` set `kategori`='$kategori' where `id_kategori`='$id_kategori'";
        mysqli_query($koneksi, $sql);
        unset($_SESSION['id_kategori']);
        header("Location:index.php?include=kategoriBlog&notif=editberhasil");
    }
}
