<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tentang Kami</h1>
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php?include=index">Beranda</a></span> <span>Tentang Kami</span></p>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="img img-about align-self-stretch" style="background-image: url(images/bg_3.jpg); width: 100%;"></div>
      </div>
      <div class="col-md-6 pl-md-5 ftco-animate">
        <h2 class="mb-4">Selamat Datang di Website InBarberShop</h2>
        <p>InBarberShop Malang adalah merek barbershop premium di Indonesia. Kami mengutamakan kepuasaan pelanggan kami dengan memberikan layanan berkualitas tinggi seperti perlengkapan sanitasi, fasilitas nyaman, dan tukang cukur berpengalaman.</p>
        <p>Hingga saat ini, InBarberShop telah memiliki 12 cabang yang tersebar di Malang dan Surabaya, dan tahun ini akan berkembang sampai 20 cabang dan kami berusaha untuk menjadi barbershop terbaik di Indonesia.</p>
      </div>
    </div>
    <br>
    <p>Di masa pandemic COVD-19, InBarberShop melakukan pencegahan untuk mengurangi resiko penularan dengan menerapkan protocol Kesehatan seperti pemeriksaan suhu tubuh, wajib menggunakan masker, menjaga jarak, dan mencuci tangan.
      InBarberShop juga menerapkan prosedur protokol kesehatan di dalamnya dengan adanya general cleaning menggunakan desinfektan, penggunaan kip sekali pakai untuk pelanggan, dan penggunaan masker serta face shield bagi kapster.</p>
  </div>
</section>
<section class="ftco-section ftco-discount img" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 text-center discount ftco-animate" data-scrollax=" properties: { translateY: '-30%'}">
        <h2 class="mb-4">InBarberShop Premium</h2>
        <h3>Visi</h3>
        <p class="mb-4">Menjadi Perusahaan yang mengedepankan kesuksesan untuk memberi pengaruh
          positif dan menjadi inspirasi bagi masyarakat luas dengan menjadikan InBarberShop sebagai
          pilihan utama dalam pelayanan potong rambut dan sebagai layanan terapi khusus pria lainnya
          yang modern, canggih, dan mengesankan bagi pelanggan
        </p>
        <br>
        <h3>Misi</h3>
        <p class="mb-4">Meningkatkan nilai perusahaan melalui kreativitas, inovasi dan pengembangan
          kompetensi sumber daya manusia. Mengutamakan mutu dan pelayanan demi kepuasan pelanggan.
          Peduli terhadap kepentingan masyarakat dan lingkungan.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Team InBarberShop</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Menciptakan ide-ide dan mengeluarkan seluruh potensi diri yang ada untuk
          memajukan perusahaan demi memberikan pelayanan terbaik dan kenyamanan bagi pelanggan.
        </p>
      </div>
    </div>
    <div class="row">

      <?php
      $sql_b = "SELECT * FROM `tabel_user` order by  `id_user` limit 0,6";
      $query_b = mysqli_query($koneksi, $sql_b);
      while ($data_b = mysqli_fetch_array($query_b)) {
        $nama = $data_b['nama_user'];
        $nim = $data_b['nim_user'];
        $foto = $data_b['foto_user'];
        $jobdesk = $data_b['jobdesk'];

      ?>
        <div class="col-lg-2 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="img mb-4" style="background-image: url(admin/foto/<?php if ($foto == NULL || $foto == '') {
                                                                        echo "ariska.jpg";
                                                                      } else {
                                                                        echo $foto;
                                                                      } ?>);>"></div>
            <div class="info text-center">
              <h3><a href="teacher-single.html"><?= $nama ?><br></a></h3>
              <span class="position"><?= $nim ?></span>
              <div class="text">
                <p><?= $jobdesk ?></p>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </div>
</section>