<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:53:59 GMT -->
<head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>Mordenize</title>
    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- --------------------------------------------------- -->
    <!-- Owl Carousel -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="../../dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <!-- --------------------------------------------------- -->
    <!-- Prism Js -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="../../dist/libs/prismjs/themes/prism-okaidia.min.css">
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    <link  id="themeColors"  rel="stylesheet" href="../../dist/css/style.min.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- --------------------------------------------------- -->
    <!-- Body Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- --------------------------------------------------- -->
      <!-- Sidebar -->
      <!-- --------------------------------------------------- -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('index') }}" class="text-nowrap logo-img">
              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8 text-muted"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Modern</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index2.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                  <span class="hide-menu">eCommerce</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index3.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-currency-dollar"></i>
                  </span>
                  <span class="hide-menu">NFT</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index4.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-cpu"></i>
                  </span>
                  <span class="hide-menu">Crypto</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index5.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-activity-heartbeat"></i>
                  </span>
                  <span class="hide-menu">General</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="index6.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-playlist"></i>
                  </span>
                  <span class="hide-menu">Music</span>
                </a>
              </li>
              <!-- ============================= -->
              <!-- Apps -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-calendar.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-calendar"></i>
                  </span>
                  <span class="hide-menu">Calendar</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="apps-kanban.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-kanban"></i>
                  </span>
                  <span class="hide-menu">Kanban</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-chat.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-message-dots"></i>
                  </span>
                  <span class="hide-menu">Chat</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-email.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Email</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-notes.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Notes</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-contact.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-phone"></i>
                  </span>
                  <span class="hide-menu">Contact Table</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-contact2.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-list-details"></i>
                  </span>
                  <span class="hide-menu">Contact List</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-invoice.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-text"></i>
                  </span>
                  <span class="hide-menu">Invoice</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="page-user-profile.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-user-circle"></i>
                  </span>
                  <span class="hide-menu">User Profile</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-chart-donut-3"></i>
                  </span>
                  <span class="hide-menu">Blog</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="blog-posts.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Posts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="blog-detail.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Details</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-basket"></i>
                  </span>
                  <span class="hide-menu">Ecommerce</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="eco-shop.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Shop</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-shop-detail.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Details</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-product-list.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-checkout.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Checkout</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- PAGES -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">PAGES</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="page-pricing.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-currency-dollar"></i>
                  </span>
                  <span class="hide-menu">Pricing</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="page-faq.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-help"></i>
                  </span>
                  <span class="hide-menu">FAQ</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="page-account-settings.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-user-circle"></i>
                  </span>
                  <span class="hide-menu">Account Setting</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/landingpage/index.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-app-window"></i>
                  </span>
                  <span class="hide-menu">Landing Page</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-layout"></i>
                  </span>
                  <span class="hide-menu">Widgets</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="widgets-cards.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-banners.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-charts.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-feeds.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Feed Widgets</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-apps.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Apps Widgets</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-data.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Data Widgets</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- UI -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">UI</span>
              </li>
              <!-- =================== -->
              <!-- UI Elements -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-layout-grid"></i>
                  </span>
                  <span class="hide-menu">UI Elements</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-accordian.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-badge.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-buttons.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-dropdowns.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Dropdowns</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-modals.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tab.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tooltip-popover.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Tooltip & Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-notification.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Notification</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-progressbar.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-pagination.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Pagination</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-typography.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-bootstrap-ui.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Bootstrap UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-breadcrumb.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-offcanvas.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-lists.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-grid.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-carousel.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-scrollspy.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-spinner.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item mb-3">
                    <a href="ui-link.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Link</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Cards -->
              <!-- ============================= -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-cards"></i>
                  </span>
                  <span class="hide-menu">Cards</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-cards.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Basic Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-customs.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Custom Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-weather.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Weather Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-draggable.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Draggable Cards</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Component -->
              <!-- ============================= -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-components"></i>
                  </span>
                  <span class="hide-menu">Component</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="component-sweetalert.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Sweet Alert</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-nestable.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Nestable</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-noui-slider.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Noui slider</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-rating.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Rating</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="component-toastr.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Toastr</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Forms -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <!-- =================== -->
              <!-- Form Elements -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-text"></i>
                  </span>
                  <span class="hide-menu">Form Elements</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-inputs.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Forms Input</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-groups.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Input Groups</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-grid.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Input Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-checkbox-radio.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Checkbox & Radios</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-touchspin.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Bootstrap Touchspin</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-switch.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Bootstrap Switch</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-select2.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Select2</span>
                    </a>
                  </li>
                  <li class="sidebar-item mb-3">
                    <a href="form-dual-listbox.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Dual Listbox</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- =================== -->
              <!-- Form Addons -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-qrcode"></i>
                  </span>
                  <span class="hide-menu">Form Addons</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-paginator.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Paginator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-img-cropper.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Image Cropper</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dropzone.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Dropzone</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-mask.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Form Mask</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-typeahead.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Form Typehead</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- =================== -->
              <!-- Form Validation -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Form Validation</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-bootstrap-validation.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Bootstrap Validation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-custom-validation.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Custom Validation</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- =================== -->
              <!-- Form Pickers -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-pencil"></i>
                  </span>
                  <span class="hide-menu">Form Pickers</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-picker-colorpicker.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Colorpicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-datetimepicker.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Datetimepicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-bootstrap-rangepicker.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Bootstrap Rangepicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-bootstrap-datepicker.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Bootstrap Datepicker</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-picker-material-datepicker.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Material Datepicker</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- =================== -->
              <!-- Form Editor -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-dna"></i>
                  </span>
                  <span class="hide-menu">Form Editor</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-editor-ckeditor.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Ck Editor</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-quill.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Quill Editor</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-summernote.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Summernote Editor</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-tinymce.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Tinymce Edtor</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- =================== -->
              <!-- Form Input -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-basic.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-archive"></i>
                  </span>
                  <span class="hide-menu">Basic Form</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-vertical.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-box-align-left"></i>
                  </span>
                  <span class="hide-menu">Form Vertical</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-horizontal.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-box-align-bottom"></i>
                  </span>
                  <span class="hide-menu">Form Horizontal</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-actions.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-export"></i>
                  </span>
                  <span class="hide-menu">Form Actions</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-row-separator.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-separator-horizontal"></i>
                  </span>
                  <span class="hide-menu">Row Separator</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-bordered.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-border-outer"></i>
                  </span>
                  <span class="hide-menu">Form Bordered</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-detail.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-description"></i>
                  </span>
                  <span class="hide-menu">Form Detail</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-striped-row.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-analytics"></i>
                  </span>
                  <span class="hide-menu">Striped Rows</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-floating-input.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-dots"></i>
                  </span>
                  <span class="hide-menu">Form Floating Input</span>
                </a>
              </li>
              <!-- =================== -->
              <!-- Form Wizard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-wizard.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-files"></i>
                  </span>
                  <span class="hide-menu">Form Wizard</span>
                </a>
              </li>
              <!-- =================== -->
              <!-- Form Repeater -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="form-repeater.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-topology-star-3"></i>
                  </span>
                  <span class="hide-menu">Form Repeater</span>
                </a>
              </li>
              <!-- ============================= -->
              <!-- Tables -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <!-- =================== -->
              <!-- Bootstrap Table -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-layout-sidebar"></i>
                  </span>
                  <span class="hide-menu">Bootstrap Table</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-basic.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-dark-basic.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Dark Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-sizing.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Sizing Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item mb-3">
                    <a href="table-layout-coloured.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Coloured Table</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- =================== -->
              <!-- Datatable -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-air-conditioning-disabled"></i>
                  </span>
                  <span class="hide-menu">Datatables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-datatable-basic.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Basic Initialisation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-api.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-advanced.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Advanced Initialisation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- =================== -->
              <!-- Table Jsgrid -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="table-jsgrid.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-border-top"></i>
                  </span>
                  <span class="hide-menu">Table Jsgrid</span>
                </a>
              </li>
              <!-- =================== -->
              <!-- Table Responsive -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="table-responsive.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-border-style"></i>
                  </span>
                  <span class="hide-menu">Table Responsive</span>
                </a>
              </li>
              <!-- =================== -->
              <!-- Table Footable -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="table-footable.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-border-none"></i>
                  </span>
                  <span class="hide-menu">Table Footable</span>
                </a>
              </li>
              <!-- =================== -->
              <!-- Table Editable -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="table-editable.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-table-filled"></i>
                  </span>
                  <span class="hide-menu">Table Editable</span>
                </a>
              </li>
              <!-- =================== -->
              <!-- Table Bootstrap -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="table-bootstrap.php" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-border-outer"></i>
                  </span>
                  <span class="hide-menu">Table Bootstrap</span>
                </a>
              </li>
              <!-- ============================= -->
              <!-- Charts -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <!-- =================== -->
              <!-- Apex Chart -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-chart-pie"></i>
                  </span>
                  <span class="hide-menu">Apex Charts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-apex-line.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-area.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Area Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-bar.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-pie.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Pie Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radial.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Radial Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item mb-3">
                    <a href="chart-apex-radar.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Radar Chart</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Sample Pages -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Sample Pages</span>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file"></i>
                  </span>
                  <span class="hide-menu">Sample Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="pages-animation.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Animation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-search-result.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Search Result</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-gallery.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Gallery</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-treeview.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Treeview</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-block-ui.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Block-Ui</span>
                    </a>
                  </li>
                  <li class="sidebar-item mb-3">
                    <a href="pages-session-timeout.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Session Timeout</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Icons -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Icons</span>
              </li>
              <!-- =================== -->
              <!-- Tabler Icon -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link" href="icon-tabler.php" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-archive"></i>
                  </span>
                  <span class="hide-menu">Tabler Icon</span>
                </a>
              </li>
              <!-- =================== -->
              <!-- AUTH -->
              <!-- =================== -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">AUTH</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link" href="authentication-error.php" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Error</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-login"></i>
                  </span>
                  <span class="hide-menu">Login</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Side Login</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login2.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Boxed Login</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-user-plus"></i>
                  </span>
                  <span class="hide-menu">Register</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-register.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Side Register</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register2.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Boxed Register</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-rotate"></i>
                  </span>
                  <span class="hide-menu">Forgot Password</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-forgot-password.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Side Forgot Password</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-forgot-password2.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Boxed Forgot Password</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-zoom-code"></i>
                  </span>
                  <span class="hide-menu">Two Steps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-two-steps.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Side Two Steps</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-two-steps2.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Boxed Two Steps</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link" href="authentication-maintenance.php" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-settings"></i>
                  </span>
                  <span class="hide-menu">Maintenance</span>
                </a>
              </li>
              <!-- ============================= -->
              <!-- OTHER -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">OTHER</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-box-multiple"></i>
                  </span>
                  <span class="hide-menu">Menu Level</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-apex-line.php" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Level 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Level 1.1</span>
                    </a>
                    <ul aria-expanded="false" class="collapse two-level">
                      <li class="sidebar-item">
                        <a href="chart-apex-line.php" class="sidebar-link">
                          <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                          </div>
                          <span class="hide-menu">Level 2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                          <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                          </div>
                          <span class="hide-menu">Level 2.1</span>
                        </a>
                        <ul aria-expanded="false" class="collapse three-level">
                          <li class="sidebar-item">
                            <a href="chart-apex-line.php" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Level 3</span>
                            </a>
                          </li>
                          <li class="sidebar-item">
                            <a href="chart-apex-area.php" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Level 3.1</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link link-disabled" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-ban"></i>
                  </span>
                  <span class="hide-menu">Disabled</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-star"></i>
                  </span>
                  <div class="lh-base">
                    <span class="hide-menu">SubCaption</span>
                    <span class="hide-menu fs-2">This is the sutitle</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link justify-content-between" href="#" aria-expanded="false">
                  <div class="d-flex align-items-center gap-3">
                    <span class="d-flex">
                      <i class="ti ti-award"></i>
                    </span>
                    <span class="hide-menu">Chip</span>
                  </div>
                  <div class="hide-menu">
                    <span class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center round-20 p-0">9</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link justify-content-between" href="#" aria-expanded="false">
                  <div class="d-flex align-items-center gap-3">
                    <span class="d-flex">
                      <i class="ti ti-mood-smile"></i>
                    </span>
                    <span class="hide-menu">Outlined</span>
                  </div>
                  <span class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="https://google.com/" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-star"></i>
                  </span>
                  <span class="hide-menu">External Link</span>
                </a>
              </li>
            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
              <div class="d-flex">
                <div class="unlimited-access-title">
                  <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Unlimited Access</h6>
                  <button class="btn btn-primary fs-2 fw-semibold lh-sm">Signup</button>
                </div>
                <div class="unlimited-access-img">
                  <img src="../../dist/images/backgrounds/rocket.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </nav>
          <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
              <div class="john-img">
                <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
              </div>
              <div class="john-title">
                <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                <span class="fs-2 text-dark">Designer</span>
              </div>
              <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="ti ti-power fs-6"></i>
              </button>
            </div>
          </div>  
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- --------------------------------------------------- -->
      <!-- Main Wrapper -->
      <!-- --------------------------------------------------- -->
      <div class="body-wrapper">
        <!-- --------------------------------------------------- -->
        <!-- Header Start -->
        <!-- --------------------------------------------------- -->
        <header class="app-header"> 
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="ti ti-search"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav quick-links d-none d-lg-flex">
              <li class="nav-item dropdown hover-dd d-none d-lg-block">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Apps<span class="mt-1"><i class="ti ti-chevron-down"></i></span></a>
                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                  <div class="row">
                    <div class="col-8">
                      <div class=" ps-7 pt-7">
                        <div class="border-bottom">
                          <div class="row">
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="app-chat.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Chat Application</h6>
                                    <span class="fs-2 d-block text-dark">New messages arrived</span>
                                  </div>
                                </a>
                                <a href="app-invoice.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Invoice App</h6>
                                    <span class="fs-2 d-block text-dark">Get latest invoice</span>
                                  </div>
                                </a>
                                <a href="app-contact2.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Contact Application</h6>
                                    <span class="fs-2 d-block text-dark">2 Unsaved Contacts</span>
                                  </div>
                                </a>
                                <a href="app-email.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Email App</h6>
                                    <span class="fs-2 d-block text-dark">Get new emails</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="page-user-profile.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">User Profile</h6>
                                    <span class="fs-2 d-block text-dark">learn more information</span>
                                  </div>
                                </a>
                                <a href="app-calendar.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Calendar App</h6>
                                    <span class="fs-2 d-block text-dark">Get dates</span>
                                  </div>
                                </a>
                                <a href="app-contact.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Contact List Table</h6>
                                    <span class="fs-2 d-block text-dark">Add new contact</span>
                                  </div>
                                </a>
                                <a href="app-notes.php" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Notes Application</h6>
                                    <span class="fs-2 d-block text-dark">To-do and Daily tasks</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center py-3">
                          <div class="col-8">
                            <a class="fw-semibold text-dark d-flex align-items-center lh-1 text-decoration-none" href="#"><i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-end pe-4">
                              <button class="btn btn-primary">Check</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 ms-n4">
                      <div class="position-relative p-7 border-start h-100">
                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                        <ul class="">
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="page-pricing.php">Pricing Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="authentication-login.php">Authentication Design</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="authentication-register.php">Register Now</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="authentication-error.php">404 Error Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="app-notes.php">Notes App</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="page-user-profile.php">User Application</a>
                          </li>   
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="page-account-settings.php">Account Settings</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-chat.php">Chat</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-calendar.php">Calendar</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-email.php">Email</a>
              </li>
            </ul>
            <div class="d-block d-lg-none">
              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
            </div>
            <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                  <i class="ti ti-align-justified fs-7"></i>
                </a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-flag-en.svg" alt="" class="rounded-circle object-fit-cover round-20">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-flag-en.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-flag-cn.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-flag-fr.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-flag-sa.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">عربي (Arabic)</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link notify-badge nav-icon-hover" href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="ti ti-basket"></i>
                        <span class="badge rounded-pill bg-danger fs-2">2</span>                   
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="ti ti-bell-ringing"></i>
                      <div class="notification bg-primary rounded-circle"></div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="../../dist/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                            <span class="d-block">Congratulate him</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="../../dist/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">New message</h6>
                            <span class="d-block">Salma sent you new message</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="../../dist/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Bianca sent payment</h6>
                            <span class="d-block">Check your earnings</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="../../dist/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Jolly completed tasks</h6>
                            <span class="d-block">Assign her new tasks</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="../../dist/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">John received payment</h6>
                            <span class="d-block">$230 deducted from account</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="../../dist/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                            <span class="d-block">Congratulate him</span>
                          </div>
                        </a>
                      </div>
                      <div class="py-6 px-7 mb-1">
                        <button class="btn btn-outline-primary w-100"> See All Notifications </button>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                      <div class="d-flex align-items-center">
                        <div class="user-profile-img">
                          <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="" />
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class="py-3 px-7 pb-0">
                          <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                        </div>
                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                          <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="" />
                          <div class="ms-3">
                            <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                            <span class="mb-1 d-block text-dark">Designer</span>
                            <p class="mb-0 d-flex text-dark align-items-center gap-2">
                              <i class="ti ti-mail fs-4"></i> info@modernize.com
                            </p>
                          </div>
                        </div>
                        <div class="message-body">
                          <a href="page-user-profile.php" class="py-8 px-7 mt-8 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-account.svg" alt="" width="24" height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                              <h6 class="mb-1 bg-hover-primary fw-semibold"> My Profile </h6>
                              <span class="d-block text-dark">Account Settings</span>
                            </div>
                          </a>
                          <a href="app-email.php" class="py-8 px-7 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-inbox.svg" alt="" width="24" height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                              <h6 class="mb-1 bg-hover-primary fw-semibold">My Inbox</h6>
                              <span class="d-block text-dark">Messages & Emails</span>
                            </div>
                          </a>
                          <a href="app-notes.php" class="py-8 px-7 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-tasks.svg" alt="" width="24" height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                              <h6 class="mb-1 bg-hover-primary fw-semibold">My Task</h6>
                              <span class="d-block text-dark">To-do and Daily Tasks</span>
                            </div>
                          </a>
                        </div>
                        <div class="d-grid py-4 px-7 pt-8">
                          <div class="upgrade-plan bg-light-primary position-relative overflow-hidden rounded-4 p-4 mb-9">
                            <div class="row">
                              <div class="col-6">
                                <h5 class="fs-4 mb-3 w-50 fw-semibold text-dark">Unlimited Access</h5>
                                <button class="btn btn-primary text-white">Upgrade</button>
                              </div>
                              <div class="col-6">
                                <div class="m-n4">
                                  <img src="../../dist/images/backgrounds/unlimited-bg.png" alt="" class="w-100">
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="authentication-login.php" class="btn btn-outline-primary">Log Out</a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!-- --------------------------------------------------- -->
        <!-- Header End -->
        <!-- --------------------------------------------------- -->
        <div class="container-fluid">
          <!-- --------------------------------------------------- -->
          <!--  Form Vertical Start -->
          <!-- --------------------------------------------------- -->
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Vertical Form</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted" href="{{ route('index') }}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Vertical Form</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h5 class="card-title fw-semibold mb-0">Basic Layout</h5>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Name</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Company</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="ACME Inc.">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Email</label>
                    <div class="input-group border rounded-1">
                      <input type="text" class="form-control border-0" placeholder="John Deo">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1">@example.com</span>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Phone No</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="412 2150 451">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Message</label>
                    <textarea class="form-control p-7" name="" id="" cols="20" rows="1" placeholder="Hi, Do you  have a moment to talk Jeo ?"></textarea>
                  </div>
                  <BUtton class="btn btn-primary">Send</BUtton>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h5 class="card-title fw-semibold mb-0">Basic Layout</h5>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Name</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-user fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="John Deo">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Company</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-building-arch fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="ACME Inc.">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Email</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-mail fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="John Deo">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Phone No</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-phone fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="412 2150 451">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Message</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-message-2 fs-6"></i></span>
                      <textarea class="form-control p-7 border-0 ps-2" name="" id="" cols="20" rows="1" placeholder="Hi, Do you  have a moment to talk Jeo ?"></textarea>
                    </div>
                  </div>
                  <BUtton class="btn btn-primary">Send</BUtton>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h5 class="card-title fw-semibold mb-0">Multi Column with Form Separator</h5>
                </div>
                <div class="card-body p-4 border-bottom">
                  <h5 class="fs-4 fw-semibold mb-4">Account Details</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Username</label>
                        <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                      </div>
                      <div class="">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Password</label>
                        <div class="input-group border rounded-1">
                          <input type="password" class="form-control border-0" id="inputPassword" placeholder="John Deo">
                          <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Email</label>
                        <div class="input-group border rounded-1">
                          <input type="text" class="form-control border-0" placeholder="John Deo">
                          <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1">@example.com</span>
                        </div>
                      </div>
                      <div class="">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm Password</label>
                        <div class="input-group border rounded-1">
                          <input type="password" class="form-control border-0" id="inputPassword" placeholder="John Deo">
                          <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4">
                  <h5 class="fs-4 fw-semibold mb-4">Personal Info</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                        <input type="text" class="form-control" id="exampleInputtext" placeholder="John">
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Country</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">India</option>
                          <option value="1">United Kingdom</option>
                          <option value="2">Srilanka</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Birth Date</label>
                        <input id="startDate" class="form-control" type="date" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputtext" placeholder="Deo">
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Language</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">English</option>
                          <option value="1">French</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Phone no</label>
                        <input type="text" class="form-control" id="exampleInputtext" placeholder="123 4567 201">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-primary">Submit</button>
                        <button class="btn btn-light-danger text-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="collapsible-section mb-4">
            <h5 class="card-title fw-semibold mb-4">Collapsible Section</h5>
            <div class="accordion accordion-flush position-relative overflow-hidden" id="accordionFlushExample">
              <div class="accordion-item mb-3 shadow-none border rounded-top">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0 rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Delivery Address
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="John">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Phone no</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="1340 2154 123">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Address</label>
                          <textarea class="form-control p-7" name="" id="" cols="20" rows="1" placeholder="150, Ring Road"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Pincode</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="120125">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Landmark</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="Nr. Wall Street">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">City</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="Jackson">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">State</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected="">Alaska</option>
                            <option value="1">Arizona</option>
                            <option value="2">Hawaii</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div>
                      <h6 class="fw-semibold">Address Type</h6>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Home (All day delivery)</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1"> Office (Delivery between 10 AM - 5 PM)</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3 shadow-none border">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Delivery Options
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Standard 3-5 Days</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Express</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Overnight</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3 shadow-none border rounded-bottom">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0 rounded-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Payment Method
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="mb-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Credit/Debit/ATM Card</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Cash on Delivery</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Card Number</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="1250 4521 5630 1540">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-4">
                              <label for="exampleInputPassword1" class="form-label fw-semibold">Name</label>
                              <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="mb-4">
                              <label for="exampleInputPassword1" class="form-label fw-semibold">Exp. Date</label>
                              <input type="text" class="form-control" id="exampleInputtext" placeholder="MM/YY">
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="mb-4">
                              <label for="exampleInputtext1" class="form-label fw-semibold">CCV Code</label>
                              <div class="input-group border rounded-1">
                                <input type="text" class="form-control border-0" id="inputtext" placeholder="456">
                                <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i class="ti ti-help fs-6"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn btn-light-danger text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-with-tabs">
            <h5 class="card-title fw-semibold mb-4">Form with Tabs</h5>
            <div class="card">
              <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold" id="pills-personal-info-tab" data-bs-toggle="pill" data-bs-target="#pills-personal-info" type="button" role="tab" aria-controls="pills-personal-info" aria-selected="true">
                    Personal Info
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold" id="pills-account-details-tab" data-bs-toggle="pill" data-bs-target="#pills-account-details" type="button" role="tab" aria-controls="pills-account-details" aria-selected="false">
                    Account Details
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold" id="pills-social-links-tab" data-bs-toggle="pill" data-bs-target="#pills-social-links" type="button" role="tab" aria-controls="pills-social-links" aria-selected="false">
                    Social Links
                  </button>
                </li>
              </ul>
              <div class="card-body p-4">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-personal-info" role="tabpanel" aria-labelledby="pills-personal-info-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="John">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Country</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected="">India</option>
                            <option value="1">United Kingdom</option>
                            <option value="2">Srilanka</option>
                          </select>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                          <input id="startDate" class="form-control" type="date">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Last Name</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="Deo">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Language</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected="">English</option>
                            <option value="1">French</option>
                          </select>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Phone no</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="123 4567 201">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn btn-light-danger text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-account-details" role="tabpanel" aria-labelledby="pills-account-details-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Username</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Password</label>
                          <div class="input-group border rounded-1">
                            <input type="password" class="form-control border-0" id="inputPassword" placeholder="John Deo">
                            <span class="input-group-text bg-transparent px-6" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Email</label>
                          <div class="input-group border rounded-1">
                            <input type="text" class="form-control border-0" placeholder="John Deo">
                            <span class="input-group-text bg-transparent px-6" id="basic-addon1">@example.com</span>
                          </div>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm Password</label>
                          <div class="input-group border rounded-1">
                            <input type="password" class="form-control border-0" id="inputPassword" placeholder="John Deo">
                            <span class="input-group-text bg-transparent px-6" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn btn-light-danger text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-social-links" role="tabpanel" aria-labelledby="pills-social-links-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Twitter</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="https://twitter.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Google</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="https://plus.google.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Instagram</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="https://instagram.com/abc">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Facebook</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="https://facebook.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Linkedin</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="https://linkedin.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Quora</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="https://quora.com/abc">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn btn-light-danger text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- --------------------------------------------------- -->
          <!--  Form Vertical End -->
          <!-- --------------------------------------------------- -->
        </div>
      </div>
    <div class="dark-transparent sidebartoggler"></div>
    <div class="dark-transparent sidebartoggler"></div>
    </div>
    <!--  Shopping Cart -->
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
      </div>
      <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../../dist/images/products/product-1.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add1"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addo2"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../../dist/images/products/product-2.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add2"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon34"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../../dist/images/products/product-3.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add3"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon3"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="align-bottom">
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Sub Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$2530</span>
            </div>
          </div>
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$6830</span>
            </div>
          </div>
          <a href="eco-checkout.php" class="btn btn-outline-primary w-100">Go to shopping cart</a>
        </div>
      </div>
    </div>
    <!--  Mobilenavbar -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
      <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
          <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="" class="img-fluid">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar=""  data-simplebar>
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span>
                  <i class="ti ti-apps"></i>
                </span>
                <span class="hide-menu">Apps</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level my-3">
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Email App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                      <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                    </div>
                  </a>
                </li>
                <ul class="px-8 mt-7 mb-4">
                  <li class="sidebar-item mb-3">
                    <h5 class="fs-5 fw-semibold">Quick Links</h5>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Register Now</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Notes App</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">User Application</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Account Settings</a>
                  </li>
                </ul>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="app-chat.php" aria-expanded="false">
                <span>
                  <i class="ti ti-message-dots"></i>
                </span>
                <span class="hide-menu">Chat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="app-calendar.php" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar"></i>
                </span>
                <span class="hide-menu">Calendar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="app-email.php" aria-expanded="false">
                <span>
                  <i class="ti ti-mail"></i>
                </span>
                <span class="hide-menu">Email</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
          <div class="modal-header border-bottom">
            <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
            <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
              <i class="ti ti-x fs-5 ms-3"></i>
            </span>
          </div>
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
            <ul class="list mb-0 py-2">
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Modern</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Posts</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Detail</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Shop</span>
                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Modern</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Posts</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Detail</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Shop</span>
                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- --------------------------------------------------- -->
    <!-- Customizer -->
    <!-- --------------------------------------------------- -->
   <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
  </button>
  <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-simplebar="">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
      <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
      <div class="theme-option pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)"  onclick="toggleTheme('../../dist/css/style.min.css')"  class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
            <i class="ti ti-brightness-up fs-7 text-primary"></i>
            <span class="text-dark">Light</span>
          </a>
          <a href="javascript:void(0)" onclick="toggleTheme('../../dist/css/style-dark.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
            <i class="ti ti-moon fs-7 "></i>
            <span class="text-dark">Dark</span>
          </a>
        </div>
      </div>
      <div class="theme-direction pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Direction</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="{{ route('index') }}" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-text-direction-ltr fs-6 text-primary"></i>
            <span class="text-dark">LTR</span>
          </a>
          <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/rtl/index.php" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
            <span class="text-dark">RTL</span>
          </a>
        </div>
      </div>
      <div class="theme-colors pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme " onclick="toggleTheme('../../dist/css/style.min.css')"  data-color="blue_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME"><i class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"  class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary " onclick="toggleTheme('../../dist/css/style-aqua.min.css')"  data-color="aqua_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary" onclick="toggleTheme('../../dist/css/style-purple.min.css')"  data-color="purple_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary" onclick="toggleTheme('../../dist/css/style-green.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary" onclick="toggleTheme('../../dist/css/style-cyan.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary" onclick="toggleTheme('../../dist/css/style-orange.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="layout-type pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Layout Type</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="{{ route('index') }}" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">              
            <i class="ti ti-layout-sidebar fs-6 text-primary"></i>
            <span class="text-dark">Vertical</span>
          </a>
          <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/horizontal/index.php" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-layout-navbar fs-6 text-dark"></i>
            <span class="text-dark">Horizontal</span>
          </a>
        </div>
      </div>
      <div class="container-option pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Container Option</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">              
            <i class="ti ti-layout-distribute-vertical fs-7 text-primary"></i>
            <span class="text-dark">Boxed</span>
          </a>
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
            <i class="ti ti-layout-distribute-horizontal fs-7"></i>
            <span class="text-dark">Full</span>
          </a>
        </div>
      </div>
      <div class="sidebar-type pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Sidebar Type</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a  href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 fullsidebar">              
            <i class="ti ti-layout-sidebar-right fs-7"></i>
            <span class="text-dark">Full</span>
          </a>
          <a  href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center text-dark sidebartoggler gap-2">
            <i class="ti ti-layout-sidebar fs-7"></i>
            <span class="text-dark">Collapse</span>
          </a>
        </div>
      </div>
      <div class="card-with pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">              
            <i class="ti ti-border-outer fs-7"></i>
            <span class="text-dark">Border</span>
          </a>
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
            <i class="ti ti-border-none fs-7"></i>
            <span class="text-dark">Shadow</span>
          </a>
        </div>
      </div>
    </div>
  </div>
        <!-- ---------------------------------------------- -->
    <!-- Customizer -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    
    <script src="../../dist/js/custom.js"></script>
    <script src="../../dist/libs/prismjs/prism.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
  </body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:53:59 GMT -->
</html>