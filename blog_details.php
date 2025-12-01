<?php
session_start();
require_once "conn.php";
if(isset($_SESSION['blog_id']))
{
    $blog_id=$_SESSION['blog_id'];
    //get district name
    $stmt_blog = $conn->prepare("SELECT * FROM blog WHERE blog_id=$blog_id");
    $stmt_blog->execute();
    $row_blog = $stmt_blog->fetchAll(PDO::FETCH_ASSOC);
    //print_r($row_blog);exit;
    
    $stmt_category = $conn->prepare("SELECT category_name FROM category WHERE category_id=".$row_blog[0]['category_id']);
    $stmt_category->execute();
    $row_category = $stmt_category->fetchAll(PDO::FETCH_ASSOC);
    //get all blogs from this district
   $stmt_district = $conn->prepare("SELECT district_name FROM district WHERE district_id=".$row_blog[0]['district_id']);
    $stmt_district->execute();
    $row_district = $stmt_district->fetchAll(PDO::FETCH_ASSOC);
} 
else
{
    echo '<script>alert("Blog not found. Redirecting to Home Page.");window.location.href = "home";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Blog Details  </title>
    <!-- favicons Icons -->
    

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/agrion-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/agrion.css" />
    <link rel="stylesheet" href="assets/css/agrion-responsive.css" />
    <!--<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=650b03fe7a79f400122d6564&product=image-share-buttons&source=platform" async="async"></script>-->
    
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

<?php include_once "header.php";?>
   <!-- /.stricky-header -->

        <!--Page Header Start-->
   
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row p-5">
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <div class="blog-details__date">
                                    <p class="mb-0"><?php echo date('d',strtotime($row_blog[0]['added_on']));?></p>
                                    <span><?php echo date('M',strtotime($row_blog[0]['added_on']));?></span>
                                </div>
                            </div>
                            <div class="blog-details__content row">
                                <div class="col">
                                    <ul class="list-unstyled blog-details__meta">
                                    <li><a href="blog_details" class="fs-1 fw-bold text-black text-decoration-none"><i class="fas fa-user-circle"></i> <?php echo $row_district[0]['district_name'];?></a>
                                    </li>
                                    <li><a href="blog_details"><i class="fas fa-comments"></i><?php echo $row_category[0]['category_name'];?></a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title"><?php echo $row_blog[0]['blog_title'];?></h3>
                                <p class="blog-details__text-1"><?php echo $row_blog[0]['blog_text'];?></p>
                                </div>
                                <div class="col">
                                <img src="uploaded_images/blog_title_images/<?php echo $row_blog[0]['blog_title_image'];?>" alt="image" class="img-fluid p-3">

                                </div>
                            </div>
                      
                        </div>
                    </div>
               
                        
                </div>
            </div>
        </section>
        <!--Blog Details End-->

        <!--Site Footer Start-->
      <?php include_once "footer.php";?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->



    <?php require_once "search_box.php";?>
    <!-- /.search-popup -->



    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>

    <!-- template js -->
    <script src="assets/js/agrion.js"></script>
</body>
</html>