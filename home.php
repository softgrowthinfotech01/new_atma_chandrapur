<?php $active = 'Home'; ?>

<!DOCTYPE html>
<html lang="mar">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="description" content="Shashivat" />
  <meta property="og:title" content="Shashivat" />
  <meta property="og:description" content="Shashivat" />
  <meta property="og:image" content="Shashivat" />
  <meta name="format-detection" content="telephone=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FAVICONS ICON -->
  <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
  <link rel="stylesheet" href="css/footer-slider.css">
  <!-- PAGE TITLE HERE -->
  <title>मुख्यपृष्ठ | आत्मा चंद्रपूर</title>

  <!-- MOBILE SPECIFIC -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <!-- STYLESHEETS -->
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/templete.css">
  <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
  <link rel="stylesheet" href="css/service_card.css">
  <link rel="stylesheet" href="css/service_card2.css">
  <link rel="stylesheet" href="css/service_card3.css">
  <link rel="stylesheet" href="css/home_about.css">


  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <style>
    :root {
      --base-font-size: 1rem;
    }

    .slide img {

      height: 100%;
    }

    .carousel-image {
      height: 80vh;
      object-fit: cover;
    }

    @media (max-width: 768px) {
      .carousel-image {
        height: 50vh;
      }
    }

    .grey {
      color: #BD9748;

    }

    .car_caption {
      left: 0;
      top: 220px;
      width: 50%;
    }

    .city-bx h5,
    span {
      color: #000;
    }

    .city-bx span {
      color: #000;
    }

    .city-bx:after {
      /*background-color:white;*/
      color: #000000;
    }

    .city-bx:hover::after {
      color: #000000;
      background-color: white;
    }

    .image-icon {
      width: 7rem;
      height: 100px !important;
    }

    .ag-courses_box {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;

      padding: 50px 0;
    }

    .ag-courses_item {
      -ms-flex-preferred-size: calc(24.50% - 30px);
      flex-basis: calc(24.50% - 30px);

      margin: 0 15px 30px;

      overflow: hidden;

      border-radius: 28px;
    }

    .ag-courses-item_link {
      display: block;
      padding: 30px 20px;
      background-color: #ffffff;
      border: 1px solid #000;
      overflow: hidden;
      height: 265px;
      position: relative;
    }

    .ag-courses-item_link:hover,
    .ag-courses-item_link:hover .ag-courses-item_date {
      text-decoration: none;
      color: #000;
    }

    .ag-courses-item_link:hover .ag-courses-item_bg {
      -webkit-transform: scale(10);
      -ms-transform: scale(10);
      transform: scale(10);
    }

    .ag-courses-item_title {
      min-height: 87px;
      margin: 0 0 25px;

      overflow: hidden;

      font-weight: bold;
      font-size: 30px;
      color: #000;

      z-index: 2;
      position: relative;
    }

    .ag-courses-item_date-box {
      font-size: 18px;
      color: #FFF;

      z-index: 2;
      position: relative;
    }

    .ag-courses-item_date {
      font-weight: bold;
      color: #f9b234;

      -webkit-transition: color .5s ease;
      -o-transition: color .5s ease;
      transition: color .5s ease
    }

    .ag-courses-item_bg {
      height: 128px;
      width: 128px;
      background-color: #f9b234;

      z-index: 1;
      position: absolute;
      top: -75px;
      right: -75px;

      border-radius: 50%;

      -webkit-transition: all .5s ease;
      -o-transition: all .5s ease;
      transition: all .5s ease;
    }

    .owl-nav {
      display: none;
    }

    .ag-courses_item:nth-child(2n) .ag-courses-item_bg {
      background-color: #3ecd5e;
    }

    .ag-courses_item:nth-child(3n) .ag-courses-item_bg {
      background-color: #e44002;
    }

    .ag-courses_item:nth-child(4n) .ag-courses-item_bg {
      background-color: #952aff;
    }

    .ag-courses_item:nth-child(5n) .ag-courses-item_bg {
      background-color: #cd3e94;
    }

    .ag-courses_item:nth-child(6n) .ag-courses-item_bg {
      background-color: #4c49ea;
    }



    @media only screen and (max-width: 979px) {
      .ag-courses_item {
        -ms-flex-preferred-size: calc(50% - 30px);
        flex-basis: calc(50% - 30px);
      }

      .ag-courses-item_title {
        font-size: 24px;
      }
    }

    @media only screen and (max-width: 767px) {
      .ag-format-container {
        width: 96%;
      }

    }

    @media only screen and (max-width: 639px) {
      .ag-courses_item {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
      }

      .ag-courses-item_title {
        min-height: 72px;
        line-height: 1;

        font-size: 24px;
      }

      .ag-courses-item_link {
        padding: 22px 40px;
      }

      .ag-courses-item_date-box {
        font-size: 16px;
      }
    }

    .the {
      padding-top: 50px;
    }

    .moving {
      margin-bottom: 50px;
    }

    .parallax {
      /* The image used */
      background-image: url("images/contact.jpg");

      /* Set a specific height */
      min-height: 400px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .site-button {
      position: relative;
    }

    .site-button::before {
      content: '';
      background: url('images/vector/leaf-2.png');
      position: absolute;
      width: 100px;
      height: 100px;
      right: 20px;
      background-size: cover;
    }

    /* popup */
    /* officer-cards */
    .card-off {
      color: #1b1b1b;
      width: 190px;
      height: 200px;
      position: relative;
      outline: 6px solid #f5f5f5;
      border-radius: 8px;
      line-height: 150%;
      padding: 16px;
      background: #cacaca;
      background-blend-mode: multiply;
      overflow: hidden;
      margin-top: 20px;
    }

    .card-front-off {
      bottom: -12px;
      left: 0;
      position: absolute;
      width: 100%;
      text-align: center;
      color: white;
      filter: drop-shadow(0px 2px 1px black);
      transition: transform 1s cubic-bezier(0.785, 0.135, 0.150, 0.860);
      background: rgba(255, 255, 255, .4);
      box-shadow: 1px 1px 2px;
    }


    /*Text*/
    .title-off {
      color: white !important;
      font-size: .7rem;
      font-weight: bold;
    }

    /*Text divider*/
    .title-off::after {
      content: "";
      display: block;
      width: 50%;
      border-radius: 50%;
      height: 2px;
      margin: 2px auto;
      background-color: #1b1b1b;
    }




    @media (max-width: 576px) {

      .card-head {
        display: flex;
        justify-content: space-around;
        width: 100%;
        right: 0;
      }

      .mar-top {
        margin-top: 50px
      }
   
    }

    @media only screen and (max-width: 576px) {
.landing-home {
  top: 80px !important;
  width: 100%;
}

.landing-home h3{
  font-size:1rem !important;
}

.bg-landing {
  background: url("images/background/bg-landing.jpg");
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto;
  height: 300px !important;
  background-position: right;
  background-size: cover !important;
  background-repeat: no-repeat;
}

.fw-5 {
  font-size: 2rem !important;
}
 .image-home img{
            clip-path: circle(62.9% at 36% 65%);
            height:140px !important;
            width: 140px !important;
            position:relative;
            /* z-index: 1; */
    }

    .aboutimg2 {
  right: 10px;
  bottom: -40px;
  height: 150px !important !important !important;
  width: 150px !important;
}
     
    }

    .mar-top {
      margin-top: 50px
    }

    /* popup */



    /* cards and image  */

    .cardz-custom {
      width: 100%;
      height: 100%;
      border-radius: 15px;
      background: #45d647;
      background: linear-gradient(156deg, rgba(69, 214, 71, 1) 22%, rgba(191, 208, 68, 1) 94%);
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .cardz-custom:hover {
      transform: scale(1.02);
    }

    .cardz-custom::before {
      content: "";
      height: 100px;
      width: 100px;
      position: absolute;
      top: -40%;
      left: -20%;
      border-radius: 50%;
      border: 35px solid rgba(255, 255, 255, 0.102);
      transition: all .8s ease;
      filter: blur(.5rem);
    }

    .cardz-custom:hover::before {
      width: 240px;
      height: 240px;
      top: -30%;
      left: 50%;
      filter: blur(0rem);
    }

    .cardz-custom .text {
      flex-grow: 1;
      padding: 15px;
      display: flex;
      flex-direction: column;
      font-weight: 700;
      font-size: 1.5em;
    }

    .cardz-heading {
      color: #ffffff;
      margin-bottom: 8px;
    }

    .cardz-custom .subtitle {
      font-size: .7em;
      font-weight: 300;
      color: rgba(26, 6, 6, 0.7);

    }

    .custom-container {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .right-image img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      border-radius: 0 0 100px 0 !important;
    }

    @media (max-width: 991px) {
      .right-image {
        display: none;
      }
    }


    .about-section {
      background: url("images/bg-about.jpg");
      background-size: cover;
    }

    .aboutimg2 {
      right: 10px;
      bottom: -40px;
      height: 230px;
      width: 230px;
    }

    .pb-sm-50 {
      padding-bottom: 50px;
    }

    .bg-landing {
      background: url("images/background/bg-landing.jpg");
      height: 700px;
      background-position: right;
      background-size: contain;
      background-repeat: no-repeat;
    }


    .bg-landing::after {
      top: 0;
      background: #ffffff;
      background: linear-gradient(90deg, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 90%);
      content: "";
      display: block;
      position: absolute;
      height: 100%;
      width: 100%;
    }

    .pt-50 {
      padding-top: 30%;
    }

    .fw-5 {
      font-size: 5rem;
    }

    .landing-home{
      top:250px;
      width:100%;
    }

    .image-home img{
            clip-path: circle(62.9% at 36% 65%);
            height:300px;
            width: 300px;
            position:relative;
            /* z-index: 1; */
    }

    .image-home{
  bottom:0;
    }
    
    .tractor_position{
      position: absolute;
  height: 240px;
  z-index: 1;
  bottom: 0;
    }

    .tractor_position_height{
       padding-bottom:200px;
    }
  </style>
</head>

<body id="bg" class="">

  <?php
  // include "loader.php";
  ?>

  <div class="page-wraper position-relative">
    <!-- header -->


    <!-- header END -->
    <!-- Content -->
    <div class="page-content pb-0">
      <!-- Section Banner -->

      <!-- Carousel Start -->
      <div class="container-fluid bg-landing px-0 text-end ">
        <?php
        require_once "header.php";
        // require_once "popup.php";
        ?>
        <!-- <img src="images/background/bg-landing.png" alt="image" class=" h-100 w-75"> -->
        <div class="row landing-home z-1  position-absolute">
          <div class="col-md-6 text-end pt-5 mt-5">
            <h3 class="  fw-bold text-right mb-3"><span class="text-green d-block fw-5">आत्मा चंद्रपूर </span>मध्ये आपले स्वागत आहे </h3>
               <h3 class="text-green bg-warning fw-bold py-2 px-1 text-end d-inline rounded-pill px-4 py-2">सर्वांगीण कृषी विकास हेच आमचे ध्येय</h3>
               
          </div>
          <div class="col-md-6 bg-landing1"></div>
        </div>
        <div class="position-absolute image-home">
                <img src="images/background/bg-landing.jpg" alt="image">
               </div>
      </div>

      <!-- Carousel End -->

      <!-- about us -->
      <div class="content-block">
        <div class="section-full content-inner overlay-white-middle about-section">
          <div class="container">
            <div class="row">
              <!-- <div class="col-lg-12 section-head text-center">
                <h2 class="m-b5"><b> आमच्याबद्दल</b> </h2>

              </div> -->
            </div>
            <div class="row align-items-center m-b50">

              <div class="col-md-12 col-lg-6 pb-sm-50">
                <div class="px-5 position-relative">
                  <img src="images/background/DistrictMapChandrapur.gif" alt="image"
                    class="aboutimg1 border-5 rounded-4" />
                  <img src="images/bg-about.jpg" alt="image"
                    class="aboutimg2 border-5 border rounded-circle position-absolute" />
                </div>
              </div>
              <div class="col-md-12 col-lg-6 m-b20 text-center ">
                <h2 class="fw-bold mt-1 mb-3"> <span style="color:darkgreen;">आत्मा चंद्रपूर</span>
                  बद्दल
                </h2>

                <p class="m-b15" style="text-align:justify; line-height:2rem; font-size:16px; color:#000;">शेतकयांना
                  कृषि विस्ताराची माहिती पोहचविणे
                  याकरिता जिल्हास्तरावर आत्मा या स्वायंत्त संस्थेची स्थापना करण्यात आली आहे. सन 2005 मध्ये धर्मदाय
                  आयुक्त यांचेकडे आत्मा, चंद्रपुर संस्थेची (अधिनियम 1860) अंतर्गत नोंदणी करण्यात आली आहे.
                  <br />
                  कृषि संशोधक, विस्तार कार्यकर्ते, शेतकरी व इतर भागधारक (अशासकीय संस्था, सार्वजनीक, सामुदायीक व खाजगी
                  क्षेत्र इत्यादी) यांची संयुक्त सांगड घालून त्यांचा अभ्यास करुन जिल्हा विस्तार आराखडा व स्थानीक गरजा
                  व परिस्थितीशी निगळीत तंत्रज्ञान प्रसारणातील नाविण्यापुर्णतेशी परिचीत करणे (सुरुवात करणे) या करिता
                  शिफारशी करुन या सर्वाना एकत्र ठेवण्याची जबाबदारी आत्माची आहे. दुस-या शब्दात सांगायचे झाले तर, हा
                  प्रकल्प जिल्हात कृषि विकासाला गती देण्याकरिता मागणीनुरुप, निश्चीत परिस्थित, विविध विषयाशी संबंधीत
                  संशोधन विस्तार आराखडा विकसीत करण्यासाठी आत्मा संस्था ही अनिवार्य आहे. यथार्थदर्शी संशोधन विस्तार
                  आराखडा करण्यासोबतच आवश्यक विकासात्मक कार्य कोणामार्फत करावे. याबाबत सुध्दा SREP मध्ये पायाभुत माहिती
                  देण्यात आलेली आहे.
                </p>
                </br>
                <a href="about-us" class="site-button Read">Read More</a>
              </div>
            </div>
          </div>
        </div>



        <div class="section-full content-inner bg-gray">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 section-head text-center">
                <!-- <h2 class="m-b5"><b> आमच्या सेवा</b> </h2> -->

              </div>
            </div>
            <div class="row">

              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx justify-content-center  bg-white  d-flex">
                    <div class="city-info text-center">

                      <img src="images/Icon/weather.gif" alt="weather-advice" class="image-icon">
                      <h6 style="font-size:14px;"><b>कृषि हवामान सल्ला </b></h6>
                      <a href="crop_weather" class="grey"><b> More Details </b></a>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx  justify-content-center bg-white   d-flex">
                    <div class="city-info text-center">
                      <img src="images/Icon/award.gif" alt="farmer-award" class="image-icon">
                      <h6 style="font-size:14px;"><b>शेतकरी पुरस्कार</b></h6>
                      <a href="farmer_award" class="grey"><b> More Details </b></a>
                    </div> 
                  </div>
                </a>
              </div>

              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx  justify-content-center bg-white   d-flex">
                    <div class="city-info text-center">
                      <img src="images/Icon/list.gif" alt="imp-list" class="image-icon">
                      <h6 style="font-size:14px;"><b>महत्त्वाची यादी</b></h6>
                      <a href="benificial_list" class="grey"><b> More Details </b></a>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx  justify-content-center bg-white   d-flex">
                    <div class="city-info text-center">
                      <img src="images/Icon/farm-tech.gif" alt="farm-tech" class="image-icon">
                      <h6 style="font-size:14px;"><b>कृषी तंत्रज्ञान</b></h6>
                      <a href="agri_technology" class="grey">More Details</a>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx  justify-content-center bg-white   d-flex">
                    <div class="city-info text-center">
                      <img src="images/Icon/noticeboard.gif" alt="noticeboard" class="image-icon">
                      <h6 style="font-size:14px;"><b>सुचना फलक</b></h6>
                      <a href="noticeboard" class="grey">More Details</a>
                    </div>
                  </div>
                  
                </a>
              </div>

              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx  justify-content-center bg-white   d-flex">
                    <div class="city-info text-center">
                      <img src="images/Icon/farmer-advice.gif" alt="farmer-advice" class="image-icon">
                      <h6 style="font-size:14px;"><b>शेतकरी सल्ला</b></h6>
                      <a href="farmer_consultation" class="grey"> More Details </a>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx  justify-content-center bg-white   d-flex">
                    <div class="city-info text-center">
                      <img src="images/Icon/report.gif" alt="noticeboard" class="image-icon">
                      <h6 style="font-size:14px;"><b>अहवाल</b></h6>
                      <a href="report" class="grey">More Details</a>
                    </div>
                    </div>
                  </a>
              </div>

              <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                <a href="javascript:void(0);">
                  <div class="city-bx  justify-content-center bg-white   d-flex">
                    <div class="city-info text-center">
                      <img src="images/Icon/farmer-advice.gif" alt="farmer-advice" class="image-icon">
                      <h6 style="font-size:14px;"><b>शेतकरी सल्ला</b></h6>
                      <a href="farmer_consultation" class="grey"> More Details </a>
                      </div>
                  </div>
                </a>
              </div>
              

            </div>

            <!-- <div class="text-center">
              <a href="services" class="grey btn btn-outline-danger shadow "> More Details </a>
            </div> -->

          </div>
        </div>


        <!-- new row -->
        <div class="container custom-container">
          <div class="row align-items-stretch ">

            <!-- Cards -->
            <div class="col-lg-6 col-12 d-flex flex-column">
              <div class="row g-3 flex-fill">
                <div class="col-12 col-md-6">
                  <div class="cardz-custom">
                    <div class="text">
                      <span class="cardz-heading h3 fw-bold py-2">जिल्हा स्तर नियोजन</span>
                      <p class="subtitle fw-bold">आत्मा ही एक स्वायत्त संस्था आहे. आत्मा नियामक मंडळ सर्वसमावेश दिशादर्शक धोरण
                        ठरवेल आत्मा व सहाय्यक कर्मचारी यांचे सहकार्याने कामकाज करतील.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="cardz-custom">
                    <div class="text">
                      <span class="cardz-heading h3 fw-bold py-2">तालुकास्तर नियोजन</span>
                      <p class="subtitle fw-bold">तालुकास्तरावर – तालुका/गट तंत्रज्ञान चमू (BTT) ज्यामध्ये कृषि व कृषि संलग्न
                        विभागातील गट/तालुका स्तरावरील अधिकारी असतील.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="cardz-custom">
                    <div class="text">
                      <span class="cardz-heading h3 fw-bold py-2">गावस्तर नियोजन</span>
                      <p class="subtitle fw-bold"> शेतकरी मित्र हा कृषि विस्तार यंत्रणा व शेतकरी यांचेतील महत्वाचा दुवा असेल.
                        प्रत्येकी दोन गावांसाठी 1 शेतकरी मित्र निवडला जाईल.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="cardz-custom">
                    <div class="text">
                      <span class="cardz-heading h3 fw-bold py-2">गावस्तर नियोजन</span>
                      <p class="subtitle fw-bold">शेतकरी मित्र हा कृषि विस्तार यंत्रणा व शेतकरी यांचेतील महत्वाचा दुवा असेल.
                        प्रत्येकी दोन गावांसाठी 1 शेतकरी मित्र निवडला जाईल.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 right-image ">

              <img src="images/background/India_Farming.jpg"
                class="img-fluid rounded shadow" alt="Agriculture Image">

            </div>

          </div>
        </div>


        <!-- corousel effect three steady columns -->

        <section id="carousel" class="quote-section py-4" style="background-color: #f8f9fa;">
          <div class="container">
            <div class="row g-4">

              <!-- Column 1 -->
              <div class="col-md-6">
                <div class="quick-link border rounded shadow bg-white position-relative overflow-hidden"
                  style="height: 450px;">
                  <div class="bg-blue text-white text-center py-3">
                    <h5 class="mb-0">क्विक लिंक</h5>
                  </div>
                  <div class="scrolling-content px-3 pt-2 h-75  ">
                    <ul class="list-unstyled mb-0 h-100 ">
                      <marquee behavior="scroll" direction="up" class="h-100 my-2 pt-3 bg-light">
                        <li class=" bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/ee</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/r</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/e</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/en</a></li>
                      </marquee>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Column 2 -->
              <div class="col-md-6">
                <div class="quick-link border rounded shadow bg-white position-relative overflow-hidden"
                  style="height: 450px;">
                  <div class="bg-blue text-white text-center py-3">
                    <h5 class="mb-0">बातम्या आणि घडामोडी</h5>
                  </div>
                  <div class="scrolling-content px-3 pt-2 h-75  ">
                    <ul class="list-unstyled mb-0 h-100 overflow-auto">
                       <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/ee</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/r</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/e</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/en</a></li>
                            
                        
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Column 3 -->
              <div class="col-md-12">
                <div class="quick-link border rounded shadow bg-white position-relative overflow-hidden"
                  style="height: 150px;">
                  <div class="bg-blue text-white text-center py-3 ">
                    <h5 class="mb-0">नवीन काय आहे</h5>
                  </div>
                  <div class="scrolling-content px-3 pt-2 h-75  ">
                    <ul class="list-unstyled mb-0 h-100 ">
                      <marquee behavior="scroll" direction="left" class="h-100 my-2 pt-3 bg-light">
                        <li class="d-inline bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="d-inline bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="d-inline bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/ee</a></li>
                        <li class="d-inline bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/r</a></li>
                        <li class="d-inline bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/e</a></li>
                        <li class="d-inline bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/</a></li>
                        <li class="d-inline bg-light shadow-lg px-3 m-3"><a href="#" class="text-dark"><i
                              class="fa-solid fa-link px-1"></i>
                            https://mhfr.agristack.gov.in/en</a></li>
                      </marquee>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

        <section>

          <div class="viewed parallax tractor_position_height">
            <div class="row ">
              <div class="col ">

                <div class="bbb_viewed_slider_container ">

                  <div class="owl-carousel owl-theme bbb_viewed_slider ">

                    <div class="owl-item">
                      <div
                        class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="bbb_viewed_image"><a href="https://www.msamb.com/" target="_blank"><img
                              src="images/background/marketing board.jpg" class="h-100" alt="MSAMB"></a></div>

                      </div>
                    </div>

                    <div class="owl-item">
                      <div
                        class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center ">
                        <div class="bbb_viewed_image "><a href="https://mkisan.gov.in/" target="_blank"><img
                              src="images/background/mkisan.jpg" class="h-100" alt="mkisan"></a></div>

                      </div>
                    </div>

                    <div class="owl-item">
                      <div
                        class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="bbb_viewed_image"><a href="https://rti.gov.in/" target="_blank"><img
                              src="images/background/rights.png" class="h-100" alt="RTI"></a></div>

                      </div>
                    </div>

                    <div class="owl-item">
                      <div
                        class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="bbb_viewed_image"><a href="https://www.mygov.in/" target="_blank"><img
                              src="images/background/mygov.jpg" class="h-100" alt="MyGov"></a></div>

                      </div>
                    </div>

                    <div class="owl-item">
                      <div
                        class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="bbb_viewed_image"><a href="https://aaplesarkar.mahaonline.gov.in/en"
                            target="_blank"><img src="images/background/sarkar.jpg" class="h-100"
                              alt="Aaple Sarkar"></a></div>

                      </div>
                    </div>

                    <div class="owl-item">
                      <div
                        class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="bbb_viewed_image"><a href="https://www.agricorp.com/en-ca/Pages/Default.aspx"
                            target="_blank"><img src="images/background/agricorp.png" class="h-100" alt="Agricorp"></a>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <marquee behavior="" direction="right" class="tractor_position">
            <img src="images/giphy.gif" alt="gif" class="img-fluid">
          </marquee>
        </section>
        <!-- Footer -->

        <?php
        require_once "footer.php";
        ?>
        <!-- Footer END -->


        <!-- scroll top button -->
        <button class="scroltop fa fa-arrow-up"></button>
      </div>

      <!-- font awsome-->
      <script src="https://kit.fontawesome.com/a34a653280.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Slick Slider JS -->
      <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <script>
        $(document).ready(function () {
          $('.customer-logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2
                }
              },
              {
                breakpoint: 520,
                settings: {
                  slidesToShow: 1
                }
              }
            ]
          });
        });
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
      </script>

      <script>
            $(document).ready(function()
            {
   
        if($('.bbb_viewed_slider').length)
            {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
            {
              loop:true,
            margin:30,
            autoplay:true,
            autoplayTimeout:2000,
            nav:false,
            dots:false,
            responsive:
            {
              0:{items:1},
            575:{items:2},
            768:{items:3},
            991:{items:4},
            1199:{items:5}
                }
            });

            
        }

    });
      </script>

      <script>
            document.addEventListener('DOMContentLoaded', function() {
        var myModal = new bootstrap.Modal(document.getElementById('modal')); // Replace 'modal' with the ID of your modal
            myModal.show();
    });
      </script>
      <!-- JAVASCRIPT FILES ========================================= -->
      <script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
      <script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
      <script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
      <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
      <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
      <script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
      <script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
      <script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
      <script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
      <script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
      <script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
      <script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
      <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
      <script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
      <script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->

      <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>