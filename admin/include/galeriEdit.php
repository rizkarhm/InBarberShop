<?php
if (isset($_GET['data'])) {
    $id_foto = $_GET['data'];
    $_SESSION['id_foto'] = $id_foto;
    $sql_d = "SELECT * FROM `tabel_galery` where `id_foto` = '$id_foto'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data_d = mysqli_fetch_array($query_d)) {
        $nama = $data_d['nama_foto'];
        $foto = $data_d['foto'];
    }
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Foto</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=galeri">Foto</a></li>
                    <li class="breadcrumb-item active">Edit Foto</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Foto</h3>
            <div class="card-tools">
                <a href="index.php?include=galeri" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "namaKosong") {
                echo '<div class="alert alert-danger" role="alert">Maaf nama foto wajib di isi</div>';
            } else if ($_GET['pesan'] == "fotoKosong") {
                echo '<div class="alert alert-danger" role="alert">Maaf foto wajib di isi</div>';
            }
        }
        ?>
        <form class="form-horizontal" method="post" action="index.php?include=galeriKonfirmasiEdit" enctype="multipart/form-data">
            <div class=" card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Foto</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label">Foto </label>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
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