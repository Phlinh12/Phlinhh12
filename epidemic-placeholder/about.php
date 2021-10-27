<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="assets/images/favicon.png" type="image/png" />
  <title>COVID - 19</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css" />
  <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
  <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />

  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body data-scroll-animation="true">
  <div class="body_wrapper">

    <!--================Preloader Area =================-->
    <div class="preloader">
      <div class="three-bounce">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>
    </div>
    <!--================End Preloader Area =================-->

    <!--================Mobile Canvus Menu Area =================-->
    <div class="mobile_canvus_menu">
      <div class="close_btn">
        <img src="assets/images/icon/close-dark.png" alt="">
      </div>
      <div class="menu_part_lux">
        <ul class="menu_list wd_scroll">
          <li><a href="index.html">Trang chủ</a></li>
          <li>
            <a href="index.html">Phòng chống
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="symptom.html">Hệ thống</a></li>
              <li><a href="symptom-checker.html">Kiểm tra triệu chứng</a></li>
              <li><a href="prevention.html">P</a></li>
              <li><a href="virus-checker.html">Coronavirus Checker</a></li>
              <li><a href="tracker.html">Tracker</a></li>
              <li><a href="maintenance.html">Maintenance</a></li>
              <li><a href="faq.html">Faqs</a></li>
            </ul>
          </li>
          <li><a href="appointment.html">Appointment</a></li>
          <li class="active">
            <a href="#">Pages
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="about.html">About</a></li>
              <li><a href="doctors.html">Doctors</a></li>
              <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
              <li><a href="typography.html">Typhography</a></li>
              <li><a href="search.html">Search</a></li>
              <li><a href="search-nothing.html">Not Found</a></li>
              <li><a href="comingsoon.html">Coming Soon</a></li>
              <li><a href="404.html">Error</a></li>
            </ul>
          </li>

          <li>
            <a href="index.html">Blog
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="blog.html">Blog</a></li>
              <li><a href="single-blog.html">Blog Details</a></li>

            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="menu_btm">
        <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
      </div>
    </div>
    <!--================End Mobile Canvus Menu Area =================-->
    <!--================Sidebar Form Area =================-->
    <div class="body_capture"></div>
    <section class="sidebar_widget scroll_body">
      <div class="info_sidebar_inner">
        <div class="close_btn">
          <img src="assets/images/icon/close.png" alt="">
        </div>
        <ul class="nav info_social">
          <li>
            <a href="#"><i class="fab fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-vimeo-v"></i></a>
          </li>
        </ul>
        <div class="info_title">
          <h2>Get in touch</h2>
          <p>If you have any question before we start, please fill below the contact form.</p>
        </div>
        <form action="#" class="appoinment_form js-form">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="" required />
                <label><i class="linearicons-user"></i>Your Name</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="email" name="email" placeholder="" required />
                <label><i class="linearicons-envelope-open"></i>Your Email
                  Address</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="number" name="number" placeholder="" required />
                <label><i class="linearicons-telephone"></i>Your Phone
                  Number</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                <label><i class="linearicons-document"></i>Your Message</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group checkbox_field">
                <div class="checkbox">
                  <input type="checkbox" value="None" id="squared2" name="check" />
                  <label class="l_text" for="squared2">I accept the <span>Privacy Policy</span></label>
                </div>
                <button type="submit" class="green_btn" name="appoinment" id="appoinment" value="appoinment"
                  data-value="appoinment">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </form>
        <div class="info_footer">
          <p>© Copyright
            <script>
              document.write(new Date().getFullYear());
            </script> Epidemic Organisation Ltd.
          </p>
          <h6>
            Designed with <i class="linearicons-heart"></i>
            by <span>creakits</span>
          </h6>
        </div>
      </div>
    </section>
    <!--================End Sidebar Form Area =================-->

    <!--================Header Area =================-->
    <header class="header_area">
      <ul class="nav menu_social flex-column">
        <li>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
      <div class="main_menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"
                srcset="assets/images/logo-2x.png 2x" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.html" role="button"
                    aria-haspopup="true" aria-expanded="false">Prevention </a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="dropdown submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html" role="button"
                        aria-haspopup="true" aria-expanded="false">Symptoms
                        <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                          data-toggle="dropdown"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="symptom.html">Typical Symptoms</a></li>
                        <li><a href="symptom-checker.html">Symptom Checker</a></li>
                        <li><a href="prevention.html">Prevention</a></li>
                        <li><a href="virus-checker.html">Coronavirus Checker</a></li>
                        <li><a href="tracker.html">Tracker</a></li>
                      </ul>
                    </li>
                    <li><a href="maintenance.html">Maintenance</a></li>
                    <li><a href="faq.html">FAQS</a></li>
                  </ul>
                </li>
                <li><a href="appointment.html">Appointment</a></li>
                <li class="dropdown submenu active">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Pages</a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About</a></li>
                    <li><a href="doctors.html">Doctors</a></li>
                    <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
                    <li><a href="typography.html">Typhography</a></li>
                    <li class="dropdown submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="search.html" role="button"
                        aria-haspopup="true" aria-expanded="false">Search
                        <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                          data-toggle="dropdown"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="search.html">Search</a></li>
                        <li><a href="search-nothing.html">Not Found</a></li>
                      </ul>
                    </li>
                    <li><a href="comingsoon.html">Coming Soon</a></li>
                    <li><a href="404.html">Error</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Blog
                  </a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="checker_btn">
                  <a href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="right_burger">
          <ul class="nav">
            <li>
              <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                <img src="assets/images/icon/search.png" alt="" />
              </div>
            </li>
            <li>
              <div class="menu_btn">
                <img src="assets/images/icon/burger.png" alt="" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--================End Header Area =================-->
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
      <div class="container">
        <div class="breadcrumb_text">
          <h6 class="wow fadeInUp" data-wow-delay="0.2s">COVID-19 the disease</h6>
          <h3 class="wow fadeInUp" data-wow-delay="0.2s">About the Coronavirus</h3>
          <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="#">About COVID-19</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!--================End Breadcrumb Area =================-->
    <!--================ About Area =================-->
    <section class="home_about_corona about_corona_aera">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="home_ab_img">
              <img class="wow fadeInUp" data-wow-delay="500ms" src="assets/images/about/about_man.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="home_ab_text">
              <div class="home_ab_text_inner">
                <div class="home_ab_item">
                  <h4 class="wow fadeInUp">Pandemic of Coronavirus Disease 2019-2020</h4>
                  <p class="wow fadeInUp" data-wow-delay="0.2s">
                    The 2019–20 coronavirus pandemic is an ongoing pandemic of
                    coronavirus disease 2019 (COVID-19), caused by severe
                    acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The
                    outbreak was first identified in Wuhan, Hubei, China, in
                    December 2019. The World Health Organization (WHO)
                    declared the outbreak to be a Public Health Emergency of
                    International Concern on 30 January 2020 and recognized it
                    as a pandemic on 11 March.
                  </p>
                  <a class="text_btn wow fadeInUp" data-wow-delay="0.3s" href="#">Read more about <i
                      class="linearicons-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End About Area =================-->
    <!--================start About content Area =================-->
    <section class="about_cronacvirus_promo_area">
      <ul class="list-unstyled shap_img">
        <li><img src="assets/images/about/promo_bg_shap3.png" alt=""></li>
        <li><img src="assets/images/about/promo_bg_shap2.png" alt=""></li>
        <li><img src="assets/images/about/promo_bg_shap1.png" alt=""></li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="coronavirus_promo_content">
              <h5>What are Coronavirus?</h5>
              <h2>What is the COVID-19?</h2>
              <p>
                COVID-19 is a new strain of coronavirus that has not been
                previously identified in humans. It was first identified in
                Wuhan, Hubei Province, China, where it has caused a large and
                ongoing outbreak. It has since spread more widely in China.
                Cases have since been identified in several other countries.
                The COVID-19 virus is closely related to a bat coronavirus.
              </p>
              <div class="row home_option">
                <div class="col-lg-6 col-sm-6">
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-shield-check"></i>
                    </div>
                    <div class="media-body">
                      <h4>Protection</h4>
                      <p>How to protect yourself</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-pulse"></i>
                    </div>
                    <div class="media-body">
                      <h4>Symptoms</h4>
                      <p>Check basic symptoms</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-bubbles"></i>
                    </div>
                    <div class="media-body">
                      <h4>Appointment</h4>
                      <p>Get online consultation</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-document2"></i>
                    </div>
                    <div class="media-body">
                      <h4>About COVID-19</h4>
                      <p>Read more about coronavirus</p>
                    </div>
                  </div>
                </div>
              </div>
              <h3>SARS-CoV2- is closely related to the SARS-CoV</h3>
              <p>
                It is thought to have a zoonotic origin. Genetic analysis has
                revealed that the coronavirus genetically clusters with the
                genus Betacoronavirus, in subgenus Sarbecovirus (lineage B)
                together with two bat-derived strains. It is 96% identical at
                the whole genome level to other bat coronavirus samples
                (BatCov RaTG13). In February 2020, Chinese researchers found
                that there is only one amino acid difference in certain parts
                of the genome sequences between the viruses from pangolins and
                those from humans, however, whole-genome comparison to date
                found at most 92%...
              </p>
              <a class="text_btn" href="#">Read more about <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg_img">
        <img class="shap" src="assets/images/about/about_promo_bg.png" alt="">
        <ul class="list-unstyled shap_img_two">
          <li><img src="assets/images/about/promo_bg_shap8.png" alt=""></li>
          <li><img src="assets/images/about/promo_bg_shap7.png" alt=""></li>
          <li><img src="assets/images/about/promo_bg_shap6.png" alt=""></li>
          <li data-parallax='{"y": 50}'><img src="assets/images/about/promo_bg_shap5.png" alt=""></li>
          <li data-parallax='{"x": 50}'><img src="assets/images/about/promo_bg_shap4.png" alt=""></li>
        </ul>
      </div>
    </section>
    <!--================End About content Area =================-->
    <!--================Start Faq Area =================-->
    <section class="about_faq_area">
      <div class="container">
        <div class="main_title text-center">
          <h5 class="wow fadeInUp">Have questions? Find answers!</h5>
          <h2 class="wow fadeInUp" data-wow-delay="0.2s">Frequently Asked Questions</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="faq_img">
              <img src="assets/images/about/faq_img.jpg" alt="" />
            </div>

          </div>
          <div class="col-lg-6">
            <div class="question_list faq_inner">
              <div class="accordion" id="accordionExample">
                <div class="card wow fadeInUp">
                  <div class="card-header" id="headingOne">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                      What are coronaviruses?
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="faq_content">
                        <p>
                          The first symptoms of COVID-19 and influenza (flu)
                          infections are often very similar. They both cause
                          fever and similar respiratory symptoms, which can
                          then range from mild through to severe disease, and
                          sometimes can be fatal. Both viruses are also
                          transmitted in the same way, by coughing or
                          sneezing, or by contact with hands, surfaces or
                          objects contaminated with the virus.
                        </p>
                        <a class="text_btn" href="#">Read more about
                          <i class="linearicons-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card wow fadeInUp" data-wow-delay="0.2s">
                  <div class="card-header" id="headingTwo">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What is the COVID-19 virus?
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="faq_content">
                        <p>
                          The first symptoms of COVID-19 and influenza (flu)
                          infections are often very similar. They both cause
                          fever and similar respiratory symptoms, which can
                          then range from mild through to severe disease, and
                          sometimes can be fatal. Both viruses are also
                          transmitted in the same way, by coughing or
                          sneezing, or by contact with hands, surfaces or
                          objects contaminated with the virus.
                        </p>
                        <a class="text_btn" href="#">Read more about
                          <i class="linearicons-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card wow fadeInUp" data-wow-delay="0.3s">
                  <div class="card-header" id="headingThree">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      What is the difference between COVID-19 and the flu?
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="faq_content">
                        <p>
                          The first symptoms of COVID-19 and influenza (flu)
                          infections are often very similar. They both cause
                          fever and similar respiratory symptoms, which can
                          then range from mild through to severe disease, and
                          sometimes can be fatal. Both viruses are also
                          transmitted in the same way, by coughing or
                          sneezing, or by contact with hands, surfaces or
                          objects contaminated with the virus.
                        </p>
                        <a class="text_btn" href="#">Read more about
                          <i class="linearicons-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card wow fadeInUp" data-wow-delay="0.4s">
                  <div class="card-header" id="headingfour">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      How is the virus spread?
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="faq_content">
                        <p>
                          The first symptoms of COVID-19 and influenza (flu)
                          infections are often very similar. They both cause
                          fever and similar respiratory symptoms, which can
                          then range from mild through to severe disease, and
                          sometimes can be fatal. Both viruses are also
                          transmitted in the same way, by coughing or
                          sneezing, or by contact with hands, surfaces or
                          objects contaminated with the virus.
                        </p>
                        <a class="text_btn" href="#">Read more about
                          <i class="linearicons-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card wow fadeInUp" data-wow-delay="0.5s">
                  <div class="card-header" id="headingfive">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                      What are the symptoms?
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="faq_content">
                        <p>
                          The first symptoms of COVID-19 and influenza (flu)
                          infections are often very similar. They both cause
                          fever and similar respiratory symptoms, which can
                          then range from mild through to severe disease, and
                          sometimes can be fatal. Both viruses are also
                          transmitted in the same way, by coughing or
                          sneezing, or by contact with hands, surfaces or
                          objects contaminated with the virus.
                        </p>
                        <a class="text_btn" href="#">Read more about
                          <i class="linearicons-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Faq Area =================-->
    <!--================Start about service Area =================-->
    <section class="about_features_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="400ms">
            <div class="about_features_item">
              <div class="round_icon">
                <img src="assets/images/about/about_features_img1.png" alt="" />
              </div>
              <h5>Transmitting</h5>
              <h3>How it is spreading?</h3>
              <p>
                The virus is mainly spread during close contact and by
                respiratory droplets produced when people cough or sneeze.
                Respiratory droplets may be produced during breathing but the
                virus is not generally airborne.
              </p>
              <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="500ms">
            <div class="about_features_item">
              <div class="round_icon">
                <img src="assets/images/about/about_features_img2.png" alt="" />
              </div>
              <h5>Basic Symptoms</h5>
              <h3>What are the symptoms?</h3>
              <p>
                The virus is mainly spread during close contact and by
                respiratory droplets produced when people cough or sneeze.
                Respiratory droplets may be produced during breathing but the
                virus is not generally airborne.
              </p>
              <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="600ms">
            <div class="about_features_item">
              <div class="round_icon">
                <img src="assets/images/about/about_features_img3.png" alt="" />
              </div>
              <h5>Threatment</h5>
              <h3>How to prevent?</h3>
              <p>
                The virus is mainly spread during close contact and by
                respiratory droplets produced when people cough or sneeze.
                Respiratory droplets may be produced during breathing but the
                virus is not generally airborne.
              </p>
              <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End about service Area =================-->
    <!--================Check Now Area =================-->
    <section class="check_box">
      <div class="container">
        <div class="check_now_area check_now_box">
          <div class="row m-0 justify-content-between">
            <div class="left">
              <div class="media">
                <div class="d-flex">
                  <img src="assets/images/check-4.png" alt="">
                  <img src="assets/images/check-5.png" alt="">
                  <img src="assets/images/check-6.png" alt="">
                </div>
                <div class="media-body">
                  <h4>Think you might be affected?</h4>
                  <p>
                    Try our simple coronavirus checker to find out what you need
                    to do.
                  </p>
                </div>
              </div>
            </div>
            <div class="right">
              <a class="icon_btn" href="#">Check now <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Check Now Area =================-->
    <!--================App Area =================-->
    <section class="app_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="app_text">
              <h2>Get <span>epidemic</span> app!</h2>
              <p>
                Download our app now, track Coronavirus cases real-time and
                follow instant updates.
              </p>
              <a class="wow fadeIn" data-wow-delay="400" href="#"><img src="assets/images/apple-btn.png" alt="" /></a>
              <a class="wow fadeIn" data-wow-delay="500" href="#"><img src="assets/images/google-btn.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app_mobile">
              <div class="mobile_image">
                <img src="assets/images/mobile-1.png" alt="" />
                <img class="wow fadeInUp" data-wow-delay="500ms" src="assets/images/mobile-2.png" alt="" />
              </div>
              <ul class="corona_img nav">
                <li>
                  <img src="assets/images/icon/app-virus-1.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-2.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-3.png" alt="" />
                </li>
                <li data-parallax='{"y": -100}'>
                  <img src="assets/images/icon/app-virus-4.png" alt="" />
                </li>
                <li data-parallax='{"y": 100}'>
                  <img src="assets/images/icon/app-virus-5.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-6.png" alt="" />
                </li>
                <li data-parallax='{"y": -200}'>
                  <img src="assets/images/icon/app-virus-7.png" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End App Area =================-->
    <!--================Footer Area =================-->
    <footer class="footer_area">
      <div class="footer_widgets_area pad_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <aside class="f_widget contact_widget">
                <div class="f_title">
                  <h3>Contacts</h3>
                </div>
                <div class="ct_wd_text">
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-telephone"></i>
                    </div>
                    <div class="media-body">
                      <h5>emergency call</h5>
                      <a href="tel:+8801676790690">
                        <h4>+61 (8) 8234 3555</h4>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-map-marker"></i>
                    </div>
                    <div class="media-body">
                      <p>
                        78-66 State Route 33,<br />
                        Brighton VIC 3186, AUSTRALIA
                      </p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex">
                      <i class="fab fa-skype"></i>
                    </div>
                    <div class="media-body">
                      <a href="skype:md.rocky79">
                        <h6>Skype ID: <span>epidemic.org</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-envelope-open"></i>
                    </div>
                    <div class="media-body">
                      <a href="mailto:rockybd1995@gmail.com">
                        <h6>Email: <span>hi@epidemic.org</span></h6>
                      </a>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            <div class="col-lg-3">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Prevention</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Typical
                      Symptoms</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>How to
                      Protect</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>How are
                      spreading</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Meet our
                      Doctors</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>About
                      Coronavirus</a>
                  </li>
                </ul>
              </aside>
            </div>
            <div class="col-lg-3">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Protection</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Typical
                      Symptoms</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>How to
                      Protect</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>How are
                      spreading</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Meet our
                      Doctors</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>About
                      Coronavirus</a>
                  </li>
                </ul>
              </aside>
            </div>
            <div class="col-lg-3">
              <aside class="f_widget about_widget">
                <div class="f_title">
                  <h3>About</h3>
                </div>
                <p>
                  The disease was first identified in 2019 in Wuhan, the
                  capital of Hubei, China, and has since spread globally,
                  resulting in the 2019–2020 coronavirus pandemic.
                </p>
                <ul class="nav">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                  </li>
                </ul>
              </aside>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_copyright">
        <div class="container">
          <img src="assets/images/f-logo.png" alt="">
          <p>© Copyright
            <script>
              document.write(new Date().getFullYear());
            </script> Epidemic Organisation Ltd.</p>
          <ul class="nav">
            <li><a href="#">Term of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Impressum</a></li>
          </ul>
          <h6>
            Designed with <i class="linearicons-heart"></i>
            by <span>creakits</span>
          </h6>
        </div>
      </div>
    </footer>
    <!--================ End Footer Area =================-->
  </div>

  <div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <img src="assets/images/icon/close-white.png" alt="">
    </button>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button"><i class="linearicons-magnifier"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--================ Optional JavaScript =================-->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/vendors/corona-live/dashboard.js"></script>
  <script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
  <script src="assets/vendors/slick/slick.min.js"></script>
  <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
  <script src="assets/vendors/scroll-animation/parallax.js"></script>
  <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendors/animate-css/wow.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>