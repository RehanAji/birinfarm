<?= $this->extend($config->view_fr) ?>
<?= $this->section('title') ?>Ternakan ||<?=$config->title_web?><?= $this->endSection() ?>
<?= $this->section('main_menu') ?>Ternakan<?= $this->endSection() ?>
<?= $this->section('main_breadcrumb') ?> <!--breadcrumb-->
  <li><a href="/">Home</a></li>
  <li><span>Ternakan</span></li>
<?= $this->endSection() ?>

<!-- Konten anda -->
<?= $this->section('main') ?>
<?= view('App\Views\_ternakan') ?> <!-- ternakan -->
<?= $this->endSection() ?>
<!-- /.konten anda -->