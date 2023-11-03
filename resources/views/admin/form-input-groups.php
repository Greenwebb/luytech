<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-input-groups.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:53:12 GMT -->
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
          <!--  Form Input Groups Start -->
          <!-- --------------------------------------------------- -->
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Form Input Groups</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="{{ route('index') }}">Dashboard</a></li>
                      <li class="breadcrumb-item" aria-current="page">Form Input Groups</li>
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
                                                    start Input Addons Left
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Addons Left</h5>
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
                                -
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Input Addons Left - View Code
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
        &lt;div class=&quot;input-group mb-3&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
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
                    <p class="mb-3 card-subtitle">
                      Add span with
                      <mark><code>.input-group-text</code></mark> class before
                      <mark><code>&lt;input&gt;</code></mark>
                    </p>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Addons Left
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Addons Both Side
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Addons Both Side</h5>
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
                                  Input Addons Both Side - View Code
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
        &lt;div class=&quot;input-group mb-3&quot;&gt;
            &lt;div class=&quot;input-group-prepend&quot;&gt;
                &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
            &lt;div class=&quot;input-group-append&quot;&gt;
                &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
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
                    <p class="mb-3 card-subtitle">
                      Add span with
                      <mark><code>.input-group-text</code></mark> class before
                      &amp; after
                      <mark><code>&lt;input&gt;</code></mark>
                    </p>

                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input
                        type="text"
                        class="form-control"
                        aria-label="Amount (to the nearest dollar)"
                      />
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Addons Both Side
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Addons Right
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Addons Right</h5>
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
                                  Input Addons Right - View Code
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
        &lt;div class=&quot;input-group mb-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
          &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
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
                    <p class="mb-3 card-subtitle">
                      Add span with
                      <mark><code>.input-group-text</code></mark> class
                      after<mark><code>&lt;input&gt;</code></mark>
                    </p>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                      <span class="input-group-text">@</span>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Addons Right
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Addons Left Icon
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Addons Left Icon</h5>
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
                                  Input Addons Left Icon - View Code
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
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;file-text&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
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
                    <div class="input-group">
                      <span class="input-group-text"
                        ><i class="ti ti-file-text fs-4"></i></span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Addons Left Icon
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Addons Both Side Icon
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Addons Both Side Icon</h5>
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
                                  Input Addons Both Side Icon - View Code
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
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;file-text&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;trash-2&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
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
                    <div class="input-group mb-3">
                      <span class="input-group-text"
                        ><i class="ti ti-file-text fs-4"></i></span>
                      <input
                        type="text"
                        class="form-control"
                        aria-label="Amount (to the nearest dollar)"
                      />
                      <span class="input-group-text"
                        ><i class="ti ti-trash fs-4"></i></span>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Addons Both Side Icon
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Input Addons Right Icon
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input Addons Right Icon</h5>
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
                                  Input Addons Right Icon - View Code
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
        &lt;div class=&quot;input-group mb-3&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;file-text&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
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
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                      <span class="input-group-text"
                        ><i class="ti ti-file-text fs-4"></i></span>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input Addons Right Icon
                                                ---------------- -->
              </div>
            </div>
            <h4 class="card-title mt-5 mb-4">Addons With Checkbox</h4>
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Right Checkbox
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With Right Checkbox</h5>
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
                                  Addons With Right Checkbox - View Code
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
                &lt;div class=&quot;input-group-text&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkbox3&quot; value=&quot;check&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot; for=&quot;checkbox3&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
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
                      <mark><code>input-group-prepend</code></mark> before input
                      field.
                    </p>
                    <form>
                      <div class="input-group">
                        <div class="input-group-text">
                          <div class="form-check">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              id="checkbox3"
                              value="check"
                            />
                            <label
                              class="form-check-label"
                              for="checkbox3"
                            ></label>
                          </div>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with checkbox"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Right Checkbox
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Checkbox &amp; Button
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Checkbox &amp; Button
                        </h5>
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
                                  Addons With Checkbox &amp; Button - View Code
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
                &lt;div class=&quot;input-group-text&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkbox2&quot; value=&quot;check&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot; for=&quot;checkbox2&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
                &lt;button class=&quot;btn btn-light-info text-info font-medium&quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
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
                      <mark><code>input-group-prepend &amp; append</code></mark>
                      before and afetr input field.
                    </p>
                    <form>
                      <div class="input-group">
                        <div class="input-group-text">
                          <div class="form-check">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              id="checkbox2"
                              value="check"
                            />
                            <label
                              class="form-check-label"
                              for="checkbox2"
                            ></label>
                          </div>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with checkbox"
                        />
                        <button
                          class="btn btn-light-info text-info font-medium"
                          type="button"
                        >
                          Go!
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Checkbox &amp; Button
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Left Checkbox
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With Left Checkbox</h5>
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
                                  Addons With Left Checkbox - View Code
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
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
                &lt;div class=&quot;input-group-text&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkbox4&quot; value=&quot;check&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot; for=&quot;checkbox4&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
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
                      <mark><code>input-group-append</code></mark> after input
                      field.
                    </p>
                    <form>
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with checkbox"
                        />
                        <div class="input-group-text">
                          <div class="form-check">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              id="checkbox4"
                              value="check"
                            />
                            <label
                              class="form-check-label"
                              for="checkbox4"
                            ></label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Left Checkbox
                                                ---------------- -->
              </div>
            </div>
            <h4 class="card-title mt-5 mb-4">Addons With Radio</h4>
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Left Radio
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With Left Radio</h5>
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
                                  Addons With Left Radio - View Code
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
                &lt;div class=&quot;input-group-text&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                        &lt;input type=&quot;radio&quot; id=&quot;customRadio5&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio5&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
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
                      <mark><code>input-group-prepend</code></mark> before input
                      field.
                    </p>
                    <form>
                      <div class="input-group">
                        <div class="input-group-text">
                          <div class="form-check">
                            <input
                              type="radio"
                              id="customRadio5"
                              name="customRadio"
                              class="form-check-input"
                            />
                            <label
                              class="form-check-label"
                              for="customRadio5"
                            ></label>
                          </div>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with radio button"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Left Radio
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Radio &amp; Button
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Radio &amp; Button
                        </h5>
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
                                  Addons With Radio &amp; Button - View Code
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
                &lt;button class=&quot;btn btn-light-info text-info font-medium&quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
                &lt;div class=&quot;input-group-text&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                        &lt;input type=&quot;radio&quot; id=&quot;customRadio6&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio6&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
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
                      <mark><code>input-group-prepend &amp; append</code></mark>
                      before and afetr input field.
                    </p>
                    <form>
                      <div class="input-group">
                        <button
                          class="btn btn-light-info text-info font-medium"
                          type="button"
                        >
                          Go!
                        </button>
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with radio button"
                        />
                        <div class="input-group-text">
                          <div class="form-check">
                            <input
                              type="radio"
                              id="customRadio6"
                              name="customRadio"
                              class="form-check-input"
                            />
                            <label
                              class="form-check-label"
                              for="customRadio6"
                            ></label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Radio &amp; Button
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Right Radio
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addo fs-5ns With Right Radio</h5>
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
                                  Addons With Right Radio - View Code
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
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
                &lt;div class=&quot;input-group-append&quot;&gt;
                    &lt;div class=&quot;input-group-text&quot;&gt;
                        &lt;div class=&quot;form-check&quot;&gt;
                            &lt;input type=&quot;radio&quot; id=&quot;customRadio7&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                            &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio7&quot;&gt;&lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
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
                      <mark><code>input-group-append</code></mark> after input
                      field.
                    </p>
                    <form>
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with radio button"
                        />
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <div class="form-check">
                              <input
                                type="radio"
                                id="customRadio7"
                                name="customRadio"
                                class="form-check-input"
                              />
                              <label
                                class="form-check-label"
                                for="customRadio7"
                              ></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Right Radio
                                                ---------------- -->
              </div>
            </div>
            <h4 class="card-title mt-5 mb-4">Addons With Buttons</h4>
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Color Button Left
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With Color Button Left</h5>
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
                                  Addons With Color Button Left - View Code
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
            &lt;div class=&quot;input-group mb-3&quot;&gt;
                    &lt;button class=&quot;btn btn-light-info text-info font-medium&quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
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
                      To use add <mark><code>button</code></mark> in the prepend
                      div.
                    </p>
                    <form class="mt-3">
                      <div class="input-group mb-3">
                        <button
                          class="btn btn-light-info text-info font-medium"
                          type="button"
                        >
                          Go!
                        </button>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=""
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Color Button Left
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Color Buttons Both
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Color Buttons Both
                        </h5>
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
                                  Addons With Color Buttons Both - View Code
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
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;button class=&quot;btn btn-light-danger text-danger font-medium d-flex align-items-center&quot; type=&quot;button&quot;&gt;&lt;i data-feather=&quot;heart&quot; class=&quot;fill-white feather-sm me-1&quot;&gt;&lt;/i&gt; Love&lt;/button&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
              &lt;button class=&quot;btn btn-light-info text-info font-medium d-flex align-items-center&quot; type=&quot;button&quot;&gt;&lt;i data-feather=&quot;slash&quot; class=&quot;fill-white feather-sm me-1&quot;&gt;&lt;/i&gt;Hate&lt;/button&gt;
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
                      To use add <mark><code>button</code></mark> in the prepend
                      and append div.
                    </p>
                    <form class="mt-3">
                      <div class="input-group mb-3">
                        <button
                          class="btn btn-light-danger text-danger font-medium d-flex align-items-center"
                          type="button"
                        >
                          <i class="ti ti-heart fs-4 me-1"></i>
                          Love
                        </button>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=""
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                        <button
                          class="btn btn-light-info text-info font-medium d-flex align-items-center"
                          type="button"
                        >
                          <i class="ti ti-circle-half fs-4 me-1"></i>Hate
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Color Buttons Both
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With Color Button Right
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Color Button Right
                        </h5>
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
                                  Addons With Color Button Right - View Code
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
            &lt;div class=&quot;input-group mb-3&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                &lt;button class=&quot;btn btn-light-info text-info font-medium&quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
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
                      To use add <mark><code>button</code></mark> in the append
                      div.
                    </p>
                    <form class="mt-3">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder=""
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                        <button
                          class="btn btn-light-info text-info font-medium"
                          type="button"
                        >
                          Go!
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Color Button Right
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With icon Button Left
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With icon Button Left</h5>
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
                                  Addons With icon Button Left - View Code
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
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;div class=&quot;input-group-prepend&quot;&gt;
                  &lt;button class=&quot;btn btn-light-info text-info&quot; type=&quot;button&quot;&gt;
                      &lt;i data-feather=&quot;settings&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
                  &lt;/button&gt;
              &lt;/div&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
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
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button
                            class="btn btn-light-info text-info"
                            type="button"
                          >
                            <i class="ti ti-settings fs-4"></i>
                          </button>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=""
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With icon Button Left
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With icon Buttons Both
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With icon Buttons Both</h5>
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
                                  Addons With icon Buttons Both - View Code
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
            &lt;div class=&quot;input-group mb-3&quot;&gt;
                &lt;div class=&quot;input-group-prepend&quot;&gt;
                    &lt;button class=&quot;btn btn-light-info text-info&quot; type=&quot;button&quot;&gt;
                        &lt;i data-feather=&quot;edit-2&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                &lt;button class=&quot;btn btn-light-danger text-danger&quot; type=&quot;button&quot;&gt;
                    &lt;i data-feather=&quot;trash-2&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
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
                      <div class="input-group mb-3">
                        <button
                          class="btn btn-light-info text-info"
                          type="button"
                        >
                          <i class="ti ti-pencil fs-4"></i>
                        </button>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=""
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                        <button
                          class="btn btn-light-danger text-danger"
                          type="button"
                        >
                          <i class="ti ti-trash fs-5"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With icon Buttons Both
                                                ---------------- -->
              </div>
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <!-- ---------------------
                                                    start Addons With icon Button Right
                                                ---------------- -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With icon Button Right</h5>
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
                                  Addons With icon Button Right - View Code
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
            &lt;div class=&quot;input-group mb-3&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                &lt;button class=&quot;btn btn-light-danger text-danger&quot; type=&quot;button&quot;&gt;
                    &lt;i data-feather=&quot;heart&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
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
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder=""
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                        <button
                          class="btn btn-light-danger text-danger"
                          type="button"
                        >
                         <i class="ti ti-heart fs-5"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With icon Button Right
                                                ---------------- -->
              </div>
            </div>
            <h4 class="card-title mt-5 mb-4">Multiple Addons</h4>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Addons With Left Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With Left Side</h5>
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
                                  Addons With Left Side - View Code
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
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
                &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
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
                      <mark><code>input-group-text</code></mark> class in the
                      input-group-prepend class.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Amount (to the nearest dollar)"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Left Side
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Addons With Right Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Addons With Right Side</h5>
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
                                  Addons With Right Side - View Code
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
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
                &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
                &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
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
                      <mark><code>input-group-text</code></mark> class in the
                      input-group-append class.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Amount (to the nearest dollar)"
                        />
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Right Side
                                                ---------------- -->
              </div>
            </div>
            <h4 class="card-title mt-5 mb-4">Multiple Inputs with Addons</h4>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Input With Right Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input With Right Side</h5>
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
                                  Input With Right Side - View Code
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
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
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
                      To use add <mark><code>form-control</code></mark> two
                      times.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <span class="input-group-text"
                          >First and last name</span
                        >
                        <input type="text" class="form-control" />
                        <input type="text" class="form-control" />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input With Right Side
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Input With Left Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Input With Left Side</h5>
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
                                  Input With Left Side - View Code
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
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
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
                      To use add <mark><code>form-control</code></mark> two
                      times.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <input type="text" class="form-control" />
                        <input type="text" class="form-control" />
                        <span class="input-group-text"
                          >First and last name</span
                        >
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input With Left Side
                                                ---------------- -->
              </div>
            </div>
            <h4 class="card-title mt-5 mb-4">Button Addons</h4>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Button With Left Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Button With Left Side</h5>
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
                                  Button With Left Side - View Code
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
                                                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                                                &lt;button class=&quot;btn btn-light-secondary text-secondary font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
                                                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Left Side&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
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
                      To use add <mark><code>button</code></mark> in the prepend
                      class.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <button
                          class="btn btn-light-secondary text-secondary font-medium"
                          type="button"
                        >
                          Button
                        </button>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Left Side"
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Button With Left Side
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Button With Right Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">Button With Right Side</h5>
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
                                  Button With Right Side - View Code
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
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Right Side&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
                &lt;button class=&quot;btn btn-light-secondary text-secondary font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
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
                      To use add <mark><code>button</code></mark> in the append
                      class.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Right Side"
                          aria-label="Recipient's username"
                          aria-describedby="basic-addon2"
                        />
                        <button
                          class="btn btn-light-secondary text-secondary font-medium"
                          type="button"
                        >
                          Button
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Button With Right Side
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Multiple Buttons With Left Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Multiple Buttons With Left Side
                        </h5>
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
                                  Multiple Buttons With Left Side - View Code
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
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;button class=&quot;btn btn-light-secondary text-secondary font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
              &lt;button class=&quot;btn btn-light-secondary text-secondary font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Left Side&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
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
                      <div class="input-group">
                        <button
                          class="btn btn-light-secondary text-secondary font-medium"
                          type="button"
                        >
                          Button
                        </button>
                        <button
                          class="btn btn-light-secondary text-secondary font-medium"
                          type="button"
                        >
                          Button
                        </button>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Left Side"
                          aria-label=""
                          aria-describedby="basic-addon1"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Multiple Buttons With Left Side
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Multiple Buttons With Left Side
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Multiple Buttons With Left Side
                        </h5>
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
                                  Multiple Buttons With Left Side - View Code
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
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Right Side&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
              &lt;button class=&quot;btn btn-light-secondary text-secondary font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
              &lt;button class=&quot;btn btn-light-secondary text-secondary font-medium&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
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
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Right Side"
                          aria-label="Recipient's username"
                          aria-describedby="basic-addon2"
                        />
                        <button
                          class="btn btn-light-secondary text-secondary font-medium"
                          type="button"
                        >
                          Button
                        </button>
                        <button
                          class="btn btn-light-secondary text-secondary font-medium"
                          type="button"
                        >
                          Button
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Multiple Buttons With Left Side
                                                ---------------- -->
              </div>
            </div>
            <h4 class="card-title mt-5 mb-4">Addons With Dropdown Buttons</h4>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Addons With Left Side Dropdown
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Left Side Dropdown
                        </h5>
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
                                  Addons With Left Side Dropdown - View Code
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
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;button class=&quot;btn btn-light-info text-info font-medium dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu&quot;&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                  &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
              &lt;/div&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
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
                      To use add <mark><code>dropdown</code></mark> in the
                      prepend class div.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <button
                          class="btn btn-light-info text-info font-medium dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Dropdown
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with dropdown button"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Left Side Dropdown
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Addons With Right Side Dropdown
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Right Side Dropdown
                        </h5>
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
                                  Addons With Right Side Dropdown - View Code
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
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
              &lt;button class=&quot;btn btn-light-info text-info font-medium dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu&quot;&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                  &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
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
                      To use add <mark><code>dropdown</code></mark> in the
                      append class div.
                    </p>
                    <form class="mt-3">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with dropdown button"
                        />
                        <button
                          class="btn btn-light-info text-info font-medium dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Dropdown
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Right Side Dropdown
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Addons With Left Side Dropdown Segments
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Left Side Dropdown Segments
                        </h5>
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
                                  Addons With Left Side Dropdown Segments - View
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
        &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary text-secondary font-medium&quot;&gt;Action&lt;/button&gt;
              &lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary text-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                  &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
              &lt;/button&gt;
              &lt;div class=&quot;dropdown-menu&quot;&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                  &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
              &lt;/div&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
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
                      <div class="input-group">
                        <button
                          type="button"
                          class="btn btn-light-secondary text-secondary font-medium"
                        >
                          Action
                        </button>
                        <button
                          type="button"
                          class="btn btn-light-secondary text-secondary dropdown-toggle dropdown-toggle-split"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with segmented dropdown button"
                        />
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Left Side Dropdown Segments
                                                ---------------- -->
              </div>
              <div class="col-sm-12 col-md-6">
                <!-- ---------------------
                                                    start Addons With Right Side Dropdown Segments
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
                      <div>
                        <h5 class="mb-0 fs-5">
                          Addons With Right Side Dropdown Segments
                        </h5>
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
                                  Addons With Right Side Dropdown Segments -
                                  View Code
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
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
              &lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary text-secondary font-medium&quot;&gt;Action&lt;/button&gt;
              &lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary text-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                  &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
              &lt;/button&gt;
              &lt;div class=&quot;dropdown-menu&quot;&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                  &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
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
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          aria-label="Text input with segmented dropdown button"
                        />
                        <button
                          type="button"
                          class="btn btn-light-secondary text-secondary font-medium"
                        >
                          Action
                        </button>
                        <button
                          type="button"
                          class="btn btn-light-secondary text-secondary dropdown-toggle dropdown-toggle-split"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Addons With Right Side Dropdown Segments
                                                ---------------- -->
              </div>
            </div>
          </section>
          <!-- --------------------------------------------------- -->
          <!--  Form Input Groups End -->
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

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-input-groups.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:53:13 GMT -->
</html>
