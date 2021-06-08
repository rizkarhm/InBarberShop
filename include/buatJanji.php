<?php
if (isset($_GET['notif'])) {
    if ($_GET['notif'] == "bookingberhasil") {
        echo "<script>alert('janji Berhasil dibuat!');</script>";
    } else if ($_GET['notif'] == "jampenuh") {
        echo "<script>alert('Maaf silahkan pesan di jam lain!');</script>";
    }
}
?>

<body>
    <section class="ftco-section hero-wrap js-fullheight" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="1">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-3">Buat Janji</h3>
                        </div>
                        <div>
                            <p style="font-size:x-large; color:white">
                                <a href="index.php?include=index">&larr;</a>
                            </p>
                        </div>
                    </div>
                    <form action="index.php?include=buatJanjiKonfirmasi" class="appointment-form" method="post">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" id="appointment_date" name="tanggal" class="form-control" placeholder="Tanggal" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" id="appointment_time" name="waktu" class="form-control" placeholder="Waktu" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" name="telepon" placeholder="Telepon" autocomplete="off">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <input list="paket" type="text" class="form-control" name="harga" placeholder="Pilih Paket" autocomplete="off">
                                    <datalist id="paket">
                                        <?php
                                        $sql_b = "SELECT * FROM `tabel_harga` order by `id_paket`";
                                        $query_b = mysqli_query($koneksi, $sql_b);
                                        while ($data_b = mysqli_fetch_array($query_b)) {
                                            $id = $data_b['id_paket'];
                                            $nama = $data_b['nama_paket'];
                                        ?>
                                            <option value="<?php echo $nama ?>"></option>
                                        <?php } ?>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="keterangan" id="" cols="30" rows="3" class="form-control" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <!-- <button class="btn btn-primary-light px-4 py-3"><a href="index.php?include=index">Kembali</a></button> -->
                            <input type="submit" value="Buat Janji" class="btn btn-primary py-3 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-multiselect.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/jquery.timepicker.min.js"></script>
    <script src="../js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>
<?php

function get_times($default = '08:00', $interval = '+30 minutes')
{

    $output = '';

    $current = strtotime('08:00');
    $end = strtotime('21:00');

    while ($current <= $end) {
        $time = date('H:i', $current);
        $sel = ($time == $default) ? ' selected' : '';

        $output .= "<option value=\"{$time}\"{$sel}>" . date('h.i A', $current) . '</option>';
        $current = strtotime($interval, $current);
    }

    return $output;
}
?>