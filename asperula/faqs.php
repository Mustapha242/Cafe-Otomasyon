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
  <title>Sıkça Sorulan Sorular | Asperula Cafe</title>
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
    <section class="page-title page-title-layout1 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/backgrounds/faqsBannerBackground.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="pagetitle__subheading">Bilgi Dünyası: Sıkça Sorulan Sorular</span>
            <h1 class="pagetitle__heading">Soru İşaretlerini Aydınlatıyoruz!</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php<?php echo $deskurl ?>">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Hakkımızda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sıkça Sorulan Sorular</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ======================
       FAQ
    ========================= -->
    <section class="faq pb-70">
      <div class="container">
        <div class="row" id="accordion">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion__item-title" href="#">Kahve çekirdeklerinizin kökeni nedir?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Kahve çekirdeklerimiz dünya çapında özenle seçilmiş ve özellikle sertifikalı çiftliklerden temin edilmektedir.
                    Önceliğimiz, en kaliteli ve taze kahve çekirdeklerini kullanmaktır.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__item-title" href="#">Menünüzde vegan seçenekler bulunuyor mu?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Evet, Asperula Cafe menüsünde çeşitli vegan seçenekler bulunmaktadır. Vegan müşterilerimizin de tatlılarımızın ve
                    atıştırmalıklarımızın keyfini çıkarmalarını sağlamak için özel olarak hazırlanmış lezzetler sunuyoruz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__item-title" href="#">Rezervasyon yapmak gerekiyor mu?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Genellikle rezervasyon yapmak zorunlu değildir, ancak yoğun saatlerde veya özel etkinliklerde yer garantisi almak için
                    rezervasyon yapmanızı öneririz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse4">
                <a class="accordion__item-title" href="#">İçeceklerinizi paket servis olarak da alabilir miyiz?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse4" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Evet, Asperula Cafe'de içeceklerimizi paket servis olarak da alabilirsiniz. İstediğiniz içeceği seçip, paket servis
                    hizmetimizden faydalanabilirsiniz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse5">
                <a class="accordion__item-title" href="#">Çalışma saatleriniz nedir?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse5" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Asperula Cafe genellikle haftanın her günü sabahın erken saatlerinden akşam geç saatlere kadar açıktır. Ancak, özel
                    günler veya tatil dönemlerinde çalışma saatlerimizde değişiklik olabilir. Güncel çalışma saatlerimizi web sitemizden
                    veya sosyal medya hesaplarımızdan kontrol edebilirsiniz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">

            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse6">
                <a class="accordion__item-title" href="#">Wi-Fi hizmetiniz var mı?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse6" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Evet, Asperula Cafe'de ücretsiz Wi-Fi hizmetimiz bulunmaktadır. Misafirlerimiz rahatça internete bağlanabilir ve keyifli
                    zaman geçirebilirler.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse7">
                <a class="accordion__item-title" href="#">Ödeme yöntemleriniz nelerdir?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse7" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Asperula Cafe'de nakit ve kredi kartıyla ödeme yapabilirsiniz. Ayrıca, popüler dijital ödeme yöntemlerini de kabul
                    ediyoruz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse8">
                <a class="accordion__item-title" href="#">Çocuklar için özel menü seçenekleriniz var mı?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse8" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Elbette, çocuklar için özel olarak hazırlanmış menü seçeneklerimiz bulunmaktadır. Sağlıklı ve lezzetli seçenekler
                    sunarak çocuklarımızın da keyifli bir deneyim yaşamalarını sağlıyoruz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse9">
                <a class="accordion__item-title" href="#">Hijyen ve güvenlik önlemleriniz nelerdir?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse9" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>EMisafirlerimizin sağlığı ve güvenliği bizim için çok önemlidir. Bu nedenle, düzenli olarak temizlik yapıyor, hijyenik
                    koşulları sağlıyor ve güvenlik önlemlerimizi sıkı bir şekilde uyguluyoruz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse10">
                <a class="accordion__item-title" href="#">Özel etkinlikler için rezervasyon yapabilir miyiz?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse10" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Evet, özel etkinlikler veya partiler için rezervasyon yapabilirsiniz. İhtiyaçlarınıza ve tercihlerinize göre size özel
                    bir etkinlik planı oluşturmak için ekibimizle iletişime geçebilirsiniz.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.FAQ -->

    <!-- ========================
       Text Banner layout 1
    =========================== -->
    <section class="text-banner text-banner-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="assets/images/backgrounds/faqsMainBackground.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="banner__subtitle">Kahve Köşesi: Sıkça Sorulan Sorular</span>
            <h2 class="banner__title">Size En Çok İlgi Çeken Soruların Cevapları Burada </h2>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.textBanner layout 1 -->

    <!-- ========================
      Reservation
    =========================== -->
    <section class="reservation">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout1 text-center mb-50">
              <span class="heading__subtitle">Yer Ayırtın, Lezzet Garantisiyle</span>
              <h2 class="heading__title">Rezervasyonunuzu Yapın, Keyifli Anlarınızı Bekleyin</h2>
              <div class="heading__icon">
                <img src="assets/images/shapes/shape2.png" alt="heading img">
              </div>
              <p class="heading__desc">Misafirlerimizin konforu ve memnuniyeti için rezervasyon yapın ve yerinizi önceden ayırtın. Asperula Cafe'de unutulmaz
                bir deneyim için rezervasyonunuzu hemen yapın.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <form class="reservation__form" method="POST" action="reservation.php" data-aos="fade-left">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <p>Sadece birkaç dakika içinde kolayca online olarak masanızı ayırtabilirsiniz. Akşam için rezervasyon alıyoruz,
                    sadece masanızın müsaitliğini kontrol edin.</p>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="form-control" name="number_of_people">
                      <option value="2">2 Kişi</option>
                      <option value="3">3 Kişi</option>
                      <option value="4">4 Kişi</option>
                      <option value="5">5 Kişi</option>
                      <option value="6">6 Kişi</option>
                      <option value="7">7 Kişi</option>
                    </select>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="form-control" name="reservation_date">
                      <option value="30 Mayıs, 2024">30 Mayıs, 2024</option>
                      <option value="31 Mayıs, 2024">31 Mayıs, 2024</option>
                      <option value="1 Haziran, 2024">1 Haziran, 2024</option>
                      <option value="2 Haziran, 2024">2 Haziran, 2024</option>
                      <option value="3 Haziran, 2024">3 Haziran, 2024</option>
                      <option value="4 Haziran, 2024">4 Haziran, 2024</option>
                      <option value="5 Haziran, 2024">5 Haziran, 2024</option>
                      <option value="6 Haziran, 2024">6 Haziran, 2024</option>
                      <option value="7 Haziran, 2024">7 Haziran, 2024</option>
                      <option value="8 Haziran, 2024">8 Haziran, 2024</option>
                      <option value="9 Haziran, 2024">9 Haziran, 2024</option>
                      <option value="10 Haziran, 2024">10 Haziran, 2024</option>
                    </select>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="form-control" name="reservation_clock">
                      <option value="21.00">21.00</option>
                      <option value="22.00">22.00</option>
                      <option value="23.00">23.00</option>
                      <option value="24.00">24.00</option>
                    </select>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="reservation_name" placeholder="İsminiz">
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="reservation_email" placeholder="Email">
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="reservation_phone" placeholder="Telefon Numarası">
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__block" name="reservation-add">Rezervasyon Oluşturun!</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form><!-- /.reservation__form -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Reservation -->

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

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>