<?php
if (isset($_SESSION['id_user'])) {
  $id_user = $_SESSION['id_user'];
  //get profil
  $sql = "SELECT `password_user` from `tabel_user` where `id_user`='$id_user'";
  //echo $sql;
  $query = mysqli_query($koneksi, $sql);
  while ($data = mysqli_fetch_row($query)) {
    $pass_lama = $data[0];
  }
  //echo $pass_lama;
}
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-user-lock"></i> Ubah Password</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active"> Ubah Password</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Pengaturan Password</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="index.php?include=ubahPasswordKonfirmasi" class="form-horizontal">
      <div class="card-body">
        <h6>
          <i class="text-blue"><i class="fas fa-info-circle"></i> Silahkan memasukkan password lama dan password baru Anda untuk mengubah password.</i>
        </h6><br>
        <div class="col-sm-10">
          <?php
          if (isset($_GET['notif'])) {
            if ($_GET['notif'] == "lamakosong") {
              echo '<div class="alert alert-danger" role="alert">Data wajib diisi</div>';
            } elseif ($_GET['notif'] == "tidaksama") {
              echo '<div class="alert alert-danger" role="alert">Password dan Konfirmasi Password tidak sama</div>';
            } elseif ($_GET['notif'] == "barukosong") {
              echo '<div class="alert alert-danger" role="alert">Password Baru wajib diisi</div>';
            } elseif ($_GET['notif'] == "editberhasil") {
              echo '<div class="alert alert-success" role="alert">Password berhasil diubah</div>';
            } elseif ($_GET['notif'] == "lamatidaksama") {
              echo '<div class="alert alert-danger" role="alert">Password Lama Salah</div>';
            }
          }
          ?>
        </div>
        <div class="form-group row">
          <label for="pass_lama" class="col-sm-3 col-form-label">Password Lama</label>
          <div class="col-sm-7">
            <input name="passlama" type="text" class="form-control" id="pass_lama">
            <!--<span class="text-danger">Mohon maaf, password lama wajib diisi.</span>-->
          </div>
        </div>
        <div class="form-group row">
          <label for="pass_baru" class="col-sm-3 col-form-label">Password Baru</label>
          <div class="col-sm-7">
            <input name="password" type="password" class="form-control" id="pass_baru" value="">
            <!--<span class="text-danger">Mohon maaf, password baru wajib diisi.</span>-->
          </div>
        </div>
        <div class="form-group row">
          <label for="konfirmasi" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
          <div class="col-sm-7">
            <input name="konfirmasi" type="password" class="form-control" id="konfirmasi" value="">
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
        </div>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->

</section>