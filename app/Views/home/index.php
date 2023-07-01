<?= $this->extend($config->view_fr) ?>
<?= $this->section('title') ?><?= $config->title_web ?><?= $this->endSection() ?>
<?= $this->section('main_menu') ?>Home<?= $this->endSection() ?>
<?= $this->section('main_breadcrumb_set') ?>style = "display:none;";<?= $this->endSection() ?>

<!-- Konten anda -->
<?= $this->section('main') ?>

<!-- Banner Section -->
<section class="banner-section banner-one">

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(assets/images/main-slider/slide_v1_1.jpg);">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">Hasil terbaik dari ketulusan merawat</div>
                            <h1>Selamat Datang di<br><small>birin farm</small></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(assets/images/main-slider/slide_v1_2.jpg);">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">Hasil terbaik, dari kami untuk anda</div>
                            <h1>Selamat Datang di<br><small>birin farm</small></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(assets/images/main-slider/slide_v1_3.jpg);">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">Hasil terbaik dari ketulusan merawat</div>
                            <h1>Selamat Datang di<br><small>birin farm</small></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!--End Banner Section -->


<?= view('App\Views\_ternakan') ?> <!-- ternakan -->

<?= $this->endSection() ?>
<!-- /.konten anda -->