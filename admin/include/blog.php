<?php
if ((isset($_GET['aksi'])) && (isset($_GET['data']))) {
  if ($_GET['aksi'] == 'hapus') {
    $id_blog = $_GET['data'];      //hapus user
    //get foto

    $sql_f = "SELECT `gambar` FROM `tabel_blog` WHERE `id_blog`='$id_blog'";
    $query_f = mysqli_query($koneksi, $sql_f);
    while ($data_f = mysqli_fetch_row($query_f)) {
      $foto = $data_f[0];
      //echo $foto;
    }
    $sql_dh = "delete from `tabel_blog` where `id_blog` = '$id_blog'";
    mysqli_query($koneksi, $sql_dh);

    unlink("foto/$foto");
  }
}

if (isset($_POST["katakunci"])) {
  $katakunci_kategori = $_POST["katakunci"];
  $_SESSION['katakunci_kategori'] = $katakunci_kategori;
}
if (isset($_SESSION['katakunci_kategori'])) {
  $katakunci_kategori = $_SESSION['katakunci_kategori'];
}
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-address-book"></i> Blog</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active"> Blog</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Blog</h3>
      <div class="card-tools">
        <a href="index.php?include=blogTambah" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Blog</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="col-md-12">
        <form method="post" action="index.php?include=blog">
          <div class="row">
            <div class="col-md-4 bottom-10">
              <input type="text" class="form-control" id="kata_kunci" name="katakunci">
            </div>
            <div class="col-md-5 bottom-10">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i> Search</button>
            </div>
          </div><!-- .row -->
        </form>
      </div><br>

      <?php
      if (isset($_GET['notif'])) {
        if ($_GET['notif'] == "tambahberhasil") {
          echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
        } elseif ($_GET['notif'] == "editberhasil") {
          echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
        } elseif ($_GET['notif'] == "hapusberhasil") {
          echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
        }
      }
      ?>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="15%">Judul</th>
            <th width="15%">Kategori</th>
            <th width="20%">Insert At</th>
            <th width="20%">Insert By</th>
            <th width="15%">
              <center>Aksi</center>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          //$sql_k = "SELECT `id_user`,`user` FROM `user` ORDER BY `user`";

          $batas = 2;
          if (!isset($_GET['halaman'])) {
            $posisi = 0;
            $halaman = 1;
          } else {
            $halaman = $_GET['halaman'];
            $posisi = ($halaman - 1) * $batas;
          }

          //hitung jumlah semua data
          $sql_jum = "SELECT `b`.`id_blog`, `b`.`insert_at`,`k`.`kategori`,`b`.`judul`, `b`.`insert_by`,`b`.`isi` FROM `tabel_blog` `b` INNER JOIN `tabel_kategori_blog` `k` ON `b`.`id_kategori`=`k`.`id_kategori` INNER JOIN `tabel_user` `u` ON `b`.`insert_by`= `u`.`id_user` ";
          if (!empty($katakunci_kategori)) {
            $sql_jum .= " WHERE `judul` LIKE '%$katakunci_kategori%'";
          }
          $sql_jum .= " order by `judul`";
          $query_jum = mysqli_query($koneksi, $sql_jum);
          $jum_data = mysqli_num_rows($query_jum);
          $jum_halaman = ceil($jum_data / $batas);

          $sql_k = "SELECT `b`.`id_blog`, `b`.`insert_at`,`k`.`kategori`,`b`.`judul`, `b`.`insert_by`,`b`.`isi` FROM `tabel_blog` `b` INNER JOIN `tabel_kategori_blog` `k` ON `b`.`id_kategori`=`k`.`id_kategori` INNER JOIN `tabel_user` `u` ON `b`.`insert_by`= `u`.`id_user` ";
          if (!empty($katakunci_kategori)) {
            $sql_k .= " where `judul` LIKE '%$katakunci_kategori%'";
          }
          $sql_k .= " ORDER BY `judul` limit $posisi, $batas ";
          $query_k = mysqli_query($koneksi, $sql_k);
          $no = $posisi + 1;

          while ($data_b = mysqli_fetch_array($query_k)) {
            $id_blog = $data_b['id_blog'];
            $tanggal = $data_b['insert_at'];
            $kategori_blog = $data_b['kategori'];
            $judul = $data_b['judul'];
            $id_user = $data_b['insert_by'];
            $isi = $data_b['isi'];
          ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $judul ?></td>
              <td><?php echo $kategori_blog ?></td>
              <td><?php echo $tanggal ?></td>
              <td><?php
                  $sql_nama = "SELECT `nama_user` from `tabel_user` where `id_user`='$id_user'";
                  $query_nama = mysqli_query($koneksi, $sql_nama);
                  while ($d_nama = mysqli_fetch_row($query_nama)) {
                    $nama = $d_nama[0];
                  }
                  echo $nama;
                  ?></td>
              <td align="center">
                <a href="index.php?include=blogEdit&data=<?php echo $id_blog; ?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                <a href="index.php?include=blogDetail&data=<?php echo $id_blog; ?>" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                <a onclick="if(confirm('Apakah anda yakin ingin menghapus blog <?php echo $judul; ?>??')){ location.href='index.php?include=blog&aksi=hapus&data=<?php echo $id_blog; ?>' }" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php $no++;
          } ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->

    <div class="card-footer clearfix">
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
        } ?>
      </ul>
    </div>
  </div>
  <!-- /.card -->

</section>