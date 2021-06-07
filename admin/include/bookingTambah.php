<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> Tambah booking</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=booking">Data booking</a></li>
                    <li class="breadcrumb-item active">Tambah booking</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data booking</h3>
            <div class="card-tools">
                <a href="index.php?include=booking" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="col-sm-10">
            <br>
            <?php
            if (isset($_GET['notif'])) {
                if ($_GET['notif'] == "tambahkosong") {
                    echo '<div class="alert alert-danger" role="alert">Maaf data ' . $_GET['jenis'] . ' wajib di isi</div>';
                } else if ($_GET['notif'] == "jampenuh") {
                    echo '<div class="alert alert-danger" role="alert">Maaf janji pada tanggal ' . $_GET['tanggal'] . ' pukul ' . $_GET['jam'] . ' sudah penuh</div>';
                }
            }
            ?>
        </div>
        <form class="form-horizontal" action="index.php?include=bookingKonfirmasiTambah" method="post" enctype="multipart/form-data">
            <div class="card-body">

                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="nama" id="judul" value="" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="telepon" id="judul" value="" placeholder="Nomor Telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Pilih Paket</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="kategori" name="pilih_paket">
                            <option value="">- Pilih Paket -</option>
                            <?php
                            $sql_k = "SELECT * FROM `tabel_harga` ORDER BY `nama_paket`";
                            $query_k = mysqli_query($koneksi, $sql_k);
                            while ($data_k = mysqli_fetch_array($query_k)) {
                                $id_paket = $data_k['id_paket'];
                                $paket = $data_k['nama_paket'];
                            ?>
                                <option value="<?php echo $id_paket; ?>"><?php echo $paket; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tahun_terbit" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <div class="input-group date">
                            <input type="date" class="date-own form-control" name="tanggal" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Pilih Waktu</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="time"><?php echo get_times(); ?></select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="keterangan" id="editor1" rows="12"></textarea>
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
<?php

function get_times($default = '08:00', $interval = '+30 minutes')
{

    $output = '';

    $current = strtotime('08:00');
    $end = strtotime('20:30');

    while ($current <= $end) {
        $time = date('H:i', $current);
        $sel = ($time == $default) ? ' selected' : '';

        $output .= "<option value=\"{$time}\"{$sel}>" . date('h.i A', $current) . '</option>';
        $current = strtotime($interval, $current);
    }

    return $output;
}
?>