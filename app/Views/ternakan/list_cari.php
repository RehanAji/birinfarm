<?= $this->extend($config->view_fr) ?>
<?= $this->section('title') ?>Pencarian Ring : <?=$ring?> ||<?=$config->title_web?><?= $this->endSection() ?>
<?= $this->section('main_menu') ?>Pencarian Ring : <?=$ring?><?= $this->endSection() ?>
<?= $this->section('main_breadcrumb') ?> <!--breadcrumb-->
  <li><a href="/">Home</a></li>
  <li><span>Pencarian Ring</span></li>
<?= $this->endSection() ?>

<!-- Konten anda -->
<?= $this->section('main') ?>

<section class="blog-one news">
    <div class="container">
        <div class="row">

            <?php
                foreach ($data as $key => $value) :
            ?>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog_one_single mb-30">
                        <div class="blog_one_image">
                            <div class="blog_image">
                                <?= img($value->foto)?>
                                <div class="blog_one_date_box">
                                    <p><?=MASTanggal($value->created_at,2)?></p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <h3><a href="<?=base_url('ternakan/detail/'.$value->id)?>"><?=$value->nama?></a></h3>
                                <div class="read_more_btn">
                                    <a href="<?=base_url('ternakan/detail/'.$value->id)?>"><i class="fa fa-angle-right"></i>Selengkapnya</a>
                                </div>
                            </div>
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