<?= $this->extend('layout-home/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout-home/navbar_detail'); ?>

<main>
    <!-- VIDEO BANNER -->
    <section class="hero" id="hero">
        <div class="heroText mt-5 pt-5">
            <img src="/images/homepage/logo2.png" alt="logo2" class="logo">
            <h3 class="text-white mt-3" data-aos="fade-up" data-aos-delay="1000">
                Rasakan Indahnya Perjalanan Ke Tanah Suci Bersama <strong class="custom-underline">Kami</strong>
            </h3>
        </div>

        <div class="videoWrapper">
            <video autoplay="" loop="" muted="" class="custom-video" poster="/videos/container-pict.png">
                <source src="/videos/container-video.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>

        <div class="overlay"></div>
    </section>
    <!-- VIDEO BANNER -->

    <div id="produk" class="our-portfolio section">

        <!-- TAG  -->
        <div class="portfolio-left-dec">
            <img src="/images/homepage/portfolio-left-dec.png" alt="" style="width: 100px; height:100px" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>
                            Produk Untuk <em>Anda</em> Eksklusif
                            <span>Untuk Anda</span>
                        </h2>
                        <span>DETAIL PRODUK</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- TAG -->

        <!-- PRODUK -->
        <div id="produk" class="pricing-tables" style="padding-top:0px">
            <div class="tables-left-dec">
                <img src="/images/homepage/tables-right-dec.png" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 detail-produk m-auto d-block">
                        <div class="row p-2">
                            <div class="col-lg-6 p-2">
                                <h1 class="fw-bold color-red mb-5"><span><?= $produk['nama_produk']; ?></span></h1>

                                <div class="mt-4">
                                    <h3 class="mb-1 fw-bold blue-color-2">Tanggal Keberangkatan :</h2>
                                        <p class="p-detail"><?= formatTanggal($produk['tanggal_berangkat']); ?></p>
                                </div>

                                <div class="mt-4">
                                    <h3 class="mb-1 fw-bold blue-color-2">Tanggal Kepulangan :</h3>
                                    <p class="p-detail"><?= formatTanggal($produk['tanggal_pulang']); ?></p>
                                </div>

                                <div class="mt-4">
                                    <h3 class="mb-1 fw-bold blue-color-2">Catatan :</h3>
                                    <p class="p-detail"><?= $produk['catatan']; ?></p>
                                </div>

                            </div>
                            <div class="col-lg-6 p-2">
                                <img src="/images/homepage/produk2.jpeg" alt="" style="width:100%; object-fit:cover;"
                                    class="poster-produk">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUK -->

        <!-- KONTEN -->
    </div>

    <!-- PEMBIMBING -->
    <div id="produk" class="pricing-tables">
        <div class="tables-left-dec">
            <img src="/images/homepage/tables-left-dec.png" alt="" />
        </div>
        <div class="tables-right-dec">
            <img src="/images/homepage/tables-right-dec.png" alt="" />
        </div>
        <div class="container px-5">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>
                            Dibimbing Oleh <em>Pembimbing</em> Yang
                            <span>Berpengalaman</span>
                        </h2>
                        <span>PEMBIMBING</span>
                    </div>
                </div>
            </div>
            <div class="row pembimbing px-2">
                <div class="col-lg-4 mt-1">
                    <img src="https://www.unilak.ac.id/asset/foto_berita/ustad.jpg" alt="" class="m-auto d-block">
                </div>
                <div class="col-lg-8 info mt-1">
                    <div class="info-detail p-5">
                        <h3><?= $produk['nama_pembimbing']; ?></h3>
                        <p><?= $produk['pekerjaan']; ?></p>
                        <br>
                        <hr>
                        <p class="mt-4">Pembimbing Berpengalaman Kami Yang Siap Menemani Perjalanan Rohani Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PEMBIMBING -->

    <!-- BAGIAN LIST TATA CARA PENDAFTARAN -->
    <div id="pendaftaran" class="our-services section">
        <div class="services-right-dec">
            <img src="/images/homepage/services-right-dec.png" alt="" />
        </div>
        <div class="container">
            <div class="services-left-dec">
                <img src="/images/homepage/services-left-dec.png" alt="" />
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>
                            Pendaftaran Yang <em>Mudah</em> Dengan <span>Pelayanan Terbaik</span>
                        </h2>
                        <span>Cara Mendaftar</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-services">
                        <?php foreach ($mdaftar as $md) : ?>
                        <div class="item">
                            <h4><?= $md['judul']; ?></h4>
                            <div class="icon">
                                <i class="<?= $md['icon']; ?> list-icon-daftar fa-4x" aria-hidden="true"></i>
                            </div>
                            <p><?= $md['deskripsi']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BAGIAN LIST TATA CARA PENDAFTARAN -->

    <!-- TENTANG -->
    <div id="tentang" class="about-us section">
        <div class="container px-2">
            <div class="row px-2">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>
                            Perjalanan <em>Terbaik</em> Yang Kamu
                            <span>Dapatkan</span> Disini
                        </h2>
                        <div class="row detail-tentang mt-2 px-5">
                            <ul>
                                <li>Fasilitas Hotel Yang Nyaman</li>
                                <li>Penerbangan Yang Cepat Dan Aman</li>
                                <li>Customer Service Yang Professional Dan Responsif</li>
                                <li>Panduan Beribadah Yang Sesuai Syariat Dan Sunnah</li>
                                <li>Tour Guide Yang Terampil</li>
                                <li>Team Tour Yang Asik Dan Ceria</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="left-image">
                        <img src="/images/homepage/body-content-2.png" alt="Haji Dan Umroh" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TENTANG -->

    <div id="subscribe" class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h2>Daftar Dan Pesan Sekarang Juga</h2>
                                <form id="subscribe" action="" method="get">
                                    <a type="submit" id="form-submit" class="main-button d-block m-auto">
                                        Pesan Produk
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONI -->
    <div id="testimoni" class="our-portfolio section">
        <div class="portfolio-left-dec">
            <img src="/images/homepage/portfolio-left-dec.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>
                            Kata <em>Mereka</em> Yang Memilih
                            <span>Kami</span>
                        </h2>
                        <span>TESTIMONI</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-portfolio">
                        <div class="item">
                            <div class="thumb" style="width: 350px;">
                                <img src="/images/homepage/testimoni.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONI -->

    <!-- VIDEO -->
    <div id="video" class="our-videos section">
        <div class="videos-left-dec">
            <img src="/images/homepage/videos-left-dec.png" alt="" />
        </div>
        <div class="videos-right-dec">
            <img src="/images/homepage/videos-right-dec.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto"
                                                        src="https://www.youtube.com/embed/FiE-Pd9Amz0"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>

                                                    <div class="overlay-effect">
                                                        <a href="#">
                                                            <h4>Proses Perjalanan Rekan Rekan</h4>
                                                        </a>
                                                        <span>Prawira Tour &amp; Travel</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VIDEO -->

    <!-- FOOTER -->
    <footer>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>
                            Copyright © 2021 Prawira Umroh and Travel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->
</main>

<?php
function formatTanggal($date)
{
    $pecah = explode('-', $date);

    if ($pecah[1] == '01') {
        $bulan = 'Januari';
    } else if ($pecah[1] == '02') {
        $bulan = 'Februari';
    } else if ($pecah[1] == '03') {
        $bulan = 'Maret';
    } else if ($pecah[1] == '04') {
        $bulan = 'April';
    } else if ($pecah[1] == '05') {
        $bulan = 'Mei';
    } else if ($pecah[1] == '06') {
        $bulan = 'Juni';
    } else if ($pecah[1] == '07') {
        $bulan = 'Juli';
    } else if ($pecah[1] == '08') {
        $bulan = 'Agustus';
    } else if ($pecah[1] == '09') {
        $bulan = 'September';
    } else if ($pecah[1] == '10') {
        $bulan = 'Oktober';
    } else if ($pecah[1] == '11') {
        $bulan = 'November';
    } else if ($pecah[1] == '12') {
        $bulan = 'Desember';
    }

    return $pecah[2] . ' ' . $bulan . ' ' . $pecah[0];
}
?>

<?= $this->endSection(); ?>