<?php
if (isset($_GET['data'])) {
    $id_kategori = $_GET['data'];
    $_SESSION['id_kategori'] = $id_kategori;
    $sql_d = "SELECT * FROM `tabel_kategori_blog` where `id_kategori` = '$id_kategori'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data_d = mysqli_fetch_array($query_d)) {
        $kategori = $data_d['kategori'];
    }
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Kategori Blog</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=kategoriBlog">Kategori Blog</a></li>
                    <li class="breadcrumb-item active">Edit Kategori Blog</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Harga</h3>
            <div class="card-tools">
                <a href="index.php?include=kategoriBlog" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "kategoriKosong") {
                echo '<div class="alert alert-danger" role="alert">Maaf kategori Blog wajib di isi</div>';
            }
        }
        ?>
        <form class="form-horizontal" method="post" action="index.php?include=kategoriBlogKonfirmasiEdit">
            <div class="card-body">
                <div class="form-group row">
                    <label for="harga" class="col-sm-3 col-form-label">Kategori Blog</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="harga" value="<?php echo $kategori; ?>" name="kategori">
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