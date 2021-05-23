<?php
$koneksi = mysqli_connect("localhost", "root", "", "barbershop");
// cek koneksi
if (!$koneksi) {
    die("Error koneksi: " . mysqli_connect_errno());
}
