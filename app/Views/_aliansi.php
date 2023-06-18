<?php
    $modelAliansi      = model('App\models\BrAliansiModel');
    $resultAliansi     = $modelAliansi->allData();
?>

<div class="brand-one">
    <div class="container">
        <h1>
            Aliansi
        </h1>
        <div class="row">
            <div class="col-xl-12">
                <!-- <div class="brand-one-carousel owl-carousel"> -->
                <div class="brand-one-carousel owl-carousel">
                    <?php
                        foreach ($resultAliansi as $keyAliansi => $valueAliansi) :
                    ?>
                    <div class="single_brand_item">
                        <a href="<?=$valueAliansi->url?>" target="_blank" title="<?=$valueAliansi->nama?>">
                            <?=img($valueAliansi->foto)?>
                        </a>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>