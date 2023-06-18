<?php
    $model      = model('App\models\BrTestimoniModel');
    $result     = $model->allData();
?>


<section class="testimonials-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="testimonials_one_left">
                    <div class="block-title text-left">
                        <p>testimoni</p>
                        <h3>Tanggapan Pelanggan<br>tentang kami</h3>
                        <div class="leaf">
                            <img src="assets/images/resources/leaf.png" alt="">
                        </div>
                    </div>
                    <div class="testimonials_one_text">
                        <p>Testimoni adalah sesuatu yang diberikan atau dilakukan sebagai ungkapan terima kasih atau penghargaan.</p>
                    </div>
                    <div class="project_counted wow fadeInUp" data-wow-delay="300ms">
                        <div class="icon_box">
                            <span class="">
                                <i class="fas fa-users"></i>
                            </span>
                        </div>
                        <!-- <div class="project-content">
                            <h3 class="counter">100</h3>
                            <p>Pembeli</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="testimonials_one_content">
                    <div class="testimonials_one_carousel owl-theme owl-carousel">

                    <?php
                        foreach ($result as $key => $value) :
                    ?>
                        <div class="testimonials_one_single_item">
                            <div class="text"><p>
                                <?=$value->deskripsi?></p>
                            </div>
                            <div class="client_thumbnail">
                                <div class="client_img float-left rounded ">
                                    <?php
                                        $imageProperties = [
                                            'src'    => 'testimoni/'.$value->foto_raw,
                                            'alt'    => 'birin farm',
                                            'class'  => '  ',
                                        ];
                                        
                                        echo img($imageProperties);    
                                    ?>
                                </div>
                                <div class="client_title">
                                    <h4><?=$value->nama?></h4>
                                    <p><?=$value->posisi?></p>
                                </div>
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
</section>