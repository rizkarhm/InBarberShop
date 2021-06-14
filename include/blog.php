<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Blog</span></p>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Recent from blog</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
    <div class="d-flex">
      <?php
      //gat data buku
      $batas = 3;
      if (!isset($_GET['halaman'])) {
        $posisi = 0;
        $halaman = 1;
      } else {
        $halaman = $_GET['halaman'];
        $posisi = ($halaman - 1) * $batas;
      }

      $sql_b = "SELECT `b`.`id_blog`, `b`.`insert_at`, `b`.`update_at`, `b`.`update_by`,
      `k`.`kategori`,`b`.`judul`, `b`.`insert_by`,`b`.`isi`,`b`.`gambar` FROM `tabel_blog` 
      `b` INNER JOIN `tabel_kategori_blog` `k` ON `b`.`id_kategori`=`k`.`id_kategori` INNER JOIN 
      `tabel_user` `u` ON `b`.`insert_by`= `u`.`id_user` ORDER BY `b`.`id_blog` desc limit $posisi,$batas
            ";
      $query_b = mysqli_query($koneksi, $sql_b);
      $no = 1;
      while ($data_b = mysqli_fetch_array($query_b)) {
        $gambar = $data_b['gambar'];
        $id_blog = $data_b['id_blog'];
        $kategori_blog = $data_b['kategori'];
        $judul = $data_b['judul'];
        $isi = strip_tags($data_b['isi']);
        $isi_pendek = substr($isi, 0, 100) . '...';
        $insert_by = $data_b['insert_by'];
        $insert_at = $data_b['insert_at'];
        $update_by = $data_b['update_by'];
        $update_at = $data_b['update_at'];

      ?>

        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="index.php?include=halamanblog&data=<?= $id_blog ?>" class="block-20" style="background-image: url(admin/foto/<?php if ($gambar == NULL || $gambar == '') {
                                                                                                                                   echo "image.png";
                                                                                                                                  } else {
                                                                                                                                    echo $gambar;
                                                                                                                                  } ?>);>"></a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><?= $insert_at ?></div>
                <div><?php
                      $sql_nama = "SELECT `nama_user` from `tabel_user` where `id_user`='$insert_by'";
                      $query_nama = mysqli_query($koneksi, $sql_nama);
                      while ($d_nama = mysqli_fetch_row($query_nama)) {
                        $nama = $d_nama[0];
                      }
                      echo $nama;
                      ?></div>
              </div>
              <h3 class="heading mt-2"><a href="index.php?include=halamanblog&data=<?= $id_blog ?>"><?= $judul ?></a></h3>
              <p> <?= $isi_pendek ?></p>
            </div>
          </div>
        </div>



      <?php } ?>
      <?php
      $sql_jum = "SELECT `b`.`id_blog`, `b`.`insert_at`,`k`.`kategori`,`b`.`judul`, `b`.`insert_by`,`b`.`isi` 
      FROM `tabel_blog` `b` INNER JOIN `tabel_kategori_blog` `k` ON `b`.`id_kategori`=`k`.`id_kategori` 
      INNER JOIN `tabel_user` `u` ON `b`.`insert_by`=  `u`.`id_user` ";
      if (!empty($katakunci_kategori)) {
        $sql_jum .= " WHERE `judul` LIKE '%$katakunci_kategori%'";
      }
      $sql_jum .= " order by `judul`";
      $query_jum = mysqli_query($koneksi, $sql_jum);
      $jum_data = mysqli_num_rows($query_jum);
      $jum_halaman = ceil($jum_data / $batas);
      ?>
    </div>
    <!-- /.card-body -->
    <center>
      <div class="row mt-5">
        <div class="col text-center">
          <ul class="pagination pagination-sm m-0 float-right">
            <?php
            if ($jum_halaman == 0) {
              //tidak ada halaman
            } else if ($jum_halaman == 1) {
              echo "<li class='page-item'><a class='page-link'>1</a></li>";
            } else {
              $sebelum = $halaman - 1;
              $setelah = $halaman + 1;
              if ($halaman != 1) {
                echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=1'>First</a></li>";
                echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=$sebelum'>«</a></li>";
              }
              for ($i = 1; $i <= $jum_halaman; $i++) {
                if ($i > $halaman - 5 and $i < $halaman + 5) {
                  if ($i != $halaman) {
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=$i'>$i</a></li>";
                  } else {
                    echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                  }
                }
              }
              if ($halaman != $jum_halaman) {
                echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=$setelah'>»</a></li>";
                echo "<li class='page-item'><a class='page-link' href='index.php?include=blog&halaman=$jum_halaman'>Last</a></li>";
              }
            }
            ?>
          </ul>
        </div>
      </div>
    </center>
  </div>
</section>