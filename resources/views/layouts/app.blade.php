<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photoshop Xizmati !!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- header -->

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

     <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{ route('welcome')}}" class="h2 mb-0">PhotoTech</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ route('welcome')}}" class="nav-link">Bosh Sahifa</a></li>
                <li class="has-children">
                  <a href="{{ route('about')}}" class="nav-link">Biz Haqimizda</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('work')}}" class="nav-link">Bizning Jamoa</a></li>
                    <li><a href="{{ route('price')}}" class="nav-link">Sotib Olmoq</a></li>
                  
                    
                    </li>
                  </ul>
                </li>
                
                <li><a href="{{ route('example')}}" class="nav-link">Our Works</a></li>
                <li><a href="{{ route('service')}}" class="nav-link">Service</a></li>
                
                
                <li><a href="{{ route('contact')}}" class="nav-link">Biz bilan bog`lanish</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  <!-- end header -->
  @yield('content')
  <!-- footer -->

  <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-5">
                    <h2 class="footer-heading mb-4">About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                  </div>
                  <div class="col-md-3 ml-auto">
                    <h2 class="footer-heading mb-4">Sahifaga O`tish</h2>
                    <ul class="list-unstyled">
                      <li><a href="{{ route('about')}}" class="smoothscroll">Biz Haqimizda</a></li>
                      <li><a href="{{ route('service')}}" class="smoothscroll">Service</a></li>
                      <li><a href="{{ route('contact')}}" class="smoothscroll">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h2 class="footer-heading mb-4">Bizga Qo`shil</h2>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="https://telegram.me/qwerkj" class="pl-3 pr-3"><span class="icon-telegram"></span></a>
                    <a href="https://www.instagram.com/abdurakhimov01" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Bizning Yangiliklardan Habardor bo`l !!!</h2>
                <form action="#" method="post" class="footer-subscribe">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                <div class="border-top pt-5">
                  <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            
                </div>
              </div>
              
            </div>
          </div>
        </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  <!-- end footer -->
  
</body>
</html>