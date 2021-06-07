<?php
if (isset($_GET['data'])) {
    $id_booking = $_GET['data'];
    $_SESSION['id_booking'] = $id_booking;
    //get data buku
    $sql_m = "SELECT * FROM `tabel_booking` WHERE `id_booking`='$id_booking'";
    $query_m = mysqli_query($koneksi, $sql_m);
    while ($data_b = mysqli_fetch_array($query_m)) {
        $id_book = $data_b['id_booking'];
        $nama = $data_b['nama'];
        $telepon = $data_b['telepon'];
        $id_paket = $data_b['id_paket'];
        $tanggal = $data_b['tanggal_booking'];
        $jam = $data_b['jam_booking'];
        $keterangan = $data_b['keterangan_booking'];
        $timestamp = $data_b['time'];
    }
}
?>
<!DOCTYPE html>
<html>


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Data booking</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=booking">Data booking</a></li>
                    <li class="breadcrumb-item active">Edit Data booking</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data booking</h3>
            <div class="card-tools">
                <a href="index.php?include=booking" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <br>
        <div class="col-sm-10">
            <?php
            if (isset($_GET['notif'])) {
                if ($_GET['notif'] == "editkosong") {
                    echo '<div class="alert alert-danger" role="alert">Maaf data ' . $_GET['jenis'] . ' wajib di isi</div>';
                } else if ($_GET['notif'] == "jampenuh") {
                    echo '<div class="alert alert-danger" role="alert">Maaf janji pada tanggal ' . $_GET['tanggal'] . ' pukul ' . $_GET['jam'] . ' sudah penuh</div>';
                }
            }
            ?>
        </div>
        <form class="form-horizontal" action="index.php?include=bookingKonfirmasiEdit" method="post" enctype="multipart/form-data">
            <br>
            <div class="card-body">
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Nama Pemesan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="nama" id="judul" value="<?php echo $nama; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="telepon" id="judul" value="<?php echo $telepon; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Pilih Paket</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="kategori" name="id_paket">
                            <option value="">- Pilih Paket -</option>
                            <?php
                            $sql_k = "SELECT * FROM `tabel_harga` ORDER BY `nama_paket`";
                            $query_k = mysqli_query($koneksi, $sql_k);
                            while ($data_k = mysqli_fetch_array($query_k)) {
                                $idPaket = $data_k['id_paket'];
                                $paket = $data_k['nama_paket'];
                            ?>
                                <option value="<?php echo $idPaket; ?>" <?php if ($id_paket == $idPaket) { ?> selected <?php } ?>><?php echo $paket; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="tanggal" id="judul" value="<?php echo $tanggal; ?>">
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
                        <textarea class="form-control" name="keterangan" id="editor1" rows="12"><?php echo $keterangan; ?></textarea>
                    </div>
                </div>
            </div>
    </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </div>
    <!-- /.card-footer -->
    </form>
    </div>
    <!-- /.card -->

</section>
<?php

function get_times($default = '$jam', $interval = '+30 minutes')
{

    $output = '';

    $current = strtotime('08:00');
    $end = strtotime('21:00');

    while ($current <= $end) {
        $time = date('H:i', $current);
        $sel = ($time == $default) ? ' selected' : '';

        $output .= "<option value=\"{$time}\"{$sel}>" . date('h.i A', $current) . '</option>';
        $current = strtotime($interval, $current);
    }

    return $output;
}
?>