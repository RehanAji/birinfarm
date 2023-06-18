<?= $this->extend($config->view_fr) ?>
<?= $this->section('title') ?>Artikel ||<?=$config->title_web?><?= $this->endSection() ?>
<?= $this->section('main_menu') ?>Artikel<?= $this->endSection() ?>
<?= $this->section('main_breadcrumb') ?> <!--breadcrumb-->
  <li><a href="/">Home</a></li>
  <li><span>Artikel</span></li>
<?= $this->endSection() ?>

<!-- Konten anda -->
<?= $this->section('main') ?>
<section class="news_detail">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news_detail_left">
                    <div class="news_detail_image_box">
                        <?= img($data->foto)?>
                        <div class="news_detail_date_box">
                            <p><?=MASTanggal($data->created_at,2)?></p>
                        </div>
                    </div>
                    <ul class="list-unstyled news_detail__meta">

                    </ul>
                    <div class="news_detail_content">
                        <h2><?=$data->nama?></h2>
                        <p class="news_detail_one_text">
                            <?=$data->deskripsi?>
                        </p>
                    </div>
                    <div class="news_detail__bottom">
                        <p class="news_detail__tags">
                            <span>Berbagi:</span>
                        </p>
                        <div class="news_detail__social-list">
                            <?php 
                                foreach ($sosmed as $key => $value) :
                            ?>
                            <a target="_blank" title="<?=$value['title']?>" href="<?=$value['url']?>" >
                                <i class="<?=$value['icon']?>"></i>
                            </a>
                            <?php
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Artikel Sebelumnya</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <?php
                                foreach ($dataLatest as $keyLatest => $valueLatest) :
                            ?>
                            <li>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="#" class="sidebar__post-content_meta">
                                            <i class="far fa-clock"></i> 
                                            <?=MASTanggal($data->created_at,1)?>
                                        </a>
                                        <a href="<?=base_url('artikel/detail/'.$valueLatest->id)?>"><?=$valueLatest->nama?></a>
                                    </h3>
                                </div>
                            </li>
                            
                            <?php
                                endforeach;
                            ?>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- /.konten anda -->