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
    <div class="row d-flex">
      <?php
      //gat data buku
      $sql_b = "SELECT `b`.`id_blog`, `b`.`insert_at`, `b`.`update_at`, `b`.`update_by`,`k`.`kategori`,`b`.`judul`, `b`.`insert_by`,`b`.`isi`,`b`.`gambar` FROM `tabel_blog` `b` INNER JOIN `tabel_kategori_blog` `k` ON `b`.`id_kategori`=`k`.`id_kategori` INNER JOIN `tabel_user` `u` ON `b`.`insert_by`= `u`.`id_user`
            ";
      $query_b = mysqli_query($koneksi, $sql_b);
      $no = 1;
      while ($data_b = mysqli_fetch_array($query_b)) {
        $gambar = $data_b['gambar'];
        $id_blog = $data_b['id_blog'];
        $kategori_blog = $data_b['kategori'];
        $judul = $data_b['judul'];
        $isi = $data_b['isi'];
        $insert_by = $data_b['insert_by'];
        $insert_at = $data_b['insert_at'];
        $update_by = $data_b['update_by'];
        $update_at = $data_b['update_at'];

      ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="index.php?include=halamanblog&data=<?= $id_blog ?>" class="block-20" style="background-image: url(images/<?php if ($gambar == NULL || $gambar == '') {
                                                                                                                                echo "work-6.jpg";
                                                                                                                              } else {
                                                                                                                                echo $gambar;
                                                                                                                              } ?>);>"></a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><a href="#"><?= $insert_at ?></a></div>
                <div><a href="#"><?php
                                  $sql_nama = "SELECT `nama_user` from `tabel_user` where `id_user`='$insert_by'";
                                  $query_nama = mysqli_query($koneksi, $sql_nama);
                                  while ($d_nama = mysqli_fetch_row($query_nama)) {
                                    $nama = $d_nama[0];
                                  }
                                  echo $nama;
                                  ?></a></div>
              </div>
              <h3 class="heading mt-2"><a href="#"><?= $judul ?></a></h3>
              <p><?= $isi ?></p>
            </div>

          </div>
        </div>
      <?php } ?>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>