<?php
include "admin/php/main.php";
$url_segments_desk = explode('/', $_SERVER['REQUEST_URI']);
$last_segment = end($url_segments_desk);
$target_pages = array(
  'blog-detail.php',
  'blog-grid.php',
  'contacts.php',
  'faqs.php',
  'gallery-grid.php',
  'index.php',
  'our-story.php',
  'reservation.php',
  'shop-details.php',
  'shop.php',
  'shopping-cart.php'
);
if (in_array($last_segment, $target_pages)) {
  $deskurl = '';
} else {
  $last_two_segments = array_slice($url_segments, -2, 1);
  $product_id_last = end($last_two_segments);
  $product_id = end($url_segments);
  $desk_id_last = validate($product_id_last);
  $desk_id = validate($product_id);
  $deskurl = "?/" . $desk_id_last . "/" . $desk_id;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Babette">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Hikayemiz | Asperula Cafe</title>
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kristi%7cPoppins:400,500,600,700%7cYeseva+One&display=swap">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Freehand&family=Pacifico&family=Zeyada&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Freehand&family=Pacifico&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Zeyada&display=swap');

    .zeyada-regular {
      font-family: "Zeyada", cursive;
      font-weight: 400;
      font-style: normal;
    }

    .reddit-sans-uniquifier {
      font-family: "Reddit Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: weight;
      font-style: normal;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php<?php echo $deskurl ?>">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="index.php<?php echo $deskurl ?>" class="nav__item-link active">Anasayfa</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Hakkımızda</a>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="our-story.php<?php echo $deskurl ?>" class="nav__item-link">Hikayemiz</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="faqs.php<?php echo $deskurl ?>" class="nav__item-link">FAQs</a></li> <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="shop.php<?php echo $deskurl ?>" class="nav__item-link">Menü</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="gallery-grid.php<?php echo $deskurl ?>" class="nav__item-link">Galeri</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="blog-grid.php<?php echo $deskurl ?>" class="nav__item-link">Blog</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="contacts.php<?php echo $deskurl ?>" class="nav__item-link">İletişim</a>
              </li><!-- /.nav-item -->
              <!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-actions-wrap">
            <div class="navbar-actions d-flex align-items-center">
              <a href="reservation.php<?php echo $deskurl ?>" class="navbar__action-btn navbar__action-btn-reserve btn">Rezervasyon</a>
              <a href="#" class="navbar__action-btn hamburger-menu-trigger"><i class="fa fa-bars"></i></a>
              <a href="shopping-cart.php<?php echo $deskurl ?>" class="navbar__action-btn"><i class="fa fa-shopping-cart"></i></a>
            </div><!-- /.navbar-actions -->
          </div><!-- /.navbar-actions-wrap -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/Photos/Slider-2.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="pagetitle__subheading">Asperula Cafe: Lezzet Dolu Bir Hikaye</span>
            <h1 class="pagetitle__heading">Tatlı Anılarla Başlayan Bir Serüven</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php<?php echo $deskurl ?>">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Hakkımızda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hikayemiz</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =====================
       About
    ======================== -->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout1 text-center mb-20">
              <span class="heading__subtitle">Asperula Cafe'ye Hoş Geldiniz!</span>
              <h2 class="heading__title">Sıcak İçeceklerin, Tatlıların ve Samimi Sohbetlerin Adresi</h2>
              <div class="heading__icon">
                <img src="assets/images/shapes/shape2.png" alt="heading img">
              </div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6  -->
        </div><!-- /.row -->
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-4 text-center">
            <div class="mr-30" data-aos="fade-right">
              <img src="assets/images/logo/footer-logo.png" alt="logo" class="mb-10">
              <p><b>Asperula Cafe, Kırşehir'in kalbindeki bir butik kafe. Misafirlerimize enfes içecekler ve tatlılar sunarken samimi bir
                  ortamda keyifli anlar yaşatmayı hedefliyoruz.</b></p>
              <img src="assets/images/about/signature.png" alt="logo">
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="reservation__banner" data-aos="fade-up">
              <img class="reservation__banner-img" src="assets/images/backgrounds/pattern/3.jpg" alt="background">
              <div class="reservation__banner-inner">
                <span class="reservation__banner-inner-subtitle">Asperula Kafe</span>
                <h5 class="reservation__banner-inner-title">Açılış Saatleri</h5>
                <ul class="list-unstyled">
                  <li><span>Hafta İçi</span><span>09.00 – 24:00</span></li>
                  <li><span>Hafta Sonu</span><span>09.00 – 24:00</span></li>
                </ul>
                <div class="reservation__banner-contact">
                  <span class="reservation__banner-contact-label">Şimdi Ara</span>
                  <a class="reservation__banner-contact-phone" href="tel:05543836580">0554 383 65 80</a>
                </div><!-- /.reservation__banner-contact -->
              </div><!-- /.reservation__banner-inner -->
            </div><!-- /.banner__img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="text-center-xs-sm-md ml-30" data-aos="fade-left">
              <p class="mb-20">Asperula Cafe, 2010 yılında iki kardeşin hayal gücü ve tutkusuyla doğdu. Biz, lezzetli içecekler ve tatlılarla birlikte
                sıcak bir atmosfer sunarak müşterilerimizin ruhunu ve midelerini tatmin etmeyi amaçlıyoruz. Her bir içeceğimizi ve
                tatlımızı özenle hazırlıyor ve misafirlerimize sadece bir mola değil, unutulmaz bir deneyim yaşatmayı hedefliyoruz.
                Asperula Cafe, sadece bir kafe değil, aynı zamanda dostlukların, sohbetlerin ve tatlı anıların paylaşıldığı bir mekan
                olma misyonunu taşıyor. Bizimle tatlı bir mola için yanı başınızdayız.</p>
              <a href="#" class="btn btn__primary">Rezervasyon</a>
            </div>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About -->

    <!-- ========================
       text Banner Layout2
    =========================== -->
    <section class="text-banner text-banner-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="assets/images/Photos/bg-1.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="banner__subtitle">Asperula Cafe: Lezzetin Köşkü</span>
            <h2 class="banner__title">Tatlı Tadımlarla Renklenen Bir Hikaye</h2>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.text Banner Layout2 -->

    <!-- ==========================
         fancybox layout 1
    =========================== -->
    <section class="fancybox-layout1 text-center pb-40">
      <div class="container">
        <div class="row">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="assets/images/icons/1.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Sıcak Lezzetler</h4>
                <p class="fancybox__desc">Asperula Cafe'nin sıcak içecekleriyle gününüzü ısıtın. Kahve, çay ve sıcak çikolata gibi favorilerimizle keyif dolu bir
                  mola verin. </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="assets/images/icons/2.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Ferahlatıcı Serinlik</h4>
                <p class="fancybox__desc">Asperula Cafe'nin serinletici soğuk içecekleriyle kendinizi serinletin. Meyve suları, milkshake'ler ve buzlu içeceklerle
                  sıcak günlerde ferahlık bulun.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <img src="assets/images/icons/3.png" alt="icon">
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Tatlı Kaçamaklar</h4>
                <p class="fancybox__desc">Asperula Cafe'nin enfes tatlılarıyla tatlı bir mola verin. Cheesecake, brownie, ve muffin gibi lezzetli tatlılarımızla
                  gününüzü şenlendirin.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. fancybox layout 1 -->

    <!-- ========================= 
          Testimonial Layout 1
        =========================  -->
    <section class="testimonials testimonials-layout1 bg-overlay">
      <div class="bg-img"><img src="assets/images/Photos/testimional-1.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout1 text-center mb-50">
              <span class="heading__subtitle">Tatlı Tadım: Müşterilerimizden Yansıyanlar</span>
              <h2 class="heading__title color-white">Asperula Cafe'de Yaşanan Deneyimlerden Kesitler</h2>
              <div class="heading__icon">
                <img src="assets/images/shapes/shape2.png" alt="heading img">
              </div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots carousel-dots-light" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
              <!-- Testimonial Item #1 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'de geçirdiğim zaman gerçekten keyif dolu geçti. Hem sıcak
                    çikolata hem de cheesecake mükemmeldi. Atmosferi
                    ise harikaydı! Kesinlikle tekrar geleceğim.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Ayşe Yılmaz</h5>
                  <p class="testimonial__meta-desc">Öğretmen</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #2 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Kahve tutkunu biri olarak Asperula Cafe'deki kahvelerin tadı damağımda
                    kaldı. Barista ustaları gerçekten işlerinin ehli.
                    Buraya her geldiğimde kendimi evimde gibi hissediyorum.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Mehmet Kaya</h5>
                  <p class="testimonial__meta-desc">Mühendis</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #3 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'nin sunduğu dondurmalı kahve muhteşemdi! Hem lezzetli hem de
                    göz alıcı bir sunum. Bu tatları denemeden
                    geçmeyin!”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Fatma Demir</h5>
                  <p class="testimonial__meta-desc">Avukat</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #4 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'nin ambiansı, içecekleri ve tatlılarıyla beni her seferinde
                    büyülüyor. Burada vakit geçirmek gerçekten
                    ruhuma iyi geliyor. Teşekkürler Asperula!”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Can Yılmaz</h5>
                  <p class="testimonial__meta-desc">Grafik Tasarımcı</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #5 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'nin çikolatalı frappe'si hayatımın frappe'si oldu! Burada
                    geçirdiğim zaman her zaman keyif dolu geçiyor.
                    Herkese tavsiye ederim.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Zeynep Aktaş</h5>
                  <p class="testimonial__meta-desc">Yazar</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #6 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'nin misafirperverliği ve lezzetli içecekleri her zaman için
                    beni cezbetmeye devam ediyor. Burada
                    geçirdiğim her anı özlemle anıyorum.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Ahmet Kocaman</h5>
                  <p class="testimonial__meta-desc">İşletmeci</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #6 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'deki light tarifler gerçekten harika! Tatlı krizlerimi burada
                    atlatıyorum. Tadı damağımda kalan lezzetler
                    için teşekkürler.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Seda Yıldırım</h5>
                  <p class="testimonial__meta-desc">Diyetisyen</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #6 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'deki sıcak içecekler ve tatlılar gerçekten başka hiçbir yerde
                    bulunmayan lezzetler. Burası benim için
                    vazgeçilmez.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Emre Eren</h5>
                  <p class="testimonial__meta-desc">Yönetici Asistanı</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #6 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'de kahve içmek ve kitap okumak gerçekten benim için bir ritüel
                    haline geldi. Burada her zaman huzur dolu
                    bir ortam buluyorum.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">İrem Can</h5>
                  <p class="testimonial__meta-desc">Psikolog</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial Item #6 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div><!-- /.testimonial-rating -->
                  <p class="testimonial__desc">“Asperula Cafe'nin kahveleri ve tatlıları sadece lezzetli değil, aynı zamanda
                    görsel bir şölen sunuyor. Burada geçirdiğim
                    her anı ölümsüzleştirmek istiyorum.”</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Murat Tekin</h5>
                  <p class="testimonial__meta-desc">Satış Danışmanı</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Testimonials Layout 1 -->

    <!-- =====================
       Banner layout1
    ======================== -->
    <section class="banner banner-layout1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-sm-6 col-md-3 col-lg-4">
            <div class="banner__img" data-aos="fade-right">
              <img src="assets/images/Photos/features-4.png" alt="banner" class="img-fluid">
            </div><!-- /.banner__img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-4">
            <div class="banner__img mt-30" data-aos="fade-right" data-aos-delay=".5s">
              <img src="assets/images/Photos/features-5.png" alt="banner" class="img-fluid">
            </div><!-- /.banner__img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="banner__text text-center mt-30" data-aos="fade-left">
              <div class="heading heading-layout1 mb-30">
                <span class="heading__subtitle">Misafir Memnuniyeti</span>
                <h2 class="heading__title">Asperula Cafe'de Sizin İçin Varız </h2>
                <div class="heading__icon">
                  <img src="assets/images/shapes/shape2.png" alt="heading img">
                </div>
                <p class="heading__desc">Misafirlerimizin mutluluğu bizim için her şeyden önemlidir. Asperula Cafe olarak, size en iyi hizmeti sunmak ve
                  unutulmaz bir deneyim yaşatmak için buradayız. Sizi memnun etmek bizim önceliğimizdir.</p>
              </div><!-- /.heading -->
              <a href="gallery-grid.php<?php echo $deskurl ?>" class="btn btn__secondary btn__link">Galeri</a>
            </div><!-- /.banner__text -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout1 -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer footer-layout1 text-center bg-dark">
      <div class="footer-top">
        <div class="container">
          <div class="row align-items-center">
            <div class=" col-sm-12 col-md-12 col-lg-4">
              <div class="contact-box">
                <h6 class="contact__box-title">Adres</h6>
                <ul class="contact__box-list list-unstyled">
                  <li>Medrese, Cacabey Cd. no:1/3, 40100 Kırşehir Merkez/Kırşehir</li>
                </ul>
                <a href="https://maps.app.goo.gl/6Jn4VHjB3pvm7gV87" class="btn btn__primary btn__hover2 btn__link">Harita</a>
              </div><!-- /.contact-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
              <img src="assets/images/logo/footer-logo.png" alt="logo" class="footer__logo mb-30" style="width: 100px;">
              <p class="mx-2 mb-20">Asperula Cafe, lezzetin ve dostluğun buluşma noktasıdır. Her bir yudumda ferahlatıcı içeceklerin ve enfes tatlıların
                keyfini çıkarırken, samimi bir ortamda dinlenme ve keyifli sohbetlerin tadını çıkarın. Sizin için en taze malzemelerle
                hazırlanan lezzet dolu anları sunmaktan mutluluk duyuyoruz.</p>
              <form class="footer__newsletter-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Bültenimize Abone Olun">
                  <button type="submit" class="form__submit"><i class="fa fa-long-arrow-right"></i></button>
                </div>
              </form>
              <ul class="social__icons social__icons-white justify-content-center">
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul><!-- /.social__icons -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="contact-box">
                <h6 class="contact__box-title">Sosyal Medya</h6>
                <ul class="contact__box-list list-unstyled">
                  <li><span>Email:</span> <a href="mailto:support@asperulacafe.com"> support@asperulacafe.com</a></li>
                  <li><span>Telefon Numarası:</span> <a href="tel:05543836580"> 0554 383 6580</a></li>
                </ul>
                <a href="reservation.php<?php echo $deskurl ?>" class="btn btn__primary btn__hover2 btn__link">Rezervasyon</a>
              </div><!-- /.contact-box -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav class="footer__links">
                <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                  <li><a href="#">Hakkımızda</a></li>
                  <li><a href="#">Menü</a></li>
                  <li><a href="#">Galeri</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </nav>
              <div class="footer__copyright">
                <span>&copy; Mustafa Koca, tarafından sevgi ile </span>
                <a href="http://themeforest.net/user/7oroof" class="color-theme">asperulakafe.com</a>
              </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-angle-up"></i></button>

    <div class="hamburger-menu">
      <i class="close__hamburger-menu fa fa-long-arrow-right"></i>
      <div class="hamburger-menu__header text-center">
        <img src="assets/images/logo/footer-logo.png" alt=" logo" class="mb-20">
        <p>Asperula Cafe, Kırşehir'in kalbinde gizlenmiş bir lezzet vahasıdır. Modern tarzıyla geleneksel tatları buluşturan bu
          butik cafe, misafirlerine damaklarını şımartacak bir deneyim sunar. Her bir içimde, yerel lezzetlerin büyüleyici dansı
          ve samimi bir atmosfer bulunur. Asperula Cafe, tatlı anlar için mükemmel bir kaçış noktasıdır. Gel, lezzetin sırrını
          burada keşfet!</p>
        <ul class="social__icons social__icons-white justify-content-center">
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul><!-- /.social__icons -->
      </div><!-- /.hamburger-menu-header -->
      <div class="hamburger-menu__footer">
        <ul class="contact__list list-unstyled mb-20">
          <li><span>Email:</span> <a href="mailto:Elroyale@7oroof.com"> support@asperulacafe.com</a></li>
          <li><span>Telefon Numara:</span><a href="tel:05543836580"> 0554 383 6580</a></li>
        </ul><!-- /.contact-list -->
        <a href="reservation.php<?php echo $deskurl ?>" class="btn btn__primary btn__hover2 btn__block">Rezervasyon Yap!</a>
      </div><!-- /.hamburger-menu-footer -->
    </div><!-- /.hamburger-menu -->

  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>