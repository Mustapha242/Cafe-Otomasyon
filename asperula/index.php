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
  <title>Asperula Cafe | Lezzetin ve Keyfin Buluşma Noktası</title>
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
    Slider
    ============================== -->
    <section id="slider" class="slider slider-layout1">
      <div class="carousel owl-carousel carousel-arrows carousel-dots carousel-dots-light" data-slide="1" data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item align-v-h text-center bg-overlay">
          <div class="bg-img">
            <img src="assets/images/Photos/Slider-1.png" alt="slide img">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slide__content">
                  <h2 class="slide__title">Yerel Tatların Büyülü Dünyasında Kaybolun</h2>
                  <p class="slide__desc">Ruhunuzu Besleyin ve Keyif Dolu Anlar Yaşayın</p>
                  <a href="shop.php<?php echo $deskurl ?>" class="btn btn__primary btn__hover2">Menü</a>
                  <a href="reservation.php<?php echo $deskurl ?>" class="btn btn__white btn__bordered mx-2">Rezervasyon</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h text-center bg-overlay">
          <div class="bg-img"><img src="assets/images/Photos/Slider-2.png" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slide__content">
                  <h2 class="slide__title">Kırşehir'in Sıcacık Kucaklayan Atmosferinde</h2>
                  <p class="slide__desc">Tadınızı Bambaşka Bir Boyuta Taşıyın</p>
                  <a href="shop.php<?php echo $deskurl ?>" class="btn btn__primary mx-2">Menü</a>
                  <a href="reservation.php<?php echo $deskurl ?>" class="btn btn__white btn__bordered mx-2">Rezervasyon</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h text-center bg-overlay">
          <div class="bg-img"><img src="assets/images/Photos/Slider-3.png" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slide__content">
                  <h2 class="slide__title">Tatlı ve Tuzlu Anlarınızı Bir Arada Yaşayın</h2>
                  <p class="slide__desc">Asperula Cafe'nin Misafiri Olun ve Lezzetli Anılarla Dolu Bir Yolculuğa Çıkın</p>
                  <a href="shop.php<?php echo $deskurl ?>" class="btn btn__primary mx-2">Menü</a>
                  <a href="reservation.php<?php echo $deskurl ?>" class="btn btn__white btn__bordered mx-2">Rezervasyon</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- =========================== 
      features
    ============================= -->
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading heading-layout1 text-center mb-50">
              <span class="heading__subtitle">Asperu Kafe'ye Hoş Geldiniz</span>
              <h2 class="heading__title">Lezzetli İçecekler, Güler yüzlü Personel, Rahat Atmosfer ve Olumlu Duygular!</h2>
              <div class="heading__icon">
                <img src="assets/images/shapes/shape2.png" alt="heading img">
              </div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- feature item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/Photos/Features-2.png" alt="feature img">
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <h4 class="feature__title">İçini Isıtan <br> Lezzetler, Dışarıyı Unutturur</h4>
              </div><!-- /.feature__content-->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <!-- feature item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/Photos/Features-1.png" alt="feature img">
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <h4 class="feature__title">Soğuk İçecekleri, <br> Serinliği Anımsatır</h4>
              </div><!-- /.feature__content-->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
          <!-- feature item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/Photos/Features-3.png" alt="feature img">
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <h4 class="feature__title">İnce İşlenmiş Kahveleri, <br> Günün Her Anını Özel Kılar</h4>
              </div><!-- /.feature__content-->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
            <p>Lezzetin Haritası: Asperula Cafe'nin Sıcak, Soğuk ve Kahve İçecekleriyle Tadına Doyulmaz Bir Yolculuk Başlar.</p>
            <a class="btn btn__secondary btn__link" href="our-story.php<?php echo $deskurl ?>">Hikayemizi Keşfedin!</a>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.features -->

    <!-- ========================
       Call to Action Layout2
    =========================== -->
    <section class="cta-layout2 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/Photos/bg-1.png" alt="background"></div>
      <div class="divider-shape"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="cta__subtitle">Asperula Cafe: Lezzetin Gizli Bahçesi</span>
            <h2 class="cta__title">Geleneksel Lezzetlerin Modern Dokunuşla Buluştuğu Kafe</h2>
            <p class="cta__desc">Asperula Cafe'de, her bir yudumda ruhunuzu okşayan sıcak içecekler, ferahlatıcı soğuk içecekler ve enfes kahveler sizi
              bekliyor. Gel, lezzetin sırrını keşfet!</p>
            <img src="assets/images/about/signature2.png" alt="signature" class="mx-1">
            <a href="reservation.php<?php echo $deskurl ?>" class="btn btn__white mx-1">Rezervasyon</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Call to Action Layout 2 -->

    <!-- ========================
        Menu layout layout 5
    =========================== -->
    <section class="menu-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout1 text-center mb-50">
              <span class="heading__subtitle">Lezzet Şöleni</span>
              <h2 class="heading__title">Asperula Cafe'de Tatlı Anlar Başlıyor!</h2>
              <div class="heading__icon">
                <img src="assets/images/shapes/shape2.png" alt="heading img">
              </div>
              <p class="heading__desc">Sıcak içeceklerin ve enfes tatlıların buluşma noktası olan Asperula Cafe'ye bekliyoruz. Keyif dolu bir mola için gelin!</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav class="nav nav-tabs justify-content-center border-0">
              <?php
              if (is_array($fetchDataCategory)) {
                $sn = 1;
                foreach ($fetchDataCategory as $data) {
              ?>
                  <a class="nav__link" data-toggle="tab" href="#<?php echo cleanTurkishCharacters($data['product_category_name']) ?>"><?php echo $data['product_category_name'] ?></a>
              <?php
                  $sn++;
                }
              } else {
                echo $fetchDataCategory;
              } ?>
            </nav>
            <div class="tab-content">

              <div class="tab-pane fade show active" id="espresso-beverage">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductEspresso)) {
                        $sn = 1;
                        foreach ($fetchDataProductEspresso as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

                            <?php
                            $prices = array();
                            if ($data['product_small_price'] !== null) {
                              $prices[] = $data['product_small_price'];
                            }
                            ?>

                            <?php
                            if ($data['product_middle_price'] !== null) {
                              $prices[] = $data['product_middle_price'];
                            }
                            ?>

                            <?php
                            if ($data['product_big_price'] !== null) {
                              $prices[] = $data['product_big_price'];
                            }

                            ?>

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductEspresso;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="extras">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductExtras)) {
                        $sn = 1;
                        foreach ($fetchDataProductExtras as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductExtras;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="special-hot-drinks">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductSpecialHotDrinks)) {
                        $sn = 1;
                        foreach ($fetchDataProductSpecialHotDrinks as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductSpecialHotDrinks;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="teas">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductTeas)) {
                        $sn = 1;
                        foreach ($fetchDataProductTeas as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductTeas;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="iced-coffee-drinks">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductIcedCoffeeDrinks)) {
                        $sn = 1;
                        foreach ($fetchDataProductIcedCoffeeDrinks as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductIcedCoffeeDrinks;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="cold-drinks">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductColdDrinks)) {
                        $sn = 1;
                        foreach ($fetchDataProductColdDrinks as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductColdDrinks;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="lemonades">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductLemonades)) {
                        $sn = 1;
                        foreach ($fetchDataProductLemonades as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductLemonades;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="frozen">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductFrozen)) {
                        $sn = 1;
                        foreach ($fetchDataProductFrozen as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductFrozen;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="frappe">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductFrappe)) {
                        $sn = 1;
                        foreach ($fetchDataProductFrappe as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductFrappe;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

              <div class="tab-pane fade" id="milkshake">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="menu-wrapper">
                      <?php
                      if (is_array($fetchDataProductMilkshake)) {
                        $sn = 1;
                        foreach ($fetchDataProductMilkshake as $data) {
                      ?>
                          <div class="menu-item">
                            <h4 class="menu__item-title"><?php echo $data['product_name'] ?></h4>

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

                            <?php if (!empty(array_filter($prices))) : ?>
                              <?php echo '<span class="menu__item-price">₺' . implode(' ₺', array_filter($prices)) . '</span>'; ?>
                            <?php endif; ?>
                          </div><!-- /.menu-item -->
                      <?php
                          $sn++;
                        }
                      } else {
                        echo $fetchDataProductMilkshake;
                      } ?>
                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->

            </div><!-- /.tab-content  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a href="shop.php<?php echo $deskurl ?>" class="btn btn__link btn__secondary">Tüm Menüyü Keşfedin!</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 5 -->

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
                  <p class="testimonial__desc">“Asperula Cafe'de geçirdiğim zaman gerçekten keyif dolu geçti. Hem sıcak çikolata hem de cheesecake mükemmeldi. Atmosferi
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
                  <p class="testimonial__desc">“Kahve tutkunu biri olarak Asperula Cafe'deki kahvelerin tadı damağımda kaldı. Barista ustaları gerçekten işlerinin ehli.
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
                  <p class="testimonial__desc">“Asperula Cafe'nin sunduğu dondurmalı kahve muhteşemdi! Hem lezzetli hem de göz alıcı bir sunum. Bu tatları denemeden
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
                  <p class="testimonial__desc">“Asperula Cafe'nin ambiansı, içecekleri ve tatlılarıyla beni her seferinde büyülüyor. Burada vakit geçirmek gerçekten
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
                  <p class="testimonial__desc">“Asperula Cafe'nin çikolatalı frappe'si hayatımın frappe'si oldu! Burada geçirdiğim zaman her zaman keyif dolu geçiyor.
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
                  <p class="testimonial__desc">“Asperula Cafe'nin misafirperverliği ve lezzetli içecekleri her zaman için beni cezbetmeye devam ediyor. Burada
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
                  <p class="testimonial__desc">“Asperula Cafe'deki light tarifler gerçekten harika! Tatlı krizlerimi burada atlatıyorum. Tadı damağımda kalan lezzetler
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
                  <p class="testimonial__desc">“Asperula Cafe'deki sıcak içecekler ve tatlılar gerçekten başka hiçbir yerde bulunmayan lezzetler. Burası benim için
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
                  <p class="testimonial__desc">“Asperula Cafe'de kahve içmek ve kitap okumak gerçekten benim için bir ritüel haline geldi. Burada her zaman huzur dolu
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
                  <p class="testimonial__desc">“Asperula Cafe'nin kahveleri ve tatlıları sadece lezzetli değil, aynı zamanda görsel bir şölen sunuyor. Burada geçirdiğim
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
              <img src="assets/images/Photos/Features-4.png" alt="banner" class="img-fluid">
            </div><!-- /.banner__img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-4">
            <div class="banner__img mt-30" data-aos="fade-right" data-aos-delay=".5s">
              <img src="assets/images/Photos/Features-5.png" alt="banner" class="img-fluid">
            </div><!-- /.banner__img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="banner__text text-center mt-30" data-aos="fade-left">
              <div class="heading heading-layout1 mb-30">
                <span class="heading__subtitle">Huzur Dolu Ortam</span>
                <h2 class="heading__title">Asperula Cafe'nin Sıcak Atmosferi </h2>
                <div class="heading__icon">
                  <img src="assets/images/shapes/shape2.png" alt="heading img">
                </div>
                <p class="heading__desc">Asperula Cafe, sıcak ve samimi bir ortam sunar. Rahatlatıcı dekorasyonu ve huzur dolu atmosferiyle, misafirlerini
                  evlerindeymiş gibi hissettirir. Burada keyifli anlar için doğru adrestesiniz.</p>
              </div><!-- /.heading -->
              <a href="gallery-grid.php<?php echo $deskurl ?>" class="btn btn__secondary btn__link">Galeriyi Keşfedin!</a>
            </div><!-- /.banner__text -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout1 -->

    <!-- ========================
      Reservation
    =========================== -->
    <section class="reservation-layout2 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/Photos/reservation-1.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="reservation-container">
              <div class="reservation__banner" data-aos="fade-right">
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
              </div><!-- /.reservation__banner -->
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
            </div><!-- /.reservation-container -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Reservation -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-latout1 text-center mb-50">
              <span class="heading__subtitle">Lezzetli Hikayeler</span>
              <h2 class="heading__title">Asperula Cafe'den Yemeğin ve Tatlıların Arkasındaki Hikayeler</h2>
              <div class="heading__icon">
                <img src="assets/images/shapes/shape2.png" alt="heading img">
              </div>
              <p class="heading__desc">Asperula Cafe'nin mutfağından ve misafirlerimizin deneyimlerinden ilham alan lezzetli yazılarla dolu bir bloga hoş
                geldiniz. İçeride, yemeklerimizin ve tatlılarımızın arkasındaki ilginç hikayeleri keşfedecek ve yemek dünyasına dair
                ilham alacaksınız.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/1.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <div class="post__meta-cat">
                    <a href="#">Yemek</a><a href="#">Kültürü</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Asperula Cafe'nin Lezzet Serüveni</a></h4>
                <span class="post__meta-date">2024-05-10</span>
                <p class="post__desc">Asperula Cafe'nin özgün lezzetlerini ve hikayelerini keşfetmek için bu yazıya göz atın. Kendinizi lezzetli bir yolculuğa
                  çıkarmaya hazır olun!</p>
                <a href="#" class="btn btn__secondary btn__link">Daha Fazla!</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/2.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <div class="post__meta-cat">
                    <a href="#">Tatlılar</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Asperula Cafe'nin Tatlı Zevkleri</a></h4>
                <span class="post__meta-date">2024-05-15</span>
                <p class="post__desc">Asperula Cafe'nin tatlı menüsündeki en sevilen tatları ve bu tatlıların arkasındaki ilginç hikayeleri öğrenmek için bu
                  yazıyı okuyun.</p>
                <a href="#" class="btn btn__secondary btn__link">Daha Fazla!</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/3.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <div class="post__meta-cat">
                    <a href="#">Kahve</a><a href="#">Kültürü</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Asperula Cafe'nin Kahve Keyfi</a></h4>
                <span class="post__meta-date">2024-05-20</span>
                <p class="post__desc">Asperula Cafe'nin özel kahve çeşitlerini, baristaların ustalığını ve kahve kültüründeki yenilikleri keşfetmek için bu
                  yazıya göz atın.</p>
                <a href="#" class="btn btn__secondary btn__link">Daha Fazla!</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

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