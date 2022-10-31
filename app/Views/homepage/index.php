<?= $this->extend('layout-home/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout-home/navbar'); ?>

<!-- BAGIAN BERANDA -->
<div class="main-banner" id="beranda">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="owl-carousel owl-banner">
                            <?php foreach ($bannerhead as $bh) : ?>
                            <div class="item header-text">
                                <h6 class="subjudul-bh"><?= $bh['subjudul']; ?></h6>
                                <h2>
                                    <span><?= $bh['judul']; ?></span>
                                </h2>
                                <p>
                                    <?= $bh['deskripsi']; ?>
                                </p>
                                <div class="down-buttons">
                                    <div class="main-blue-button-hover my-1">
                                        <a href="#pendaftaran">Cara Pendaftaran</a>
                                    </div>
                                    <div class="call-button my-1">
                                        <a href="<?= $bh['link_telp']; ?>"><i
                                                class="fa fa-phone"></i><?= $bh['no_telp']; ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BAGIAN BERANDA -->

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

<!-- BAGIAN PRODUK-->
<div id="produk" class="pricing-tables">
    <div class="tables-left-dec">
        <img src="/images/homepage/tables-left-dec.png" alt="" />
    </div>
    <div class="tables-right-dec">
        <img src="/images/homepage/tables-right-dec.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>
                        Produk Yang Kami <em>Tawarkan</em> Kepada
                        <span>Anda</span>
                    </h2>
                    <span>PRODUK</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12`">
                <div class="owl-carousel owl-services py-2">
                    <?php
                    foreach ($listProduk as $ls) :
                    ?>
                    <div class="item first-item card-product">
                        <h1 class="product-title"><?= $ls['jenis_produk'] == '01' ? 'Haji' : 'Umroh'; ?></h1>
                        <div class="product-periode">
                            <h5><?= $ls['nama_produk']; ?></h5>
                        </div>
                        <div class="product-button mt-5">
                            <a href="/detail/<?= $ls['id_produk']; ?>">Lihat Detail</a>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BAGIAN PRODUK -->

<!-- PEMBIMBING -->
<div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
        <img src="/images/homepage/portfolio-left-dec.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>
                        Dibimbing Oleh Para <em>Pembimbing</em> Professional Dan
                        <span>Kompeten</span>
                    </h2>
                    <span>PEMBIMBING</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-portfolio">
                    <div class="item">
                        <div class="thumb">
                            <img src="https://www.unilak.ac.id/asset/foto_berita/ustad.jpg" alt="" />
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing"
                                        target="_parent">
                                        <h4>Ustad Mansur</h4>
                                    </a>
                                    <span>Plot Listing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PEMBIMBING -->

<!-- ABOUT -->

<div id="tentang" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-image">
                    <img src="/images/homepage/body-content-1.png" alt="Haji Dan Umroh" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>
                        Kami Adalah Perusahaan <em>Tour And Travel</em> Yang
                        <span>Jujur</span> &amp; Amanah
                    </h2>
                    <p>
                        Kami Selalu Memperhatikan Kebutuhan Anda. Dan Kami Menjadikan Ini Sebagai Sarana Ibadah Kami
                    </p>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="fact-item">
                                <div class="count-area-content">
                                    <div class="icon mb-4">
                                        <i class="fa fa-id-card-o list-icon-daftar fa-4x" aria-hidden="true"></i>
                                    </div>
                                    <div class="count-title mt-2">Bersertifikasi</div>
                                    <p>Telah memiliki Ijin Penyelenggaraan Umroh dari Kementrian.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fact-item">
                                <div class="count-area-content">
                                    <div class="icon mb-4">
                                        <i class="fa fa-thumbs-o-up list-icon-daftar fa-4x" aria-hidden="true"></i>
                                    </div>
                                    <div class="count-title mt-2">Kualitas</div>
                                    <p>Memiliki Tim Dan Pembimbing Yang Berkualitas Dan Berpengalaman</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fact-item">
                                <div class="count-area-content">
                                    <div class="icon mb-4">
                                        <i class="fas fa-quran list-icon-daftar fa-4x" aria-hidden="true"></i>
                                    </div>
                                    <div class="count-title mt-2">Syar'i</div>
                                    <p>Mengikuti Sesuai Tuntunan Dan Sunnah Serta Tidak Melanggar Syariat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END ABOUT -->

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

<!-- KONTAK -->
<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>
                        Alamat Kami Yang <em>Bisa</em> Anda <span>Kunjungi</span>
                    </h2>
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.340407850531!2d106.96278531390364!3d-6.218762995498265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c7bef7a672f%3A0x9e9a47e1adcd261c!2sMasjid%20AL%20Ishlah%20Harapan%20Baru!5e0!3m2!1sid!2sid!4v1657812302607!5m2!1sid!2sid"
                            width="100%" height="360px" frameborder="0" style="border: 0" allowfullscreen=""></iframe>
                    </div>
                    <div class="info">
                        <span><i class="fa fa-phone"></i>
                            <a href="#">010-020-0340<br />090-080-0760</a></span>
                        <span><i class="fa fa-envelope"></i>
                            <a href="#">info@company.com<br />mail@company.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-dec">
        <img src="/images/homepage/contact-dec.png" alt="" />
    </div>
    <div class="contact-left-dec">
        <img src="/images/homepage/contact-left-dec.png" alt="" />
    </div>
</div>
<!-- KONTAK -->

<div class="footer-dec">
    <img src="/images/homepage/footer-dec.png" alt="" />
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="about footer-item">
                    <div class="logo-footer">
                        <a href="#"><img src="/images/homepage/logo5.png" alt="PrawiraTour" /></a>
                    </div>
                    <a href="#">info@company.com</a>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="services footer-item">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">SEO Development</a></li>
                        <li><a href="#">Business Growth</a></li>
                        <li><a href="#">Social Media Managment</a></li>
                        <li><a href="#">Website Optimization</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="community footer-item">
                    <h4>Community</h4>
                    <ul>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Business Ideas</a></li>
                        <li><a href="#">Website Checkup</a></li>
                        <li><a href="#">Page Speed Test</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="subscribe-newsletters footer-item">
                    <h4>Subscribe Newsletters</h4>
                    <p>Get our latest news and ideas to your inbox</p>
                    <form action="#" method="get">
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email"
                            required="" />
                        <button type="submit" id="form-submit" class="main-button">
                            <i class="fa fa-paper-plane-o"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright">
                    <p>
                        Copyright © 2021 Prawira Tour and Travel
                        <br />
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?= $this->endSection(); ?>