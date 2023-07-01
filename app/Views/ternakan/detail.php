<?= $this->extend($config->view_fr) ?>
<?= $this->section('title') ?>Ternakan Ayam ||<?= $config->title_web ?><?= $this->endSection() ?>
<?= $this->section('main_menu') ?>Ternakan Ayam<?= $this->endSection() ?>
<?= $this->section('main_breadcrumb') ?> <!--breadcrumb-->
<li><a href="/">Home</a></li>
<li><a href="/ternakan">Ternakan</a></li>
<li><a href="/ternakan/kenari">Ayam</a></li>
<li><span>Detail</span></li>
<?= $this->endSection() ?>

<!-- Konten anda -->
<?= $this->section('main') ?>
<section class="product_detail">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="product_detail_image">
                    <?php
                    $imageProperties = [
                        'src'    => 'ternak_foto/' . $data->foto_raw,
                        'alt'    => 'birin farm',
                        'class'  => 'rounded float-left img-thumbnail',
                    ];

                    echo img($imageProperties);
                    ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="product_detail_content">
                    <h2><?= (!empty($data->nama)) ? $data->nama : "[tidak punya nama]"; ?></h2>
                    <div class="product_detail_review_box">
                        <div class="product_detail_price_box">
                            <ul class="list-unstyled category_tag_list">
                                <li>Jenis Kelamin: <?= $data->kelamin ?></li>
                                <li>Tipe: <?= $data->tipe ?></li>
                                <li>Tempat Tanggal Menetas: <?= $data->tempat_lahir ?>, <?= $data->tanggal_lahir ?></li>
                                <li>Babon: <a href="<?= base_url('/ternakan/detail/' . $data->id_babon) ?>" title="Detail"><span><?= $data->babon_nama . " " . $data->babon_tipe ?></a></li>
                                <li>Penjantan: <a href="<?= base_url('/ternakan/detail/' . $data->id_jantan) ?>" title="Detail"><span><?= $data->jantan_nama . " " . $data->jantan_tipe ?></a></li>
                                <li>Nomor Resi: <?= $data->ring ?></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="product-tab-box tabs-box">
                    <ul class="tab-btns tab-buttons clearfix list-unstyled">
                        <li data-tab="#desc" class="tab-btn active-btn"><span>description</span></li>
                        <li data-tab="#addi__info" class="tab-btn"><span>Additional info</span></li>
                    </ul>

                    <div class="tabs-content">
                        <div class="tab active-tab" id="desc">
                            <div class="product-details-content">
                                <div class="desc-content-box">
                                    <p><?= $data->deskripsi ?></p>
                                    <h3>Keturunan :</h3>
                                    <table class="table datatables">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Resi</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            if (!empty($data_keturunan)) :
                                                foreach ($data_keturunan as $key => $value) :
                                            ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $value->ring ?></td>
                                                        <td><a href="<?= base_url('/ternakan/detail/' . $value->id) ?>" title="Detail"><?= $value->nama . " " . $value->tipe . " " . $value->kelamin ?></a></td>
                                                    </tr>
                                            <?php
                                                    $no++;
                                                endforeach;
                                            endif;
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

                        <div class="tab" id="addi__info">
                            <ul class="additionali_nfo list-unstyled">
                                <?php
                                if (!empty($data_info)) :
                                    foreach ($data_info as $key => $value) :
                                ?>
                                        <li><span><?= $value->info ?>:</span><?= $value->nama ?></li>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>

                            <div class="container">
                                <div class="block-title text-center">
                                    <h3>Kerabat Dari :</h3>
                                </div>
                                <div class="all_products">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Babon</h4>
                                            <table class="table datatables">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Resi</th>
                                                        <th>Deskripsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_kerabat as $key => $value) :
                                                        if ($value['dari'] == "Betina") :
                                                    ?>
                                                            <tr>
                                                                <td><?= $no ?></td>
                                                                <td><?= $value['ring'] ?></td>
                                                                <td><a href="<?= base_url('/ternakan/detail/' . $value['id']) ?>" title="Detail"><span><?= $value['nama'] . " " . $value['tipe'] . " " . $value['kelamin'] ?></a></td>
                                                            </tr>
                                                    <?php
                                                            $no++;
                                                        endif;
                                                    endforeach;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Pejantan</h4>
                                            <table class="table datatables">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Resi</th>
                                                        <th>Deskripsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_kerabat as $key => $value) :
                                                        if ($value['dari'] == "Jantan") :
                                                    ?>
                                                            <tr>
                                                                <td><?= $no ?></td>
                                                                <td><?= $value['ring'] ?></td>
                                                                <td><a href="<?= base_url('/ternakan/detail/' . $value['id']) ?>" title="Detail"><span><?= $value['nama'] . " " . $value['tipe'] . " " . $value['kelamin'] ?></a></td>
                                                            </tr>
                                                    <?php
                                                            $no++;
                                                        endif;
                                                    endforeach;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="all_products_two">

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