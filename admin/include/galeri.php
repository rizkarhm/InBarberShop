<?php
if ((isset($_GET['aksi'])) && (isset($_GET['data']))) {
    if ($_GET['aksi'] == 'hapus') {
        $id_foto = $_GET['data'];
        //hapus kategori buku
        $sql_dh = "DELETE from `tabel_galery` where `id_foto` = '$id_foto'";
        mysqli_query($koneksi, $sql_dh);
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
                <h3><i class="fas fa-address-book"></i> foto</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> foto</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Galery Foto</h3>
            <div class="card-tools">
                <a href="index.php?include=galeriTambah" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah foto</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-12">
                <form method="post" action="index.php?include=galeri">
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
                        <th width="5%">
                            <center>No<center>
                        </th>
                        <th width="40%">
                            <center>Nama Foto<center>
                        </th>
                        <th width="40%">
                            <center>Foto<center>
                        </th>
                        <th width="15%">
                            <center>Aksi<center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //$sql_k = "SELECT `id_harga`,`harga` FROM `harga` ORDER BY `harga`";

                    $batas = 2;
                    if (!isset($_GET['halaman'])) {
                        $posisi = 0;
                        $halaman = 1;
                    } else {
                        $halaman = $_GET['halaman'];
                        $posisi = ($halaman - 1) * $batas;
                    }

                    //hitung jumlah semua data
                    $sql_jum = "SELECT * from `tabel_galery` ";
                    if (!empty($katakunci_kategori)) {
                        $sql_jum .= " WHERE `nama_foto` LIKE '%$katakunci_kategori%'";
                    }
                    $sql_jum .= " order by `nama_foto`";
                    $query_jum = mysqli_query($koneksi, $sql_jum);
                    $jum_data = mysqli_num_rows($query_jum);
                    $jum_halaman = ceil($jum_data / $batas);

                    $sql_k = "SELECT * FROM `tabel_galery` ";
                    if (!empty($katakunci_kategori)) {
                        $sql_k .= " where `nama_foto` LIKE '%$katakunci_kategori%'";
                    }
                    $sql_k .= " ORDER BY `nama_foto` limit $posisi, $batas ";
                    $query_k = mysqli_query($koneksi, $sql_k);
                    $no = $posisi + 1;

                    while ($data_k = mysqli_fetch_array($query_k)) {
                        $id_foto = $data_k['id_foto'];
                        $nama_foto = $data_k['nama_foto'];
                        $foto = $data_k['foto'];
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $nama_foto; ?></td>
                            <td><?php echo $foto; ?></td>
                            <td align="center">
                                <a href="index.php?include=galeriEdit&data=<?php echo $id_foto; ?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                                <a onclick="if(confirm('Apakah anda yakin ingin menghapus foto <?php echo $nama_foto; ?>??')){ location.href='index.php?include=galeri&aksi=hapus&data=<?php echo $id_foto; ?>' }" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i> Hapus</a>
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
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=galeri&halaman=1'>First</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=galeri&halaman=$sebelum'>«</a></li>";
                    }
                    for ($i = 1; $i <= $jum_halaman; $i++) {
                        if ($i > $halaman - 5 and $i < $halaman + 5) {
                            if ($i != $halaman) {
                                echo "<li class='page-item'><a class='page-link' href='index.php?include=galeri&halaman=$i'>$i</a></li>";
                            } else {
                                echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                            }
                        }
                    }
                    if ($halaman != $jum_halaman) {
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=galeri&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=galeri&halaman=$jum_halaman'>Last</a></li>";
                    }
                } ?>
            </ul>
        </div>
    </div>
    <!-- /.card -->

</section>