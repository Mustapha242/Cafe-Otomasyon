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
  <title>Galeri | Asperula Cafe | Lezzetin ve Keyfin Buluşma Noktası</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kristi%7cPoppins:400,500,600,700%7cYeseva+One&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
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
    <section class="page-title page-title-layout4 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/backgrounds/galleryGridBackground.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="pagetitle__subheading">Asperula'nın Keyfini Görsel Bir Şölenle Yaşayın!</span>
            <h1 class="pagetitle__heading">Lezzetin ve Atmosferin Buluştuğu Anlar: Kafe'mizin Görsel Dünyası</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      portfolio Gallery 
    ============================= -->
    <section class="portfolio portfolio-gallery">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="portfolio-filter justify-content-center">
              <li><a class="filter active" href="#" data-filter="all">Hepsi</a></li>
              <li><a class="filter" href="#" data-filter=".filter-restaurant">Restoran</a></li>
              <li><a class="filter" href="#" data-filter=".filter-staff">Ekip</a></li>
              <li><a class="filter" href="#" data-filter=".filter-clients">Müşteriler</a></li>
            </ul><!-- /.portfolio-filter  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row filtered-items-wrap">
          <!-- portfolio item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-restaurant">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/1.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/1.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-staff">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/2.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/2.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-clients">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/3.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/3.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-restaurant ">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/4.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/4.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-staff">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/5.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/5.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-clients">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/6.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/6.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #7 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-clients portfolio-hidden">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/7.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/7.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #8 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-staff portfolio-hidden">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/8.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/8.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #9 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-restaurant portfolio-hidden">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/gallery/1.png" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
                <a href="assets/images/gallery/1.png" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.portfolio__hover-->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a class="btn btn__secondary btn__link mt-20 loadMoreportfolio" href="#">Daha Fazla</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio Gallery -->


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