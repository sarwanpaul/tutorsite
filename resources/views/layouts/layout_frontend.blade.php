<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      
  </head>
    <body>
      <header id="header">
        <div class="container-fluid withHeader">

          <div id="logo" class="pull-left">
            <a href="#hero"><img src="{{asset('public/img/logo.png')}}" alt="" title="" /></img></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="#hero">Find Tutors</a></li>
              <li><a href="#about">Find Students</a></li> 
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li class="menu-has-children"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="menu-has-children"><a href="#">Drop Down 2</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                  <li><a href="#">Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->
      @yield('content')        
    
    <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src = "{{asset('public/js/wow.min.js')}}"></script>
    <script src = "{{asset('public/js/hoverIntent.js')}}"></script>
    <script src = "{{asset('public/js/superfish.min.js')}}"></script>
    <script src = "{{asset('public/js/main.js')}}"></script>
      @yield('script')
  </body>
</html>