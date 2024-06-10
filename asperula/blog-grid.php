<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Babette">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Blog | Asperula Cafe | Lezzetin ve Keyfin Buluşma Noktası</title>
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
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="index.php" class="nav__item-link active">Anasayfa</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Hakkımızda</a>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="our-story.php" class="nav__item-link">Hikayemiz</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="faqs.php" class="nav__item-link">FAQs</a></li> <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="shop.php" class="nav__item-link">Menü</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="gallery-grid.php" class="nav__item-link">Galeri</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="blog-grid.php" class="nav__item-link">Blog</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="contacts.php" class="nav__item-link">İletişim</a>
              </li><!-- /.nav-item -->
              <!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-actions-wrap">
            <div class="navbar-actions d-flex align-items-center">
              <a href="reservation.php" class="navbar__action-btn navbar__action-btn-reserve btn">Rezervasyon</a>
              <a href="#" class="navbar__action-btn hamburger-menu-trigger"><i class="fa fa-bars"></i></a>
              <a href="shopping-cart.php" class="navbar__action-btn"><i class="fa fa-shopping-cart"></i></a>

            </div><!-- /.navbar-actions -->
          </div><!-- /.navbar-actions-wrap -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->


    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="pagetitle__subheading">Don’t Miss</span>
            <h1 class="pagetitle__heading">Our News</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Grid</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
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
                    <a href="#">Food</a><a href="#">Recipe</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Healthy & Simple Recipes That Are Perfect for Spring</a></h4>
                <span class="post__meta-date">Jan 20, 2020</span>
                <p class="post__desc">My favorite form of cold weather exercise is snow-shoeing, but by chance I haven’t
                  been able to go this year. Busy working at the computer when fresh snow fell...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
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
                    <a href="#">Chef</a><a href="#">Dinner</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">What do chefs cook when they have friends over for dinner?</a></h4>
                <span class="post__meta-date">Jan 20, 2020</span>
                <p class="post__desc">I began my career as a recipe tester for cookbooks, and I did that work for years.
                  We loved cookbooks and loved browsing for them at thrift stores...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
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
                    <a href="#">Chef</a><a href="#">Dinner</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Desserts With Cream Cheese Frosting Taste of Home</a></h4>
                <span class="post__meta-date">Jan 17, 2020</span>
                <p class="post__desc">I’ve been baking cake for many years, and have experimented with making it into
                  cupcakes, as a layer cake, serving it dusted with confectioner’s sugar...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/4.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <div class="post__meta-cat">
                    <a href="#">Pork</a><a href="#">Recipes</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Braised Pork Belly Adobo By Chef Leah Cohen</a></h4>
                <span class="post__meta-date">Oct 24, 2020</span>
                <p class="post__desc">My favorite form of cold weather exercise is snow-shoeing, but by chance I haven’t
                  been able to go this year. Busy working at the computer when fresh snow fell...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/5.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <div class="post__meta-cat">
                    <a href="#">Apple</a><a href="#">Pie</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Tiny Apple Pies with Cinnamon Buns for Two</a></h4>
                <span class="post__meta-date">Oct 27, 2020</span>
                <p class="post__desc">I began my career as a recipe tester for cookbooks, and I did that work for years.
                  We loved cookbooks and loved browsing for them at thrift stores...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/6.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <div class="post__meta-cat">
                    <a href="#">Breakfast</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Meal Prep Breakfast For The Next Week</a></h4>
                <span class="post__meta-date">Oct 24, 2020</span>
                <p class="post__desc">I’ve been baking cake for many years, and have experimented with making it into
                  cupcakes, as a layer cake, serving it dusted with confectioner’s sugar...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center">
                <li><a class="current" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-lg-12 -->
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
                <a href="reservation.php" class="btn btn__primary btn__hover2 btn__link">Rezervasyon</a>
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
        <a href="reservation.php" class="btn btn__primary btn__hover2 btn__block">Rezervasyon Yap!</a>
      </div><!-- /.hamburger-menu-footer -->
    </div><!-- /.hamburger-menu -->
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>