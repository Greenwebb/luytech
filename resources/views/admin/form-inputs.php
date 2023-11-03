<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:53:12 GMT -->
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
          <!--  Form Inputs Start -->
          <!-- --------------------------------------------------- -->
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Form Inputs</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="{{ route('index') }}">Dashboard</a></li>
                      <li class="breadcrumb-item" aria-current="page">Form Inputs</li>
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
          <section>
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Default Input
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div
                      class="d-flex align-items-center justify-content-between mb-3"
                    >
                      <div>
                        <h5 class="mb-0 fs-5">Default Input</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code1-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code1-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Default Input - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                            <code>
        &lt;form&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;           
                                            </code>
                                        </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>form-control</code></mark> class to
                      the input
                    </p>
                    <form>
                      <div class="form-group">
                        <input type="text́" class="form-control" />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Default Input
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input With Helper Text
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input With Helper Text</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code2-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code2-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input With Helper Text - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                            <code>
        &lt;form&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
                &lt;small id=&quot;name&quot; class=&quot;form-text text-muted&quot;&gt;Helper Text&lt;/small&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                            </code>
                                        </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form>
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="nametext"
                          aria-describedby="name"
                          placeholder="Name"
                        />
                        <small id="name" class="form-text text-muted"
                          >Helper Text</small
                        >
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input With Helper Text
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Password
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Password</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code3-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code3-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Password - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                          <code>
        &lt;form&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;passtext&quot; placeholder=&quot;Password&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                          </code>
                                      </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form>
                      <div class="form-group">
                        <input
                          type="password"
                          class="form-control"
                          id="passtext"
                          placeholder="Password"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Password
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Disabled Input
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Disabled Input</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code4-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code4-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Disabled Input - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext1&quot; placeholder=&quot;Name&quot; disabled&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Add attribute <code>disabled</code> to disable input
                      field.
                    </p>
                    <h6 class="card-subtitle mb-3"></h6>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="nametext1"
                          placeholder="Name"
                          disabled
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Disabled Input
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Predefined Input Value
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Predefined Input Value</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code5-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code5-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Predefined Input Value - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-2&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;prenametext&quot; value=&quot;Name&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Add attribute <mark><code>value="VALUE"</code></mark> to
                      set predefined value.
                    </p>
                    <form class="mt-2">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="prenametext"
                          value="Name"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Predefined Input Value
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Readonly Input Field
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Readonly Input Field</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code6-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code6-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Readonly Input Field - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonly&quot; placeholder=&quot;Readonly Text&quot; readonly&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Add attribute <mark><code>readonly</code></mark> to set
                      field readonly.
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="readonly"
                          placeholder="Readonly Text"
                          readonly
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Readonly Input Field
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input With Placeholder
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input With Placeholder</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code7-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code7-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input With Placeholder - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;placeholder&quot; placeholder=&quot;Placeholder Text&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Add attribute
                      <mark><code>placeholder="..."</code></mark> to input area.
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="placeholder"
                          placeholder="Placeholder Text"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input With Placeholder
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Maximum Value
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Maximum Value</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code8-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code8-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Maximum Value - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; maxlength=&quot;6&quot; id=&quot;maxval&quot; aria-describedby=&quot;maxval&quot; placeholder=&quot;Name&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Add attribute <mark><code>maxlength="6"</code></mark> to
                      input area.
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          maxlength="6"
                          id="maxval"
                          aria-describedby="maxval"
                          placeholder="Name"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Maximum Value
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Minimum Value
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Minimum Value</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code9-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code9-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Minimum Value - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; minlength=&quot;5&quot; id=&quot;minval&quot; aria-describedby=&quot;minval&quot; placeholder=&quot;Name&quot;&gt;
          &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Add attribute <mark><code>minlength="5"</code></mark> to
                      input area.
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          minlength="5"
                          id="minval"
                          aria-describedby="minval"
                          placeholder="Name"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Minimum Value
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">Input Type Options</h5>
            <div class="row">
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Text
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Text</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code10-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code10-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Text - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; value=&quot;Name&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="text"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input type="text" class="form-control" value="Name" />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Text
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Password
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Password</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code11-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code11-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Password - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; value=&quot;Name&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="password"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="password"
                          class="form-control"
                          value="Name"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Password
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Phone Number
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Phone Number</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code12-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code12-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Phone Number - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;tel&quot; class=&quot;form-control&quot; value=&quot;1-(444)-444-4445&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="tel"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="tel"
                          class="form-control"
                          value="1-(444)-444-4445"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Phone Number
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Email
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Email</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code13-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code13-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Email - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; value=&quot;abc@example.com&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="email"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="email"
                          class="form-control"
                          value="abc@example.com"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Email
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type URL
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type URL</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code14-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code14-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type URL - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;url&quot; class=&quot;form-control&quot; value=&quot;http://google.com&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="url"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="url"
                          class="form-control"
                          value="http://google.com/"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type URL
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Search
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Search</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code15-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code15-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Search - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;search&quot; class=&quot;form-control&quot; value=&quot;how to...&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="search"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="search"
                          class="form-control"
                          value="how to..."
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Search
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Numbers
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Numbers</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code16-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code16-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Numbers - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;6029&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="number"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="number"
                          class="form-control"
                          value="6029"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Numbers
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Date Time
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Date Time</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code17-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code17-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Date Time - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;datetime-local&quot; class=&quot;form-control&quot; value=&quot;2008-05-13T22:33:00&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using
                      <mark><code>input type="datetime-local"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="datetime-local"
                          class="form-control"
                          value="2008-05-13T22:33:00"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Date Time
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Date
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Date</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code18-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code18-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Date - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;date&quot; class=&quot;form-control&quot; value=&quot;2018-05-13&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="date"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="date"
                          class="form-control"
                          value="2018-05-13"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Date
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Time
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Time</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code19-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code19-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Time - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;time&quot; class=&quot;form-control&quot; value=&quot;22:33:00&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="time"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="time"
                          class="form-control"
                          value="22:33:00"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Time
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Week
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Week</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code20-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code20-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Week - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;week&quot; class=&quot;form-control&quot; value=&quot;2011-W33&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="week"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="week"
                          class="form-control"
                          value="2011-W33"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Week
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Type Month
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Month</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code21-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code21-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Month - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;month&quot; class=&quot;form-control&quot; value=&quot;1999-08&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="month"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="month"
                          class="form-control"
                          value="1999-08"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Month
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Type Color
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Color</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code22-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code22-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Color - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;color&quot; class=&quot;form-control&quot; value=&quot;#563d7c&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="color"</code></mark>
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="color"
                          class="form-control"
                          value="#563d7c"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Color
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Bootstrap Colorpicker
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Bootstrap Colorpicker</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code23-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code23-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Bootstrap Colorpicker - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color&quot; id=&quot;exampleColorInput&quot; value=&quot;#563d7c&quot; title=&quot;Choose your color&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Use <mark><code>form-control-color</code></mark> classs
                      for bootstrap colorpicker
                    </p>
                    <form class="mt-4">
                      <div class="form-group">
                        <input
                          type="color"
                          class="form-control form-control-color"
                          id="exampleColorInput"
                          value="#563d7c"
                          title="Choose your color"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Bootstrap Colorpicker
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Type Range
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Type Range</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code24-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code24-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Type Range - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange1&quot;&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      Using <mark><code>input type="range"</code></mark>
                    </p>
                    <form class="mt-3">
                      <div class="form-group">
                        <input
                          type="range"
                          class="form-range"
                          id="customRange1"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Type Range
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">General Textarea</h5>
            <div class="row">
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Textarea
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Textarea</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code25-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code25-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Textarea - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Textarea
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Textarea With Placeholder
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Textarea With Placeholder</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code26-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code26-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Textarea With Placeholder - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot; placeholder=&quot;Text Here...&quot;&gt;&lt;/textarea&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          rows="3"
                          placeholder="Text Here..."
                        ></textarea>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Textarea With Placeholder
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Textarea With Helper Text
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Textarea With Helper Text</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code27-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code27-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Textarea With Helper Text - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot; placeholder=&quot;Text Here...&quot;&gt;&lt;/textarea&gt;
                &lt;small id=&quot;textHelp&quot; class=&quot;form-text text-muted&quot;&gt;Helper Text&lt;/small&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form>
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          rows="3"
                          placeholder="Text Here..."
                        ></textarea>
                        <small id="textHelp" class="form-text text-muted"
                          >Helper Text</small
                        >
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Textarea With Helper Text
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mb-4">Inline Checkboxes &amp; Radios</h5>
            <div class="row">
              <div class="col-md-6">
                <!-- ---------------------
                                                    start Inline Default Checkbox
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Default Checkbox</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code28-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code28-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Default Checkbox - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox1&quot; value=&quot;option1&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox1&quot;&gt;1&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox2&quot; value=&quot;option2&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox2&quot;&gt;2&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox3&quot; value=&quot;option3&quot; disabled&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox3&quot;&gt;3 (disabled)&lt;/label&gt;
        &lt;/div&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inlineCheckbox1"
                        value="option1"
                      />
                      <label class="form-check-label" for="inlineCheckbox1"
                        >1</label
                      >
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inlineCheckbox2"
                        value="option2"
                      />
                      <label class="form-check-label" for="inlineCheckbox2"
                        >2</label
                      >
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inlineCheckbox3"
                        value="option3"
                        disabled
                      />
                      <label class="form-check-label" for="inlineCheckbox3"
                        >3 (disabled)</label
                      >
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Inline Default Checkbox
                                                ---------------- -->
              </div>
              <div class="col-md-6">
                <!-- ---------------------
                                                    start  Inline Default Radio Button
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Default Radio Button</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code29-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code29-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Default Radio Button - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio1&quot; value=&quot;option1&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio1&quot;&gt;1&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio2&quot; value=&quot;option2&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio2&quot;&gt;2&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio3&quot; value=&quot;option3&quot; disabled&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio3&quot;&gt;3 (disabled)&lt;/label&gt;
        &lt;/div&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio1"
                        value="option1"
                      />
                      <label class="form-check-label" for="inlineRadio1"
                        >1</label
                      >
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio2"
                        value="option2"
                      />
                      <label class="form-check-label" for="inlineRadio2"
                        >2</label
                      >
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                        disabled
                      />
                      <label class="form-check-label" for="inlineRadio3"
                        >3 (disabled)</label
                      >
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end  Inline Default Radio Button
                                                ---------------- -->
              </div>
              <div class="col-md-6">
                <!-- ---------------------
                                                    start  Inline Custom Checkbox
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Custom Checkbox</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code30-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code30-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Custom Checkbox - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck1&quot;&gt;
                &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck1&quot;&gt;1&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck2&quot;&gt;
                &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck2&quot;&gt;2&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck3&quot; disabled=&quot;&quot;&gt;
                &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck3&quot;&gt;3&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck1"
                        />
                        <label class="custom-control-label" for="customCheck1"
                          >1</label
                        >
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck2"
                        />
                        <label class="custom-control-label" for="customCheck2"
                          >2</label
                        >
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck3"
                          disabled=""
                        />
                        <label class="custom-control-label" for="customCheck3"
                          >3</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end  Inline Custom Checkbox
                                                ---------------- -->
              </div>
              <div class="col-md-6">
                <!-- ---------------------
                                                    start  Inline Custom Radios
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Custom Radios</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code31-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code31-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Custom Radios - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;div class=&quot;custom-control custom-radio&quot;&gt;
                &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation2&quot; name=&quot;radio-stacked&quot;&gt;
                &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation2&quot;&gt;1&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;div class=&quot;custom-control custom-radio&quot;&gt;
                &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation3&quot; name=&quot;radio-stacked&quot;&gt;
                &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation3&quot;&gt;2&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;div class=&quot;custom-control custom-radio&quot;&gt;
                &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation4&quot; name=&quot;radio-stacked&quot; disabled&gt;
                &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation4&quot;&gt;3&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="custom-control custom-radio">
                        <input
                          type="radio"
                          class="custom-control-input"
                          id="customControlValidation2"
                          name="radio-stacked"
                        />
                        <label
                          class="custom-control-label"
                          for="customControlValidation2"
                          >1</label
                        >
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="custom-control custom-radio">
                        <input
                          type="radio"
                          class="custom-control-input"
                          id="customControlValidation3"
                          name="radio-stacked"
                        />
                        <label
                          class="custom-control-label"
                          for="customControlValidation3"
                          >2</label
                        >
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <div class="custom-control custom-radio">
                        <input
                          type="radio"
                          class="custom-control-input"
                          id="customControlValidation4"
                          name="radio-stacked"
                          disabled
                        />
                        <label
                          class="custom-control-label"
                          for="customControlValidation4"
                          >3</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end  Inline Custom Radios
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">General Select</h5>
            <div class="row">
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start  Select
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Select</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code32-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code32-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Select - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;form-group mb-4&quot;&gt;
                &lt;label for=&quot;exampleFormControlSelect1&quot;&gt;Select No&lt;/label&gt;
                &lt;select class=&quot;form-control&quot; id=&quot;exampleFormControlSelect1&quot;&gt;
                    &lt;option&gt;1&lt;/option&gt;
                    &lt;option&gt;2&lt;/option&gt;
                    &lt;option&gt;3&lt;/option&gt;
                    &lt;option&gt;4&lt;/option&gt;
                    &lt;option&gt;5&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-4">
                      <div class="form-group mb-4">
                        <label for="exampleFormControlSelect1">Select No</label>
                        <select
                          class="form-control"
                          id="exampleFormControlSelect1"
                        >
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end  Select
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start  Form Select
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Form Select</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code33-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code33-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Form Select - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form&gt;
            &lt;div class=&quot;form-group mb-4&quot;&gt;
                &lt;label class=&quot;mr-sm-2&quot; for=&quot;inlineFormCustomSelect&quot;&gt;Select&lt;/label&gt;
                &lt;select class=&quot;form-select mr-sm-2&quot; id=&quot;inlineFormCustomSelect&quot;&gt;
                    &lt;option selected&gt;Choose...&lt;/option&gt;
                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>.form-select</code></mark> class
                    </p>
                    <form>
                      <div class="form-group mb-4">
                        <label class="mr-sm-2" for="inlineFormCustomSelect"
                          >Select</label
                        >
                        <select
                          class="form-select mr-sm-2"
                          id="inlineFormCustomSelect"
                        >
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end  Form Select
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start  Multiple Select
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Multiple Select</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code34-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code34-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Multiple Select - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form&gt;
            &lt;select multiple class=&quot;form-control&quot; id=&quot;exampleFormControlSelect2&quot;&gt;
                &lt;option&gt;1&lt;/option&gt;
                &lt;option&gt;2&lt;/option&gt;
                &lt;option&gt;3&lt;/option&gt;
                &lt;option&gt;4&lt;/option&gt;
                &lt;option&gt;5&lt;/option&gt;
            &lt;/select&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>multiple</code></mark> to the field
                    </p>
                    <form>
                      <select
                        multiple
                        class="form-control"
                        id="exampleFormControlSelect2"
                      >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end  Multiple Select
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start  Select With Addons
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Select With Addons</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code35-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code35-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Select With Addons - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form&gt;
            &lt;div class=&quot;input-group mb-3&quot;&gt;
                &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
                &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
                    &lt;option selected&gt;Choose...&lt;/option&gt;
                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>.input-group-prepend</code></mark> class to
                      the div
                    </p>
                    <form>
                      <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01"
                          >Options</label
                        >
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end  Select With Addons
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Select With Buttons
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Select With Buttons</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code36-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code36-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Select With Buttons - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form&gt;
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect04&quot;&gt;
                    &lt;option selected&gt;Choose...&lt;/option&gt;
                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                &lt;/select&gt;
                    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>.input-group-append</code></mark> class to the
                      div
                    </p>
                    <form>
                      <div class="input-group">
                        <select class="form-select" id="inputGroupSelect04">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <button class="btn btn-outline-secondary" type="button">
                          Button
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Select With Buttons
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">File Upload</h5>
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Default File Upload
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Default File Upload</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code37-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code37-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Default File Upload - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFile&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>.form-control-file</code></mark> class to the
                      input
                    </p>
                    <form class="mt-3">
                      <input class="form-control" type="file" id="formFile" />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Default File Upload
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Custom File Upload
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Custom File Upload</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code38-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code38-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Custom File Upload - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form&gt;
            &lt;div class=&quot;input-group mb-3&quot;&gt;
                &lt;span class=&quot;input-group-text&quot;&gt;Upload&lt;/span&gt;
                &lt;div class=&quot;custom-file&quot;&gt;
                    &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFile&quot;&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>.custom-file-input</code></mark> class to the
                      input
                    </p>
                    <form>
                      <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Upload</span>
                        <div class="custom-file">
                          <input
                            class="form-control"
                            type="file"
                            id="formFile"
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Custom File Upload
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Custom File Upload with Button Left
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Custom File Upload with Button Left
                        </h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code39-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code39-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Custom File Upload with Button Left - View
                                  Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;button class=&quot;btn btn-light-info text-info font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
                &lt;div class=&quot;custom-file&quot;&gt;
                    &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFile&quot;&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>.input-group-prepend</code></mark> class to
                      the div
                    </p>
                    <form class="mt-4">
                      <div class="input-group flex-nowrap">
                        <button
                          class="btn btn-light-info text-info font-medium"
                          type="button"
                        >
                          Button
                        </button>
                        <div class="custom-file">
                          <input
                            class="form-control"
                            type="file"
                            id="formFile"
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Custom File Upload with Button Left
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Custom File Upload with Button Right
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Custom File Upload with Button Right
                        </h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code40-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code40-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Custom File Upload with Button Right - View
                                  Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-4&quot;&gt;
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;div class=&quot;custom-file&quot;&gt;
                    &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFile&quot;&gt;
                &lt;/div&gt;
                &lt;button class=&quot;btn btn-light-info text-info font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>.input-group-append</code></mark> class to the
                      div
                    </p>
                    <form class="mt-4">
                      <div class="input-group flex-nowrap">
                        <div class="custom-file">
                          <input
                            class="form-control"
                            type="file"
                            id="formFile"
                          />
                        </div>
                        <button
                          class="btn btn-light-info text-info font-medium"
                          type="button"
                        >
                          Button
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Custom File Upload with Button Right
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">Different Style in Helper Text</h5>
            <div class="row">
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Left Helper Text
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Left Helper Text</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code41-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code41-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Left Helper Text - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext2&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
                &lt;div class=&quot;d-flex justify-content-start&quot;&gt;
                    &lt;small id=&quot;name1&quot; class=&quot;badge badge-default text-info font-medium bg-light-info form-text&quot;&gt;Helper Text&lt;/small&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>justify-content-start</code></mark> class to
                      the text
                    </p>
                    <form class="mt-3">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="nametext2"
                          aria-describedby="name"
                          placeholder="Name"
                        />
                        <div class="d-flex justify-content-start">
                          <small
                            id="name1"
                            class="badge badge-default text-info font-medium bg-light-info form-text"
                            >Helper Text</small
                          >
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Left Helper Text
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Center Helper Text
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Center Helper Text</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code42-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code42-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Center Helper Text - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;div class=&quot;form-group mb-0&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext4&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
                &lt;p class=&quot;text-center mb-0&quot;&gt;
                    &lt;small id=&quot;name45&quot; class=&quot;badge badge-default text-warning font-medium bg-light-warning form-text&quot;&gt;Helper Text&lt;/small&gt;
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>text-center</code></mark> class to
                      the text
                    </p>
                    <form class="mt-3">
                      <div class="form-group mb-0">
                        <input
                          type="text"
                          class="form-control"
                          id="nametext4"
                          aria-describedby="name"
                          placeholder="Name"
                        />
                        <p class="text-center mb-0">
                          <small
                            id="name45"
                            class="badge badge-default text-warning font-medium bg-light-warning form-text"
                            >Helper Text</small
                          >
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Center Helper Text
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Right Helper Text
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Right Helper Text</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code43-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code43-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Right Helper Text - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext12&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
                &lt;div class=&quot;d-flex justify-content-end&quot;&gt;
                    &lt;small id=&quot;name13&quot; class=&quot;badge badge-default text-danger font-medium bg-light-danger form-text&quot;&gt;Helper Text&lt;/small&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add
                      <mark><code>justify-content-end</code></mark> class to the
                      text
                    </p>
                    <form class="mt-3">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="nametext12"
                          aria-describedby="name"
                          placeholder="Name"
                        />
                        <div class="d-flex justify-content-end">
                          <small
                            id="name13"
                            class="badge badge-default text-danger font-medium bg-light-danger form-text"
                            >Helper Text</small
                          >
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Right Helper Text
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Inline Helper Text
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Helper Text</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code44-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code44-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Helper Text - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;helpInput10&quot; placeholder=&quot;Helper Text&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-md-4&quot;&gt;
                    &lt;small class=&quot;text-muted&quot;&gt;Helper Text&lt;/small&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <div class="row">
                        <div class="col-md-8">
                          <input
                            type="text"
                            class="form-control"
                            id="helpInput10"
                            placeholder="Helper Text"
                          />
                        </div>
                        <div class="col-md-4">
                          <small class="text-muted">Helper Text</small>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Inline Helper Text
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Inline Helper Text With Color
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Helper Text With Color</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code45-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code45-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Helper Text With Color - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;row&quot;&gt;
              &lt;div class=&quot;col-md-8&quot;&gt;
                  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;helpInput11&quot; placeholder=&quot;Help Text&quot;&gt;
              &lt;/div&gt;
              &lt;div class=&quot;col-md-4 block-tag&quot;&gt;
                  &lt;small class=&quot;badge bg-light-success text-success font-medium&quot;&gt;Helper Text&lt;/small&gt;
              &lt;/div&gt;
          &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <div class="row">
                        <div class="col-md-8">
                          <input
                            type="text"
                            class="form-control"
                            id="helpInput11"
                            placeholder="Help Text"
                          />
                        </div>
                        <div class="col-md-4 block-tag">
                          <small
                            class="badge bg-light-success text-success font-medium"
                            >Helper Text</small
                          >
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Inline Helper Text With Color
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">Input With Validaton</h5>
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input With Success
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input With Success</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code46-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code46-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input With Success - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
          &lt;label class=&quot;form-control-label&quot; for=&quot;inputSuccess1&quot;&gt;Input with success&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control is-valid&quot; id=&quot;inputSuccess1&quot;&gt;
          &lt;div class=&quot;valid-feedback&quot;&gt;
              Success! You've done it.
          &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>is-valid</code></mark> class to the
                      input
                    </p>
                    <form class="mt-3">
                      <label class="form-control-label" for="inputSuccess1"
                        >Input with success</label
                      >
                      <input
                        type="text"
                        class="form-control is-valid"
                        id="inputSuccess1"
                      />
                      <div class="valid-feedback">Success! You've done it.</div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input With Success
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input With Danger
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input With Danger</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code47-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code47-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input With Danger - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;label class=&quot;form-control-label&quot; for=&quot;inputDanger1&quot;&gt;Input with danger&lt;/label&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;inputDanger1&quot;&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
                Sorry, that username's taken. Try another?
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>is-invalid</code></mark> class to
                      the input
                    </p>
                    <form class="mt-3">
                      <label class="form-control-label" for="inputDanger1"
                        >Input with danger</label
                      >
                      <input
                        type="text"
                        class="form-control is-invalid"
                        id="inputDanger1"
                      />
                      <div class="invalid-feedback">
                        Sorry, that username's taken. Try another?
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input With Danger
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Inline Input With Success
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Input With Success</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code48-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code48-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Input With Success - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
            &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
            &lt;div class=&quot;form-group row&quot;&gt;
                &lt;label for=&quot;inputHorizontalSuccess&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
                &lt;div class=&quot;col-sm-10&quot;&gt;
                    &lt;input type=&quot;email&quot; class=&quot;form-control is-valid&quot; id=&quot;inputHorizontalSuccess&quot; placeholder=&quot;name@example.com&quot;&gt;
                    &lt;div class=&quot;valid-feedback&quot;&gt;Success! You've done it.&lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>form-horizontal</code></mark> class
                      to the input
                    </p>
                    <form class="mt-3 form-horizontal">
                      <div class="form-group row">
                        <label
                          for="inputHorizontalSuccess"
                          class="col-sm-2 col-form-label"
                          >Email</label
                        >
                        <div class="col-sm-10">
                          <input
                            type="email"
                            class="form-control is-valid"
                            id="inputHorizontalSuccess"
                            placeholder="name@example.com"
                          />
                          <div class="valid-feedback">
                            Success! You've done it.
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Inline Input With Success
                                                ---------------- -->
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Inline Input With Danger
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Inline Input With Danger</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code49-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code49-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Inline Input With Danger - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
          &lt;div class=&quot;form-group row&quot;&gt;
              &lt;label for=&quot;inputHorizontalDnger&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
              &lt;div class=&quot;col-sm-10&quot;&gt;
                  &lt;input type=&quot;email&quot; class=&quot;form-control is-invalid&quot; id=&quot;inputHorizontalDnger&quot; placeholder=&quot;name@example.com&quot;&gt;
                  &lt;div class=&quot;invalid-feedback&quot;&gt;Sorry, that username's taken. Try another?&lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <p class="mb-3 card-subtitle">
                      To use add <mark><code>form-horizontal</code></mark> class
                      to the input
                    </p>
                    <form class="mt-3 form-horizontal">
                      <div class="form-group row">
                        <label
                          for="inputHorizontalDnger"
                          class="col-sm-2 col-form-label"
                          >Email</label
                        >
                        <div class="col-sm-10">
                          <input
                            type="email"
                            class="form-control is-invalid"
                            id="inputHorizontalDnger"
                            placeholder="name@example.com"
                          />
                          <div class="invalid-feedback">
                            Sorry, that username's taken. Try another?
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Inline Input With Danger
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">Input With Tooltip</h5>
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Tooltip Bottom
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Tooltip Bottom</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code50-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code50-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Tooltip Bottom - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot; class=&quot;form-control&quot; placeholder=&quot;Bottom&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"
                        title="Tooltip on bottom"
                        class="form-control"
                        placeholder="Bottom"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Tooltip Bottom
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Tooltip Right
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Tooltip Right</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code51-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code51-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Tooltip Right - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; title=&quot;Tooltip on right&quot; class=&quot;form-control&quot; placeholder=&quot;Right&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        data-bs-toggle="tooltip"
                        data-bs-placement="right"
                        title="Tooltip on right"
                        class="form-control"
                        placeholder="Right"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Tooltip Right
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Tooltip Top
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Tooltip Top</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code52-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code52-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Tooltip Top - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot; class=&quot;form-control&quot; placeholder=&quot;Top&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Tooltip on top"
                        class="form-control"
                        placeholder="Top"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Tooltip Top
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Tooltip Left
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Tooltip Left</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code53-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code53-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Tooltip Left - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Tooltip on left&quot; class=&quot;form-control&quot; placeholder=&quot;Left&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="Tooltip on left"
                        class="form-control"
                        placeholder="Left"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Tooltip Left
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">Input Text Styles</h5>
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Text Bold
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Text Bold</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code54-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code54-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Text Bold - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control fw-bold&quot; placeholder=&quot;Bold Text&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        class="form-control fw-bold"
                        placeholder="Bold Text"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Text Bold
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Text Normal
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Text Normal</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code55-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code55-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Text Normal - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control fw-normal&quot; placeholder=&quot;Normal Text&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        class="form-control fw-normal"
                        placeholder="Normal Text"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Text Normal
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Text Light
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Text Light</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code56-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code56-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Text Light - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control fw-light&quot; placeholder=&quot;Light Text&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        class="form-control fw-light"
                        placeholder="Light Text"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Text Light
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Text Italic
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Text Italic</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code57-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code57-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Text Italic - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control font-italic&quot; placeholder=&quot;Italic Text&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        class="form-control font-italic"
                        placeholder="Italic Text"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Text Italic
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Text Lowercase
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Text Lowercase</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code58-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code58-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Text Lowercase - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control text-lowercase&quot; placeholder=&quot;Lowercase&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        class="form-control text-lowercase"
                        placeholder="Lowercase"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Text Lowercase
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Text Uppercase
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Text Uppercase</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code59-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code59-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Text Uppercase - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control text-uppercase&quot; placeholder=&quot;Uppercase&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        class="form-control text-uppercase"
                        placeholder="Uppercase"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Text Uppercase
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Input Text Capitalize
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Text Capitalize</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code60-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code60-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Text Capitalize - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control text-capitalize&quot; placeholder=&quot;capitalize&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        class="form-control text-capitalize"
                        placeholder="capitalize"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Text Capitalize
                                                ---------------- -->
              </div>
            </div>
            <h5 class="card-title mt-5 mb-4">Input Sizing</h5>
            <div class="row">
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Small Input
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Small Input</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code61-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code61-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Small Input - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
            &lt;input type=&quot;text&quot; id=&quot;example-input-small&quot; name=&quot;example-input-small&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;Small&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        id="example-input-small"
                        name="example-input-small"
                        class="form-control form-control-sm"
                        placeholder="Small"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Small Input
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Normal Input
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Normal Input</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code62-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code62-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Normal Input - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; id=&quot;example-input-normal&quot; name=&quot;example-input-normal&quot; class=&quot;form-control&quot; placeholder=&quot;Normal&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        id="example-input-normal"
                        name="example-input-normal"
                        class="form-control"
                        placeholder="Normal"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Normal Input
                                                ---------------- -->
              </div>
              <div
                class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch"
              >
                <!-- ---------------------
                                                    start Large Input
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Large Input</h5>
                      </div>
                      <div class="ms-auto flex-shrink-0">
                        <button
                          class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm"
                          title="View Code"
                          data-bs-toggle="modal"
                          data-bs-target="#view-code63-modal"
                        >
                          <i class="ti ti-code fs-5"></i>
                        </button>
                        <!-- Code Modal -->
                        <div
                          id="view-code63-modal"
                          class="modal fade"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Large Input - View Code
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                    <code>
        &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; id=&quot;example-input-large&quot; name=&quot;example-input-large&quot; class=&quot;form-control form-control-lg&quot; placeholder=&quot;Large&quot;&gt;
        &lt;/form&gt;
                                                                                    </code>
                                                                                </pre>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </div>
                    <form class="mt-3">
                      <input
                        type="text"
                        id="example-input-large"
                        name="example-input-large"
                        class="form-control form-control-lg"
                        placeholder="Large"
                      />
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Large Input
                                                ---------------- -->
              </div>
            </div>
          </section>
          <!-- --------------------------------------------------- -->
          <!--  Form Inputs End -->
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

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:53:12 GMT -->
</html>
