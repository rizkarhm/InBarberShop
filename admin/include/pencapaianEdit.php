<?php
if (isset($_GET['data'])) {
    $id_pencapaian = $_GET['data'];
    $_SESSION['id_pencapaian'] = $id_pencapaian;
    $sql_d = "SELECT * FROM `tabel_pencapaian` where `id_pencapaian` = '$id_pencapaian'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data_d = mysqli_fetch_array($query_d)) {
        $nama = $data_d['nama_pencapaian'];
        $pencapaian = $data_d['jumlah_pencapaian'];
    }
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit pencapaian</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=harga">pencapaian</a></li>
                    <li class="breadcrumb-item active">Edit pencapaian</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit pencapaian</h3>
            <div class="card-tools">
                <a href="index.php?include=pencapaian" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "namaKosong") {
                echo '<div class="alert alert-danger" role="alert">Maaf nama pencapaian wajib di isi</div>';
            } else if ($_GET['pesan'] == "pencapaianKosong") {
                echo '<div class="alert alert-danger" role="alert">Maaf jumlah pencapaian wajib di isi</div>';
            }
        }
        ?>
        <form class="form-horizontal" method="post" action="index.php?include=pencapaianKonfirmasiEdit">
            <div class="card-body">
                <div class="form-group row">
                    <label for="pencapaian" class="col-sm-3 col-form-label">Nama pencapaian</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="pencapaian" value="<?php echo $nama; ?>" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pencapaian" class="col-sm-3 col-form-label">Jumlah pencapaian</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="pencapaian" value="<?php echo $pencapaian; ?>" name="pencapaian">
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