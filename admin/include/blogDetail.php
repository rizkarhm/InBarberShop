<?php
if (isset($_GET['data'])) {
    $id_blog = $_GET['data'];
    //gat data buku
    $sql_b = "SELECT `b`.`id_blog`, `b`.`insert_at`, `b`.`update_at`, `b`.`update_by`,`k`.`kategori`,`b`.`judul`, `b`.`insert_by`,`b`.`isi`,`b`.`gambar` FROM `tabel_blog` `b` INNER JOIN `tabel_kategori_blog` `k` ON `b`.`id_kategori`=`k`.`id_kategori` INNER JOIN `tabel_user` `u` ON `b`.`insert_by`= `u`.`id_user`
    WHERE `id_blog`='$id_blog'";
    $query_b = mysqli_query($koneksi, $sql_b);
    $no = 1;
    while ($data_b = mysqli_fetch_array($query_b)) {
        $gambar = $data_b['gambar'];
        $kategori_blog = $data_b['kategori'];
        $judul = $data_b['judul'];
        $isi = $data_b['isi'];
        $insert_by = $data_b['insert_by'];
        $insert_at = $data_b['insert_at'];
        $update_by = $data_b['update_by'];
        $update_at = $data_b['update_at'];
    }
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-user-tie"></i> Detail Data Blog</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=profile">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php?include=blog">Data Blog</a></li>
                    <li class="breadcrumb-item active">Detail Data Blog</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="index.php?include=blog" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="20%"><strong>Gambar<strong></td>
                        <td width="80%"><img src="foto/<?php
                                                        if ($gambar == '') {
                                                            echo "image.png";
                                                        } else {
                                                            echo $gambar;
                                                        } ?>" class=" img-fluid" width="200px;"></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Kategori Blog<strong></td>
                        <td width="80%"><?= $kategori_blog ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?= $judul ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Isi<strong></td>
                        <td width="80%"><?= $isi ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Insert By<strong></td>
                        <td width="80%"><?php
                                        $sql_nama = "SELECT `nama_user` from `tabel_user` where `id_user`='$insert_by'";
                                        $query_nama = mysqli_query($koneksi, $sql_nama);
                                        while ($d_nama = mysqli_fetch_row($query_nama)) {
                                            $nama = $d_nama[0];
                                        }
                                        echo $nama;
                                        ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Insert At<strong></td>
                        <td width="80%"><?php echo $insert_at; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Update By<strong></td>
                        <td width="80%"><?php                                        
                                        if ($update_by == null) {
                                            echo '-';
                                        } else {
                                            $sql_nama = "SELECT `nama_user` from `tabel_user` where `id_user`='$update_by'";
                                            $query_nama = mysqli_query($koneksi, $sql_nama);
                                            while ($d_nama = mysqli_fetch_row($query_nama)) {
                                                $nama = $d_nama[0];
                                            }
                                            echo $nama;
                                        }
                                        ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Update At<strong></td>
                        <td width="80%"><?php if ($update_at == '0000-00-00 00:00:00') {
                                            echo '-';
                                        } else {
                                            echo $update_at;
                                        }
                                        ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">&nbsp;</div>
    </div>
    <!-- /.card -->

</section>