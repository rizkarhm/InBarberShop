<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> Tambah pencapaian</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=pencapaian">pencapaian</a></li>
                    <li class="breadcrumb-item active">Tambah pencapaian</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah pencapaian</h3>
            <div class="card-tools">
                <a href="index.php?include=pencapaian" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <div class="col-sm-10">
            <?php
            if (isset($_GET['notif'])) {
                if ($_GET['notif'] == "namaKosong") {
                    echo '<div class="alert alert-danger" role="alert">Maaf nama pencapaian wajib di isi</div>';
                } else if ($_GET['notif'] == "pencapaianKosong") {
                    echo '<div class="alert alert-danger" role="alert">Maaf jumlah pencapaian wajib di isi</div>';
                }
            }
            ?> </div>
        <form class="form-horizontal" method="POST" action="index.php?include=pencapaianKonfirmasiTambah">
            <div class="card-body">
                <div class="form-group row">
                    <label for="pencapaian" class="col-sm-3 col-form-label">Nama pencapaian</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="pencapaian" value="" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pencapaian" class="col-sm-3 col-form-label">Jumlah pencapaian</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="pencapaian" value="" name="jumlah">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
                </div>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->

</section>