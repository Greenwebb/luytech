<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:54:15 GMT -->
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
    
    <link rel="stylesheet" href="../../dist/libs/footable-v3/compiled/footable.bootstrap.min.css">
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
                                <a href="app-chat.php" class="d-flex align-items-center pb-9 position-relative    ">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Chat Application</h6>
                                    <span class="fs-2 d-block text-dark">New messages arrived</span>
                                  </div>
                                </a>
                                <a href="app-invoice.php" class="d-flex align-items-center pb-9 position-relative    ">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Invoice App</h6>
                                    <span class="fs-2 d-block text-dark">Get latest invoice</span>
                                  </div>
                                </a>
                                <a href="app-contact2.php" class="d-flex align-items-center pb-9 position-relative    ">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Contact Application</h6>
                                    <span class="fs-2 d-block text-dark">2 Unsaved Contacts</span>
                                  </div>
                                </a>
                                <a href="app-email.php" class="d-flex align-items-center pb-9 position-relative    ">
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
                                <a href="page-user-profile.php" class="d-flex align-items-center pb-9 position-relative    ">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">User Profile</h6>
                                    <span class="fs-2 d-block text-dark">learn more information</span>
                                  </div>
                                </a>
                                <a href="app-calendar.php" class="d-flex align-items-center pb-9 position-relative    ">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Calendar App</h6>
                                    <span class="fs-2 d-block text-dark">Get dates</span>
                                  </div>
                                </a>
                                <a href="app-contact.php" class="d-flex align-items-center pb-9 position-relative    ">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Contact List Table</h6>
                                    <span class="fs-2 d-block text-dark">Add new contact</span>
                                  </div>
                                </a>
                                <a href="app-notes.php" class="d-flex align-items-center pb-9 position-relative    ">
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
                            <a class="fw-semibold text-dark d-flex align-items-center lh-1 " href="#"><i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a>
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
                            <a class="fw-semibold text-dark bg-hover-primary    " href="page-pricing.php">Pricing Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary    " href="authentication-login.php">Authentication Design</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary    " href="authentication-register.php">Register Now</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary    " href="authentication-error.php">404 Error Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary    " href="app-notes.php">Notes App</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary    " href="page-user-profile.php">User Application</a>
                          </li>   
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary    " href="page-account-settings.php">Account Settings</a>
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
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Table-Footable</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted " href="{{ route('index') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Table-Footable
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Contact Emplyee list</h4>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-end">
                    <button
                      type="button"
                      class="btn btn-info btn-rounded m-t-10 mb-2"
                      data-bs-toggle="modal"
                      data-bs-target="#add-contact"
                    >
                      Add New Contact
                    </button>
                  </div>
                  <!-- Add Contact Popup Model -->
                  <div
                    id="add-contact"
                    class="modal fade in"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="myModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">
                            Add New Contact
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <from class="form-horizontal form-material">
                            <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Type name"
                                />
                              </div>
                              <div class="col-md-12 mb-3">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Email"
                                />
                              </div>
                              <div class="col-md-12 mb-3">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Phone"
                                />
                              </div>
                              <div class="col-md-12 mb-3">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Designation"
                                />
                              </div>
                              <div class="col-md-12 mb-3">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Age"
                                />
                              </div>
                              <div class="col-md-12 mb-3">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Date of joining"
                                />
                              </div>
                              <div class="col-md-12 mb-3">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Salary"
                                />
                              </div>
                              <div class="col-md-12 mb-3">
                                <div
                                  class="
                                    fileupload
                                    btn btn-danger btn-rounded
                                    waves-effect waves-light
                                    btn-sm
                                  "
                                >
                                  <span
                                    ><i class="ion-upload m-r-5"></i>Upload
                                    Contact Image</span
                                  >
                                  <input type="file" class="upload" />
                                </div>
                              </div>
                            </div>
                          </from>
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-info waves-effect"
                            data-bs-dismiss="modal"
                          >
                            Save
                          </button>
                          <button
                            type="button"
                            class="btn btn-default waves-effect"
                            data-bs-dismiss="modal"
                          >
                            Cancel
                          </button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <div class="table-responsive">
                    <table
                      id="demo-foo-addrow"
                      class="
                        table table-bordered
                        m-t-30
                        table-hover
                        contact-list
                      "
                      data-paging="true"
                      data-paging-size="7"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th>Age</th>
                          <th>Joining date</th>
                          <th>Salery</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-4.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Genelia Deshmukh</a
                            >
                          </td>
                          <td>genelia@gmail.com</td>
                          <td>+123 456 789</td>
                          <td><span class="badge bg-danger">Designer</span></td>
                          <td>23</td>
                          <td>12-10-2014</td>
                          <td>$1200</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-5.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Arijit Singh</a
                            >
                          </td>
                          <td>arijit@gmail.com</td>
                          <td>+234 456 789</td>
                          <td><span class="badge bg-info">Developer</span></td>
                          <td>26</td>
                          <td>10-09-2014</td>
                          <td>$1800</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-6.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Govinda jalan</a
                            >
                          </td>
                          <td>govinda@gmail.com</td>
                          <td>+345 456 789</td>
                          <td>
                            <span class="badge bg-success">Accountant</span>
                          </td>
                          <td>28</td>
                          <td>1-10-2013</td>
                          <td>$2200</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-7.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Hritik Roshan</a
                            >
                          </td>
                          <td>hritik@gmail.com</td>
                          <td>+456 456 789</td>
                          <td><span class="badge bg-dark">HR</span></td>
                          <td>25</td>
                          <td>2-10-2023</td>
                          <td>$200</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-8.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              John Abraham</a
                            >
                          </td>
                          <td>john@gmail.com</td>
                          <td>+567 456 789</td>
                          <td><span class="badge bg-danger">Manager</span></td>
                          <td>23</td>
                          <td>10-9-2015</td>
                          <td>$1200</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-1.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Pawandeep kumar</a
                            >
                          </td>
                          <td>pawandeep@gmail.com</td>
                          <td>+678 456 789</td>
                          <td>
                            <span class="badge bg-warning">Chairman</span>
                          </td>
                          <td>29</td>
                          <td>10-5-2013</td>
                          <td>$1500</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-2.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Ritesh Deshmukh</a
                            >
                          </td>
                          <td>ritesh@gmail.com</td>
                          <td>+123 456 789</td>
                          <td><span class="badge bg-danger">Designer</span></td>
                          <td>35</td>
                          <td>05-10-2012</td>
                          <td>$3200</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-2.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Salman Khan</a
                            >
                          </td>
                          <td>salman@gmail.com</td>
                          <td>+234 456 789</td>
                          <td><span class="badge bg-info">Developer</span></td>
                          <td>27</td>
                          <td>11-10-2014</td>
                          <td>$1800</td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-3.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Govinda jalan</a
                            >
                          </td>
                          <td>govinda@gmail.com</td>
                          <td>+345 456 789</td>
                          <td>
                            <span class="badge bg-success">Accountant</span>
                          </td>
                          <td>18</td>
                          <td>12-5-2023</td>
                          <td>$100</td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-4.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Sonu Nigam</a
                            >
                          </td>
                          <td>sonu@gmail.com</td>
                          <td>+456 456 789</td>
                          <td><span class="badge bg-dark">HR</span></td>
                          <td>36</td>
                          <td>18-5-2009</td>
                          <td>$4200</td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-5.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Varun Dhawan</a
                            >
                          </td>
                          <td>varun@gmail.com</td>
                          <td>+567 456 789</td>
                          <td><span class="badge bg-danger">Manager</span></td>
                          <td>43</td>
                          <td>12-10-2010</td>
                          <td>$5200</td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-6.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Genelia Deshmukh</a
                            >
                          </td>
                          <td>genelia@gmail.com</td>
                          <td>+123 456 789</td>
                          <td><span class="badge bg-danger">Designer</span></td>
                          <td>23</td>
                          <td>12-10-2014</td>
                          <td>$1200</td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-7.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Arijit Singh</a
                            >
                          </td>
                          <td>arijit@gmail.com</td>
                          <td>+234 456 789</td>
                          <td><span class="badge bg-info">Developer</span></td>
                          <td>26</td>
                          <td>10-09-2014</td>
                          <td>$1800</td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-8.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Govinda jalan</a
                            >
                          </td>
                          <td>govinda@gmail.com</td>
                          <td>+345 456 789</td>
                          <td>
                            <span class="badge bg-success">Accountant</span>
                          </td>
                          <td>28</td>
                          <td>1-10-2013</td>
                          <td>$2200</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Row Toggler</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Create your table with Toggle Footable
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="demo-foo-row-toggler"
                      class="table table-bordered"
                      data-bs-toggle-column="first"
                    >
                      <thead>
                        <tr>
                          <th data-breakpoints="xs">ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th data-breakpoints="xs sm">Mobile No</th>
                          <th data-breakpoints="xs">Job Title</th>
                          <th data-breakpoints="all" data-title="DOB">
                            Date of Birth
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-expanded="true">
                          <td>1</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-4.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Genelia Deshmukh</a
                            >
                          </td>
                          <td>genelia@gmail.com</td>
                          <td>+123 112 789</td>
                          <td><span class="badge bg-danger">Designer</span></td>
                          <td>February 26th 1966</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-8.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Shraddha Kapoor</a
                            >
                          </td>
                          <td>gov12inda@gmail.com</td>
                          <td>+345 456 125</td>
                          <td>
                            <span class="badge bg-success">Accountant</span>
                          </td>
                          <td>February 26th 1966</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-1.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Akshay Kumar</a
                            >
                          </td>
                          <td>g12enelia@gmail.com</td>
                          <td>+154 456 789</td>
                          <td>
                            <span class="badge bg-warning">Developer</span>
                          </td>
                          <td>February 26th 1966</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-6.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Genelia Deshmukh</a
                            >
                          </td>
                          <td>abc@gmail.com</td>
                          <td>+123 456 163</td>
                          <td><span class="badge bg-danger">Designer</span></td>
                          <td>March 29th 1966</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-5.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Steve Jobs</a
                            >
                          </td>
                          <td>shraddha@gmail.com</td>
                          <td>+123 420 789</td>
                          <td>
                            <span class="badge bg-success"
                              >Theme Developer</span
                            >
                          </td>
                          <td>September 22nd 1964</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-4.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Anil Kapoor</a
                            >
                          </td>
                          <td>gamw12@gmail.com</td>
                          <td>+123 960 789</td>
                          <td><span class="badge bg-dark">Designer</span></td>
                          <td>August 4th 1991</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-3.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Priyank Deshmukh</a
                            >
                          </td>
                          <td>shr123@gmail.com</td>
                          <td>+123 456 700</td>
                          <td><span class="badge bg-danger">Hacker</span></td>
                          <td>November 20th 1979</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>
                            <a href="javascript:void(0)" class="link"
                              ><img
                                src="../../dist/images/profile/user-2.jpg"
                                alt="user"
                                width="40"
                                class="rounded-circle"
                              />
                              Genelia Deshmukh</a
                            >
                          </td>
                          <td>developer@gmail.com</td>
                          <td>+123 700 789</td>
                          <td>
                            <span class="badge bg-success">Designer</span>
                          </td>
                          <td>April 7th 1969</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Accordion Footable</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Create your table with Accordion Footable
                  </h6>
                  <!-- Accordian -->
                  <div class="accordion" id="accordionTable">
                    <div class="card m-b-5">
                      <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                          <button
                            class="btn btn-link link "
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#col1"
                            aria-expanded="true"
                            aria-controls="col1"
                          >
                            Collapsible Group Item #1
                          </button>
                        </h5>
                      </div>
                      <div
                        id="col1"
                        class="collapse show"
                        aria-labelledby="heading1"
                        data-parent="#accordionTable"
                      >
                        <div class="card-body">
                          <div class="table-responsive">
                            <table
                              id="demo-foo-accordion"
                              class="
                                table table-bordered
                                m-b-0
                                toggle-arrow-tiny
                              "
                              data-filtering="true"
                              data-paging="true"
                              data-sorting="true"
                              data-paging-size="5"
                            >
                              <thead>
                                <tr class="footable-filtering">
                                  <th data-bs-toggle="true">First Name</th>
                                  <th>Last Name</th>
                                  <th data-hide="phone">Job Title</th>
                                  <th data-hide="all">DOB</th>
                                  <th data-hide="all">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Isidra</td>
                                  <td>Boudreaux</td>
                                  <td>Traffic Court Referee</td>
                                  <td>22 Jun 1972</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Shona</td>
                                  <td>Woldt</td>
                                  <td>Airline Transport Pilot</td>
                                  <td>3 Oct 1981</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Granville</td>
                                  <td>Leonardo</td>
                                  <td>
                                    Business Services Sales Representative
                                  </td>
                                  <td>19 Apr 1969</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Easer</td>
                                  <td>Dragoo</td>
                                  <td>Drywall Stripper</td>
                                  <td>13 Dec 1977</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maple</td>
                                  <td>Halladay</td>
                                  <td>Aviation Tactical Readiness Officer</td>
                                  <td>30 Dec 1991</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maxine</td>
                                  <td>
                                    <a href="javascript:void(0)">Woldt</a>
                                  </td>
                                  <td>
                                    <a href="javascript:void(0)"
                                      >Business Services Sales Representative</a
                                    >
                                  </td>
                                  <td>17 Oct 1987</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lorraine</td>
                                  <td>Mcgaughy</td>
                                  <td>Hemodialysis Technician</td>
                                  <td>11 Nov 1983</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lizzee</td>
                                  <td>
                                    <a href="javascript:void(0)">Goodlow</a>
                                  </td>
                                  <td>Technical Services Librarian</td>
                                  <td>1 Nov 1961</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Judi</td>
                                  <td>Badgett</td>
                                  <td>Electrical Lineworker</td>
                                  <td>23 Jun 1981</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lauri</td>
                                  <td>Hyland</td>
                                  <td>Blackjack Supervisor</td>
                                  <td>15 Nov 1985</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Isidra</td>
                                  <td>Boudreaux</td>
                                  <td>Traffic Court Referee</td>
                                  <td>22 Jun 1972</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Shona</td>
                                  <td>Woldt</td>
                                  <td>Airline Transport Pilot</td>
                                  <td>3 Oct 1981</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Granville</td>
                                  <td>Leonardo</td>
                                  <td>
                                    Business Services Sales Representative
                                  </td>
                                  <td>19 Apr 1969</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Easer</td>
                                  <td>Dragoo</td>
                                  <td>Drywall Stripper</td>
                                  <td>13 Dec 1977</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maple</td>
                                  <td>Halladay</td>
                                  <td>Aviation Tactical Readiness Officer</td>
                                  <td>30 Dec 1991</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maxine</td>
                                  <td>
                                    <a href="javascript:void(0)">Woldt</a>
                                  </td>
                                  <td>
                                    <a href="javascript:void(0)"
                                      >Business Services Sales Representative</a
                                    >
                                  </td>
                                  <td>17 Oct 1987</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lorraine</td>
                                  <td>Mcgaughy</td>
                                  <td>Hemodialysis Technician</td>
                                  <td>11 Nov 1983</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lizzee</td>
                                  <td>
                                    <a href="javascript:void(0)">Goodlow</a>
                                  </td>
                                  <td>Technical Services Librarian</td>
                                  <td>1 Nov 1961</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Judi</td>
                                  <td>Badgett</td>
                                  <td>Electrical Lineworker</td>
                                  <td>23 Jun 1981</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lauri</td>
                                  <td>Hyland</td>
                                  <td>Blackjack Supervisor</td>
                                  <td>15 Nov 1985</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Isidra</td>
                                  <td>Boudreaux</td>
                                  <td>Traffic Court Referee</td>
                                  <td>22 Jun 1972</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Shona</td>
                                  <td>Woldt</td>
                                  <td>Airline Transport Pilot</td>
                                  <td>3 Oct 1981</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Granville</td>
                                  <td>Leonardo</td>
                                  <td>
                                    Business Services Sales Representative
                                  </td>
                                  <td>19 Apr 1969</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Easer</td>
                                  <td>Dragoo</td>
                                  <td>Drywall Stripper</td>
                                  <td>13 Dec 1977</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maple</td>
                                  <td>Halladay</td>
                                  <td>Aviation Tactical Readiness Officer</td>
                                  <td>30 Dec 1991</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maxine</td>
                                  <td>
                                    <a href="javascript:void(0)">Woldt</a>
                                  </td>
                                  <td>
                                    <a href="javascript:void(0)"
                                      >Business Services Sales Representative</a
                                    >
                                  </td>
                                  <td>17 Oct 1987</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lorraine</td>
                                  <td>Mcgaughy</td>
                                  <td>Hemodialysis Technician</td>
                                  <td>11 Nov 1983</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lizzee</td>
                                  <td>
                                    <a href="javascript:void(0)">Goodlow</a>
                                  </td>
                                  <td>Technical Services Librarian</td>
                                  <td>1 Nov 1961</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Judi</td>
                                  <td>Badgett</td>
                                  <td>Electrical Lineworker</td>
                                  <td>23 Jun 1981</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lauri</td>
                                  <td>Hyland</td>
                                  <td>Blackjack Supervisor</td>
                                  <td>15 Nov 1985</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                          <button
                            class="
                              btn btn-link
                              collapsed
                              link
                              
                            "
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#col2"
                            aria-expanded="false"
                            aria-controls="col2"
                          >
                            Collapsible Group Item #2
                          </button>
                        </h5>
                      </div>
                      <div
                        id="col2"
                        class="collapse"
                        aria-labelledby="heading2"
                        data-parent="#accordionTable"
                      >
                        <div class="card-body">
                          <div class="table-responsive">
                            <table
                              id="demo-foo-accordion2"
                              class="
                                table table-bordered
                                m-b-0
                                toggle-arrow-tiny
                              "
                              data-filtering="true"
                              data-paging="true"
                              data-sorting="true"
                              data-paging-size="5"
                            >
                              <thead>
                                <tr class="footable-filtering">
                                  <th data-bs-toggle="true">First Name</th>
                                  <th>Last Name</th>
                                  <th data-hide="phone">Job Title</th>
                                  <th data-hide="all">DOB</th>
                                  <th data-hide="all">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Isidra</td>
                                  <td>Boudreaux</td>
                                  <td>Traffic Court Referee</td>
                                  <td>22 Jun 1972</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Shona</td>
                                  <td>Woldt</td>
                                  <td>Airline Transport Pilot</td>
                                  <td>3 Oct 1981</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Granville</td>
                                  <td>Leonardo</td>
                                  <td>
                                    Business Services Sales Representative
                                  </td>
                                  <td>19 Apr 1969</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Easer</td>
                                  <td>Dragoo</td>
                                  <td>Drywall Stripper</td>
                                  <td>13 Dec 1977</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maple</td>
                                  <td>Halladay</td>
                                  <td>Aviation Tactical Readiness Officer</td>
                                  <td>30 Dec 1991</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maxine</td>
                                  <td>
                                    <a href="javascript:void(0)">Woldt</a>
                                  </td>
                                  <td>
                                    <a href="javascript:void(0)"
                                      >Business Services Sales Representative</a
                                    >
                                  </td>
                                  <td>17 Oct 1987</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lorraine</td>
                                  <td>Mcgaughy</td>
                                  <td>Hemodialysis Technician</td>
                                  <td>11 Nov 1983</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lizzee</td>
                                  <td>
                                    <a href="javascript:void(0)">Goodlow</a>
                                  </td>
                                  <td>Technical Services Librarian</td>
                                  <td>1 Nov 1961</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Judi</td>
                                  <td>Badgett</td>
                                  <td>Electrical Lineworker</td>
                                  <td>23 Jun 1981</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lauri</td>
                                  <td>Hyland</td>
                                  <td>Blackjack Supervisor</td>
                                  <td>15 Nov 1985</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Isidra</td>
                                  <td>Boudreaux</td>
                                  <td>Traffic Court Referee</td>
                                  <td>22 Jun 1972</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Shona</td>
                                  <td>Woldt</td>
                                  <td>Airline Transport Pilot</td>
                                  <td>3 Oct 1981</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Granville</td>
                                  <td>Leonardo</td>
                                  <td>
                                    Business Services Sales Representative
                                  </td>
                                  <td>19 Apr 1969</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Easer</td>
                                  <td>Dragoo</td>
                                  <td>Drywall Stripper</td>
                                  <td>13 Dec 1977</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maple</td>
                                  <td>Halladay</td>
                                  <td>Aviation Tactical Readiness Officer</td>
                                  <td>30 Dec 1991</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maxine</td>
                                  <td>
                                    <a href="javascript:void(0)">Woldt</a>
                                  </td>
                                  <td>
                                    <a href="javascript:void(0)"
                                      >Business Services Sales Representative</a
                                    >
                                  </td>
                                  <td>17 Oct 1987</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lorraine</td>
                                  <td>Mcgaughy</td>
                                  <td>Hemodialysis Technician</td>
                                  <td>11 Nov 1983</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lizzee</td>
                                  <td>
                                    <a href="javascript:void(0)">Goodlow</a>
                                  </td>
                                  <td>Technical Services Librarian</td>
                                  <td>1 Nov 1961</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Judi</td>
                                  <td>Badgett</td>
                                  <td>Electrical Lineworker</td>
                                  <td>23 Jun 1981</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lauri</td>
                                  <td>Hyland</td>
                                  <td>Blackjack Supervisor</td>
                                  <td>15 Nov 1985</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Isidra</td>
                                  <td>Boudreaux</td>
                                  <td>Traffic Court Referee</td>
                                  <td>22 Jun 1972</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Shona</td>
                                  <td>Woldt</td>
                                  <td>Airline Transport Pilot</td>
                                  <td>3 Oct 1981</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Granville</td>
                                  <td>Leonardo</td>
                                  <td>
                                    Business Services Sales Representative
                                  </td>
                                  <td>19 Apr 1969</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Easer</td>
                                  <td>Dragoo</td>
                                  <td>Drywall Stripper</td>
                                  <td>13 Dec 1977</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maple</td>
                                  <td>Halladay</td>
                                  <td>Aviation Tactical Readiness Officer</td>
                                  <td>30 Dec 1991</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Maxine</td>
                                  <td>
                                    <a href="javascript:void(0)">Woldt</a>
                                  </td>
                                  <td>
                                    <a href="javascript:void(0)"
                                      >Business Services Sales Representative</a
                                    >
                                  </td>
                                  <td>17 Oct 1987</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lorraine</td>
                                  <td>Mcgaughy</td>
                                  <td>Hemodialysis Technician</td>
                                  <td>11 Nov 1983</td>
                                  <td>
                                    <span class="badge bg-dark">Disabled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lizzee</td>
                                  <td>
                                    <a href="javascript:void(0)">Goodlow</a>
                                  </td>
                                  <td>Technical Services Librarian</td>
                                  <td>1 Nov 1961</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                                <tr>
                                  <td>Judi</td>
                                  <td>Badgett</td>
                                  <td>Electrical Lineworker</td>
                                  <td>23 Jun 1981</td>
                                  <td>
                                    <span class="badge bg-success">Active</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Lauri</td>
                                  <td>Hyland</td>
                                  <td>Blackjack Supervisor</td>
                                  <td>15 Nov 1985</td>
                                  <td>
                                    <span class="badge bg-danger"
                                      >Suspended</span
                                    >
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Pagination Footable</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    Create your table with Paginated Footable
                  </h6>
                  <div class="mb-3">
                    <button
                      type="button"
                      class="btn btn-info"
                      data-page-size="10"
                    >
                      10
                    </button>
                    <button
                      type="button"
                      class="btn btn-info"
                      data-page-size="20"
                    >
                      20
                    </button>
                    <button
                      type="button"
                      class="btn btn-info"
                      data-page-size="30"
                    >
                      30
                    </button>
                  </div>
                  <div class="table-responsive">
                    <table
                      id="demo-foo-pagination"
                      class="table table-bordered toggle-arrow-tiny"
                      data-sorting="true"
                      data-paging="true"
                      data-paging-size="5"
                    >
                      <thead>
                        <tr>
                          <th data-bs-toggle="true">First Name</th>
                          <th>Last Name</th>
                          <th data-hide="phone">Job Title</th>
                          <th data-hide="all">DOB</th>
                          <th data-hide="all">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Isidra</td>
                          <td>Boudreaux</td>
                          <td>Traffic Court Referee</td>
                          <td>22 Jun 1972</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Shona</td>
                          <td>Woldt</td>
                          <td>Airline Transport Pilot</td>
                          <td>3 Oct 1981</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Granville</td>
                          <td>Leonardo</td>
                          <td>Business Services Sales Representative</td>
                          <td>19 Apr 1969</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Easer</td>
                          <td>Dragoo</td>
                          <td>Drywall Stripper</td>
                          <td>13 Dec 1977</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Maple</td>
                          <td>Halladay</td>
                          <td>Aviation Tactical Readiness Officer</td>
                          <td>30 Dec 1991</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Maxine</td>
                          <td><a href="javascript:void(0)">Woldt</a></td>
                          <td>
                            <a href="javascript:void(0)"
                              >Business Services Sales Representative</a
                            >
                          </td>
                          <td>17 Oct 1987</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Lorraine</td>
                          <td>Mcgaughy</td>
                          <td>Hemodialysis Technician</td>
                          <td>11 Nov 1983</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Lizzee</td>
                          <td><a href="javascript:void(0)">Goodlow</a></td>
                          <td>Technical Services Librarian</td>
                          <td>1 Nov 1961</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Judi</td>
                          <td>Badgett</td>
                          <td>Electrical Lineworker</td>
                          <td>23 Jun 1981</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Lauri</td>
                          <td>Hyland</td>
                          <td>Blackjack Supervisor</td>
                          <td>15 Nov 1985</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Isidra</td>
                          <td>Boudreaux</td>
                          <td>Traffic Court Referee</td>
                          <td>22 Jun 1972</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Shona</td>
                          <td>Woldt</td>
                          <td>Airline Transport Pilot</td>
                          <td>3 Oct 1981</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Granville</td>
                          <td>Leonardo</td>
                          <td>Business Services Sales Representative</td>
                          <td>19 Apr 1969</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Easer</td>
                          <td>Dragoo</td>
                          <td>Drywall Stripper</td>
                          <td>13 Dec 1977</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Maple</td>
                          <td>Halladay</td>
                          <td>Aviation Tactical Readiness Officer</td>
                          <td>30 Dec 1991</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Maxine</td>
                          <td><a href="javascript:void(0)">Woldt</a></td>
                          <td>
                            <a href="javascript:void(0)"
                              >Business Services Sales Representative</a
                            >
                          </td>
                          <td>17 Oct 1987</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Lorraine</td>
                          <td>Mcgaughy</td>
                          <td>Hemodialysis Technician</td>
                          <td>11 Nov 1983</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Lizzee</td>
                          <td><a href="javascript:void(0)">Goodlow</a></td>
                          <td>Technical Services Librarian</td>
                          <td>1 Nov 1961</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Judi</td>
                          <td>Badgett</td>
                          <td>Electrical Lineworker</td>
                          <td>23 Jun 1981</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Lauri</td>
                          <td>Hyland</td>
                          <td>Blackjack Supervisor</td>
                          <td>15 Nov 1985</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Isidra</td>
                          <td>Boudreaux</td>
                          <td>Traffic Court Referee</td>
                          <td>22 Jun 1972</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Shona</td>
                          <td>Woldt</td>
                          <td>Airline Transport Pilot</td>
                          <td>3 Oct 1981</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Granville</td>
                          <td>Leonardo</td>
                          <td>Business Services Sales Representative</td>
                          <td>19 Apr 1969</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Easer</td>
                          <td>Dragoo</td>
                          <td>Drywall Stripper</td>
                          <td>13 Dec 1977</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Maple</td>
                          <td>Halladay</td>
                          <td>Aviation Tactical Readiness Officer</td>
                          <td>30 Dec 1991</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Maxine</td>
                          <td><a href="javascript:void(0)">Woldt</a></td>
                          <td>
                            <a href="javascript:void(0)"
                              >Business Services Sales Representative</a
                            >
                          </td>
                          <td>17 Oct 1987</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Lorraine</td>
                          <td>Mcgaughy</td>
                          <td>Hemodialysis Technician</td>
                          <td>11 Nov 1983</td>
                          <td><span class="badge bg-dark">Disabled</span></td>
                        </tr>
                        <tr>
                          <td>Lizzee</td>
                          <td><a href="javascript:void(0)">Goodlow</a></td>
                          <td>Technical Services Librarian</td>
                          <td>1 Nov 1961</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Judi</td>
                          <td>Badgett</td>
                          <td>Electrical Lineworker</td>
                          <td>23 Jun 1981</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>Lauri</td>
                          <td>Hyland</td>
                          <td>Blackjack Supervisor</td>
                          <td>15 Nov 1985</td>
                          <td>
                            <span class="badge bg-danger">Suspended</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Add & Remove Rows</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-3">
                    You can add or remove rows with Footable
                  </h6>
                  <div class="table-responsive">
                    <table
                      id="footable-addrow"
                      class="table"
                      data-paging="true"
                      data-filtering="true"
                      data-sorting="true"
                      data-editing="true"
                      data-state="true"
                    ></table>
                  </div>
                  <!-- Start Popup Model -->
                  <div
                    class="modal fade"
                    id="editor-modal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="editor-title"
                  >
                    <div class="modal-dialog" role="document">
                      <form class="modal-content form-horizontal" id="editor">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="editor-title">Add Row</h4>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group mb-3 required row">
                            <label
                              for="firstName"
                              class="col-sm-3 control-label"
                              >First Name</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control"
                                id="firstName"
                                name="firstName"
                                placeholder="First Name"
                                required
                              />
                            </div>
                          </div>
                          <div class="form-group mb-3 required row">
                            <label for="lastName" class="col-sm-3 control-label"
                              >Last Name</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control"
                                id="lastName"
                                name="lastName"
                                placeholder="Last Name"
                                required
                              />
                            </div>
                          </div>
                          <div class="form-group mb-3 row">
                            <label for="jobTitle" class="col-sm-3 control-label"
                              >Job Title</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control"
                                id="jobTitle"
                                name="jobTitle"
                                placeholder="Job Title"
                              />
                            </div>
                          </div>
                          <div class="form-group mb-3 row">
                            <label for="dob" class="col-sm-3 control-label"
                              >Date of Birth</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="date"
                                class="form-control"
                                id="dob"
                                name="dob"
                                placeholder="Date of Birth"
                              />
                            </div>
                          </div>
                          <div class="form-group mb-3 row">
                            <label for="status" class="col-sm-3 control-label"
                              >Status</label
                            >
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control"
                                id="status"
                                name="status"
                                placeholder="Status Here"
                                required
                              />
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">
                            Save changes
                          </button>
                          <button
                            type="button"
                            class="btn btn-danger"
                            data-bs-dismiss="modal"
                          >
                            Cancel
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End Popup Model -->
                </div>
              </div>
            </div>
          </div>
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
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/libs/moment-js/build/moment.min.js"></script>
    <script src="../../dist/libs/footable-v3/compiled/footable.min.js"></script>
    <script src="../../dist/js/plugins/footable-init.js"></script>
  </body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 22:54:18 GMT -->
</html>
