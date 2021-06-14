<?php
session_start();
include('../koneksi/koneksi.php');
if (isset($_GET['include'])) {
    $include = $_GET['include'];
    if ($include == "loginKonfirmasi") {//login
        include("include/loginKonfirmasi.php");
    } 
    else if ($include == "signout") {//signout
        include("include/signout.php");
    } 
    else if ($include == "hargaKonfirmasiTambah") { //harga
        include("include/hargaKonfirmasiTambah.php");
    } else if ($include == "hargaKonfirmasiEdit") {
        include("include/hargaKonfirmasiEdit.php");
    } 
    else if ($include == "galeriKonfirmasiTambah") { //galeri
        include("include/galeriKonfirmasiTambah.php");
    } else if ($include == "galeriKonfirmasiEdit") {
        include("include/galeriKonfirmasiEdit.php");
    } 
    else if ($include == "pencapaianKonfirmasiTambah") { //pencapaian
        include("include/pencapaianKonfirmasiTambah.php");
    } else if ($include == "pencapaianKonfirmasiEdit") {
        include("include/pencapaianKonfirmasiEdit.php");
    } 
    else if ($include == "kategoriBlogKonfirmasiTambah") { //kategoriBlog
        include("include/kategoriBlogKonfirmasiTambah.php");
    } else if ($include == "kategoriBlogKonfirmasiEdit") {
        include("include/kategoriBlogKonfirmasiEdit.php");
    } 
    else if ($include == "kontakKonfirmasiTambah") { //kontak
        include("include/kontakKonfirmasiTambah.php");
    } else if ($include == "kontakKonfirmasiEdit") {
        include("include/kontakKonfirmasiEdit.php");
    } 
    else if ($include == "blogKonfirmasiTambah") { //blog
        include("include/blogKonfirmasiTambah.php");
    } else if ($include == "blogKonfirmasiEdit") {
        include("include/blogKonfirmasiEdit.php");
    } 
    else if ($include == "bookingKonfirmasiTambah") { //booking
        include("include/bookingKonfirmasiTambah.php");
    } else if ($include == "bookingKonfirmasiEdit") {
        include("include/bookingKonfirmasiEdit.php");
    } 
    else if ($include == "userKonfirmasiTambah") { //user
        include("include/userKonfirmasiTambah.php");
    } else if ($include == "userKonfirmasiEdit") {
        include("include/userKonfirmasiEdit.php");
    } 
    else if ($include == "profilKonfirmasiEdit") { //profil
        include("include/profilKonfirmasiEdit.php");
    } 
    else if ($include == "ubahPasswordKonfirmasi") { //ubahPassword
        include("include/ubahPasswordKonfirmasi.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("include/head.php") ?>
</head>

<body>
    <?php
    //Check Ada Get Include
    if (isset($_GET['include'])) {
        $include = $_GET['include'];

        //Check Apakah Ada Session id_admin
        if (isset($_SESSION['id_user'])) {
    ?>

            <body class="hold-transition sidebar-mini layout-fixed">
                <div class="wrapper">
                    <?php include("include/header.php") ?>
                    <?php include("include/sidebar.php") ?>
                    <div class="content-wrapper">
                        <?php
                        if ($include == "harga") { //harga
                            include("include/harga.php");
                        } else if ($include == "hargaTambah") {
                            include("include/hargaTambah.php");
                        } else if ($include == "hargaEdit") {
                            include("include/hargaEdit.php");
                        } 
                        else if ($include == "galeri") { //galeri
                            include("include/galeri.php");
                        } else if ($include == "galeriTambah") {
                            include("include/galeriTambah.php");
                        } else if ($include == "galeriEdit") {
                            include("include/galeriEdit.php");
                        } 
                        else if ($include == "pencapaian") { //pencapaian
                            include("include/pencapaian.php");
                        } else if ($include == "pencapaianTambah") {
                            include("include/pencapaianTambah.php");
                        } else if ($include == "pencapaianEdit") {
                            include("include/pencapaianEdit.php");
                        } 
                        else if ($include == "kategoriBlog") { //kategoriBlog
                            include("include/kategoriBlog.php");
                        } else if ($include == "kategoriBlogTambah") {
                            include("include/kategoriBlogTambah.php");
                        } else if ($include == "kategoriBlogEdit") {
                            include("include/kategoriBlogEdit.php");
                        } 
                        else if ($include == "kontak") { //kontak
                            include("include/kontak.php");
                        } else if ($include == "kontakTambah") {
                            include("include/kontakTambah.php");
                        } else if ($include == "kontakEdit") {
                            include("include/kontakEdit.php");
                        } 
                        else if ($include == "booking") { //booking
                            include("include/booking.php");
                        } else if ($include == "bookingTambah") {
                            include("include/bookingTambah.php");
                        } else if ($include == "bookingEdit") {
                            include("include/bookingEdit.php");
                        } else if ($include == "bookingDetail") {
                            include("include/bookingDetail.php");
                        } 
                        else if ($include == "blog") { //blog
                            include("include/blog.php");
                        } else if ($include == "blogTambah") {
                            include("include/blogTambah.php");
                        } else if ($include == "blogEdit") {
                            include("include/blogEdit.php");
                        } else if ($include == "blogDetail") {
                            include("include/blogDetail.php");
                        }
                         else if ($include == "user") { //user
                            include("include/user.php");
                        } else if ($include == "userTambah") {
                            include("include/userTambah.php");
                        } else if ($include == "userEdit") {
                            include("include/userEdit.php");
                        } else if ($include == "userDetail") {
                            include("include/userDetail.php");
                        } 
                        else if ($include == "profilEdit") { //profil
                            include("include/profilEdit.php");
                        } 
                        else if ($include == "feedback") { //feedback
                            include("include/feedback.php");
                        } 
                        else if ($include == "feedbackDetail") {
                            include("include/feedbackDetail.php");
                        }
                        else if ($include == "ubahPassword") { //ubahPassword
                            include("include/ubahPassword.php");
                        } else {
                            include("include/profil.php");
                        }
                        ?>
                    </div>-
                    <?php include("include/footer.php") ?>
                </div>-
                <?php include("include/script.php") ?>
            </body>
        <?php
        } else {
            //Pemanggilan Halaman Form Login
            include("include/login.php");
        }
    } else {
        if (isset($_GET['id_user'])) {
        ?>

            <body class="hold-transition sidebar-mini layout-fixed">
                <div class="wrapper">
                    <?php include("include/header.php") ?>
                    <?php include("include/sidebar.php") ?>
                    <div class="content-wrapper">
                        <?php
                        //pemanggilan profil
                        include("include/profil.php");
                        ?>
                    </div>
                    <! /.contentwrapper>
                        <?php include("include/footer.php") ?>
                </div>
                <! ./wrapper>
                    <?php include("include/script.php") ?>
            </body>
    <?php
        } else {
            //Pemanggilan Halaman Form Login
            include("include/login.php");
        }
    }
    ?>
</body>

</html>