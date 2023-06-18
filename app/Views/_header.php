
<div class="site-header__header-one-wrap">
    <div class="topbar-one">
        <div class="topbar_bg" ></div> 
        <div class="container">
            <div class="topbar-one__left">
                <a href="mailto:dinnushobirin94@gmail.com"><i class="far fa-envelope"></i> dinnushobirin94@gmail.com</a>
                <a href="tel:081903711608"><i class="fas fa-phone-alt"></i> 081903711608</a>
            </div>
            <div class="topbar-one__middle">
                <a href="index.html" class="main-nav__logo">
                    <img src="<?= base_url()?>/assets/images/resources/logo.png" class="main-logo" alt="Birin Farm" />
                </a>
            </div>
            <div class="topbar-one__right">
                <div class="topbar-one__social">
                    <?= view('App\Views\_sosmed') ?> <!-- sosmed -->
                </div>
            </div>
        </div>
    </div>

    <header class="main-nav__header-one">
        <nav class="header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="main-nav__left">
                    <a href="#" class="side-menu__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="main-nav__main-navigation">
                    <ul class=" main-nav__navigation-box">
                        <li>
                            <a href="<?=site_url('/')?>">Beranda</a>
                        </li>
                        <li>
                            <a href="<?=site_url('/galeri/index')?>">Galeri</a>
                        </li>
                        <li>
                            <a href="<?=site_url('/artikel/index')?>">Artikel</a>
                        </li>
                        <li class="dropdown ">
                            <a href="<?=site_url('/ternakan/index')?>">Ternakan</a>
                            <ul>
                                <li><a href="<?=site_url('/ternakan/getAyam')?>">Ayam</a></li>
                                <li><a href="<?=site_url('/ternakan/lele')?>">Lele</a></li>
                                <li><a href="<?=site_url('/ternakan/kenari')?>">Kenari</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="main-nav__right">
                    <div class="icon_cart_box">
                        <a href="#" class=" search-popup__toggler">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>