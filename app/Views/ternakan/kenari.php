<?= $this->extend($config->view_fr) ?>
<?= $this->section('title') ?>Ternakan Ayam ||<?= $config->title_web ?><?= $this->endSection() ?>
<?= $this->section('main_menu') ?>Ternakan Ayam<?= $this->endSection() ?>
<?= $this->section('main_breadcrumb') ?> <!--breadcrumb-->
<li><a href="/">Home</a></li>
<li><a href="/ternakan">Ternakan</a></li>
<li><span>Ayam</span></li>
<?= $this->endSection() ?>

<!-- Konten anda -->
<?= $this->section('main') ?>
<h5>nb* yang ditampilkan dikatalog hanya yang berada di kandang!
    <small>
        <a title="Bila ingin Mencari keaslian satwa anda silahkan, klik menu 'Beranda' & masukan kode ring satwa anda"><i class="fas fa-info"></i></a>
    </small>
</h5>
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sidebar-wrapper style2">
                    <div class="single-sidebar wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1200ms">
                        <div class="top_sellers">
                            <div class="title">
                                <h3>Ayam Jantan</h3>
                            </div>
                            <ul class="top-products">
                                <?php
                                foreach ($data as $key => $value) :
                                    if ($value->is_penjantan == 1) :
                                ?>
                                        <li>
                                            <div class="product_item">
                                                <div class="img-box">
                                                    <?php
                                                    $imageProperties = [
                                                        'src'    => 'ternak_foto/' . $value->foto_raw,
                                                        'alt'    => 'birin farm',
                                                        'class'  => 'rounded float-left img-thumbnail',
                                                    ];

                                                    echo img($imageProperties);
                                                    ?>
                                                    <div class="overlay-content">
                                                        <a href="<?= site_url('ternakan/detail/' . $value->id) ?>" title="detail"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4><a href="<?= site_url('ternakan/detail/' . $value->id) ?>" title="detail"><?= $value->ring . " " . $value->nama ?></a></h4>
                                                    <div class="value"><?= $value->tipe ?></div>
                                                </div>
                                            </div>
                                        </li>
                                <?php
                                    endif;
                                endforeach;
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!--End single sidebar-->
                </div>
            </div>
            <div class="col-md-12">
                <p>&nbsp;</p>
            </div>
            <div class="col-md-12">
                <table class="table datatables">
                    <thead>
                        <tr>
                            <th width='5%'>No</th>
                            <th width='25%'>Foto</th>
                            <th width='15%'>Type</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $key => $value) :
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td>
                                    <?php
                                    $imageProperties = [
                                        'src'    => 'ternak_foto/' . $value->foto_raw,
                                        'alt'    => 'birin farm',
                                        'class'  => 'rounded float-left img-thumbnail',
                                    ];

                                    echo img($imageProperties);
                                    ?>
                                </td>
                                <td><a href="<?= site_url('ternakan/detail/' . $value->id) ?>" title="detail"><?= $value->ring ?></a></td>
                                <td><?= $value->tipe ?></td>
                                <td><?= $value->nama . " " . $value->kelamin . " " . $value->deskripsi ?></td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- /.konten anda -->



<?= $this->section('main_js') ?>
<script>
    $(document).ready(function() {
        $('.datatables').DataTable();
    });
</script>
<?= $this->endSection() ?>