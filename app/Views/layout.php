<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->renderSection('title'); ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url()?>/assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- Css-->

    <link rel="stylesheet" href="<?= base_url()?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="<?= base_url()?>/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/vegas.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/agrikol_iconl.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/responsive.css">
    <!-- <link rel="stylesheet" href="<?= base_url()?>/assets/css/custom.css"> -->
    
    <link rel="stylesheet" href="<?= base_url()?>/assets/DataTables/datatables.min.css">
	
	<?= $this->renderSection('main_css') ?> <!--untuk required main-->
</head>

<body>

    <div class="preloader">
        <img src="<?= base_url()?>/assets/images/loader.png" class="preloader__image" alt="">
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
		
		<?= view('App\Views\_header') ?> <!-- header -->

        <section class="page-header " <?= $this->renderSection('main_breadcrumb_set') ?>>
            <div class="container">
                <h2><?= $this->renderSection('main_menu') ?> <!--untuk required main_menu--></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <?= $this->renderSection('main_breadcrumb') ?> <!--untuk required main_breadcrumb-->
                </ul>
            </div>
        </section>
        
        <?= $this->renderSection('main') ?> <!--untuk required main-->
		
		<?= view('App\Views\_testimoni') ?> <!-- testimoni -->
        <?= view('App\Views\_aliansi') ?> <!-- aliansi -->
        <?= view('App\Views\_footer') ?> <!-- footer -->
    </div><!-- /.page-wrapper -->
    

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <?= view('App\Views\_menu_block') ?> <!-- menu_block -->

    <?= view('App\Views\_search') ?> <!-- search -->
	


    <script src="<?= base_url()?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url()?>/assets/js/TweenMax.min.js"></script>
    <script src="<?= base_url()?>/assets/js/wow.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url()?>/assets/js/swiper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/typed-2.0.11.js"></script>
    <script src="<?= base_url()?>/assets/js/vegas.min.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url()?>/assets/js/countdown.min.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url()?>/assets/js/nouislider.min.js"></script>
    <script src="<?= base_url()?>/assets/js/isotope.js"></script>
    <script src="<?= base_url()?>/assets/js/appear.js"></script>


    
    <script src="<?= base_url()?>/assets/DataTables/datatables.min.js"></script>
    
    <!-- template scripts -->
    <script src="<?= base_url()?>/assets/js/theme.js"></script>

    <?php
        $url = uri_string();

        if ($url == "/") :
    ?>
	<script>
		$(".search-popup").addClass("active");
	</script>
    <?php
        endif;
    ?>
	
	<?= $this->renderSection('main_js') ?> <!--untuk required main js-->

</body>

</html>