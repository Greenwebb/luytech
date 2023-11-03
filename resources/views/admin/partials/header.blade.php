<header id="header" class="header header-transparent">
    <nav class="navbar navbar-expand-lg sticky-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
          <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
          <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
        </a>
        <button class="navbar-toggler" type="button">
          <span class="menu-lines"><span></span></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav__item with-dropdown">
              <a href="{{ route('index') }}" class="dropdown-toggle nav__item-link active">Home</a>
              <i class="fa fa-angle-right" data-toggle="dropdown"></i>
              <ul class="dropdown-menu">
                <li class="nav__item"><a href="{{ route('index') }}" class="nav__item-link">Home Main</a></li>
                <!-- /.nav-item -->
                <li class="nav__item"><a href="home-modern.php" class="nav__item-link">Home Moderm</a></li>
                <!-- /.nav-item -->
                <li class="nav__item"><a href="home-classic.php" class="nav__item-link">Home classic</a></li>
                <!-- /.nav-item -->
              </ul><!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item">
              <a href={{ route('about') }} class="dropdown-toggle nav__item-link">About Us</a>
        
              <!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item with-dropdown">
              <a href="{{ route('services') }}" class="dropdown-toggle nav__item-link">Services</a>
              <i class="fa fa-angle-right" data-toggle="dropdown"></i>
              <ul class="dropdown-menu wide-dropdown-menu">
                <li class="nav__item">
                  <div class="row mx-0"><!-- /.col-sm-6 -->
                    <div class="col-sm-6 dropdown-menu-col">
                     
                      <ul class="nav flex-column">
                        <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Import of Vehicles</a></li> <!-- /.nav-item -->
                        
                        <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Clearing and Fowarding</a></li> <!-- /.nav-item -->
                        <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Registrion and Insurance</a></li>
                        <!-- /.nav-item -->
                      </ul>
                    </div><!-- /.col-sm-6 -->
                  </div><!-- /.row -->
                </li><!-- /.nav-item -->
              </ul><!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item ">
              <a href="blog-grid.php" class="dropdown-toggle nav__item-link">Success Stories</a>
             <!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item with-dropdown">
              <a href="{{ route('whyus') }}" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Why Us</a>
            
            </li><!-- /.nav-item -->
            <li class="nav__item">
              <a href="{{ route('contact') }}" class="nav__item-link">Contacts</a>
            </li><!-- /.nav-item -->
          </ul><!-- /.navbar-nav -->
        </div><!-- /.navbar-collapse -->
        <div class="navbar-modules">
          <ul class="modules__wrapper d-flex align-items-center list-unstyled">
            <li>
              <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
            </li>
            <li class="d-none d-lg-block">
              <a href="{{ route('request-quote') }}" class="module__btn btn__request btn">
                <span>Request A Quote</span><i class="icon-arrow-right"></i>
              </a>
            </li>
            <li>
              <div class="dropdown">
                <button class="module__btn dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                  <span>En</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="langDrobdown">
                  <a class="dropdown-item" href="#">
                    <img src="assets/images/flags/united-states.png" alt="us"><span>Us</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img src="assets/images/flags/germany.png" alt="germany"><span>germany</span>
                  </a>
                </div>
              </div>
            </li>
          </ul><!-- /.modules-wrapper -->
        </div><!-- /.navbar-modules -->
      </div><!-- /.container -->
    </nav><!-- /.navabr -->
  </header><!-- /.Header -->
