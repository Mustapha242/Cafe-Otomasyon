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
  $segment_count = count($url_segments_desk);
  if ($segment_count >= 7) {
    $desk_id_last = $url_segments_desk[$segment_count - 4];
    $desk_id = $url_segments_desk[$segment_count - 3];

    $deskurl = "?/" . validate($desk_id_last) . "/" . validate($desk_id);
  } else {
    $deskurl = '';
  }

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
  <title><?php echo $fetchDataProductDetails['product_name'] ?> | Asperula Cafe | Lezzetin ve Keyfin Buluşma Noktası</title>
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
    <header class="header header header-layout2">
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
       product single
    =========================== -->
    <section class="shop product-single pb-0">
      <div class="container">

        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="product__single-img">
              <img src="admin/<?php echo $fetchDataProductDetails['product_photos_1024x683'] ?>" class="zoomin" alt="product">
            </div><!-- /.product-img -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <h4 class="product__title"><?php echo $fetchDataProductDetails['product_name'] ?></h4>
            <?php
            $prices = array();
            if ($fetchDataProductDetails['product_small_price'] !== null) {
              $prices[] = $fetchDataProductDetails['product_small_price'];
            }
            if ($fetchDataProductDetails['product_middle_price'] !== null) {
              $prices[] = $fetchDataProductDetails['product_middle_price'];
            }
            if ($fetchDataProductDetails['product_big_price'] !== null) {
              $prices[] = $fetchDataProductDetails['product_big_price'];
            }
            ?>
            <?php if (!empty(array_filter($prices))) : ?>
              <?php echo '<span class="product__price">' . implode(' ₺', array_filter($prices)) . '₺</span>'; ?>
            <?php endif; ?>
            <hr class="hr-dashed mt-30 mb-30">

            <form class="product__form-wrap mb-30" action="shopping-cart.php<?php echo $deskurl ?>" method="POST">
              <div class="product__quantity d-flex">
                <div class="quantity__input-wrap mr-20">
                  <i class="decrease-qty"></i>
                  <input type="text" name="quantity" class="qty qty-input" value="1">
                  <i class="increase-qty"></i>
                </div>
                <input type="hidden" name="product_id" value="<?php echo $fetchDataProductDetails['product_id'] ?>">
                <input type="hidden" name="product_category_id" value="<?php echo $fetchDataProductDetails['product_category_id'] ?>">
                <input type="hidden" name="product_photos_1024x683" value="<?php echo $fetchDataProductDetails['product_photos_1024x683'] ?>">
                <input type="hidden" name="product_name" value="<?php echo $fetchDataProductDetails['product_name'] ?>">
                <input type="hidden" name="product_small_price" value="<?php echo $fetchDataProductDetails['product_small_price'] ?>">
                <input type="hidden" name="product_middle_price" value="<?php echo $fetchDataProductDetails['product_middle_price'] ?>">
                <input type="hidden" name="product_big_price" value="<?php echo $fetchDataProductDetails['product_big_price'] ?>">
                <input type="hidden" name="product_publicy" value="<?php echo $fetchDataProductDetails['product_publicy'] ?>">
                <input type="hidden" name="product_date_time" value="<?php echo $fetchDataProductDetails['product_date_time'] ?>">

                <button type="submit" name="add-cart" class="btn btn__primary">Sepete Ekle</button>

              </div><!-- /.product-quantity -->
            </form>


          </div>
    </section>

    <!-- ========================
      Related products
    =========================== -->
    <section id="related-products" class="relted-products text-center pt-80 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h6 class="related__products-title mb-30">İlgili Ürünler</h6>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row">
          <?php
          if (is_array($fetchDataProductLimit3)) {
            $sn = 1;
            foreach ($fetchDataProductLimit3 as $data) {
              $product_name_url = $data['product_name'];
              $product_id_url = $data['product_id'];

              $seo_name = cleanTurkishCharacters($product_name_url);

              // SEO uyumlu URL'yi oluştur
              $url = "/$seo_name" . "/$product_id_url";
          ?>
              <!-- Product item #1 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <img src="admin/<?php echo $data['product_photos_1024x683'] ?>" alt="Product">
                    <div class="product__action">
                      <?php
                      $prices = array();
                      if ($data['product_small_price'] !== null) {
                        $prices[] = $data['product_small_price'];
                      }
                      if ($data['product_middle_price'] !== null) {
                        $prices[] = $data['product_middle_price'];
                      }
                      if ($data['product_big_price'] !== null) {
                        $prices[] = $data['product_big_price'];
                      }
                      ?>
                    </div><!-- /.product__action -->
                  </div><!-- /.product-img -->
                  <div class="product__content">
                    <h4 class="product__title"><a href="shop-details.php?<?php echo $url ?>"><?php echo $data['product_name'] ?></a></h4>
                    <?php if (!empty(array_filter($prices))) : ?>
                      <?php echo '<span class="product__price">' . implode(' ₺', array_filter($prices)) . '₺</span>'; ?>
                    <?php endif; ?>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
          <?php
              $sn++;
            }
          } else {
            echo $fetchDataProductLimit3;
          } ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.related-products -->

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