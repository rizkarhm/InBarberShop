<body>
    <section class="ftco-section hero-wrap js-fullheight" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="1">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Buat Janji</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" id="appointment_date" class="form-control" placeholder="Tanggal">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" id="appointment_time" class="form-control" placeholder="Waktu">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Telepon">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <input list="harga" type="text" class="form-control" placeholder="Pilih Paket">
                                    <datalist id="harga">
                                        <option value="30k Kids Haircut"></option>
                                        <option value="50k Gentlemen Cut"></option>
                                        <option value="50k Wash, Massage & Hairspa"></option>
                                        <option value="60k Gentlemen Grooming"></option>
                                        <option value="90k Perm Hair Treatment"></option>
                                        <option value="100k Basic Hair Color"></option>
                                        <option value="100k Hair Repair Treatment"></option>
                                        <option value="150k Grooming + Hair Tattoo"></option>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <!-- <select class="mdb-select md-form colorful-select dropdown-danger">
                            <option value="" disabled selected>Pilih Paket</option>
                            <option value="1">30k Kids Haircut</option>
                            <option value="2">50k Gentlemen Cut</option>
                            <option value="3">50k Wash, Massage & Hairspa</option>
                            <option value="4">60k Gentlemen Grooming</option>
                            <option value="5">90k Perm Hair Treatment</option>
                            <option value="6">100k Basic Hair Color</option>
                            <option value="7">100k Hair Repair Treatment</option>
                            <option value="8">150k Grooming + Hair Tattoo</option>
                        </select> -->
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="index.php?include=index" class="btn btn-outline-dark px-4 py-3">kembali</a>
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