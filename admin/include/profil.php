<?php
$id_user = $_SESSION['id_user'];
//get profil
$sql_p = "SELECT * from `tabel_user` where `id_user`='$id_user'";
//echo $sql;
$query_p = mysqli_query($koneksi, $sql_p);
while ($data_p = mysqli_fetch_array($query_p)) {
    $nama = $data_p['nama_user'];
    $email = $data_p['email_user'];
    $foto = $data_p['foto_user'];
    $level = $data_p['level_user'];
}
//var_dump($data_p);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-user-tie"></i> Profil</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Profil</li>
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
                <a href="index.php?include=profilEdit" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Profil</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
            if (isset($_GET['notif'])) {
                if ($_GET['notif'] == "editberhasil") {
                    echo '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>';
                }
            }
            ?>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>PROFIL<strong></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Foto<strong></td>
                        <td width="80%"><img src="foto/<?php if ($foto == '') {
                                                            echo "default.png";
                                                        } else {
                                                            echo $foto;
                                                        } ?>" class="img-fluid" width="200px;"></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Level<strong></td>
                        <td width="80%"><?php echo $level; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">&nbsp;</div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->