<?php
date_default_timezone_set("Asia/Jakarta");
include "shenames.php";


$_b = time();
$hour = date("G",$_b);
if ($hour>=0 && $hour<=11) {
	$waktu = "Pagi";
}elseif ($hour >=12 && $hour<=15) {
	$waktu = "Siang";
}elseif ($hour >=16 && $hour<=18) {
	$waktu = "Sore";
}elseif ($hour >=19 && $hour<=23) {
	$waktu = "Malam";
}


$str = array(
                       array("Chat Aku Atau","Aku Jual Hp Aku."),
                       array("If We Dont Talk Again Remember", "I Loved You"),
                       array("Seberat apapun Masalahmu", "Cerita Lah Padaku")
                       );
$key = array_rand($str, 1);
$msg = $str[$key];


$str2 = "Selamat Menunaikan Ibadah Puasa";
$txt = $waktu.' '.$she.' ❤';
$javascript = strtolower($waktu);
?>
<!DOCTYPE html>
<html class="no-js fixed" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<title><?php echo $waktu; ?></title>
<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='stylesheet' href='assets/css/color.css'>
<link rel='stylesheet' href='assets/css/title-size.css'>
<link rel='stylesheet' href='assets/css/custom.css'>
<link rel="icon" href="assets/img/favicon.ico">
<script>
function startTime() {
  var today = new Date();
  var d = today.getDate();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('tanggal').innerHTML = d;
  document.getElementById('jam').innerHTML = h;
  document.getElementById('menit').innerHTML = m;
  document.getElementById('detik').innerHTML = s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}
</script>
</head>
<body onload="startTime()">

  <!-- loader -->
  <div id="site-loader">
    <div class="loader"></div>
  </div>
  <!-- loader -->

  <!-- site wrap -->
  <div id="site-wrap">

    <!-- backgeound -->
    <div id="bg">
      <div id="img"></div>
      <div id="video"></div>
      <div id="overlay"></div>
      <div id="effect">
        <img src="assets/img/bg/cloud-01.png" alt="" id="cloud1">
        <img src="assets/img/bg/cloud-02.png" alt="" id="cloud2">
        <img src="assets/img/bg/cloud-03.png" alt="" id="cloud3">
        <img src="assets/img/bg/cloud-04.png" alt="" id="cloud4">
      </div>
      <canvas id="js-canvas"></canvas>
    </div>
    <!-- /background -->

    <!-- site header -->
    <header id="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <!-- header brand -->
            <div class="header-brand">
              <img class="header-logo logo-light" src="assets/img/logo.png" alt="">
              <img class="header-logo logo-dark" src="assets/img/logo-dark.png" alt="">
            </div>
            <!-- header brand -->

            <!-- header toggle-->
            <div class="header-toggle">
              <div id="menu-toggle" class="toggle">
                <i class="ion-ios-email"></i>
              </div>
            </div>
            <!-- /header toggle -->
          </div>
        </div>
      </div>
    </header>
    <!-- /site header -->

    <!-- subscribe -->
    <div id="form">
      <div id="subscribe">
        <div class="tb-cell">
          <p class="animation section-subtitle"><?php echo $msg[0]; ?></p>
          <h2 class="section-title"><?php echo $msg[1]; ?></h2>
        </div>
      </div>
    </div>
    <!-- /subscribe -->

    <!-- site main -->
    <main id="site-main">
      <!-- home -->
      <section id="home">
        <div class="section-wrap">
          <div class="section-cell">
            <div class="container">
              <!-- section header -->
              <div class="section-header row text-center">
                <div class="col-xs-12">
                  <p class="animation section-subtitle"><?php echo $str2; ?></p>
                  <h1 class="section-title">
                    <span class="section-title-span"><?php echo $txt; ?></span>
                    <!-- <span class="section-title-span">New Line Title</span> -->
                  </h1>
                  <div class="animation section-divider"></div>
                </div>
              </div>
              <!-- /setion header -->

              <!-- section main -->
              <div class="section-main row">
                <div class="col-xs-12">
                  <!-- countdown -->
                  <div id="countdown" class="animation-04">
                    <div class="row">
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount days" id="tanggal"></div>
                          <div class="countdown-period days_ref">Tanggal</div>
                        </div>
                      </div>
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount hours" id="jam"></div>
                          <div class="countdown-period hours_ref">Jam</div>
                        </div>
                      </div>
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount minutes" id="menit"></div>
                          <div class="countdown-period minutes_ref">Menit</div>
                        </div>
                      </div>
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount seconds" id="detik"></div>
                          <div class="countdown-period seconds_ref">Detik</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /countdown -->
                </div>
              </div>
              <!-- /setion main -->
            </div>
          </div>
        </div>
      </section>
      <!-- /home -->

    </main>
    <!-- /site main -->

    <!-- site footer -->
    <footer id="site-footer">
      <!-- footer social -->
      <a href="#" id="volume">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
      <div id="footer-social">
        <a href="#" title="" target="_blank"><i class="ion-social-twitter"></i></a>
        <a href="#" title="" target="_blank"><i class="ion-social-googleplus"></i></a>
        <a href="#" title="" target="_blank"><i class="ion-social-instagram-outline"></i></a>
        <a href="#" title="" target="_blank"><i class="ion-social-facebook"></i></a>
      </div>
      <!-- /footer social -->
    </footer>
    <!-- /site footer -->

    <!-- audio -->
    <audio id="audio-player" loop>
      <source src="assets/.audio/The Panturas - Sunshine.mp3" type="audio/mpeg">
    </audio>
    <!-- audio -->
  </div>
  <!-- /site wrap -->

  <!-- script -->
  <script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
  <!--[if lte IE 9]><!-->
  <script src='assets/js/vendor/html5shiv.min.js'></script>
  <!--<![endif]-->
  <script src='assets/js/vendor/bootstrap.min.js'></script>
  <script src='assets/js/vendor/vendor.js'></script>
  <script src='assets/js/variable.js'></script>
  <script src='assets/js/main-<?php echo $javascript; ?>.js'></script>
  <!-- /script -->

</body>
</html>