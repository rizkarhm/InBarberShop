<?php
if (isset($_GET['data'])) {
    $id_booking = $_GET['data'];
    //gat data buku
    $sql_b = "SELECT * FROM `tabel_booking` where `id_booking`='$id_booking'";
    $query_b = mysqli_query($koneksi, $sql_b);
    $no = 1;
    while ($data_b = mysqli_fetch_array($query_b)) {
        $id_paket = $data_b['id_paket'];
        $tanggal = $data_b['tanggal_booking'];
        $jam = $data_b['jam_booking'];
        $keterangan = $data_b['keterangan_booking'];
        $timestamp = $data_b['time'];
        $nama = $data_b['nama'];
    }
    //echo $sql_b;
}

function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-user-tie"></i> Detail Data booking</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=profile">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php?include=booking">Data booking</a></li>
                    <li class="breadcrumb-item active">Detail Data booking</li>
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
                <a href="index.php?include=booking" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="20%"><strong>Nama Pemesan<strong></td>
                        <td width="80%"><?= $nama ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Pilihan Paket<strong></td>
                        <td width="80%"><?php
                                        $sql_nama = "SELECT `nama_paket` from `tabel_harga` where `id_paket`='$id_paket'";
                                        $query_nama = mysqli_query($koneksi, $sql_nama);
                                        while ($d_nama = mysqli_fetch_row($query_nama)) {
                                            $nama = $d_nama[0];
                                        }
                                        echo $nama;
                                        ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Harga Paket<strong></td>
                        <td width="80%"><?php
                                        $sql_harga = "SELECT `harga_paket` from `tabel_harga` where `id_paket`='$id_paket'";
                                        $query_harga = mysqli_query($koneksi, $sql_harga);
                                        while ($d_harga = mysqli_fetch_row($query_harga)) {
                                            $harga = $d_harga[0];
                                        }
                                        echo rupiah($harga);
                                        ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Taggal Booking<strong></td>
                        <td width="80%"><?= $tanggal ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Jam Booking<strong></td>
                        <td width="80%"><?= $jam ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Keterangan<strong></td>
                        <td width="80%"><?php if ($keterangan == NULL) {
                                            echo '-';
                                        } else {
                                            echo $keterangan;
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