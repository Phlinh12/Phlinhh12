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

  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
  <div class="body_wrapper">
  
  <!--================Preloader Area =================-->
    <div class="preloader">
      <div class="three-bounce">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>
    </div>
    <!--================Mobile Canvus Menu Area =================-->
    <div class="mobile_canvus_menu">
      <div class="close_btn">
        <img src="assets/images/icon/close-dark.png" alt="">
      </div>
      <div class="menu_part_lux">
        <ul class="menu_list wd_scroll">
          <li><a href="index.html">Home</a></li>
          <li class="active">
            <a href="index.html">Prevention
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="symptom.html">Typical Symptoms</a></li>
              <li><a href="symptom-checker.html">Symptom Checker</a></li>
              <li><a href="prevention.html">Prevention</a></li>
              <li><a href="virus-checker.html">Coronavirus Checker</a></li>
              <li><a href="tracker.html">Tracker</a></li>
              <li><a href="maintenance.html">Maintenance</a></li>
              <li><a href="faq.html">Faqs</a></li>
            </ul>
          </li>
          <li><a href="appointment.html">Appointment</a></li>
          <li>
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
                <input class="form-control" type="text" id="a_name" name="a_name" placeholder="" required />
                <label><i class="linearicons-user"></i>Your Name</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="a_email" name="a_email" placeholder="" required />
                <label><i class="linearicons-envelope-open"></i>Your Email
                  Address</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="a_number" name="a_number" placeholder="" required />
                <label><i class="linearicons-telephone"></i>Your Phone
                  Number</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <textarea name="a_message" id="a_message" cols="30" rows="10" class="form-control" required></textarea>
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
          <div class="success-message">
            <i class="fa fa-check text-primary"></i> Thank you!. Your message
            is successfully sent...
          </div>
          <div class="error-message">We're sorry, but something went wrong</div>
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
    <header class="header_area white_header">
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
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/logo-2.png" srcset="assets/images/logo-2-2x.png 2x" alt="" />
              <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" />
            </a>
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
                <li class="dropdown submenu">
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
                <img src="assets/images/icon/search-white.png" alt="" />
                <img src="assets/images/icon/search.png" alt="" />
              </div>
            </li>
            <li>
              <div class="menu_btn">
                <img src="assets/images/icon/burger-white.png" alt="" />
                <img src="assets/images/icon/burger.png" alt="" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--================End Header Area =================-->
    <!--=============== Start braeadcrum Area =================-->
    <section class="faq_breadcrumb_area">
      <img class="overlay_bg" src="assets/images/about/worldmap2.png" alt="" />
      <div class="container">
        <div class="breadcrumb_content text-center">
          <h6>Frequently Asked Questions</h6>
          <h2>Find answers about Coronavirus</h2>
          <form action="#" class="faq_search">
            <div class="control-with-icon">
              <input type="text" class="form-control" placeholder="Start typing your question..." required="" />
              <span class="control-icon"><i class="linearicons-funnel"></i></span>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--================End braeadcrum Area =================-->
    <!--================Start coronavirus question Area =================-->
    <section class="coronavirus_question_area">
      <div class="container">
        <div class="main_title text-center">
          <h2>Top questions</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-first-aid"></i>
              </div>
              What are the symptoms?
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-eye-dropper"></i>
              </div>
              Should I get tested?
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-earth"></i>
              </div>
              How does it spread?
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-bag-dollar"></i>
              </div>
              Can I get financial help?
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-chart-growth"></i>
              </div>
              How do I reduce my risk?
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-6">
            <a href="#" class="corona_question">
              <div class="icon">
                <i class="linearicons-plane"></i>
              </div>
              Can I travel?
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="common_question_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="common_question_item">
              <h3>How to protect yourself?</h3>
              <ul class="list-unstyled question_list">
                <li><a href="#">Am I at risk?</a></li>
                <li>
                  <a href="#">Why do you need to wear cloth face coverings?</a>
                </li>
                <li><a href="#">How can I manage anxiety and stress?</a></li>
              </ul>
              <a class="text_btn" href="#">View all questions about
                <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="common_question_item">
              <h3>What to do if you feel sick?</h3>
              <ul class="list-unstyled question_list">
                <li><a href="#">What are the symptoms of COVID-19?</a></li>
                <li><a href="#">Should I get tested?</a></li>
                <li>
                  <a href="#">What should I do if someone in my house gets sick?</a>
                </li>
              </ul>
              <a class="text_btn" href="#">View all questions about
                <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End coronavirus question Area =================-->
    <!--================Start More question Area =================-->
    <section class="more_question_area">
      <div class="container">
        <div class="row more_question_inner">
          <div class="col-lg-4 col-sm-6">
            <div class="more_question_item">
              <h3>Symptoms and testing</h3>
              <ul class="list-unstyled question_list">
                <li><a href="#">Should I be tested for COVID-19?</a></li>
                <li>
                  <a href="#">What are the symptoms and complications that COVID-19 can
                    cause?</a>
                </li>
                <li>
                  <a href="#">Where can I get tested for COVID-19?</a>
                </li>
              </ul>
              <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="more_question_item">
              <h3>Traveling</h3>
              <ul class="list-unstyled question_list">
                <li>
                  <a href="#">Should I cancel my international trip?</a>
                </li>
                <li>
                  <a href="#">What happens if there is a sick passenger on my
                    flight?</a>
                </li>
                <li>
                  <a href="#">What if I recently traveled and get sick?</a>
                </li>
              </ul>
              <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="more_question_item">
              <h3>How it spreads</h3>
              <ul class="list-unstyled question_list">
                <li><a href="#">How does the virus spread?</a></li>
                <li>
                  <a href="#">What is community spread?</a>
                </li>
                <li>
                  <a href="#">What is the source of the virus?</a>
                </li>
              </ul>
              <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="more_question_item">
              <h3>Keeping your home safe</h3>
              <ul class="list-unstyled question_list">
                <li>
                  <a href="#">What steps can my family take to reduce our risk of
                    getting COVID-19?</a>
                </li>
                <li>
                  <a href="#">How can my family and I prepare for COVID-19?</a>
                </li>
                <li>
                  <a href="#">Should I use soap and water or a hand sanitizer to
                    protect against COVID-19?</a>
                </li>
              </ul>
              <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="more_question_item">
              <h3>Financial help for workers and families</h3>
              <ul class="list-unstyled question_list">
                <li>
                  <a href="#">Who is eligible for the economic impact payment?</a>
                </li>
                <li>
                  <a href="#">Is the government delaying Tax Day?</a>
                </li>
                <li>
                  <a href="#">How can I file the tax return needed to receive my
                    economic impact payment?</a>
                </li>
              </ul>
              <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="more_question_item">
              <h3>Parents and children</h3>
              <ul class="list-unstyled question_list">
                <li>
                  <a href="#">Are children more at-risk?</a>
                </li>
                <li>
                  <a href="#">How should parents talk to children about COVID-19?</a>
                </li>
                <li>
                  <a href="#">Are the symptoms of COVID-19 different in children than
                    in adults?</a>
                </li>
              </ul>
              <a class="text_btn" href="#">View all <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="border_bottom"></div>
      </div>
    </section>
    <!--================End More question Area =================-->

    <!--================Answers Area =================-->
    <section class="faq_area">
      <div class="container">
        <div class="main_title">
          <h5>Have questions? Find answers!</h5>
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="row answer_inner">
          <div class="col-lg-4">
            <div class="question_list">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                      Pandemic
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">What are coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">What is the difference between COVID-19 and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab"
                            aria-controls="four" aria-selected="false">How is the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab"
                            aria-controls="five" aria-selected="false">What are the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      About COVID-19
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home2-tab" data-toggle="tab" href="#home2" role="tab"
                            aria-controls="home2" aria-selected="true">What are coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab"
                            aria-controls="profile2" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab"
                            aria-controls="contact2" aria-selected="false">What is the difference between COVID-19 and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four2-tab" data-toggle="tab" href="#four2" role="tab"
                            aria-controls="four2" aria-selected="false">How is the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five2-tab" data-toggle="tab" href="#five2" role="tab"
                            aria-controls="five2" aria-selected="false">What are the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Protecting against COVID-19
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home3-tab" data-toggle="tab" href="#home3" role="tab"
                            aria-controls="home3" aria-selected="true">What are coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile3-tab" data-toggle="tab" href="#profile3" role="tab"
                            aria-controls="profile3" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact3-tab" data-toggle="tab" href="#contact3" role="tab"
                            aria-controls="contact3" aria-selected="false">What is the difference between COVID-19 and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four3-tab" data-toggle="tab" href="#four3" role="tab"
                            aria-controls="four3" aria-selected="false">How is the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five3-tab" data-toggle="tab" href="#five3" role="tab"
                            aria-controls="five3" aria-selected="false">What are the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfour">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      Work and travel arrangements
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab4" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home4-tab" data-toggle="tab" href="#home4" role="tab"
                            aria-controls="home4" aria-selected="true">What are coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile4-tab" data-toggle="tab" href="#profile4" role="tab"
                            aria-controls="profile4" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact4-tab" data-toggle="tab" href="#contact4" role="tab"
                            aria-controls="contact4" aria-selected="false">What is the difference between COVID-19 and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four4-tab" data-toggle="tab" href="#four4" role="tab"
                            aria-controls="four4" aria-selected="false">How is the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five4-tab" data-toggle="tab" href="#five4" role="tab"
                            aria-controls="five4" aria-selected="false">What are the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfive">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                      About university and school
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab5" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home5-tab" data-toggle="tab" href="#home5" role="tab"
                            aria-controls="home5" aria-selected="true">What are coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile5-tab" data-toggle="tab" href="#profile5" role="tab"
                            aria-controls="profile5" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact5-tab" data-toggle="tab" href="#contact5" role="tab"
                            aria-controls="contact5" aria-selected="false">What is the difference between COVID-19 and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four5-tab" data-toggle="tab" href="#four5" role="tab"
                            aria-controls="four5" aria-selected="false">How is the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five5-tab" data-toggle="tab" href="#five5" role="tab"
                            aria-controls="five5" aria-selected="false">What are the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingsix">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                      Home isolation
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab6" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home6-tab" data-toggle="tab" href="#home6" role="tab"
                            aria-controls="home6" aria-selected="true">What are coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile6-tab" data-toggle="tab" href="#profile6" role="tab"
                            aria-controls="profile6" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact6-tab" data-toggle="tab" href="#contact6" role="tab"
                            aria-controls="contact6" aria-selected="false">What is the difference between COVID-19 and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four6-tab" data-toggle="tab" href="#four6" role="tab"
                            aria-controls="four6" aria-selected="false">How is the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five6-tab" data-toggle="tab" href="#five6" role="tab"
                            aria-controls="five6" aria-selected="false">What are the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingseven">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                      Social distancing
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab7" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home7-tab" data-toggle="tab" href="#home7" role="tab"
                            aria-controls="home7" aria-selected="true">What are coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile7-tab" data-toggle="tab" href="#profile7" role="tab"
                            aria-controls="profile7" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact7-tab" data-toggle="tab" href="#contact7" role="tab"
                            aria-controls="contact7" aria-selected="false">What is the difference between COVID-19 and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four7-tab" data-toggle="tab" href="#four7" role="tab"
                            aria-controls="four7" aria-selected="false">How is the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five7-tab" data-toggle="tab" href="#five7" role="tab"
                            aria-controls="five7" aria-selected="false">What are the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="tab-content answer_details" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h4>What are coronaviruses?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h4>What is the COVID-19 virus?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h4>What is the difference between COVID-19 and the flu?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                <h4>How is the virus spread?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="five-tab">
                <h4>What are the symptoms?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four2" role="tabpanel" aria-labelledby="four2-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five2" role="tabpanel" aria-labelledby="five2-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact3-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four3" role="tabpanel" aria-labelledby="four3-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five3" role="tabpanel" aria-labelledby="five3-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile4-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact4-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four4" role="tabpanel" aria-labelledby="four4-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five4" role="tabpanel" aria-labelledby="five4-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home5" role="tabpanel" aria-labelledby="home5-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile5-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact5-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four5" role="tabpanel" aria-labelledby="four5-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five5" role="tabpanel" aria-labelledby="five5-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home6" role="tabpanel" aria-labelledby="home6-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile6-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact6" role="tabpanel" aria-labelledby="contact6-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four6" role="tabpanel" aria-labelledby="four6-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five6" role="tabpanel" aria-labelledby="five6-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home7" role="tabpanel" aria-labelledby="home7-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile7" role="tabpanel" aria-labelledby="profile7-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact7" role="tabpanel" aria-labelledby="contact7-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four7" role="tabpanel" aria-labelledby="four7-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five7" role="tabpanel" aria-labelledby="five7-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Answers Area =================-->
    <!--================Home Latest Blog Area =================-->
    <section class="home_latest_blog_area">
      <div class="container">
        <div class="main_title text-center">
          <h5>Latest Blog Posts</h5>
          <h2>Recent from Updates</h2>
          <p>
            Find out updates you need to know about preventing, isolating and
            treating coronavirus and COVID-19.
          </p>
        </div>
        <div class="row l_blog_inner">
          <div class="col-lg-8">
            <div class="big_l_blog_item">
              <div class="l_blog_img">
                <img class="img-fluid" src="assets/images/blog/latest-blog/l-blog.jpg" alt="" />
              </div>
              <div class="l_blog_text">
                <div class="date">
                  <a href="#"><i class="linearicons-calendar-full"></i> Apr 12, 2020</a>
                  <a href="#"><i class="linearicons-bubbles"></i> 22</a>
                </div>
                <div class="blog_btm_text">
                  <div class="tag">Quarantine</div>
                  <div class="author">
                    <a href="#">by Sheryl Smith</a>
                    <a href="#"><i class="linearicons-radio-button"></i> 4 min read</a>
                  </div>
                  <a href="#">
                    <h3>How to treat COVID-19 <br />coronavirus at home?</h3>
                  </a>
                  <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="small_l_blog_item">
              <div class="l_blog_img">
                <img class="img-fluid" src="assets/images/blog/latest-blog/l-blog-2.jpg" alt="" />
              </div>
              <div class="l_blog_text">
                <div class="date">
                  <a href="#"><i class="linearicons-calendar-full"></i> Apr 11, 2020</a>
                  <a href="#"><i class="linearicons-bubbles"></i> 39</a>
                </div>
                <a href="#">
                  <h3>What is an underlying health condition?</h3>
                </a>
                <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
              </div>
            </div>
            <div class="small_l_blog_item">
              <div class="l_blog_img">
                <img class="img-fluid" src="assets/images/blog/latest-blog/l-blog-3.jpg" alt="" />
              </div>
              <div class="l_blog_text">
                <div class="date">
                  <a href="#"><i class="linearicons-calendar-full"></i> Apr 11, 2020</a>
                  <a href="#"><i class="linearicons-bubbles"></i> 39</a>
                </div>
                <a href="#">
                  <h3>What is an underlying health condition?</h3>
                </a>
                <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Latest Blog Area =================-->

    <!--================Client Logo Area =================-->
    <section class="client_logo_area">
      <div class="container">
        <div class="client_slider">
          <div class="item">
            <img src="assets/images/client-logo/client-logo-1.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-2.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-3.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-4.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-5.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-6.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-1.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-2.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-3.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-4.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-5.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-6.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--================End Client Logo Area =================-->

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
              <a href="#"><img src="assets/images/apple-btn.png" alt="" /></a>
              <a href="#"><img src="assets/images/google-btn.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app_mobile">
              <div class="mobile_image">
                <img src="assets/images/mobile-1.png" alt="" />
                <img src="assets/images/mobile-2.png" alt="" />
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
                <li>
                  <img src="assets/images/icon/app-virus-4.png" alt="" />
                </li>
                <li data-parallax='{"y": 100}'>
                  <img src="assets/images/icon/app-virus-5.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-6.png" alt="" />
                </li>
                <li>
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
            <div class="col-lg-3 col-md-6 col-sm-6">
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
    <!--================End Footer Area =================-->
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
              <button class="btn btn-outline-secondary" type="button"><i class="linearicons-magnifier"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
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
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>