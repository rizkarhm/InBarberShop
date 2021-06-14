<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = addslashes($_POST['pesan']);

$sql = "insert into `tabel_feedback` values ('','$nama', '$email', '$subject', '$pesan')";
mysqli_query($koneksi, $sql);
//echo $sql;
header("Location:index.php?include=kontak&notif=tambahberhasil");
