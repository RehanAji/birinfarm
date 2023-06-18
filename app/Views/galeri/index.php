<?= $this->extend($config->view_fr) ?>
<?= $this->section('title') ?>Galeri ||<?=$config->title_web?><?= $this->endSection() ?>
<?= $this->section('main_menu') ?>Galeri<?= $this->endSection() ?>
<?= $this->section('main_breadcrumb') ?> <!--breadcrumb-->
  <li><a href="/">Home</a></li>
  <li><span>Galeri</span></li>
<?= $this->endSection() ?>
 
<!-- Konten anda -->
<?= $this->section('main') ?>
<section class="gallery_two">
    <div class="container">
        <div class="row masonary-layout">
            <?php
                foreach ($data as $key => $value) :
            ?>
            <div class="col-xl-4 col-lg-6 col-md-6 masonary-item">
                <div class="gallery_two_single">
                    <div class="gallery_two_image">
                        <?= img($value->foto)?>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
            ?>

        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- /.konten anda -->