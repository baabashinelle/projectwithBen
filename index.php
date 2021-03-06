<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Tour with Dave</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/p3.jpg" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <!--for fontawesome icons-->
    <link
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- ==================== Start Loading ==================== -->

    <div class="loading">
      <span>Tour with Dave</span>
    </div>

    <div id="preloader"></div>

    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo -->
        <a class="logo" href="#">
          <strong><b>TourWithDave</b></strong>
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icon-bar"><i class="fa fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Packages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tours</a>
                    </li>
                </ul> -->

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="auth.php"><i class="fa fa-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

    <!-- ==================== Start Slider ==================== -->

    <header class="slider slider-prlx fixed-slider text-center">
      <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="bg-img valign"
              data-background="img/p1.jpg"
              data-overlay-dark="6"
            >
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8 col-md-10">
                    <div class="caption center mt-30">
                      <h1>
                        <span class="">Find Tours</span> <br />
                        <span class="">All Over The World</span>
                        <span class=""></span>
                      </h1>
                      <!-- <a href="#" class="butn bord curve mt-30">
                                            <span>Find Out More</span>
                                        </a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="bg-img valign"
              data-background="img/p2.jpg"
              data-overlay-dark="6"
            >
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-9">
                    <div class="caption center mt-30">
                      <h1 class="">
                        Discover The <br />
                        Tour Travel
                      </h1>
                      <!-- <a href="#" class="butn bord curve mt-30">
                                            <span>Find Out More</span>
                                        </a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slider setting -->
        <div class="setone setwo">
          <div
            class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer"
          >
            <i class="fa fa-chevron-right"></i>
          </div>
          <div
            class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer"
          >
            <i class="fa fa-chevron-left"></i>
          </div>
        </div>
        <div class="swiper-pagination top botm"></div>
      </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <div class="main-content">
      <!-- ==================== Start main content ==================== -->

      <section class="about-us section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 valign md-mb50">
              <div class="mb-50">
                <h5 class="fw-100 text-u ls10 mb-10"><b>Making Adventure Tours</b></h5>
                <p>
                  Find a tour, find an adventure, create a hobby that is related
                  to travelling, tour the world with your favorite people and
                  make memories!
                </p>
              </div>
            </div>
            <div class="col-lg-7 img">
              <img src="img/p3.jpg" alt="Tour Map" />
            </div>
          </div>
        </div>
      </section>

      <section class="services bords section-padding pt-0">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h4 class="wow fadeIn" data-wow-delay=".5s"><b>We Offer The Best.</b></h4>
                        </div>
                    </div>
                </div>
          <div class="row">
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".5s">
              <div class="item-box md-mb50">
                <img src="img/p7.jpg" />
                <h6><a href="">Trained Guides</a></h6>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".7s">
              <div class="item-box md-mb50">
                <img src="img/p5.jpg" />
                <h6><a href="">Adventurous Trails</a></h6>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".9s">
              <div class="item-box">
                <img src="img/p6.jpg" />
                <h6><a href="">Complete Guidance</a></h6>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="call-action section-padding sub-bg bg-img"
        data-background="img/patrn.svg"
      >
        <div class="container text-center">
              <div class="content sm-mb30">
                <h2 class="wow text-center" data-splitting>
                  Explore some available Tours below!
                </h2>
              </div>
              <a
                href="signin.html"
                class="butn bord curve wow fadeInUp"
                data-wow-delay=".5s"
                ><span>Sign Up To Tour</span></a
              >
            </div>
      </section>


      <!-- ==================== Start tours ==================== -->

      <section class="work-carousel metro position-re">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 no-padding">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div
                      class="content wow noraidus fadeInUp"
                      data-wow-delay=".3s"
                    >
                      <div
                        class="item-img bg-img wow imago"
                        data-background="img/p1.jpg"
                      ></div>
                      <div class="cont">
                        <h6><a href="">France</a></h6>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="content wow noraidus fadeInUp"
                      data-wow-delay=".3s"
                    >
                      <div
                        class="item-img bg-img wow imago"
                        data-background="img/p2.jpg"
                      ></div>
                      <div class="cont">
                        <h6>
                          <a href="">Tanzania</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="content wow noraidus fadeInUp"
                      data-wow-delay=".3s"
                    >
                      <div
                        class="item-img bg-img wow imago"
                        data-background="img/p3.jpg"
                      ></div>
                      <div class="cont">
                        <h6>
                          <a href="">Kenya</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="content wow noraidus fadeInUp"
                      data-wow-delay=".3s"
                    >
                      <div
                        class="item-img bg-img wow imago"
                        data-background="img/p4.jpg"
                      ></div>
                      <div class="cont">
                        <h6>
                          <a href="">South Africa</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="content wow noraidus fadeInUp"
                      data-wow-delay=".3s"
                    >
                      <div
                        class="item-img bg-img wow imago"
                        data-background="img/p5.jpg"
                      ></div>
                      <div class="cont">
                        <h6>
                          <a href="">Ghana</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- slider setting -->
                <div
                  class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer"
                >
                  <span
                    class="simple-btn right"
                    style="color: #fafafa !important"
                    >Next</span
                  >
                </div>
                <div
                  class="swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer"
                >
                  <span class="simple-btn" style="color: #fafafa !important"
                    >Prev</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ==================== Start Footer ==================== -->

      <footer class="sub-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="item md-mb50">
                <div class="title">
                  <h5>Become a User</h5>
                </div>
                <ul>
                  <li>
                    <div class="cont">
                      <h6>Sign Up</h6>
                      <p>Lorem Ipsum</p>
                    </div>
                  </li>
                  <li>
                    <div class="cont">
                      <h6>Sign In</h6>
                      <p>Lorem Ipsum</p>
                    </div>
                  </li>
                  <li>
                    <div class="cont">
                      <h6>Check Tours</h6>
                      <p>Lorem Ipsum</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="item">
                <div class="logo">
                  <strong><b>TourWithDave</b></strong>
                </div>
                <div class="social">
                  <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="#" target="_blank"
                    ><i class="fa fa-instagram"></i
                  ></a>
                  <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="copy-right">
                  <p>?? 2021, Tour With Dave</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- ==================== End Footer ==================== -->
    </div>

    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>
  </body>
</html>
