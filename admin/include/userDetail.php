<?php
if (isset($_GET['data'])) {
    $id_user = $_GET['data'];
    $_SESSION['user'] = $id_user;
    //get profil
    $sql = "SELECT * FROM `tabel_user` where `id_user`='$id_user'";
    //echo $sql;
    $query = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($query)) {
        $id_user = $data['id_user'];
        $nama = $data['nama_user'];
        $nim = $data['nim_user'];
        $job = $data['jobdesk'];
        $email = $data['email_user'];
        $password = $data['password_user'];
        $level = $data['level_user'];
        $foto = $data['foto_user'];
    }
?>
    </head>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3><i class="fas fa-user-tie"></i> Detail Data User</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php?include=user">Data User</a></li>
                        <li class="breadcrumb-item active">Detail Data User</li>
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
                    <a href="index.php?include=user" class="btn btn-sm btn-warning float-right">
                        <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data User<strong></td>
                        </tr>
                        <tr>
                            <td><strong>Foto User<strong></td>
                            <td><img src="foto/<?php
                                                if ($foto == '') {
                                                    echo "default.png";
                                                } else {
                                                    echo $foto;
                                                } ?>" class=" img-fluid" width="200px;"></td>
                        </tr>
                        <tr>
                            <td width="20%"><strong>Nama<strong></td>
                            <td width="80%"><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td width="20%"><strong>NIM<strong></td>
                            <td width="80%"><?php echo $nim; ?></td>
                        </tr>
                        <tr>
                            <td width="20%"><strong>Jobdesk<strong></td>
                            <td width="80%"><?php echo $job; ?></td>
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

<?php } ?>