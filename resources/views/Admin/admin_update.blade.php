<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('../css/mainCss/adminpanel/style.default.min.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('../css/mainCss/adminpanel/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-inner">
        <!-- Sidebar Header    -->
        <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="img/avatar-7.jpg" alt="person">
            <h2 class="h5 text-white text-uppercase mb-0">Admin Name</h2>

          </div>

        </div>
        <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
        <ul class="list-unstyled">
          <li class="sidebar-item"><a class="sidebar-link" href="index.html">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                <use xlink:href="#real-estate-1"> </use>
              </svg>Home </a></li>

          <li class="sidebar-item"><a class="sidebar-link" href="orders.html">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                <use xlink:href="#sales-up-1"> </use>
              </svg>Orders</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="tables.html">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                <use xlink:href="#portfolio-grid-1"> </use>
              </svg>Tables </a>
          </li>


        </ul>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header mb-5 pb-3">
        <nav class="nav navbar fixed-top">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
              <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                    <use xlink:href="#menu-1"> </use>
                  </svg></a><a class="navbar-brand ms-2" href="index.html">
                  <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">Product Recommendation </span><strong class="text-primary text-sm">SYSTEM</strong></div></a></div>
              <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">







                <!-- Log out-->
                <li class="nav-item"><a class="nav-link text-white text-sm ps-0" href="login.html"> <span class="d-none d-sm-inline-block">Logout</span>
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#security-1"> </use>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>


      <!-- Counts Section -->
      <section class="py-5">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#user-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">New Clients</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p class="display-6 mb-0">25</p>
                </div>
              </div>
            </div>

            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#survey-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Work Orders</h3>
                  <p class="text-gray-500 small">Last 5 days</p>
                  <p class="display-6 mb-0">400</p>
                </div>
              </div>
            </div>


            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#list-details-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">New Quotes</h3>
                  <p class="text-gray-500 small">Last 2 months</p>
                  <p class="display-6 mb-0">342</p>
                </div>
              </div>
            </div>



          </div>
        </div>
      </section>

      <!-- Header Section-->
    <section class="bg-white py-5">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- Item Insert Section -->
            <div class="col-lg-12 col-md-5">
              <div class="card shadow-0">
                  <div class="col-12 col-sm-7 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                      <div class="card-body">
                        <form action="{{ url('updateproduct/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                          <input type="text" name="productName" id="" class="form-control my-4 py-2" placeholder="Item Name"  value="{{ $product->product_name }}"/>
                          <textarea name="description" id="" class="form-control my-4 py-2" placeholder="Description" >{{ $product->description }}</textarea>
                          <input type="number" name="price" id="" class="form-control my-4 py-2" placeholder="price" value="{{ $product->price }}"/>
                          <select name="categori" id="cars"  class="form-control my-4 py-2" value = "{{ $product->categori }}">
                            <option value="phone">Phone</option>
                            <option value="watch">Watch</option>
                          </select>
                          <input type="file" name="image" id="" class="form-control my-4 py-2" value="" accept="image/*"/>
                          <img src="{{ asset('../productImages/'. $product->tumbnail)}}" alt="" style="width:100px;height:100px" class="form-control my-4 py-2">

                          <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">UPDATE ITEM</button>

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
    </section>

      <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
          <div class="row text-center gy-3">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0 text-sm text-gray-600">Your company &copy; 2017-2023</p>
            </div>
            <div class="col-sm-6 text-sm-end">
              <p class="mb-0 text-sm text-gray-600">Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
