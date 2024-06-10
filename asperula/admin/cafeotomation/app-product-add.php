<?php
include "../php/adminpanel.php";
include "../php/sessionControl.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Urun Ekleme | Asperula - Cafe Yonetim Paneli </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico" />
    <link href="../layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/modern-light-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/plugins/src/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">

    <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/light/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/light/apps/invoice-add.css" rel="stylesheet" type="text/css" />

    <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/dark/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/dark/apps/invoice-add.css" rel="stylesheet" type="text/css" />

    <!--  END CUSTOM STYLE FILE  -->

</head>

<body class="layout-boxed">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php
    include "website_parts/navbar.php";
    ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.php">
                                <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="./index.php" class="nav-link"> CAFE </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                                <polyline points="11 17 6 12 11 7"></polyline>
                                <polyline points="18 17 13 12 18 7"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="profile-info">
                    <div class="user-info">
                        <div class="profile-img">
                            <img src="../src/assets/img/profile-30.png" alt="avatar">
                        </div>
                        <div class="profile-content">
                            <h6 class=""><?php
                                            $user_name = $_SESSION['user_name'];
                                            echo $user_name;
                                            ?></h6>
                            <p class=""><?php
                                        $user_role = $_SESSION['user_role'];
                                        echo $user_role;
                                        ?></p>
                        </div>
                    </div>
                </div>

                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Yonetim Paneli</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./index.php"> Analiz </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>UYGULAMALAR</span></div>
                    </li>

                    


                    <li class="menu">
                        <a href="#product_category" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <span>Urun Kategorileri</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="product_category" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-product-category-list.php"> Kategori Listesi </a>
                            </li>
                            <li>
                                <a href="./app-product-category-add.php"> Kategori Ekle </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu active">
                        <a href="#product" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title></title>
                                        <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1">
                                            <g id="导航图标" transform="translate(-325.000000, -80.000000)">
                                                <g id="编组" transform="translate(325.000000, 80.000000)">
                                                    <polygon fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero" id="路径" points="24 0 0 0 0 24 24 24"></polygon>
                                                    <polygon id="路径" points="22 7 12 2 2 7 2 17 12 22 22 17" stroke="currentColor" stroke-linejoin="round" stroke-width="1.5"></polygon>
                                                    <line id="路径" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="2" x2="12" y1="7" y2="12"></line>
                                                    <line id="路径" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="12" x2="12" y1="22" y2="12"></line>
                                                    <line id="路径" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="22" x2="12" y1="7" y2="12"></line>
                                                    <line id="路径" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="17" x2="7" y1="4.5" y2="9.5"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span>Urunler</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="product" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-product-list.php"> Urunler Listesi </a>
                            </li>
                            <li class="active">
                                <a href="./app-product-add.php"> Urun Ekle </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#orders" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M7.2998 5H22L20 12H8.37675M21 16H9L7 3H4M4 8H2M5 11H2M6 14H2M10 20C10 20.5523 9.55228 21 9 21C8.44772 21 8 20.5523 8 20C8 19.4477 8.44772 19 9 19C9.55228 19 10 19.4477 10 20ZM21 20C21 20.5523 20.5523 21 20 21C19.4477 21 19 20.5523 19 20C19 19.4477 19.4477 19 20 19C20.5523 19 21 19.4477 21 20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <span>Siparisler</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="orders" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-orders.php"> Siparisler Listesi </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#reservation" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M6 15.5C6 14.9477 6.44772 14.5 7 14.5H17C17.5523 14.5 18 14.9477 18 15.5C18 16.6046 17.1046 17.5 16 17.5H8C6.89543 17.5 6 16.6046 6 15.5Z" stroke="currentColor" stroke-width="1.5"></path>
                                        <path d="M15.7902 2.49567C15.0386 2 14.0257 2 11.9999 2C9.97408 2 8.96117 2 8.20965 2.49567C7.97115 2.65298 7.75634 2.84355 7.57174 3.06161C6.99006 3.74872 6.86937 4.75442 6.628 6.76581L6.53709 7.52342C6.2866 9.61087 6.16135 10.6546 6.75816 11.3273C7.35497 12 8.40618 12 10.5086 12H13.4912C15.5936 12 16.6448 12 17.2416 11.3273C17.8385 10.6546 17.7132 9.61087 17.4627 7.52342L17.3718 6.76581" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M12 12V14" stroke="currentColor" stroke-width="1.5"></path>
                                        <path d="M12 22V20M12 20V17.5M12 20H12.5C13.5 20 14.1886 21.0658 14.5 22M12 20H11.5C10.5 20 9.81142 21.0658 9.5 22M6 15.5L5 13C4.5 12 4 11.5 2 11.5M18 15.5L19 13C19.5 12 20 11.5 22 11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                                <span>Rezervasyonlar</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="reservation" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-reservation.php"> Rezervasyonlar Listesi </a>
                            </li>
                        </ul>
                    </li>

                    <!--
                    <li class="menu">
                        <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                                <span>Blog</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-blog-grid.php"> Grid </a>
                            </li>
                            <li>
                                <a href="./app-blog-list.php"> List </a>
                            </li>
                            <li>
                                <a href="./app-blog-post.php"> Post </a>
                            </li>
                            <li>
                                <a href="./app-blog-create.php"> Create </a>
                            </li>                            
                            <li>
                                <a href="./app-blog-edit.php"> Edit </a>
                            </li>
                        </ul>
                    </li>
                    -->

                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class="row invoice layout-top-spacing layout-spacing">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <form action="app-product-add.php" method="POST" enctype="multipart/form-data">
                                <div class="doc-container">

                                    <div class="row">
                                        <div class="col-xl-9">

                                            <div class="invoice-content">

                                                <div class="invoice-detail-body">

                                                    <div class="invoice-detail-title">

                                                        <div class="invoice-title">
                                                            <input type="text" name="product_name" class="form-control" placeholder="Urun Adi">
                                                        </div>

                                                    </div>


                                                    <div class="invoice-detail-terms">

                                                        <div class="row justify-content-between">

                                                            <div class="col-md-3">

                                                                <div class="form-group mb-4">
                                                                    <label for="product_small_price" class="mb-2">Urunun Kucuk Boyut Fiyati</label>
                                                                    <input type="text" class="form-control form-control-sm" name="product_small_price" id="product_small_price">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">

                                                                <div class="form-group mb-4">
                                                                    <label for="product_middle_price" class="mb-2">Urunun Orta Boyut Fiyati</label>
                                                                    <input type="text" class="form-control form-control-sm" name="product_middle_price" id="product_middle_price">
                                                                </div>

                                                            </div>


                                                            <div class="col-md-3">

                                                                <div class="form-group mb-4">
                                                                    <label for="product_big_price" class="mb-2">Urunun Buyuk Boyut Fiyati</label>
                                                                    <input type="text" class="form-control form-control-sm" name="product_big_price" id="product_big_price">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="product_category_id" class="mb-2">Kategoriler</label>
                                                                <select class="form-select form-control-sm mb-3" name="product_category_id" id="product_category_id">
                                                                    <option selected>Tum Kategoriler</option>
                                                                    <?php
                                                                    if (is_array($fetchDataProductCategory)) {
                                                                        $sn = 1;
                                                                        foreach ($fetchDataProductCategory as $data) {
                                                                    ?>
                                                                            <option value="<?php echo $data['product_category_id'] ?>"><?php echo $data['product_category_name'] ?></option>
                                                                    <?php
                                                                            $sn++;
                                                                        }
                                                                    } else {
                                                                        echo $fetchDataProductCategory;
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="invoice-detail-total">

                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="form-group row invoice-created-by">
                                                                    <label for="product_photos_1024x683" class="col-sm-3 col-form-label col-form-label-sm">Urun Fotografi:</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="file" class="form-control form-control-sm" id="product_photos_1024x683" name="product_photos_1024x683">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3">

                                            <div class="invoice-actions">

                                                <div class="invoice-action-tax">

                                                    <h5>Urun Aktiflik Durumu</h5>

                                                    <div class="invoice-action-tax-fields">

                                                        <div class="row">

                                                            <div class="col-12">
                                                                <div class="form-group row invoice-created-by">
                                                                    <label for="product_publicy" class="col-sm-6 col-form-label col-form-label-sm">
                                                                        Aktiflik:</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-check form-check-primary form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="product_publicy" checked="" name="product_publicy">
                                                                            <label class="form-check-label" for="product_publicy">
                                                                                Checked
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="invoice-actions-btn">

                                                <div class="invoice-action-btn">

                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-4">
                                                            <button type="submit" name="product_add" class="btn btn-primary btn-send">Urun Ekle</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/plugins/src/global/vendors.min.js"></script>
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/modern-light-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="../src/plugins/src/flatpickr/flatpickr.js"></script>
    <script src="../src/assets/js/apps/invoice-add.js"></script>
</body>

</html>