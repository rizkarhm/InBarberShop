<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Halaman Blog</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php?include=index">Beranda</a></span> <span>Halaman Blog</span></p>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_GET['data'])) {
    $id_blog = $_GET['data'];
    $sql_b = "SELECT * FROM `tabel_blog` WHERE `id_blog`='$id_blog'";
    $query_b = mysqli_query($koneksi, $sql_b);
    while ($data_b = mysqli_fetch_array($query_b)) {
        $judul = $data_b['judul'];
        $isi = $data_b['isi'];
        $gambar = $data_b['gambar'];
        $insert_at = $data_b['insert_at'];
        $insert_by = $data_b['insert_by'];
?>
        <section class="ftco-section">
            <div class="container">
                <div class="row d-flex">
                    <div>

                        <h2 class="mb-6 text-center"><?= $judul ?></h2>
                        <center>
                            <img src="admin/foto/<?php if ($gambar == '') {
                                                        echo "work-6.jpg";
                                                    } else {
                                                        echo $gambar;
                                                    } ?>" class="images-fluid" width="400;">
                        </center>
                        <br>
                        <br>
                        <?= $isi ?>
                    </div>

                </div>
            </div>
        </section>
<?php }
} ?>
</div>
</section>