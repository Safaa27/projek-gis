<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>pertamina</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="<?=base_url()?>assets/web/images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/<?=base_url()?>assets/web/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?=base_url()?>assets/web/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="<?=base_url()?>assets/web/images/logo_pertamina.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Beranda</a> </li>
                      <li> <a href="#about">Tentang Kami</a> </li>
                      <li> <a href="#important">Peta</a> </li>
                      <li> <a href="#learn">Profil Kami</a> </li>
                      <li> <a href="#contact">Kontak</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last">
                       <a href="#"><img src="<?=base_url()?>assets/web/images/search_icon.png" alt="#" /></a>
                       <a href="#">SPBU Terdekat</a></div>              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>SPBU Pertamina</h1>
                      <h2>WILAYAH JAKARTA PUSAT</h2>
                      <h3>(Energi Baru, Wujudkan Indonesia Maju!)</h3>

                      <a href="#">Lebih Lanjut</a> 
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/img5.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Sinergi Terdepan</h1>
                      <h3>#MenujuIndonesiaEmas2045</h3>

                      <a href="#">Program Kami</a><a href="#">Kontak</a>
                    </div>
                  </div>

                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/img6.jpg"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Berita Harian Pertamina</h1>
                      <a href="#">Telusuri</a> <a href="#">Info Terbaru</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/img4.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>Tentang <strong class="yellow">Kami</strong></h2>
          <p> Pertamina berkomitmen untuk mengembangkan energi baru dan terbarukan untuk mendukung ketahanan dan 
            kemandirian energi bangsa. PT.Pertamina, perusahaan induk sektor energi yang diresmikan oleh Kementerian 
            BUMN RI pada tanggal 12 Juni 2020, saat ini bertanggung jawab secara strategis atas enam subholding-nya. 
            Subholding Upstream dikelola oleh PT.Pertamina Hulu Energi, Subholding Gas dikelola oleh PT.Pertamina Gas Negara, 
            Subholding Refinery & Petrochemical dikelola oleh PT.Kilang Pertamina Internasional</p>
          <a href="Javascript:void(0)">Lebih Lanjut</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="<?=base_url()?>assets/web/images/about_pertamina.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>SPBU Pertamina <strong class="yellow">Jakarta Pusat</strong></h2>
          <span>Sebaran lokasi SPBU Pertamina di Jakarta Pusat tersebar merata di 
            berbagai titik strategis untuk memenuhi kebutuhan bahan bakar masyarakat</span>
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">
    <!-- memangil web -->
 <iframe src="<?=base_url()?>/home" width="1260" height="650"></iframe>
    <div class="container">
      <div class="row">
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->

<!-- learn -->


<div id="learn" class="learn">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Kredibilitas <strong class="yellow">Pertamina</strong></h2>
          <span>Pertamina berfokus pada upaya-upaya untuk memastikan ketersediaan energi 
            nasional yang inklusif berdasarkan prinsip availability, accessibility, 
            affordability, acceptability dan sustainability. Sebagai perusahaan BUMN yang 100% 
            sahamnya dimiliki oleh pemerintah Indonesia, Pertamina senantiasa menjaga akuntabilitas 
            perusahaan dengan menyediakan informasi yang akurat.</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="learn_box">
          <figure><img src="<?=base_url()?>assets/web/images/spbu_letjend60.jpg" alt="img"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MAKE --> 
<div class="make">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
        <div class="make_text">
          <p>Pertamina menghadirkan energi keceriaan baru, sebuah inisiatif yang berkomitmen 
            untuk memberikan solusi energi berkelanjutan dengan semangat inovasi dan kepedulian 
            terhadap lingkungan. Melalui layanan dan produk berkualitas tinggi, Pertamina 
            tidak hanya mendukung kebutuhan energi masyarakat, tetapi juga menciptakan pengalaman 
            yang penuh keceriaan dan keberlanjutan untuk masa depan yang semakin bersinergi.</p>
          <a href="Javascript:void(0)">Program Kami</a>
        </div>
      </div>
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
        <div class="make_img">
          <figure><img src="<?=base_url()?>assets/web/images/img5.jpg"></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end MAKE --> 
<!-- end learn --> 


<!-- contact -->
<div id="contact" class="contact">
  <div class="container-fluid padding_left2">
    <div class="white_color">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="map">
          </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <form class="contact_bg">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2>Kontak <strong class="yellow">Kami</strong></h2>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Email" type="text" name="Your Email">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Phone" type="text" name="Your Phone">
                </div>
                <div class="col-md-12">
                  <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button class="send">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <form class="news">
                <input class="newslatter" placeholder="SPBU Jakarta Pusat" type="text" name="SPBU Jakarta Pusat">
                <button class="submit">Pencarian</button>
              </form>
            </div>
            <div class="col-md-12">
              <h2>Energi Untuk Mendukung Masyarakat Lingkungan Lebih Baik</h2>
              <span>Pertamina hadir sebagai perusahaan energi yang tidak hanya berfokus 
                pada profitabilitas, tetapi juga pada pemberdayaan masyarakat melalui berbagai 
                program berbasis komunitas mencakup pelatihan keterampilan, peningkatan 
                kualitas pendidikan, serta pengembangan ekonomi lokal.</span>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Hubungi Kami </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="<?=base_url()?>assets/web/icon/loc.png" alt="#" /></a>Graha Pertamina, 
                        <br>Jakarta, Indonesia </li>
                        <li>
                          <a href="#"><img src="<?=base_url()?>assets/web/icon/email.png" alt="#" /></a>pcc135@pertamina.com </li>
                          <li>
                            <a href="#"><img src="<?=base_url()?>assets/web/icon/call.png" alt="#" /></a>135 (call center) </li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/fb.png"></a></li>
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/tw.png"></a></li>
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/lin(2).png"></a></li>
                            <li><a href="#"><img src="<?=base_url()?>assets/web/icon/instagram.png"></a></li>
                          </ul>

                       
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Informasi</h3>
                          <ul class="Links_footer">
                            <li class="active"><a href="#">Beranda</a> </li>
                            <li><a href="#">Tentang Kami</a> </li>
                            <li><a href="#">Peta</a> </li>
                            <li><a href="#"> Profil Kami</a> </li>
                            <li><a href="#">Kontak</a> </li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address">
                          <a href="index.html"> <img src="<?=base_url()?>assets/web/images/logo_pertamina.png" alt="logo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="<?=base_url()?>assets/web/js/jquery.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/popper.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/bootstrap.bundle.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/jquery-3.0.0.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/plugin.js"></script>
          <!-- sidebar -->
          <script src="<?=base_url()?>assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = '<?=base_url()?>assets/web/images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>