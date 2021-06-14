<?php
session_start();
include('koneksi/koneksi.php');
if (isset($_GET['include'])) {
    $include = $_GET['include'];
    if ($include == "buatJanjiKonfirmasi") { //booking
        include("include/buatJanjiKonfirmasi.php");
    }
    if ($include == "kontakKonfirmasi") { //kontak
        include("include/kontakKonfirmasi.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <?php include("include/navigasi.php"); ?>
    </nav>

    <?php
    //pemanggilan konten halaman index

    if (isset($_GET["include"])) {
        $include = $_GET["include"];
        if ($include == "kontak") {
            include("include/kontak.php");
        } else if ($include == "tentang") {
            include("include/tentang.php");
        } else if ($include == "masuk") {
            include("include/masuk.php");
        } else if ($include == "buatJanji") {
            include("include/buatJanji.php");
        } else if ($include == "halamanblog") {
            include("include/halamanblog.php");
        } else if ($include == "blog") {
            include("include/blog.php");
        } else {
            include("include/index.php");
        }
    } else {
        include("include/index.php");
    }
    ?>
    <footer class="ftco-footer ftco-section img">
        <?php include("include/footer.php"); ?>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <?php include("include/script.php"); ?>
</body>

</html>