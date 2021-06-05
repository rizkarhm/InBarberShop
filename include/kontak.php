  <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kontak Kami</h1>
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Kontak Kami</span></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section">
    <div class="container mt-5">
      <div class="row block-9">
        <div class="col-md-4 contact-info ftco-animate">
          <div class="row">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Informasi Kontak</h2>
            </div>
            <?php
            $sql_b = "SELECT * FROM `tabel_kontak` order by  `id_kontak` limit 0,4";
            $query_b = mysqli_query($koneksi, $sql_b);
            while ($data_b = mysqli_fetch_array($query_b)) {
              $nama = $data_b['nama_kontak'];
              $link = $data_b['link_kontak'];

            ?>
              <div class="col-md-12 mb-3">
                <p><span><?= $nama ?> :</span> <?= $link ?></p>
              </div>
            <?php } ?>

          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
          <form action="#" class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="E-mail">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div id="map"></div>