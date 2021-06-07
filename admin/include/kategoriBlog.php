<?php
if ((isset($_GET['aksi'])) && (isset($_GET['data']))) {
    if ($_GET['aksi'] == 'hapus') {
        $id_kategori = $_GET['data'];
        //hapus kategori buku
        $sql_dh = "DELETE from `tabel_kategori_blog` where `id_kategori` = '$id_kategori'";
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
                <h3><i class="fas fa-address-book"></i> Kategori</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Kategori</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar kategori</h3>
            <div class="card-tools">
                <a href="index.php?include=kategoriBlogTambah" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Kategori</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-12">
                <form method="post" action="index.php?include=kategoriBlog">
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
                        <th width="2%">
                            <center>No<center>
                        </th>
                        <th width="40%">
                            <center>Kategori<center>
                        </th>
                        <th width="15%">
                            <center>Aksi<center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //$sql_k = "SELECT `id_harga`,`harga` FROM `harga` ORDER BY `harga`";

                    $batas = 5;
                    if (!isset($_GET['halaman'])) {
                        $posisi = 0;
                        $halaman = 1;
                    } else {
                        $halaman = $_GET['halaman'];
                        $posisi = ($halaman - 1) * $batas;
                    }

                    //hitung jumlah semua data
                    $sql_jum = "SELECT * from `tabel_kategori_blog` ";
                    if (!empty($katakunci_kategori)) {
                        $sql_jum .= " WHERE `kategori` LIKE '%$katakunci_kategori%'";
                    }
                    $sql_jum .= " order by `kategori`";
                    $query_jum = mysqli_query($koneksi, $sql_jum);
                    $jum_data = mysqli_num_rows($query_jum);
                    $jum_halaman = ceil($jum_data / $batas);

                    $sql_k = "SELECT * FROM `tabel_kategori_blog` ";
                    if (!empty($katakunci_kategori)) {
                        $sql_k .= " where `kategori` LIKE '%$katakunci_kategori%'";
                    }
                    $sql_k .= " ORDER BY `kategori` limit $posisi, $batas ";
                    $query_k = mysqli_query($koneksi, $sql_k);
                    $no = $posisi + 1;

                    while ($data_k = mysqli_fetch_array($query_k)) {
                        $id_kategori = $data_k['id_kategori'];
                        $kategori = $data_k['kategori'];
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $kategori; ?></td>
                            <td align="center">
                                <a href="index.php?include=kategoriBlogEdit&data=<?php echo $id_kategori; ?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                                <a onclick="if(confirm('Apakah anda yakin ingin menghapus ketgori <?php echo $kategori; ?>??')){ location.href='index.php?include=kategoriBlog&aksi=hapus&data=<?php echo $id_kategori; ?>' }" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i> Hapus</a>
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
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=kategoriBlog&halaman=1'>First</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=kategoriBlog&halaman=$sebelum'>«</a></li>";
                    }
                    for ($i = 1; $i <= $jum_halaman; $i++) {
                        if ($i > $halaman - 5 and $i < $halaman + 5) {
                            if ($i != $halaman) {
                                echo "<li class='page-item'><a class='page-link' href='index.php?include=kategoriBlog&halaman=$i'>$i</a></li>";
                            } else {
                                echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                            }
                        }
                    }
                    if ($halaman != $jum_halaman) {
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=kategoriBlog&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=kategoriBlog&halaman=$jum_halaman'>Last</a></li>";
                    }
                } ?>
            </ul>
        </div>
    </div>
    <!-- /.card -->

</section>