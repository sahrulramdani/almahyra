<!-- Header Start -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- Logo Start -->
                    <a href="/" class="logo">
                        <img src="/images/homepage/logo5.png">
                    </a>
                    <!-- Logo End -->
                    <!-- Menu Start -->
                    <ul class="nav">
                        <?php foreach ($menu as $mn) : ?>
                        <li class="scroll-to-section"><a href="<?= $mn['link_menu']; ?>"
                                class="<?= $mn['status_active']; ?>"
                                style="visibility: <?= $mn['visibility']; ?>;"><?= $mn['nama_menu']; ?></a></li>
                        <?php endforeach; ?>
                        <li class="scroll-to-section">
                            <div class="button-red"><a href="#">Hubungi Kami</a></div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- Menu End -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->