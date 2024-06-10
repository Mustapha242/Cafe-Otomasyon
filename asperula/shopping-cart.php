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
  $last_two_segments = array_slice($url_segments_desk, -2, 1);
  $product_id_last = end($last_two_segments);
  $product_id = end($url_segments_desk);
  $desk_id_last = validate($product_id_last);
  $desk_id = validate($product_id);
  $deskurl = "?/" . $desk_id_last . "/" . $desk_id;
}

if (isset($_POST['clear-cart'])) {
  if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
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
  <title>Sepet | Asperula Cafe | Lezzetin ve Keyfin Buluşma Noktası</title>
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
       page title 
    =========================== -->
    <section id="page-title" class="page-title page-title-layout8">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <h1 class="pagetitle__heading color-dark">Sepet</h1>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="index.php<?php echo $deskurl ?>">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="shop.php<?php echo $deskurl ?>">Mağaza</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sepet</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================
    Shopping Cart
=========================== -->
    <section class="shopping-cart pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="cart-table table-responsive bg-gray">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Ürün</th>
                    <th>Fiyat</th>
                    <th>Miktar</th>
                    <th>Toplam</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_GET['remove_product_id'])) {
                    $removeProductId = $_GET['remove_product_id'];
                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                      foreach ($_SESSION['cart'] as $index => $item) {
                        if ($item['product_id'] == $removeProductId) {
                          unset($_SESSION['cart'][$index]);
                        }
                      }
                    }
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo '<script>window.location.href = "shopping-cart.php";</script>';
                    exit;
                  }

                  $totalPrice = 0; // Toplam fiyatı saklamak için bir değişken
                  if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    foreach ($cart as $index => $item) {
                      $productPrice = floatval($item['product_small_price']);
                      $quantity = intval($item['quantity']);
                      $itemTotalPrice = $productPrice * $quantity;
                      $totalPrice += $itemTotalPrice;
                  ?>
                      <tr class="cart__product">
                        <td class="cart__product-item">
                          <a href="?remove_product_id=<?php echo $item['product_id']; ?>">
                            <div class="cart__product-remove">
                              <i class="fa fa-close"></i>
                            </div>
                          </a>
                          <div class="cart__product-img">
                            <img src="admin/<?php echo $item['product_photos_1024x683']; ?>" alt="product" />
                          </div>
                          <div class="cart__product-title">
                            <h6><?php echo $item['product_name']; ?></h6>
                          </div>
                        </td>
                        <td class="cart__product-price"><?php echo $item['product_small_price']; ?> ₺</td>
                        <td class="cart__product-quantity">
                          <div class="product-quantity">
                            <div class="quantity__input-wrap">
                              <i class="fa fa-minus decrease-qty"></i>
                              <input type="number" value="<?php echo $item['quantity']; ?>" class="qty-input">
                              <i class="fa fa-plus increase-qty"></i>
                            </div>
                          </div>
                        </td>
                        <td class="cart__product-total"><?php echo number_format($itemTotalPrice, 2); ?> ₺</td>
                      </tr>
                  <?php }
                  } else {
                    echo '<tr><td colspan="4">Sepetiniz Boş</td></tr>';
                  }
                  ?>

                  <tr class="cart__product-action">
                    <td colspan="4">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 cart__product-action-content">
                          <div>
                            <form method="post" action="shopping-cart.php">
                              <button class="btn btn__secondary mr-10 mb-20" type="submit" name="clear-cart">Sepeti Temizle</button>
                            </form>
                          </div>
                        </div><!-- /.col-lg-2  -->
                      </div><!-- /.row  -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.cart-table -->
          </div><!-- /.col-lg-12 -->
          <?php
          $url_segments = explode('/', $_SERVER['REQUEST_URI']);
          $product_id = end($url_segments);
          $desk_id = validate($product_id);
          if (!empty($_SESSION['cart'])) {
          ?>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="cart__shipping">
                <h6>Masa Bilgileri :</h6>
                <form class="row" method="POST" action="shopping-cart.php">
                  <div class="col-md-12 mb-20 ">
                    <input type="text" class="form-control" name="customer_name" placeholder="Ad Soyad">
                  </div>
                  <?php foreach ($cart as $index => $item) { ?>
                    <input type="hidden" name="desk_id" value="<?php echo $desk_id; ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_id]" value="<?php echo htmlspecialchars($item['product_id']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_category_id]" value="<?php echo htmlspecialchars($item['product_category_id']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_photos_1024x683]" value="<?php echo htmlspecialchars($item['product_photos_1024x683']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_name]" value="<?php echo htmlspecialchars($item['product_name']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_small_price]" value="<?php echo htmlspecialchars($item['product_small_price']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_middle_price]" value="<?php echo htmlspecialchars($item['product_middle_price']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_big_price]" value="<?php echo htmlspecialchars($item['product_big_price']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_publicy]" value="<?php echo htmlspecialchars($item['product_publicy']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][product_date_time]" value="<?php echo htmlspecialchars($item['product_date_time']); ?>">
                    <input type="hidden" name="products[<?php echo $index; ?>][quantity]" value="<?php echo htmlspecialchars($item['quantity']); ?>">
                  <?php } ?>
                  <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn__primary" name="order">Sipariş Ver!</button>
                  </div>
                </form>
              </div><!-- /.cart__shipping -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="cart__total-amount">
                <h6>Sepet Toplamı :</h6>
                <ul class="list-unstyled mb-0">
                  <li><span>Ara Toplam :</span><span><?php echo number_format($totalPrice, 2); ?> ₺</span></li>
                  <li><span>KDV :</span><span> - </span></li>
                  <li><span>Toplam Tutar :</span><span><?php echo number_format($totalPrice, 2); ?> ₺</span></li>
                </ul>
              </div><!-- /.cart__total-amount -->
            </div><!-- /.col-lg-6 -->
          <?php
          }
          ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shopping-cart -->
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