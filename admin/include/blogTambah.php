<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> Tambah Blog</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=blog">Data Blog</a></li>
                    <li class="breadcrumb-item active">Tambah Blog</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Blog</h3>
            <div class="card-tools">
                <a href="index.php?include=blog" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br></br>
        <div class="col-sm-10">
            <?php
            if (isset($_GET['notif'])) {
                if ($_GET['notif'] == "tambahkosong") {
                    echo '<div class="alert alert-danger" role="alert">Maaf data ' . $_GET['jenis'] . ' wajib di isi</div>';
                }
            }
            ?>
        </div>
        <form class="form-horizontal" action="index.php?include=blogKonfirmasiTambah" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Kategori Blog</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="kategori" name="kategori_blog">
                            <option value="">- Pilih Kategori -</option>
                            <?php
                            $sql_k = "SELECT * FROM `tabel_kategori_blog` ORDER BY `kategori`";
                            $query_k = mysqli_query($koneksi, $sql_k);
                            while ($data_k = mysqli_fetch_array($query_k)) {
                                $id_kat = $data_k['id_kategori'];
                                $kat = $data_k['kategori'];
                            ?>
                                <option value="<?php echo $id_kat; ?>"><?php echo $kat; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="judul" id="judul" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-3 col-form-label">Isi</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="isi" id="editor1" rows="12"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 col-form-label">Gambar </label>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
        </div>
    </div>
    <!-- /.card-footer -->
    </form>
    </div>
    <!-- /.card -->

</section>