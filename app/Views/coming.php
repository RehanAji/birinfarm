<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('<?=base_url()?>/assets/images/main-slider/slide_v4_2.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<head>
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
</head>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>Logo</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p>
        <button class="btn btn-success" onclick="history.back()">Kembali</button>
    </p>
  </div>
  <div class="bottomleft">
    <p>Berternak jadi menyenangkan</p>
  </div>
</div>

</body>
</html>
