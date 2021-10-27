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
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />

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
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.php" role="button"
                                        aria-haspopup="true" aria-expanded="false">Phòng chống</a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="symptom.php">Các triệu chứng thường gặp</a></li>
                                        <li><a href="symptom-checker.php">Kiểm tra triệu chứng</a></li>
                                        <li><a href="prevention.php">Biện pháp phòng chống</a></li>
                                        <li><a href="virus-checker.php">Theo dõi tình hình</a></li>
                                    </ul>
                  </li>
                    <li class="dropdown submenu active">
                         <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tư vấn </a>
                         <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                              <ul class="dropdown-menu">
                                   <li><a href="appointment.php">Tư vấn online</a></li>
                                   <li><a href="dang_ky_xet_nghiem.php">Đăng ký xét nghiệm</a></li>
                              </ul>
                    <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.php">Corona Virus</a></li>
                                        <li><a href="doctors.php">Đội ngũ bác sĩ</a></li>
                                        <li><a href="sample-right-sidebar.php">Vaccine phòng COVID-19</a></li>
                                        
                                    </ul>
                                </li>
                                 <li class="dropdown submenu active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false"><a href ="blog.php">Tin tức</a></a>
                                </li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checker_btn">
                                    <a href="symptom-checker.php"> Kiểm tra triệu chứng</a>
                                </li>
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
                    <h2>Liên lạc</h2>
                    <p>Nếu bạn có bất kỳ câu hỏi nào trước khi chúng tôi bắt đầu, vui lòng điền vào bên dưới biểu mẫu liên hệ.</p>
                </div>
                <form action="#" class="appoinment_form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="name" name="name" placeholder="" />
                                <label for="name"><i class="linearicons-user"></i>Họ và tên</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="email" name="email" placeholder="" />
                                <label for=""><i class="linearicons-envelope-open"></i>Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="number" name="number" placeholder="" />
                                <label for=""><i class="linearicons-telephone"></i>Số điện thoại</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="10"
                                    class="form-control"></textarea>
                                <label for=""><i class="linearicons-document"></i>Nội dung</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <div class="checkbox">
                                    <input type="checkbox" value="None" id="squared2" name="check" />
                                    <label class="l_text" for="squared2">Tôi đồng ý với <span>Chính sách bảo mật</span></label>
                                </div>
                                <button type="submit" class="green_btn" name="appoinment" id="appoinment"
                                    value="appoinment" data-value="appoinment">
                                    Gửi
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
                        Designed<i class="linearicons-heart"></i>
                        by <span>Nhóm HANL</span>
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Phòng chống</a>
                                    <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="symptom.php">Các triệu chứng thường gặp</a></li>
                                        <li><a href="symptom-checker.php">Kiểm tra triệu chứng</a></li>
                                        <li><a href="prevention.php">Biện pháp phòng chống</a></li>
                                        <li><a href="virus-checker.php">Theo dõi tình hình</a></li>
                                    </ul>
                  </li>
                                <li class="dropdown submenu active">
                 <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tư vấn </a>
                 <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                       <li><a href="appointment.php">Tư vấn online</a></li>
                       <li><a href="dang_ky_xet_nghiem.php">Đăng ký xét nghiệm</a></li>
                  </ul>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.php" role="button"
                                        aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
                                    <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.php">Corona Virus</a></li>
                                        <li><a href="doctors.php">Đội ngũ bác sĩ</a></li>
                                        <li><a href="sample-right-sidebar.php">Vaccine phòng COVID-19</a></li>
                                        
                                    </ul>
                                </li>
                                 <li class="dropdown submenu active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false"><a href ="blog.php">Tin tức</a></a>
                                </li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checker_btn">
                                    <a href="symptom-checker.php"> Kiểm tra triệu chứng</a>
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
                    <h6 class="wow fadeInUp">Trung tâm y tế quận Hoàn Kiếm</h6>
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">Tin tức mới nhất</h3>
                    <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="blog.php">Tin tức</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Breadcrumb Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="blog_menu">
                    <div class="g_fillter">
                        <ul class="nav justify-content-center">
                            <li class="active" data-filter="*">
                                <a href="#"><i class="linearicons-icons"></i></a>
                            </li>
                            <li data-filter=".comm"><a href="#"><b>Diễn biến dịch bệnh</b></a></li>
                            <li data-filter=".medi"><a href="#"><b>Chiến dịch tiêm chủng</b></a></li>
                            <li data-filter=".health"><a href="#"><b>Thuốc điều trị </b></a></li>
                            <li data-filter=".eff"><a href="#"><b>Ảnh hưởng của đại dịch </b></a></li>
                            <li data-filter=".pre"><a href="#"><b>Cách phòng chống</b></a></li>
                            <li data-filter=".edu"><a href="#"><b>Các nghiên cứu</b></a></li>
                            
                        </ul>
                    </div>
                </div>
                
                    <div class="row blog_item_inner">
                    <?php 
                    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                    include('config.php');

                    // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                    $sql = "
                              SELECT * 
                              FROM tbl_tin_tuc 
                              ORDER BY tin_tuc_id DESC
                              ";

                    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                    $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

                    // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                    while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) 
                    {
                    ;?>
                            <div class="col-lg-6 comm travel edu quarantine">
                        <div class="big_l_blog_item"> 
                            <div class="l_blog_img">
                                <img style="width: 570px; height: 430px;" 
                                class="img-fluid" src="<?php echo $row['anh_minh_hoa'] ? 'assets/images/blog/blog-grid/'.$row['anh_minh_hoa'] :'assets/images/blog/blog-grid/blog-1.jpeg';?>" alt="" />
                            </div>
                            <div class="l_blog_text">
                                <div class="date">
                                    <a><?php echo date("d/m/Y H:i", strtotime($row["ngay_dang_tin"]));?></a>
                                    <a><?php echo $row["so_lan_doc"];?> lượt đọc</a>
                                </div>
                                <div class="blog_btm_text">
                                    <div class="tag"><a><?php echo $row["chu_de"];?><p></div>
                                    <div class="author">
                                      <a>by <?php echo $row["tac_gia"];?>  </a>    
                                    </div>
                                    <a href="single-blog.php?id=<?php echo $row['tin_tuc_id'];?>">
                                        <h3><?php echo $row["tieu_de"] ;?><br /></h3>
                                    </a>
                                    <a class="text_btn"  <td style="text-align: center;"  href="single-blog.php?id=<?php echo $row['tin_tuc_id'];?>">Đọc thêm <i class="linearicons-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }

                    // 5. Đóng kết nối sau khi sử dụng xong
                    mysqli_close($ket_noi);
                ;?>
                   
                <div class="row blog_pagination">
                    
                        <nav class="navigation" aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" >1</a></li>
                                <li class="page-item active"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link" >3</a></li>
                                <li class="page-item blank"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" >7</a></li>
                            </ul>
                        </nav>
                    
                    
                </div>
            </div>
        </section>
        <!--================End Blog Area =================-->

        <!--================Check Now Area =================-->
        <section class="check_now_area check_now_box full_widget_check">
            <div class="container">
                <div class="row m-0 justify-content-between">
                    <div class="left">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/check-4.png" alt="">
                                <img src="assets/images/check-5.png" alt="">
                                <img src="assets/images/check-6.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Bạn nghi ngờ mình bị lây nhiễm?</h4>
                                <p>
                                   Hãy thử một bài kiểm tra đơn giản để biết bạn có bị lây nhiễm không.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                         <a class="icon_btn" href="#">Kiểm tra ngay <i class="linearicons-arrow-right"></i></a>
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
                            <h2>Cài đặt <span>ứng dụng </span> PC-Covid!</h2>
                            <p>
                                PC-Covid được được phát triển phục vụ cho công tác phòng, chống dịch Covid-19, để Việt Nam có thể "bình thường mới".
                            </p>
                            <a href="https://apps.apple.com/vn/app/bluezone/id1508062685?ls=1" target="_blank"><img src="assets/images/apple-btn.png" alt="" /></a>
                            <a href="https://play.google.com/store/apps/details?id=com.mic.bluezone" target="_blank"><img src="assets/images/google-btn.png" alt="" /></a>
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
            <div class="col-lg-4">
              <aside class="f_widget contact_widget">
                <div class="f_title">
                  <h3>Liên hệ</h3>
                </div>
                <div class="ct_wd_text">
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Cuộc gọi khẩn cấp</h5>
                        <h4>024 3825 5599</h4>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Địa chỉ</h5>
                      <p>36 Ngô Quyền, phường Hàng Bài,
                        </br> quận Hoàn Kiếm, Hà Nội
                      </p>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            
            <div class="col-lg-4 item-tk">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Thống kê</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Số lượt đang truy cập</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Tổng số lượt truy cập</a>
                  </li>
                  
                </ul>
              </aside>
            </div>
            <div class="col-lg-4">
             <div class="gg-fb">
                <div>
                  <div class="fb-page page-fb" data-href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" data-tabs="timeline" data-width="270" data-height="152" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen">Trung Tâm Y Tế Quận Hoàn Kiếm:36 Ngô Quyền</a></blockquote></div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2281567295654!2d105.85251131402812!3d21.023554993333946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abec902b9623%3A0xdfe9443e9ca77d59!2zVHJ1bmcgVMOibSBZIFThur8gUXXhuq1uIEhvw6BuIEtp4bq_bSAzNg!5e0!3m2!1svi!2s!4v1634628981628!5m2!1svi!2s" width="270" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
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
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Dấu ấn</a></li>
                    </ul>
                    <h6>
                        Designed<i class="linearicons-heart"></i>
                        by <span>Nhóm HANL</span>
                    </h6>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
    </div>

    <div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/images/icon/close-white.png" alt="">
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nội dung tìm kiếm..."
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                    class="linearicons-magnifier"></i></button>
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
    <script src="assets/vendors/animate-css/wow.min.js"></script>
    <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
    <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="XVpXxaji"></script>
</body>

</html>