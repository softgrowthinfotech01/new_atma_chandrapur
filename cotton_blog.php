<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="JobBoard - HTML Template" />
    <meta property="og:title" content="JobBoard - HTML Template" />
    <meta property="og:description" content="JobBoard - HTML Template" />
    <meta property="og:image" content="JobBoard - HTML Template" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <!--<link rel="icon" href="images/favicon.ico" type="image/x-icon" />-->
    <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />-->

    <!-- PAGE TITLE HERE -->
    <title>कापूस लागवड तंत्रज्ञान</title>

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

    <style>
       
        
        .gray{
            color:#CAA960 !important;
        }

        /* BEGIN : reset Style */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
            background: white;
        }

        /* END : reset Style */

        /* BEGIN : other Style */
        body {
            /* min-height: 100vh; */
            /* padding: 30px; */
        }

        .frame {
            max-width: 100%;
            width: 1200px;
            margin-inline: auto;
            background-color: white;
        }

        /* END : other Style */

        /* BEGIN : accordian style */
        .app-collapse {
            --padding: 15px;
            --radius: 10px;
            --border-color: #cdcdcd;
            --transition-time: 250ms;
            --title-foni-size: 18px;
            --title-color: #000000;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --bckground-color: #ffffff;
            --collapse-timing-function: cubic-bezier(0.83, 0.02, 0.81, 0.42);
            border-radius: var(--radius);
            filter: drop-shadow(0px 3px 2px var(--shadow-color));
        }

        .collapse-panel {
            display: grid;
            grid-template-rows: 0fr;
            overflow: hidden;
            transition: all var(--transition-time) var(--collapse-timing-function);
            background-color: #eee;
            border: 1px solid var(--border-color);
            border-top: none;
            opacity: 0;
            margin-bottom: 10px;
            border-radius: 0 0 var(--radius) var(--radius);
            background-color: var(--bckground-color);

        }

        .collapse-header-button {
            display: block;
            width: 100%;
            text-align: left;
            padding-inline: var(--padding);
            padding-block: var(--padding);
            border: 1px solid var(--border-color);
            border-bottom-width: 0px;
            border-radius: var(--radius) var(--radius) 0 0;
            transition: var(--transition-time);
            cursor: pointer;
            background-color: #6C757D;
            color: white;

        }

        .collapse-header-button[aria-expanded="false"] {
            border-radius: var(--radius) var(--radius) var(--radius) var(--radius);
            border-bottom-width: 1px;
        }

        .collapse-title {
            font-size: 18px;
            font-weight: 500;
            color: rgb(255, 255, 255);
            font-size: var(--title-foni-size);
        }

        .collapse-icon {
            position: absolute;
            width: 14px;
            right: 20px;
            top: 21px;
            transform-origin: center;
            transition: var(--transition-time);
        }

        .collapse-header-button[aria-expanded="false"] .icon-path-line {
            d: path('M4 4L78 76.5L152 4');
        }

        .icon-path-line {
            d: path('M4 78 78 7l74 71');
            stroke: var(--title-color);
            stroke-linecap: round;
            stroke-width: 8px;
            transition: var(--transition-time);
        }

        .collapse-panel-inner-wrapper {
            /* padding-inline: var(--padding); */
            overflow: hidden;
        }

        .collapse-panel.app-collapse-expanded {
            grid-template-rows: 1fr;
            opacity: 1;
            /* padding-bottom: var(--padding); */

        }

        /* END : accordian style */

        /* BEGIN : ----------------------  Utility Style ----------------------------------------------- */
        .app-css-tabs {
            border: 2px dashed #666;
            border-radius: 10px;
            background-color: #fff;
        }

        .label-group label {
            display: inline-block;
            padding: 10px 15px;
            margin: 4px;
            border-radius: 5px;
            cursor: pointer;
        }

        .content {
            padding: 4px;
            font-size: 12px;
            display: none;
        }

        .app-css-tabs input[type="radio"] {
            display: none;
        }

        .app-css-tabs input[type="radio"].tab-radio-A:checked~.label-group .label-A {
            background-color: #eee;
        }

        .app-css-tabs input[type="radio"].tab-radio-A:checked~.content-group .content-A {
            display: block;
        }

        .app-css-tabs input[type="radio"].tab-radio-B:checked~.label-group .label-B {
            background-color: #eee;
        }

        .app-css-tabs input[type="radio"].tab-radio-B:checked~.content-group .content-B {
            display: block;
        }

        .app-css-tabs input[type="radio"].tab-radio-C:checked~.label-group .label-C {
            background-color: #eee;
        }

        .app-css-tabs input[type="radio"].tab-radio-C:checked~.content-group .content-C {
            display: block;
        }

        xmp,
        pre {
            width: 100%;
            max-height: 400px;
            overflow: auto;
        }

        .section-title {
            font-size: 20px;
            margin-block: 15px;
        }

        .content-text {
            color: var(--black-500);
        }

        hr {
            margin-block: 30px;
        }

        .note-list li {
            margin-bottom: 10px;
        }

        .text-red {
            color: var(--red-500);
        }

        .text-yellow {
            color: var(--yellow-500);
        }

        .text-blue {
            color: var(--blue-500);
        }

        .text-green {
            color: var(--green-500);
        }

        .d-flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .flex-fill {
            flex: 1;
        }

        .align-items-center {
            align-items: center;
        }

        .justify-content-center {
            justify-content: center;
        }

        .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .d-grid {
            display: grid;
        }

        .grid-center {
            display: grid;
            place-items: center;
        }

        .m-0 {
            margin: 0 !important
        }

        .mt-0,
        .my-0 {
            margin-top: 0 !important
        }

        .mr-0,
        .mx-0 {
            margin-right: 0 !important
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important
        }

        .ml-0,
        .mx-0 {
            margin-left: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1,
        .my-1 {
            margin-top: .25rem !important
        }

        .mr-1,
        .mx-1 {
            margin-right: .25rem !important
        }

        .mb-1,
        .my-1 {
            margin-bottom: .25rem !important
        }

        .ml-1,
        .mx-1 {
            margin-left: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2,
        .my-2 {
            margin-top: .5rem !important
        }

        .mr-2,
        .mx-2 {
            margin-right: .5rem !important
        }

        .mb-2,
        .my-2 {
            margin-bottom: .5rem !important
        }

        .ml-2,
        .mx-2 {
            margin-left: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important
        }

        .mr-3,
        .mx-3 {
            margin-right: 1rem !important
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important
        }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important
        }

        .mr-5,
        .mx-5 {
            margin-right: 3rem !important
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important
        }

        .ml-5,
        .mx-5 {
            margin-left: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0,
        .py-0 {
            padding-top: 0 !important
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1,
        .py-1 {
            padding-top: .25rem !important
        }

        .pr-1,
        .px-1 {
            padding-right: .25rem !important
        }

        .pb-1,
        .py-1 {
            padding-bottom: .25rem !important
        }

        .pl-1,
        .px-1 {
            padding-left: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2,
        .py-2 {
            padding-top: .5rem !important
        }

        .pr-2,
        .px-2 {
            padding-right: .5rem !important
        }

        .pb-2,
        .py-2 {
            padding-bottom: .5rem !important
        }

        .pl-2,
        .px-2 {
            padding-left: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .pt-5,
        .py-5 {
            padding-top: 3rem !important
        }

        .pr-5,
        .px-5 {
            padding-right: 3rem !important
        }

        .pb-5,
        .py-5 {
            padding-bottom: 3rem !important
        }

        .pl-5,
        .px-5 {
            padding-left: 3rem !important
        }

        .m-n1 {
            margin: -.25rem !important
        }

        .mt-n1,
        .my-n1 {
            margin-top: -.25rem !important
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -.25rem !important
        }

        .mb-n1,
        .my-n1 {
            margin-bottom: -.25rem !important
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -.25rem !important
        }

        .m-n2 {
            margin: -.5rem !important
        }

        .mt-n2,
        .my-n2 {
            margin-top: -.5rem !important
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -.5rem !important
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -.5rem !important
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -.5rem !important
        }

        .m-n3 {
            margin: -1rem !important
        }

        .mt-n3,
        .my-n3 {
            margin-top: -1rem !important
        }

        .mr-n3,
        .mx-n3 {
            margin-right: -1rem !important
        }

        .mb-n3,
        .my-n3 {
            margin-bottom: -1rem !important
        }

        .ml-n3,
        .mx-n3 {
            margin-left: -1rem !important
        }

        .m-n4 {
            margin: -1.5rem !important
        }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important
        }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important
        }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important
        }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important
        }

        .m-n5 {
            margin: -3rem !important
        }

        .mt-n5,
        .my-n5 {
            margin-top: -3rem !important
        }

        .mr-n5,
        .mx-n5 {
            margin-right: -3rem !important
        }

        .mb-n5,
        .my-n5 {
            margin-bottom: -3rem !important
        }

        .ml-n5,
        .mx-n5 {
            margin-left: -3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mt-auto,
        .my-auto {
            margin-top: auto !important
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important
        }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important
        }

        :root {
            --red-100: #F8C9CD;
            --red-200: #F1939B;
            --red-300: #EA5D68;
            --red-400: #E32636;
            --red-500: #B51725;
            --red-600: #90131D;
            --red-700: #5A0C12;
            --red-800: #240507;

            --green-100: #EFFDD9;
            --green-200: #D7FA9E;
            --green-300: #BFF764;
            --green-400: #A6F42A;
            --green-500: #88D50B;
            --green-600: #639B08;
            --green-700: #3E6105;
            --green-800: #192702;

            --blue-100: #D6F8FF;
            --blue-200: #99EEFF;
            --blue-300: #5CE4FF;
            --blue-400: #1FDAFF;
            --blue-500: #00BBE0;
            --blue-600: #0088A3;
            --blue-700: #005566;
            --blue-800: #002229;

            --yellow-100: #FFFCD6;
            --yellow-200: #FFF899;
            --yellow-300: #FFF45C;
            --yellow-400: #FFF01F;
            --yellow-500: #F5E400;
            --yellow-600: #B8AB00;
            --yellow-700: #7A7200;
            --yellow-800: #3D3900;

            --black-100: #EBEBEB;
            --black-200: #CCCCCC;
            --black-300: #ADADAD;
            --black-400: #8F8F8F;
            --black-500: #707070;
            --black-600: #525252;
            --black-700: #333333;
            --black-800: #141414;
        }

        /* END : ----------------------  Utility Style ----------------------------------------------- */

        /*  */
        td,
        tr,
        th {
            font-size: 16px;
            /*text-align:center;*/
        }

        .bg-secondary {
            background: black !important;
        }

        /* accordion */
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        /*.active,*/
        .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }

        #collapseOne {
            display: none;
        }

        /*  */
    </style>
    </style>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>


</head>

<body id="bg">
    <?php 
	require_once "loader.php";
?>
    <!-- header -->
    <?php 
	require_once "header.php";
?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr " style="background-image:url(images/banner/main-slider-1-2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">कापूस लागवड तंत्रज्ञान</h1>
                    <!-- Breadcrumb row -->
                    <!-- <div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="home.php">Home</a></li>
							<li>Blog Details</li>
						</ul>
					</div> -->
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class=" m-b10 col-md-7 col-lg-8">
                        <!-- blog start -->
                        <div class="blog-post blog-single blog-style-1">
                            <!-- <div class="dez-post-meta">
								<ul class="d-flex align-items-center">
									<li class="post-date"><i class="fa fa-calendar"></i>September 18, 2020</li>
									<li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
									<li class="post-comment"><i class="fa fa-comments-o"></i><a href="#">5k</a> </li>
								</ul>
							</div> -->
                            <!-- Breadcrumb row -->
                            <div class="breadcrumb-row">
                                <ul class="list-inline">
                                    <li class="text-dark"><a href="blog" class="gray">Blog</a></li>
                                    <li class="gray">कापूस लागवड तंत्रज्ञान</li>
                                </ul>
                            </div>
                            <!-- Breadcrumb row END -->
                            <div class="dez-post-title">
                                <h4 class="post-title m-t0"><a href="blog-details.html">कापूस लागवड तंत्रज्ञान</a></h4>
                            </div>
                            <div class="dez-post-media dez-img-effect  m-t20 d-flex justify-content-center"> <a
                                    href="#"><img src="images/blog/cotton_logo.jpeg" alt="cotton_logo.jpeg"
                                        style="width:500px;"></a> </div>
                            <div class="dez-post-text ">
                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="true" class="collapse-trigger"
                                        aria-controls="sect5" id="collapse5id" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            कापूस लागवड
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon text-light">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect5" role="region" aria-labelledby="collapse5id"
                                        class="collapse-panel app-collapse-expanded">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table
                                                class="table-responsive table border-left border-dark text-light mb-0">

                                                <tbody>
                                                    <tr class="accordion-body">
                                                        <td class=" border border-dark border-top-0 text-dark">
                                                            कपाशी हे विदर्भातील
                                                            एकमेव नगदी पीक असून या पिकाखाली सुमारे १५ लाख हेक्टर क्षेत्र
                                                            आहे. परंतु सरासरी
                                                            उत्पादकता ३०० किलो रुई / हेक्टर ही भारताच्या सरासरी पेक्षा
                                                            (५३७ किलो रुई /
                                                            हेक्टर) तुलनात्मकरित्या कमी आहे. अधिक उत्पादनाकरिता शिफारसीत
                                                            जाती आणि सुधारित
                                                            लागवड तंत्राचा अवलंब केल्यास कापूस उत्पादनात निश्चितच भर
                                                            पडून हेक्टरी अधिक नफा
                                                            मिळेल. कापूस उत्पादनाच्या दृष्टीने महत्वाच्या बाबी
                                                            खालीलप्रमाणे आहेत.</td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect6" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            हवामान
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect6" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark mb-0">


                                                <tr class="">
                                                    <td class="text-dark border border-dark border-top-0">हे
                                                        पीक साधारणपणे ६० ते
                                                        ७५ सें.मी. पावसाच्या प्रदेशात चांगले येते. बियाण्याची उगवण
                                                        चांगली
                                                        होण्यासाठी कमीत कमी १५ अंश से. तापमानाची आवश्यकता असते. या
                                                        पिकाची साधारणपणे २१ ते २७
                                                        अंश से. तापमानात अपेक्षित वाढ होते आणि २७ ते ३३ अंश से. तापमानात
                                                        फुलपाती आणि फलधारणा
                                                        चांगली होते. दिवसा उष्ण आणि रात्री थंड अशा हवामानात बोंडे चांगली
                                                        भरतात व उमलतात.
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect7" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            जमीन
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect7" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark mb-0">

                                                <tr class="">
                                                    <td class="w-50 text-dark border border-dark border-top-0"> <a
                                                            href="#"><img class="my-3"
                                                                src="images/blog/fields-7287267_640.png"
                                                                alt="fields-7287267_640.png"></a> </td>
                                                    <td class="col-md-8 text-dark border border-dark border-top-0">या
                                                        पिकास मध्यम ते भारी,
                                                        पाण्याचा योग्य निचरा होणारी जमीन निवडावी.
                                                        (जमिनीचा सामू ६ ते ८.५ पर्यंत).
                                                    </td>
                                                </tr>
                                            </table> <!---->
                                        </div>
                                    </div>
                                </div>


                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect8" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            पूर्वमशागत व भरखते
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect8" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark mb-0">

                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        कोरडवाहू पिकाकरिता तीन
                                                        वर्षातून एक वेळा आणि बागायती पिकाकरिता दरवर्षी नांगरणी आवश्यक
                                                        आहे. पेरणीपूर्वी एक
                                                        वखरपाळी (जांभूळवाही) दिली असता, तणांची तिव्रता २० टक्केपर्यंत
                                                        कमी होते. कोरडवाहू
                                                        कपाशीला हेक्टरी १२ ते १५ गाडी आणि बागायती कपाशीला हेक्टरी २० ते
                                                        २५ गाडी चांगले
                                                        मुरलेले शेणखत किंवा कंपोस्ट खत (निदान तीन वर्षातून एकवेळ)
                                                        पेरणीपूर्वी शेतात एकसारखे
                                                        मिसळून द्यावे. शेणखत किंवा कंपोस्ट खत (५ टन प्रति हेक्टर)
                                                        दरवर्षी दिल्यास शिफारसीत
                                                        रासायनिक खत मात्रा ५० टक्क्यांनी कमी करता येते. खत कमी असल्यास
                                                        ते शेतात फेकून न देता
                                                        पेरणीच्या फुलीपासून ५ सें.मी. बाजूला द्यावे किंवा सरत्याने
                                                        द्यावे.</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect9" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            बियाणे व बीज प्रक्रिया
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect9" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">

                                                <tr class="">
                                                    <td class="w-50  border border-dark border-top-0  "> <a
                                                            href="#"><img
                                                                class="mr-2 img-fluid align-self-center justify-self-center "
                                                                style="width:200px;"
                                                                src="images/blog/sack-309849_1280.png"
                                                                alt="fields-7287267_640.png"></a> </td>
                                                    <td class="col-md-8 text-dark border border-dark border-top-0">
                                                        पेरणीकरिता दर्जेदार, बीज
                                                        प्रक्रिया केलेले व शिफारस केलेल्या वाणांचे शक्यतोवर तंतूविरहित
                                                        बियाण्याचा वापर
                                                        करावा. बीज प्रक्रिया केलेली नसल्यास पेरणीपूर्वी प्रति किलो
                                                        बियाण्यास कारबोक्झीन
                                                        (व्हिटॅव्हॅक्स) एक ग्रॅम किंवा थायरम तीन ग्रॅम याप्रमाणे बीज
                                                        प्रक्रिया करावी.
                                                        बियाण्यावर इमिडाक्लोप्रिड किंवा थायोमिक्सम @ 7.5 ग्रॅम / किलो
                                                        याप्रमाणे बीजप्रक्रिया
                                                        केल्यास किडींपासून बचाव होतो. अझाटोबॅक्टर (२५ ग्रॅम/किलो
                                                        बियाणे) आणि नायट्रोजन
                                                        स्थिरीकरण व फॉस्फेट विरघळणारे जीवाणू (२० ग्रॅम/किलो बियाणे) या
                                                        जैविक खतांची
                                                        बीजप्रक्रिया करावी. संकरित जातींचे एफ २ (दुसऱ्या पिढीतील)
                                                        बियाण्याचा पेरणीकरिता वापर
                                                        करू नये. कारण या पिढीतील बियाण्यापासून उत्पादन कमी येते. सुधारित
                                                        जातींची आनुवंशिक
                                                        शुध्दता राखल्यास तीन वर्ष पर्यंत स्वतःचे घरचे बियाणे पेरणीकरिता
                                                        वापरता येते. मधल्या
                                                        दोन तीन वेचण्यापासूनचे मिळणारे कापसाचे बियाणे अधिक चांगले असते.
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect10" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            पेरणीची वेळ
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect10" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table border-left border-dark m-0">

                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        <p style="font-size:16px;"><b>बागायती (मान्सूनपूर्व)</b></p>
                                                    </td>
                                                    <td class="col-md-8 text-dark border border-dark border-top-0">
                                                        <ol>
                                                            <li class="list-inline">
                                                                २० ते ३० मे किंवा तापमान ४०० सें.ग्रे. च्या खाली
                                                                गेल्यावर पेरणी करावी.
                                                            </li>
                                                            <li class="list-inline">
                                                                १. पेरणी आधी चांगले ओलीत करूनच पेरणी करावी.
                                                            </li>
                                                            <li class="list-inline">
                                                                २. पेरतांना लवकर येणारे वाण ऑक्टोबरच्या पहिल्या आठवड्यात
                                                                पावसात सापडणार नाही
                                                                याची काळजी घ्यावी.
                                                            </li>
                                                            <li class="list-inline">
                                                                ३. पाण्याचा निचरा होण्यासाठी रूंद वरंबा सरी पध्दत किंवा
                                                                ठराविक अंतरावर सऱ्या
                                                                पाडाव्या.
                                                            </li>
                                                        </ol>
                                                    </td>

                                                </tr>
                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        <p style="font-size:16px;"><b>धूळपेरणी</b></p>
                                                    </td>
                                                    <td class="col-md-8 text-dark border border-dark border-top-0">
                                                        <p style="font-size:16px;">सरळ वाणांची मध्यम जमिनीत मान्सूनचा
                                                            पाऊस येण्याचा अंदाज
                                                            पाहून ७-८ दिवस अगोदर, जूनच्या पहिल्या किंवा दुसऱ्या आठवड्यात
                                                            पेरणी करावी.
                                                        </p>
                                                    </td>
                                                </tr>

                                                <!-- </div> -->
                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        <p style="font-size:16px;"><b>मान्सून (कोरडवाहू) पेरणी</b></p>
                                                    </td>
                                                    <td class="col-md-8 text-dark border border-dark border-top-0">
                                                        <p style="font-size:16px;">१५ ते ३० जून किंवा मान्सूनचा सुमारे
                                                            ७५ते १०० मि.मी.
                                                            (पेरणीयोग्य) पाऊस झाल्यावर ताबडतोब पेरणी करावी.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect11" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            आंतरपीक
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect11" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">

                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        मध्यम ते भारी जमिनीमध्ये
                                                        अधिक आर्थिक मिळकतीकरीता शिफारशीनुसार प्रभावी आंतरपिक पध्दतीमध्ये
                                                        कापूस + मुग (१:१)
                                                        किंवा कापूस पध्दतीचा अवलंब करावा तसेच कपाशी उडीद (१:१) किंवा
                                                        लवकर येणाऱ्या सोयाबीन
                                                        जाती (१:१) या आंतरपीक ज्वारी तूर ज्वारी (६:१:२:१ ओळी) या आंतरपिक
                                                        पध्दतीचा अवलंब
                                                        करावा तसेच कपाशीच्या ८ ते १० ओळीनंतर तूर पिकाचे आंतरपीक घ्यावे.
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>


                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect12" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            वाणांची निवड
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect12" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark">

                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0 ">
                                                        सद्यस्थितीत बाजारात
                                                        अनेक बीटी कपाशीचे संकरीत वाण उपलब्ध आहेत. यापैकी कोणता वाण
                                                        निवडावा याबाबत
                                                        शेतकऱ्यांमध्ये संभ्रम होत आहे. बीटी कपाशीचा वाण निवडतांना
                                                        कोरडवाहू लागवडीचा प्रकार,
                                                        वाणांचे गुणधर्म याचा विचार करावा.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <ul class="p-4" style="font-size:16px; color:black; ">
                                                            <li>आपल्या भागात उत्पादनात सरस असणारा वाण निवडावा.</li>
                                                            <li>रस शोषण करणाऱ्या किडींना सहनशिल / प्रतिकारक्षम संकरीत
                                                                वाण असावा.</li>
                                                            <li>रोगांना (मर, दहिया इ.) बळी न पडणारा वाण निवडण्यात यावा.
                                                            </li>
                                                            <li>पाण्याचा ताण सहन करणारा वाण निवडावा.</li>
                                                            <li>बोंडांचा आकार कोरडवाहू लागवडीसाठी मध्यम असावा.</li>
                                                            <li>शेवटपर्यंत पाने हिरवी राहिल्यास अन्न तयार करण्याचे काम
                                                                अखेर पर्यंत चालते.
                                                                त्यामुळे उशिरा लागणाऱ्या बोंडांचा सुध्दा आकार मोठा राहतो
                                                                व बोंड फुटण्याचे
                                                                प्रमाण वाढते.</li>
                                                            <li>बोंडे चांगली फुटणारा व धाग्याची प्रत चांगली असणारा वाण
                                                                निवडावा. ज्यामुळे
                                                                कपाशीला बाजारभाव चांगला मिळू शकतो.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect25" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            पेरणीची पध्दत
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect25" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive border-left border-dark m-0">
                                                <tr>
                                                    <thead
                                                        class="bg-dark text-light text-center mt-5 mb-0 justify-content-center">
                                                </tr>
                                                <tr class="">
                                                    <th class="text-light col-md-1 border-right border-dark">अ. क्र.
                                                    </th>
                                                    <th class="text-light  border-right border-dark">जात</th>
                                                    <th class="text-light col-md-2 border-right border-dark">पेरणीची
                                                        पध्दत</th>
                                                    <th class="text-light col-md-2 border-right border-dark">लागवड अंतर
                                                        मध्यम भारी जमिनीकरिता ओळी झाडांत
                                                        (सें.मी.)</th>
                                                    <th class="text-light col-md-2 border-right border-dark">हेक्टरी
                                                        झाडसंख्या (हजारमध्ये)</th>
                                                    <th class="text-light col-md-2">बियाण्याचे हेक्टरी प्रमाण (किलो)
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="">
                                                    <tr class="">
                                                        <td class="col-md-1 border border-dark">१.</td>
                                                        <td class=" border border-dark"><b>कपाशी: बागायती
                                                            </b><br> संकरित जाती </td>
                                                        <td class="col-md-2 border border-dark">सरी वरंबा, कुशा पध्दत
                                                            किंवा ठिबक सिंचन </td>
                                                        <td class="col-md-2 border border-dark">१२० x ९०</td>
                                                        <td class="col-md-2 border border-dark">९.३ </td>
                                                        <td class="col-md-2 border border-dark">२ ते २.५</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="col-md-1 border border-dark"></td>
                                                        <td class=" border border-dark"><b>संकरीत बीटी कपाशी वाण
                                                            </b><br> १. पीकेव्ही हाय-२
                                                            बीजी-II </td>
                                                        <td class="col-md-2 border border-dark">टोकून </td>
                                                        <td class="col-md-2 border border-dark">९० x ४५ </td>
                                                        <td class="col-md-2 border border-dark">२४.७ </td>
                                                        <td class="col-md-2 border border-dark">२ ते २.५</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="col-md-1 border border-dark"></td>
                                                        <td class=" border border-dark"> २.
                                                            पिडीकेव्ही-जेकेएल-११६ बीजी-II</td>
                                                        <td class="col-md-2 border border-dark">टोकून </td>
                                                        <td class="col-md-2 border border-dark">९० x ४५ </td>
                                                        <td class="col-md-2 border border-dark">२४.७ </td>
                                                        <td class="col-md-2 border border-dark">२ ते २.५</td>
                                                    </tr>
                                                    <tr class="">

                                                        <td class="col-md-1 border border-dark"></td>
                                                        <td class=" border border-dark"><b>कपाशी: कोरडवाहू </b>
                                                        </td>
                                                        <td class="col-md-8  border-dark"><b></b></td>
                                                        <td class="col-md-8  border-dark"><b></b></td>
                                                        <td class="col-md-8  border-dark"><b></b></td>
                                                        <td class="col-md-8 border-right border-dark"><b></b></td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="col-md-1 border border-dark"></td>
                                                        <td class=" border border-dark"> अ) देशी सुधारित जाती
                                                            एकेए५, एकेए७, एकेए ८ एकेए ८४०१
                                                        </td>
                                                        <td class="col-md-2 border border-dark">सरत्याने <br>
                                                            सरत्याने/टोकून </td>
                                                        <td class="col-md-2 border border-dark">६० x १५ <br> ६० x ३०
                                                        </td>
                                                        <td class="col-md-2 border border-dark">१११.१ <br> ५५.६ </td>
                                                        <td class="col-md-2 border border-dark">१२ ते १५ <br> ९ ते १०
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="col-md-1 border border-dark"></td>
                                                        <td class=" border border-dark">ब) अमेरिकन सुधारित जाती.
                                                            सुवर्ण शुभ्रा (एकेएच-०९-५)
                                                            पीकेव्ही रजत, एकेएच ८८२८ एकेएच ०८१, </td>
                                                        <td class="col-md-2 border border-dark">टोकून <br>टोकून
                                                            <br>सरत्याने <br>सरत्याने </td>
                                                        <td class="col-md-2 border border-dark">६० x ३० <br> ६० x ३०
                                                            <br> ६० x ३० <br> ६० x १५ </td>
                                                        <td class="col-md-2 border border-dark">५५.६ <br> ५५.६ <br>५५.६
                                                            <br>१११.१ </td>
                                                        <td class="col-md-2 border border-dark">८ ते १० <br> १० ते १२
                                                            <br> १० ते १२ <br> १५ ते २० </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="col-md-1 border border-dark"></td>
                                                        <td class=" border border-dark">क) देशी संकरित जाती
                                                            पीकेव्ही डीएच १ पीकेव्ही सुवर्णा
                                                        </td>
                                                        <td class="col-md-2 border border-dark">टोकून<br> टोकून </td>
                                                        <td class="col-md-2 border border-dark">६० x ४५ <br> ६० x ४५
                                                        </td>
                                                        <td class="col-md-2 border border-dark">३७ <br> ३७ </td>
                                                        <td class="col-md-2 border border-dark">३ ते ३.५ <br> ३ ते ३.५
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="col-md-1 border border-dark"></td>
                                                        <td class=" border border-dark"> ड) अमे. संकरित जाती
                                                            पीकेव्ही हाय-२ पीकेव्ही हाय-४
                                                            पीकेव्ही हाय-५ </td>
                                                        <td class="col-md-2 border border-dark">टोकून<br> टोकून <br>
                                                            टोकून </td>
                                                        <td class="col-md-2 border border-dark">९० x ६० <br> ९० x ६०
                                                            <br> ९० x ६० </td>
                                                        <td class="col-md-2 border border-dark">१८.५ <br> १८.५ <br> २७.८
                                                        </td>
                                                        <td class="col-md-2 border border-dark">३.५ ते ४ <br> ३.५ ते ४
                                                            <br> ४.५ ते ५ </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>


                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect13" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            पेरणीच्या जाती/पद्धती/अंतर/बियाणे दर व हेक्टरी रोप लोकसंख्या
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect13" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <div class="dez-post-media m-t20"> <a href="#"><img
                                                        src="images/blog/Picture2.png" alt="picture2.png"></a> </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect14" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            खत व्यवस्थापन
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect14" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class=" table border-left border-dark m-0">
                                                <tr class=" ">
                                                    <th class=" text-center border border-dark">जात</th>
                                                    <th colspan="3" class="col-md-9 text-center border border-dark">

                                                        हेक्टरी प्रमाण (किलो)

                                                    </th>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark"></td>
                                                    <td class=" text-center border border-dark">पेरणीचे वेळेस
                                                    </td>
                                                    <td colspan="2" class=" text-center border border-dark">
                                                        उगवणीनंतर</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark"></td>
                                                    <td class=" text-center border border-dark">नत्र : स्फुरद :
                                                        पालाश</td>
                                                    <td class=" text-center border border-dark">३० दिवसांनी</td>
                                                    <td class=" text-center border border-dark">६० दिवसांनी</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark">कपाशी :
                                                        बागायती बीटी कपाशी </td>
                                                    <td class=" text-center border border-dark">४० : ६० : ६०
                                                    </td>
                                                    <td class=" text-center border border-dark">४०</td>
                                                    <td class=" text-center border border-dark">४०</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark">संकरीत कापूस
                                                    </td>
                                                    <td class=" text-center border border-dark">३५ : ५० : ५०
                                                    </td>
                                                    <td class=" text-center border border-dark">३५</td>
                                                    <td class=" text-center border border-dark">३०</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark">कपाशी :
                                                        कोरडवाहू बीटी कपाशी
                                                    </td>
                                                    <td class=" text-center border border-dark">३० : ३० : ३०
                                                    </td>
                                                    <td class=" text-center border border-dark">३०</td>
                                                    <td class=" text-center border border-dark">-</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark">देशी सुधारित
                                                        जाती </td>
                                                    <td class=" text-center border border-dark">२० : २० : २०
                                                    </td>
                                                    <td class=" text-center border border-dark">२०</td>
                                                    <td class=" text-center border border-dark">-</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark">अमेरिकन
                                                        सुधारित जाती</td>
                                                    <td class=" text-center border border-dark">३० : ३० : ३०
                                                    </td>
                                                    <td class=" text-center border border-dark">३०</td>
                                                    <td class=" text-center border border-dark">-</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark">देशी संकरित
                                                        जाती</td>
                                                    <td class=" text-center border border-dark">३० : ३० : ३०
                                                    </td>
                                                    <td class=" text-center border border-dark">३०</td>
                                                    <td class=" text-center border border-dark">-</td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" border border-top-none border-dark">अमेरिकन
                                                        संकरित जाती</td>
                                                    <td class=" text-center border border-dark">३० : ३० : ३०
                                                    </td>
                                                    <td class=" text-center border border-dark">३०</td>
                                                    <td class=" text-center border border-dark">-</td>
                                                </tr>

                                            </table>

                                        </div>
                                    </div>
                                </div>





                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect15" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            रासायनिक खतमात्रा माती परिक्षणानुसार देणे अधिक योग्य. वरील तक्त्याप्रमाणे
                                            नत्र, स्फुरद आणि पालाश
                                            पिकास देतांना किती रासायनिक खते द्यावीत हे आपण कोणती खते वापरतो यावर अवलंबून
                                            असते. निवडक
                                            रासायनिक खताचे प्रमाण खालीलप्रमाणे आहे.
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect15" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">
                                                <!-- <tr><th colspan="2" class="bg-secondary text-light text-center  mb-0">रासायनिक खतमात्रा माती परिक्षणानुसार देणे अधिक योग्य. वरील तक्त्याप्रमाणे नत्र, स्फुरद आणि पालाश पिकास देतांना किती रासायनिक खते द्यावीत हे आपण कोणती खते वापरतो यावर अवलंबून असते. निवडक रासायनिक खताचे प्रमाण खालीलप्रमाणे आहे.</th> -->
                                                </tr>
                                                <tr class=" ">
                                                    <td class=" border border-dark">शिफारसीत रासायनिक खत मात्रा
                                                        (किलो)</td>
                                                    <td class="col-md-9 border-dark border"></td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">नत्र : स्फुरद : पालाश</td>
                                                    <td class="col-md-9 border-dark border">रासायनिक खताची नावे आणि
                                                        प्रमाण प्रति हेक्टरी
                                                        (ढोबळमानाने)</td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">४० : ६० : ६०</td>
                                                    <td class="col-md-9 border border-dark">
                                                        १) डीएपी १३० किलो + युरिया ४० किलो+ म्युरेट ऑफ पोटॅश १०० किलो
                                                        किंवा <br>
                                                        २) १५ : १५ : १५-२७० किलो सुपरफॉस्फेट १२० कि.+ म्युरेट ऑफ पोटॅश
                                                        ३० किलो किंवा <br>
                                                        ३) २० : २० : ०-२०० किलो सुपरफॉस्फेट १२० कि. ४ म्युरेट ऑफ पोटॅश
                                                        १०० किलो किंवा <br>
                                                        ४) युरिया ९० किलो + सुपरफॉस्फेट ३७५ किलो + म्युरेट ऑफ पोटॅश १००
                                                        किलो. <br>
                                                        ५) १०:२६:२६ - २३१ किलो + ३७ किलो युरिया.

                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">४५ : ४५ : ४५ </td>
                                                    <td class="col-md-9 border border-dark">
                                                        १) डीएपी ९८ किलो युरिया ६० किलो म्युरेट ऑफ पोटॅश ७५ किलो किंवा
                                                        <br>
                                                        २) १५ : १५ : १५- ३०० किलो किंवा <br>
                                                        ३) २० : २० : ०- २२५ किलो म्युरेट ऑफ पोटॅश ७५ किलो किंवा <br>
                                                        ४) युरिया ९८ किलो + सुपरफॉस्फेट २८० किलो + म्युरेट ऑफ पोटॅश ७५
                                                        किलो. <br>
                                                        ५) १० : २६ : २६ - १७५ किलो ६० किलो युरिया.


                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">३० : ३० : ३० </td>
                                                    <td class="col-md-9 border border-dark">
                                                        १ ) डीएपी ६५ किलो + युरिया ४० किलो + म्युरेट ऑफ पोटॅश ५० किलो
                                                        किंवा <br>
                                                        २) १५ : १५ : १५- २०० किलो किंवा <br>
                                                        ३) २० : २० : ०- १५० किलो + म्युरेट ऑफ पोटॅश ५० किलो किंवा <br>
                                                        ४) युरिया ६५ किलो + सुपरफॉस्फेट १९० किलो + म्युरेट ऑफ पोटॅश ५०
                                                        किलो. <br>
                                                        ५) १०:२६:२६ - १५१ किलो + ४० किलो युरिया.



                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">२० : २० : २० </td>
                                                    <td class="col-md-9 border border-dark">
                                                        १) डीएपी ४५ किलो युरिया २५ किलो किंवा <br>
                                                        २) २० : २० : ०- १०० किलो किंवा <br>
                                                        ३) युरिया ४५ किलो + सुपरफॉस्फेट १३० किलो +म्युरेट ऑफ पोटॅश ३५
                                                        किलो <br>
                                                        ४) १० : २६ : २६ - ७५ किलो + २५ किलो युरिया
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">४५ किलो नत्र </td>
                                                    <td class="col-md-9 border border-dark">
                                                        १०० किलो युरिया
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">४० किलो नत्र </td>
                                                    <td class="col-md-9 border border-dark">
                                                        ९० किलो युरिया
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">३० किलो नत्र</td>
                                                    <td class="col-md-9 border border-dark">
                                                        ६५ किलो युरिया
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">२० किलो नत्र</td>
                                                    <td class="col-md-9 border border-dark">
                                                        ४५ किलो युरिया
                                                    </td>
                                                </tr>
                                                <tr class=" border p-3 border-dark">
                                                    <td colspan="2"> पीक फुलावर असताना २ टक्के युरियाची आणि बोंडे
                                                        भरण्याचे अवस्थेत २ टक्के
                                                        डीएपी ची फवारणी केल्यास कापूस उत्पादनात १३.६ टक्क्याने वाढ
                                                        झाल्याचे प्रायोगिक
                                                        निष्कर्ष आहेत. <br>
                                                        प्रमाण : <br>
                                                        २ टक्के युरिया = २०० ग्रॅम युरिया + १० लिटर पाणी (साध्या
                                                        पंपाने), <br>
                                                        २ टक्के डीएपी = २०० ग्रॅम डीएपी + १० लिटर पाणी या प्रमाणात.
                                                    </td>

                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect16" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            खाडे भरणे / विरळणी
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect16" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table border-left border-dark m-0">
                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        उगवणीनंतर ३ ते ५ दिवसात खाडे/नांगे भरावेत आणि १५ ते २० दिवसात
                                                        विरळणी करून शेतात अपेक्षित झाड संख्या राखावी.</td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect17" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            तण व्यवस्थापन
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect17" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">
                                                <!-- <tr><th colspan="3" class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">तण व्यवस्थापन </th> -->
                                                </tr>
                                                <tr class="">
                                                    <td style="width:50%;"
                                                        class=" text-dark border border-dark border-top-0">
                                                        कपाशीचे पहिले ९ आठवडे तण विरहीत ठेवणे जास्त आवश्यक आहे.
                                                        त्याकरीता बियाणे उगवणीनंतर १० ते २० दिवसांच्या अंतराने दोन ते
                                                        तीन वेळा डवरणी करावी व आवश्यकतेनुसार २-३ वेळा निंदणी करावी.</td>
                                                    <td class="border-right border-dark"></td>
                                                </tr>

                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        उगवणपूर्व तणनाशकांचा वापर</td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0">
                                                        सुरूवातीच्या काळात शेत तण विरहीत ठेवण्यासाठी व कपाशीच्या
                                                        चांगल्या उगवणीसाठी उगवणपूर्व तण नाशकांचा वापर करावा यामध्ये तण
                                                        नियंत्रणासाठी पेंडीमेथालीन ३८.७ टक्के या उगवणपूर्व तणनाशकाची
                                                        १.५-१.७५ किलो/हेक्टरी व्यापारी घटकाची (२०-२५ मि.ली. प्रति १०
                                                        लिटर पाणी) किंवा डायुरॉन ८० टक्के डब्ल्यु.पी. या तणनाशकाची
                                                        १.०-२.०० किलो/हेक्टरी व्यापारी घटकाची (२०-३० ग्रॅम प्रति १० लिटर
                                                        पाणी) या प्रमाणात पेरणी
                                                        नंतर जमिनीवर फवारणी करावी.
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td class=" text-dark border border-dark border-top-0">उगवण
                                                        पश्चात तणनाशकांचा वापर</td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0">गरज
                                                        भासल्यास शिफारस केलेल्या उगवण पश्चात तणनाशकांचा योग्य वेळी व
                                                        योग्ण प्रमाणातच वापर करावा. उगवण पश्चात तणनाशकामध्ये उभ्या पिकात
                                                        पीक ३०-४० दिवसांचे असतांना पायरीथीओबक सोडियम १० टक्के ई.सी.
                                                        (हिटविड) या तणनाशकाची ०.६२५-०.७५० किलो/हेक्टरी व्यापारी घटकाची
                                                        (१२.५-१५ मि.ली. प्रति १० लिटर पाणी) किंवा तृणवर्गीय तणांचा जास्त
                                                        प्रादुर्भाव असल्यास क्विझालोफोप ईथाइल ५ टक्के ई.सी. (टरगा सुपर)
                                                        या तणनाशकाची १.० लिटर किलो/हेक्टरी व्यापारी घटकाची (२० मि.ली.
                                                        प्रति १० लिटर पाणी) या प्रमाणात फवारणी करावी. तणनाशकाची फवारणी
                                                        करतांना शिफारशीत तणनाशकांचाच वापर करावा व तणनाशक फवारणीसाठी
                                                        शक्यतोवर वेगळा पंप वापरावा. तणनाशकाचा वापर करतांना वापरण्यात
                                                        येणारे नोझल हेक्टरी द्रावण, तणनाशकाची मात्रा ई. बाबतीत दक्षता
                                                        बाळगावी.
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect18" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            ओलीत व्यवस्थापन
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect18" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">
                                                <!-- <tr><th colspan="2" class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">ओलीत व्यवस्थापन</th></tr> -->


                                                <tr class=" ">
                                                    <td class=" border border-dark">कोरडवाहू (संरक्षक ओलीत)
                                                    </td>
                                                    <td class="col-md-9 border border-dark">कपाशीचे पीक फुलावर व बोंडे
                                                        भरण्याचे अवस्थेत असतांना पाण्याचा ताण पडल्यास व पाणी देण्याची
                                                        सोय असल्यास १०-१२ दिवसांचे अंतराने २-३ संरक्षक ओलीत (एकसरी आड)
                                                        द्यावे.</td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark">बागायती </td>
                                                    <td class="col-md-9 border border-dark">बागायती पिकास आवश्यकतेनुसार
                                                        ओलीत करावे. बोंडे फुटणे सुरू झाल्यानंतर ओलीत करु नये.</td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect19" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            कपाशीमध्ये ठिबक सिंचनाद्वारे खत व्यवस्थापन
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect19" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table border-left border-dark m-0">
                                                <!-- <tr><th colspan="2" class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">कपाशीमध्ये ठिबक सिंचनाद्वारे खत व्यवस्थापन</th> -->
                                                </tr>

                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        ठिबकद्वारे खतमात्रा </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        पेरणी नंतर दिवसांनी </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark border-top-0">१० % नत्र आणि
                                                        पालाश ची शिफारसीत मात्रा</td>
                                                    <td class=" border border-dark border-top-0">पेरणीच्या वेळेस
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark border-top-0">२० % नत्र आणि
                                                        पालाश ची शिफारसीत मात्रा </td>
                                                    <td class=" border border-dark border-top-0">२० दिवसांनी
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark border-top-0">२५ % नत्र आणि
                                                        पालाश ची शिफारसीत मात्रा </td>
                                                    <td class=" border border-dark border-top-0">४० दिवसांनी
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark border-top-0">२५ % नत्र आणि
                                                        पालाश ची शिफारसीत मात्रा </td>
                                                    <td class=" border border-dark border-top-0">६० दिवसांनी
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" border border-dark border-top-0">२० % नत्र आणि
                                                        पालाश ची शिफारसीत मात्रा </td>
                                                    <td class=" border border-dark border-top-0">८० दिवसांनी
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect20" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            कपाशीवरील किडी व त्यांचे व्यवस्थापन
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect20" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table m-0">
                                                <!-- <tr>
                                <th colspan="3" class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">कपाशीवरील किडी व त्यांचे व्यवस्थापन</th>
                            </tr> -->

                                                <tr class=" border">
                                                    <td style="width:20% !important;"
                                                        class=" text-dark border border-dark border-top-0"> <b> कीटक   </b> </td>
                                                    <td class=" text-dark border border-dark border-top-0"> <b>लक्षणे  </b> </td>
                                                    <td class=" text-dark border border-dark border-top-0"><b>नियंत्रण/उपाय</b>
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-center text-dark border border-dark border-top-0">
                                                       <b> रसशोषण करणाऱ्या किडी </b></td>
                                                    <td colspan="2" class="border-bottom border-dark border-right">
                                                    </td>
                                                    <!--<td class="col-md-12 text-center text-dark border border-dark border-left-0 border-top-0">  </td>-->
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> <b> १) तुडतुडे</b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        • तुडतुडे फिक्कट हिरव्या रंगाचे, पाचरीच्या आकाराचे असून ते नेहमी
                                                        लांबीला तिरके चालतात. <br>
                                                        • तुडतुड्यांच्या पिल्लांना पंख नसतात. प्रौढ व पिल्ले पानाच्या
                                                        खालच्या बाजूने राहून पानातील रस शोषण करतात. <br>
                                                        • त्यामुळे पाने प्रथम कडेने पिवळसर होऊन नंतर तपकिरी रंगाची
                                                        होतात. <br>
                                                        • जास्त प्रादुर्भाव झाल्यास संपूर्ण पाने लाल तांबडी होऊन
                                                        त्यांच्या कडा मुरगळतात, परिणामी झाडांची वाढ खुंटते, झाडांना
                                                        पात्या, फुले आणि बोंडे कमी प्रमाणात लागतात.
                                                    </td>
                                                    <td rowspan="3" class=" text-dark border border-dark border-top-0">
                                                        1) मावा, तुडतुडे आणि फुलकिडे या किडींच्या नियंत्रणासाठी
                                                        इमिडॅक्लोप्रीड ७० डब्ल्यू. एस १० ग्रॅम प्रति किलो या प्रमाणात
                                                        बीज प्रक्रिया करावी. <br>
                                                        2) प्रादुर्भाव रोखण्यासाठी ग्रीस आणि चिकट तेलाने लेपित पिवळे
                                                        (फुलकिडे साठी निळे रंगाचे ) चिकट सापळे वापरा. <br>
                                                        3) नंतरच्या काळात सर्वेक्षणांती कपाशीच्या एका पानावर सरासरी १०
                                                        मावा किंवा २- ३ तुडतुडे किंवा १० फुलकिडे किंवा एकत्रीत १० रस
                                                        शोषक किडी (मावा, तुडतुडे आणि फुलकिडे) आढळून आल्यास
                                                        व्यवस्थापनाकरीता पुढे दिलेल्या कोणत्याही एका लेबल क्लेम
                                                        किटकनाशकाची १० लिटर पाण्यात मिसळून पिकावर फवारणी करावी. <br>
                                                        ॲसिटामिप्रिड २०% एसपी १ ग्रम /बुप्रोफेझीन २५% ईसी १६ मिली /
                                                        क्लोथीअनिडीन ५०% डब्ल्यूडीजी ०.६-०.८ ग्रम / डीनोटेफुरान २०% एसजी
                                                        २.५ ग्राम / फिप्रोनील ५% एससी ३० मिली /इमिडाक्लोप्रीड १७.८% एसएल
                                                        २ मिली/ फ्लोनीकअमाईड ५०% डब्ल्युजी ३ ग्राम ( प्रती १० लिटर
                                                        पाण्यात)
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> <b>२) मावा</b> </td>
                                                    <td class=" text-dark border border-dark border-top-0"> • मावा
                                                        रंगाने पिवळसर किंवा फिक्कट हिरवा असतो. <br>
                                                        • मावा कोवळ्या डहाळीवर किंवा पानाच्या खालच्या बाजूने समूहाने
                                                        राहून त्यातील रस शोषण करतात. तसेच आपल्या शरीरातून चिकट द्रव
                                                        बाहेर टाकतात आणि त्यावर काळी बुरशी वाढते. <br>
                                                        • त्यामुळे पानांव्दारे अन्न तयार करण्याच्या प्रक्रियेत बाधा
                                                        उत्पन्न होते. <br>
                                                        • मावा किडींचा प्रादुर्भाव अधिक झाल्यास पाने कोकडतात आणि झाडांची
                                                        वाढ खुंटते
                                                    </td>
                                                    <!--<td class=" text-dark border border-dark border-top-0"> </td>-->
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b> ३) फुलकिडे</b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> • फुलकिडे
                                                        रंगाने फिक्कट पिवळसर किंवा तपकिरी रंगाचे असून आकाराने लहान व
                                                        लांबट असतात. <br>
                                                        • प्रौढ व पिल्ले कपाशीची पाने आणि हिरवी बोंडे खरडून त्यातून
                                                        निघणारा रस शोषण करतात. <br>
                                                        • त्यामुळे पानावर प्रथम पांढुरके चट्टे व नंतर तपकिरी ठिपके दिसून
                                                        येतात. <br>

                                                    </td>
                                                    <!--<td class=" text-dark border border-dark border-top-0"> </td>-->
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b>४) पांढरी
                                                        माशी </b></td>
                                                    <td class=" text-dark border border-dark border-top-0">• पांढरी माशी
                                                        आकाराने अगदी लहान असून पंख पांढुरके किंवा करड्या रंगाचे असतात.
                                                        <br>
                                                        • शरीरावर पिवळसर झाक असून डोक्यावर मध्यभागी दोन तांबडे ठिपके
                                                        असतात. <br>
                                                        • पांढऱ्या माशीची पिल्ले पानाच्या मागच्या बाजुने एका ठिकाणी
                                                        स्थिर राहून पानातील रस शोषण करतात, त्यामुळे पाने कोमेजतात. <br>
                                                        • तीव्र स्वरूपाचा प्रादुर्भाव असल्यास पाने लालसर ठिसूळ होऊन
                                                        वाळतात. याशिवाय पिल्ले शरीरातून चिकट द्रव बाहेर टाकतात, त्यावर
                                                        काळी बुरशी वाढते. असे प्रादुर्भावग्रस्त झाड चिकट व काळसर होते.
                                                        <br>
                                                        • झाडाची वाढ खुंटते आणि त्याचा उत्पादनावर अनिष्ट परिणाम होतो.
                                                        <br>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> कापूस पिकावर
                                                        सर्वेक्षणांती सरासरी ८ ते १० प्रौढमाशा किंवा २० पिल्ले प्रति पान
                                                        आढळून आल्यास व्यवस्थापनाकरीता पुढे दिलेल्या कोणत्याही एका लेबल
                                                        क्लेम किटकनाशकाची १० लिटर पाण्यात मिसळून पिकावर फवारणी करावी.
                                                        अॅसिटामीप्रीड २०% एसपी १ ग्रम /बुप्रोफेझीन २५% ईसी १६ मिली /
                                                        क्लोथीअनिडीन ५०% डब्ल्यूडीजी ०.६-०.८ ग्रम / डीनोटेफुरान २०% एसजी
                                                        २.५ ग्राम / फिप्रोनील ५% एससी ३० मिली /इमिडाक्लोप्रीड १७.८% एसएल
                                                        २ मिली/ फ्लोनीकअमाईड ५०% डब्ल्युजी ३ ग्राम ( प्रती १० लिटर
                                                        पाण्यात)
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> <b> ५) पिठ्या
                                                        ढेकूण (मिली बग</b>) </td>
                                                    <td class=" text-dark border border-dark border-top-0">• या किडींचे
                                                        प्रौढ, मादी व पीले शरीराने मृदु, अंडाकृती चापट असतात. <br>
                                                        • नुकत्याच अंड्यातून निघालेल्या पिल्लांच्या अंगावर कापसासारखे मऊ
                                                        आवरण नसते व जशी जशी त्यांची वाढ होत जाते हे आवरण दाट होत जाते व
                                                        संपूर्ण शरीर कापसासारखे किंवा पिठासारखे मऊ मेणकर पदाथनि झाकलेले
                                                        असते त्यामुळेच त्याला पिठ्या ढेकूण असे संबोधल्या जाते. <br>
                                                        • या किडीचे प्रौढ व पील्लं पाने, पात्या, बोंडे, कोवळी फांदी तसेच
                                                        कोवळ्या शेंड्यामधुन रस शोषण करतात त्यामुळे पाने चुरगळतात,
                                                        शेंड्यांना झुपक्याचा आकार येतो, जास्त प्रादुर्भाव असल्यास
                                                        संपूर्ण झाड वाळते. <br>
                                                        • तसेच ही कीड आपल्या शरीराव्दारे साखरेच्या पाकासारखा गोड व चिकट
                                                        पदार्थ बाहेर टाकते. तो झाडावर पसरतो, त्यावर काळी बुरशी वाढते व
                                                        संपुर्ण झाड चिकट व काळसर दिसते. परिणामी पानाच्या अन्न तयार
                                                        करण्याच्या प्रक्रियेत बाधा उत्पत्र होते. झाडाची वाढ खुंटते,
                                                        बोंडे अपरिपक्व अवस्थेत उमलतात त्यामुळे कापसाची प्रत खालावते व
                                                        उत्पादनात घट येते. <br>
                                                        • कपाशीशिवाय ही कीड पेटारी, आघाडा, केना, दुधी, गाजरगवत, घाणेरी,
                                                        वांगे, टमाटर, भेंडी, जास्वंद, कुंदा, शेवंती, शोभिवंत झाडे तथा
                                                        फळझाडे पेरु, सिताफळ इत्यादींवर सुध्दा आढळून येते. या किडीचा
                                                        प्रसार हवा, प्रादुर्भावग्रस्त पिकामध्ये ने आण, पाटाचे पाणी,
                                                        जनावरे, पक्षी इ.द्वारे होतो. <br>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">१) कपाशी
                                                        पिकाचा खोडवा घेण्याचे टाळावे. <br>
                                                        २) दरवर्षी पिकाची फेरपालट करावी. <br>
                                                        ३) कपाशीचे पिक दाटणार नाही यांची काळजी घ्यावी. <br>
                                                        ४) शिफारशी पेक्षा जास्त नत्र खताचा वापर टाळावा. <br>
                                                        ५) बांधावरील तसेच शेताच्या सभोवताल पर्यायी खाद्य वनस्पतीवरील
                                                        पिठ्या ढेकूण किडीचा वेळीच बंदोबस्त करावा. <br>
                                                        ६) वेळोवेळी आंतरमशागत करून पीक तणविरहीत ठेवावे. <br>
                                                        ७) या किडीचे नैसर्गिक शत्रु किटक (परभक्षक) जसे लेडी बिटल,
                                                        क्रायसोपा, क्रीप्टोलेमस तसेच ब्रुमस स‌लॅरीस भुंगा व परोपजीवी
                                                        कीटक ॲनॅशिअस प्रजाती इ. ची पूरेशी संख्या आढळून आल्यास, रासायनिक
                                                        किटकनाशकांचा वापर टाळावा. <br>

                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect21" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            बोंडअळ्या
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect21" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">
                                                <!-- <tr><th colspan="2" class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">बोंडअळ्या</th> -->
                                                </tr>

                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> <b>१)
                                                       ठिपक्याची बोंडअळी</b></td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0">
                                                        अळीचा रंग करडा असून डोके गर्द रंगाचे असते. अंगावर बरेच काळे व
                                                        बदामी ठिपके असतात. कपाशीला पात्या येण्याचे अगोदर ही अळी प्रथम
                                                        कोवळ्या शेंड्यांना छिद्र पाडून पोखरून खाते. त्यामुळे असे शेंडे
                                                        सुकून नंतर वाळतात. पात्या आल्यावर अळी पात्या, कळ्या, फुले आणि
                                                        बोंडांना नुकसान पोहचविते. यामुळे त्यांची गळ होते.</td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b>२)
                                                        हिरवी बोंडअळी  </b>     </td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0"> अळी
                                                        रंगाने हिरवट असून तिच्या कडेला तुटक गर्द करड्या रेषा असतात. लहान
                                                        अळ्या पात्या व कळ्यांना नुकसान पोहचवितात. मोठ्या अळ्या बोंडांना
                                                        छिद्र पाडून आतील भाग खाऊन पोकळ करतात. या अळीने केलेली छिद्रे
                                                        अनियमित गोल व तुलनात्मकदृष्टया मोठी असतात. बरेचदा अळीचा अर्धा
                                                        भाग बोंडाच्या बाहेर असतो. प्रादूर्भावग्रस्त पात्या व लहान बोंडे
                                                        गळून पडतात. प्रादूर्भावग्रस्त मोठी बोंडे जी झाडावर राहतात ती
                                                        पावसाच्या पाण्यामुळे सडतात व त्यातील रूईची प्रत खालावते.</td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b>
                                                        व्यवस्थापन     </b>     </td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0"> १.
                                                        पेरणीनंतर ४० ते ४५ दिवसानी बोंडअळ्यांची अंडी शेतात दिसू लागताच
                                                        ट्रायकोग्रामा चिलोनीस या परोपजीवी किटकाची अंडी हेक्टरी १ ते १.५
                                                        लाख याप्रमाणात दर आठवड्याने तीन ते सहा वेळा कपाशीच्या शेतात
                                                        लावावीत. यावेळी किटकनाशकाची फवारणी करू नये. <br>
                                                        २. कपाशीच्या पिकावर फक्त हिरव्या बोंडअळीचा प्रादुर्भाव आढळून
                                                        आल्यास, हिरव्या बोंडअळीचा विषाणू (एच.ए.एन.पी.व्ही.) २५० एल.ई.
                                                        प्रति हेक्टरी याप्रमाणे एक हेक्टर क्षेत्राला लागणाऱ्या पाण्यात
                                                        मिसळून पिकावर फवारणी करावी. या फवारणीचे द्रावणात राणीपाल १ ग्रॅम
                                                        प्रति १० लिटर याप्रमाणे मिसळावे. <br>
                                                        ३. निंबोळी अर्क ५ टक्के किंवा निंबोळी अर्क ५ टक्के अधिक शिफारस
                                                        केलेल्या कोणत्याही एका किटकनाशकाची अर्धी मात्रा मिसळून
                                                        बोंडअळ्यांचे नियंत्रणासाठी फवारणी करावी. <br>
                                                        ४. कपाशीवरील अमेरिकन आणि ठिपक्याच्या बोंडअळीचे व्यवस्थापनासाठी
                                                        स्पीनोसॅड ४५ एस.सी. २.२२ मि.ली. प्रती १० लिटर पाणी आणि गुलाबी
                                                        बोंडअळीचे व्यवस्थापनासाठी बिटा सायफ्ल्यूथ्रीन २.५ टक्के प्रवाही
                                                        ०.००२५ टक्केच्या १० मि.ली. प्रति १० लिटर पाण्यात मिसळून फवारणी
                                                        करावी. <br>
                                                        ५. सर्वेक्षणांती बोंडअळ्यांनी पात्या, फुले आणि बोंडांवर ५ टक्के
                                                        नुकसानीची मर्यादा गाठल्याचे आढळून आल्यास पुढे दिलेल्या लेबल
                                                        क्लेम तक्त्यामधील किटकनाशकापैकी कोणत्याही एका किटकनाशकाची १०
                                                        लिटर पाण्यात मिसळून फवारणी करावी.
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b> ३)
                                                        गुलाबी बोंडअळी  </b>      </td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0">
                                                        अंड्यातून निघालेली अळी रंगाने पांढुरकी तर पूर्ण वाढलेली अळी
                                                        गुलाबी रंगाची असते. अळी फुले व हिरव्या बोंडांना नुकसान पोहचविते.
                                                        ज्या फुलांमध्ये ही अळी असते, अशी फुले अर्धवट उमललेल्या
                                                        गुलाबाच्या कळीसारखी दिसतात. यालाच 'डोमकळी' म्हणतात. या अळीचा
                                                        प्रादुर्भाव बोंडामध्ये जास्त प्रमाणात आढळून येतो. अंड्यातून
                                                        निघालेली अळी बोंडात शिरल्यानंतर हे छिद्र बंद होते. त्यामुळे
                                                        बोंडाचे वरून निरीक्षण केल्यानंतर सुध्दा अळीचा प्रादुर्भाव ओळखता
                                                        येत नाही. अळी अवस्था बोंडामध्ये पूर्ण झाल्यानंतरच ही अळी
                                                        कोषावस्थेत जाण्यासाठी बोंडाला छिद्र करून बाहेर पडते. अशी
                                                        प्रादुर्भावग्रस्त बोंडे परिपक्क न होताच फुटतात. त्यामुळे कापसाची
                                                        प्रत बिघडते. गुलाबी बोंडअळी बोंडात राहून सरकीचेही नुकसान करते.
                                                        त्यामुळे बियाण्याची उगवणशक्ती आणि तेलाच्या प्रमाणात घट होते.
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b>
                                                        कपाशीवरील गुलाबी बोंडअळीचे एकात्मिक व्यवस्थापन (IPM)  </b> </td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0"> १.
                                                        पिकाचा हंगाम डिसेंबर पर्यंत संपवून किडग्रस्त बोंडासहीत
                                                        पहऱ्हाट्याची सेंद्रिय खतासाठी विल्हेवाट लावावी. <br>
                                                        २. कापूस संकलन केंद्रे व जिनिंग फॅक्टरीमधये १५ ते २० कामगंध
                                                        सापळे (डिसेंबर ते जुलैपर्यंत) लावून पतंगाचा मोठ्या प्रमाणावर
                                                        नायनाट करावा. <br>
                                                        ३. हंगाम संपल्या बरोबर लगेच खोल नांगरणी करावी म्हणजे पतंगाचे
                                                        जमिनीतील कोष उन्हाने किंवा पक्षाचे पक्ष होवून नष्ट होतील. <br>
                                                        ४. पूर्व मान्सुन पेरणी शक्यतो टाळून हंगामात वेळेवर (जुन ते
                                                        जुलैचा १ ला आठवडा) पेरणी करावी. <br>
                                                        ५. पानावर लव असलेल्या लवकर / मध्यम कालावधीच्या बीटी कपाशीचे
                                                        वाणाची निवड करून त्यासोबत बिगर बिटी (रेफ्युजी) चा वापर करावा.
                                                        <br>
                                                        ६. कोरडवाहू बीटी कपाशीची पेरणी चौफुलीवर करावी (३४१.५ फुट किंवा
                                                        जमिनीच्या मगदा‌नुसार योग्य अंतर निवडावे) <br>
                                                        ७. नत्र खताचा संतुलीत वापर करावा. <br>
                                                        ८. कपाशीला पात्या लागण्यास सुरूवात झाल्यानंतर पिकामध्ये एकरी २
                                                        फेरोमोन सापळे या प्रमाणे लावावे, वेष्टणावरील सुचणे नुसार विशिष्ट
                                                        कालावधीत वड्या (ल्युर) बदलाव्या व दर आठवड्याने पतंग मोजून नष्ट
                                                        करावे. <br>
                                                        ९. कपाशीला पात्या आल्यानंतर ७ ते ८ वेळा पिकामध्ये दर १०
                                                        दिवसानंतर ट्रायकोग्रामा बँक्ट्री या परोपजीवी मित्रकिटक असलेले
                                                        ट्रायकोकार्ड एकरी ३ कार्ड याप्रमाणे लावावे म्हणजे बोंड अळ्यांचा
                                                        अंडी अवस्थेत नायनाट होईल. <br>
                                                        १०. फुलाच्या अवस्थेत दर आठवड्याने डोमकळ्या (गुलाबी बोंड अळी
                                                        ग्रस्त फुले) शोधून नष्ट कराव्या. <br>
                                                        ११. फुले व प्रामुख्याने बोंड धरण्याचे अवस्थेत ५ टक्के निंबोळी
                                                        अर्क किंवा शिफारशीत निम किटकनाशके (अझाडिरेक्टीन) किंवा जैविक
                                                        बुरशीनाशक (पुरेशी आर्द्रता असतांना) बिव्हेरीया बॅसीयाना १.१५
                                                        टक्के डब्ल्युपी ५० ग्रॅ/१० लिटर पाणी याप्रमाणे एक फवारणी करावी.
                                                        <br>

                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b>
                                                        सर्वेक्षण </b>      </td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0">
                                                        पात्या व फुले अवस्थेत किमान दर आठवड्याने शेताचे प्रतिनिधित्व
                                                        करतील अशी २० झाडे निवडून त्यावरील एकुण व प्रादुर्भावग्रस्त फुले
                                                        (डोमकळ्या) / पात्या/बोंडे मोजून ५ ते १० टक्के प्रादुर्भावाचे
                                                        प्रमाण आढळल्यास तसेच प्राधान्याने बोंडावस्थेत २० हिरवी बोंडे
                                                        तोडून (प्रत्येक झाडावरील एक याप्रमाणे) त्यात ५ ते १० टक्के ।
                                                        प्रादुर्भावग्रस्त बोंडे किंवा २० पैकी २ बोंडात गुलाबी / पांढऱ्या
                                                        अळया असल्यास आर्थिक नुकसान संकेतपातळी समजून रासायनिक
                                                        किटकनाशकांचा वापर करावा. <br>
                                                        १३. मोनोक्रोटोफॉस, ट्रायझोफॉस सारखे बहुआयामी तसेच खुप विषारी
                                                        किटकनाशके कपाशीच्या सुरूवातीच्या अवस्थेत (पहिले ६० दिवसात) वापर
                                                        करू नये त्यामुळे नैसर्गिक शत्रु किटक मारल्या जाऊन किडींचा उद्रेक
                                                        होण्याची शक्यता असते.

                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b>
                                                        रासायनिक किटकनाशके   </b> </td>
                                                    <td class="col-md-9 text-dark border border-dark border-top-0">
                                                        गुलाबी बोंडअळी आर्थिक नुकसान संकेत पातळी गाठल्यास रासायनिक
                                                        किटकनाशकांचा वापर करावा. त्यामध्ये  क्विनॉलफॉस २५ टक्के ए एफ २५
                                                        मि.ली. किंवा क्लोरपायरीफॉस २० टक्के प्रवाही २५ मि.ली. किंवा
                                                        फेनप्रोपॅथ्रीन १०/३० टक्के प्रवाही ७.५ ते १०/२.५ ते ३.४ मि.ली.
                                                        किंवा सायपरमेथ्रीन १० टक्के प्रवाही ७.६ मि.ली. किंवा
                                                        क्लोरॅट्रॅलीनीप्रोल ९.३ टक्के लॅम्बडा सायहॅलोथ्रीन ४.६ टक्के झेड
                                                        सी ५ मि.ली. किंवा क्लोरपायरीफॉस ५० टक्के सायपरमेथ्रीन ५ टक्के
                                                        प्रवाही १० मि.ली. (किटकनाशकांचे प्रमाण १० लिटर पाण्यासाठी)
                                                        टीप : पायरेथ्राईड वर्गातील किटकनाशके खबरदारी म्हणून त्यांचा
                                                        कपाशीचे पीक ७० ते ७५ दिवसांचे झाल्यानंतरच एक किंवा दोन वेळा वापर
                                                        करावा. पायरेथ्राईडच्या अधिक वापरामुळे पांढऱ्या माशीचा
                                                        प्रादुर्भाव वाढण्याची शक्यता असते.

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect22" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            कपाशीवरील पीक संरक्षण खर्चात बचत तसेच किडीच्या प्रभावी व्यवस्थापनासाठी खालील
                                            बाबींकडे कटाक्षानेलक्ष द्यावे.
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect22" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">
                                                <!-- <tr><th class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">कपाशीवरील पीक संरक्षण खर्चात बचत तसेच किडीच्या प्रभावी व्यवस्थापनासाठी खालील बाबींकडे कटाक्षानेलक्ष द्यावे.</th>
                            </tr> -->

                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> १.
                                                        किटकनाशकाचा वापर गरजेनुसार म्हणजेच किडींनी आर्थिक नुकसानीची
                                                        पातळी गाठल्यानंतरच करावा, <br>
                                                        २. प्रत्येक फवारणीचे वेळी एकच एक किटकनाशक न वापरता आलटून पालटून
                                                        वापरावे. <br>
                                                        ३. कपाशीवरील रस शोषण करणाऱ्या किडी, बोंडअळ्या आणि पांढरी माशी
                                                        यांच्या नियंत्रणासाठी दिलेल्या किटकनाशकाचे प्रमाण साध्या
                                                        पंपासाठी आहे. पॉवर स्प्रेअर वापरायचा असल्यास पाण्याचे प्रमाण
                                                        कायम ठेवून किटकनाशकाचे प्रमाण तीनपट करावे.
                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td
                                                        class=" text-dark border border-dark border-top-0 text-bold">
                                                        कोरडवाहू कपाशीवरील किडींचे परिणामकारक, प्रभावी आणि किफायतशीर
                                                        व्यवस्थापनासाठी खालील सुधारित एकीकृत कीड व्यवस्थापन संचाचा अवलंब
                                                        करण्याची शिफारस विद्यापीठाद्वारे २००३-०४ या वर्षी करण्यात आलेली
                                                        आहे.
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0 "> १)
                                                        थायोमेथोक्झाम ७० डब्ल्यू.एस. ४.२८ ग्रॅम प्रति किलो बियाणे या
                                                        प्रमाणात पेरणीपूर्वी बीज प्रक्रिया. <br>
                                                        २) रस शोषक किडींकरिता आर्थिक नुकसानीच्या पातळीवर आधारित
                                                        अॅसिटामिप्रीड २० एस.पी. १५ ग्रॅम क्रियाशील घटक प्रति हेक्टर या
                                                        प्रमाणात एक फवारणी. <br>
                                                        ३) उगवणीनंतर ४५ ते ५० आणि ५५ ते ६० दिवसानी अशी दोन वेळा
                                                        ट्रायकोग्रामा चिलोनीसची अंडी हेक्टरी दीड लाख या प्रमाणात कपाशीचे
                                                        शेतात सोडणे. <br>
                                                        ४) बोंडअळ्यांसाठी आर्थिक नुकसानीच्या पातळीवर आधारित अनुक्रमे
                                                        निमार्क ३०० पीपीएम ५० मि.ली., स्पीनोसॅड ४५ एस.सी. २.२२ मि.ली.
                                                        आणि बिटा-सायफ्ल्यूथ्रीन २.५ टक्के प्रवाही १० मि.ली. १० लिटर
                                                        पाण्यात मिसळून आवश्यकतेनुसार सलग एकेक फवारणी.

                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0 ">
                                                        कोरडवाहू बीटी कपाशीवरील एकात्मिक कीड व्यवस्थापनाची खालीलप्रमाणे
                                                        शिफारस करण्यात येत आहे.
                                                    </td>
                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0 ">१)
                                                        स्वच्छता मोहिम आणि मार्च / एप्रिल महिन्यात जमिनीची खोल नांगरणी.
                                                        <br>
                                                        २) कपाशीच्या सभोवती मका, चवळी, झेंडू व एरंडी या मिश्र सापळा
                                                        पिकाची एक ओळ. <br>
                                                        ३) पिक उगवल्यानंतर १०५ दिवसांनी ५ टक्के निंबोळी अर्काची फवारणी.
                                                        <br>
                                                        ४) पिक उगवल्यानंतर ११५ दिवसांनी ट्रायकोग्रॅमाटॉयडीया बॅक्ट्रीया
                                                        परोपजीवी किटकाचे १.५ लक्ष अंडी प्रति हेक्टर या प्रमाणात प्रसार
                                                        करावा. <br>
                                                        ५) पिक उगवल्यानंतर १२५ दिवसांनी हेक्टरी १०-१२ पिवळी चिकट
                                                        सापळ्याचा वापर. <br>
                                                        ६) पिक उगवल्यानंतर १४० दिवसांनी थायोडिकार्ब ७५ टक्के १ किलो ५००
                                                        लि. पाणी याप्रमाणात फवारणी. <br>
                                                        ७) अळ्या व किडग्रस्त भागाचा नायनाट. <br>
                                                        ८) किडींनी आर्थिक नुकसान संकेत पातळी गाठल्यानंतर शिफारशीप्रमाणे
                                                        रासायनिक किटकनाशकांचा वापर. <br>

                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect23" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            कपाशीवरील रोग व त्यांचे व्यवस्थापन
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect23" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border-left border-dark m-0">
                                                <!-- <tr><th colspan="4" class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">कपाशीवरील रोग व त्यांचे व्यवस्थापन</th>
                            </tr> -->

                                                <tr class=" border">
                                                    <td class="col-md-2 text-dark border border-dark border-top-0"><b> रोग</b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"><b>
                                                        लक्षणे</b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"><b>
                                                        नियंत्रण/उपाय</b>
                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td class="col-md-2 text-dark border border-dark border-top-0">
                                                      <b> अणुजीवी करपा</b> 
                                                        </v>
                                                    <td class=" text-dark border border-dark border-top-0"> • हा
                                                        रोग क्झांथोमोनास  ऑक्झॉनोपोडीस पॅथोव्होर मालवासियारम या
                                                        अणुजीवामुळे होतो. <br>
                                                        • रोगाचा प्रसार रोगग्रस्त बियाणे अथवा रोगग्रस्त जमिनीतून होतो.
                                                        रोगामुळे पानावर प्रथम कोनात्मक,. तेलकट स्वरूपाचे व नंतर काळसर
                                                        तपकिरी रंगाचे ठिपके दिसतात. <br>
                                                        • पानाच्या शिरा व झाडाच्या फांद्या काळ्या पडतात. कालांतराने पाने
                                                        गळून पडतात. बोंडावर तेलकट, काळपट डाग पडतात. <br>
                                                        • बोंडे उमलत नाहीत. बोंडातील कापूस पिवळा पडून त्याची प्रत
                                                        खालावते <br>

                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">१)
                                                        नियंत्रणाकरिता कारबोक्झिन (व्हिटॅव्हॅक्स) १ ग्रॅम अधिक थायरम ३
                                                        ग्रॅम प्रति किलो बियाणे याप्रमाणे बीज प्रक्रिया करावी. <br>
                                                        २) दुय्यम संसर्ग टाळण्यासाठी १ ग्रॅम स्ट्रेप्टोसायक्लिन अधिक २५
                                                        ग्रॅम कॉपर ऑक्सीक्लोराईड अधिक १० लिटर पाणी याप्रमाणात घेऊन
                                                        फवारणी करावी. <br>
                                                        ३) रोगाचे प्रमाण व तिव्रता आटोक्यात न आल्यास १० ते १२ दिवसाचे
                                                        अंतराने पुन्हा फवारणी करावी. <br>
                                                        ४) बागायती पिकावर रोगाचे प्रमाण व तिव्रता जास्त आढळून येत
                                                        असल्यामुळे चार फवारण्या करणे आवश्यक ठरते किंवा रोग आढळल्यानंतर
                                                        १० दिवसाचे अंतराने ५ टक्के निंबोळी अर्काच्या तीन फवारण्या
                                                        केल्यास ते अणुजीवी करपा रोगाचे नियंत्रणासाठी स्ट्रेप्टोसायक्लिन
                                                        + कॉपर ऑक्सीक्लोराईडयुक्त रशीनाशकाइतकेच प्रभावी ठरते किंवा
                                                        सुडोमोनास फ्ल्युरोसन्स पी.एफ.-१, १० ग्रॅम प्रति किलो प्रमाणे बीज
                                                        प्रक्रियेसोबत २० ग्रॅम प्रति १० लिटर पाणी या प्रमाणात तीन
                                                        फवारण्या उगवणीनंतर ३०,६० आणि ९० व्या दिवशी कराव्या. <br>

                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td class="col-md-2 text-dark border border-dark border-top-0">
                                                   <b>    पानावरील डाग / चट्टे</b> 
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> • या
                                                        रोगास मायरोथेशियम रोरीडम, अॅल्टरनेरिया मॅक्रोस्पोरा व सरकोस्पोरा
                                                        इत्यादी बुरशी कारणीभूत असतात. <br>
                                                        • रोगामुळे पानावर गोल, पांढरे, रंगीत कडा असणारे, तपकिरी काळपट
                                                        रंगाचे अनियमित स्वरूपाचे ठिपके पडणे व पानामधला भाग गळून पडणे
                                                        इत्यादी लक्षणे दिसतात.


                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">१)
                                                        प्रतिबंधक उपाय म्हणून वर सांगितल्याप्रमाणे बुरशीनाशकांची बीज
                                                        प्रक्रिया करावी. <br>
                                                        २) रोगग्रस्त पिकावर मॅन्कोझेब या बुरशीनाशकाची २५ ग्रॅम, १० लिटर
                                                        पाणी या प्रमाणात घेऊन फवारणी करावी.

                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td class="col-md-2 text-dark border border-dark border-top-0"><b>दहिया    </b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> • हा
                                                        रोग रॅम्युलेरिया गॉसीपॉय या बुरशीमुळे होतो. रोगाचा प्रसार
                                                        बुरशीची रेणूफळे एका ठिकाणावरून दुसऱ्या ठिकाणी हवेव्दारे प्रसारित
                                                        होऊन होतो. <br>
                                                        • पानावर दही शिंपडल्यासारखे पांढरे ठिपके पडतात. जास्त
                                                        प्रादुर्भाव झाल्यास पाने, पात्या, फुले व अपरिपक्क बोंडे गळून
                                                        पडतात.



                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">१)
                                                        रोग नियंत्रणासाठी उपलब्धतेनुसार ३०० मेश गंधकाच्या भुकटीची
                                                        हेक्टरी २०-२५ किलो या प्रमाणात पुरळणी करावी किंवा <br>
                                                        २) पाण्यात मिसळणारे गंधक २५ ग्रॅम, १० लिटर पाणी या प्रमाणात घेऊन
                                                        सकाळी किंवा दुपारनंतर फवारणी करावी किंवा <br>
                                                        ३) कार्बेन्डॉझिम १० ग्रॅम १० लिटर पाणी या प्रमाणात फवारणी
                                                        द्यावी. <br>
                                                        • उन्हाळ्यात जमिनीची खोल नांगरणी करून जमीन तापू देणे. <br>
                                                        • रोगग्रस्त अवशेषांचा नायनाट करणे. <br>
                                                        • तंतूविरहित केलेल्या बियाण्याचा पेरणीसाठी उपयोग करणे. <br>
                                                        • नत्रयुक्त खतांचा अवास्तव वापर थांबविणे. <br>
                                                        • पिकांची फेरपालट करणे. <br>
                                                        • मिश्र/आंतरपिके घेणे इ. बाबी कापूस रोग व्यवस्थापनात महत्वाच्या
                                                        व फायदेशीर ठरतात. <br>


                                                    </td>
                                                </tr>

                                                <tr class=" border">
                                                    <td class="col-md-2 text-dark border border-dark border-top-0">
                                                   <b>   आकस्मिक मर   </b>  
                                                    </td>
                                                    <td class="text-dark border border-dark border-top-0"> हा
                                                        रोग नसून, या रोगाचा कोणत्याही बुरशी, जीवाणु किंवा विषाणु जबाबदार
                                                        नाही.
                                                        दीर्घ पावसाचा खंड नंतर भरपूर पाऊस आणि जमिनीत अतिरिक्त पाण्याची
                                                        साठवण व आर्द्रता यामुळे या रोगाची लक्षणे दिसतात.
                                                        त्यामुळे  झाडावरील संपूर्ण पाने मलुल होऊन खालच्या दिशेने वाकतात
                                                        व झाड मेल्यागत वाटते.
                                                        या रोगाची लक्षणे पीक फुल व बोंड या स्थितीत असतांना दिसतात आणि
                                                        संपूर्ण क्षेत्रात काहीच झाड तशी दिसतात.

                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        याच्या व्यवस्थापनाकरीता कॉपर ऑक्झीक्लोराइड २५ टक्के + युरिया १५०
                                                        ग्रॅ. या प्रमाणे प्रादुर्भावग्रस्त झाडालगत साधारण १०० मि.ली.
                                                        द्रावण पडेल याप्रमाणे बांगडी पध्दतीने देऊन झाडाचे खोड व्यवस्थित
                                                        दाबून घ्यावे.


                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="app-collapse" app-collapse>
                                    <button class="collapse-header-button" aria-expanded="false"
                                        class="collapse-trigger" aria-controls="sect24" id="collapse6id"
                                        indipendente="false" app-collapse-header-btn>
                                        <span class="collapse-title">
                                            कपाशीतील बोंडसड
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 156 82"
                                                class="collapse-icon">
                                                <path class="icon-path-line" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="sect24" role="region" aria-labelledby="collapse6id" class="collapse-panel">
                                        <div class="collapse-panel-inner-wrapper content-text">
                                            <table class="table-responsive table border border-dark m-0">
                                                <!-- <tr><th colspan="2" class="bg-secondary text-light text-center mt-5  mb-0 justify-content-center">कपाशीतील बोंडसड </th></tr> -->


                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> बोंड
                                                        सडण्याचे कारण
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> कपाशीची
                                                        पात्याफुले आणि बोंडे विकसीत होण्याच्या अवस्थेत सततच्या ढगाळ
                                                        वातावरण, सतत पडणारा पाऊस आणि हवामानातील अधिक आर्द्रता असे अशा
                                                        पोषक हवामानात रोगकारक बुरशी, जीवाणु, रस शोषणारे किटक (फुलकिडे व
                                                        तुडतुडे) व हिरव्या/करड्या/लाल रंगाचे ढेकूण घटक बोंड सडण्याला
                                                        पोषक असतात.
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> <b> बोंड
                                                        सडण्याचे प्रकार व लक्षणे   </b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                    </td>


                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> बाह्य बोंडसड
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> या प्रकारात
                                                        मुख्यतः मृतजीवी, काही रोगकारक बुरशी व काही प्रमाणात बोंडावरील
                                                        करपा रोगाला कारणीभूत जिवाणू यांचा समावेश असतो. बोंडे उमलण्याच्या
                                                        प्राथमिक अवस्थेत असे प्रकार साधारणतः आढळून येतात. बहुतेक वेळा
                                                        बोंडावर बुरशीची वाढ झाल्याचे आढळते.
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> आंतरीक
                                                        बोंडसड
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> बोंडावरील
                                                        पाकळ्या चिकटून राहिल्याने बोंडाच्या पृष्ठभागावर ओलसरपणा राहतो.
                                                        अशा ठिकाणी जीवाणुजन्य रोगाचा प्रादुर्भाव होण्यास मदत होते.
                                                        कळ्यांवर व बोंडावरील रसशोषणारे ढेकूण यांचा प्रादुर्भाव या
                                                        घटकांमुळे आंतरीक बोंड सडण्याची समस्या दिसून येते. बोंडाच्या बाह्य
                                                        भागावर बुरशीची वाढ साधारणतः आढळून येत नाही. अशी बोंडे फोडून
                                                        पाहिली असता जीवाणूंच्या प्रादुर्भावाने आतील रूई पिवळसर ते गुलाबी
                                                        तपकिरी रंगाची किंवा डागाळलेली दिसून येते.
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> उपाययोजना
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> * नत्रयुक्त
                                                        खतांचा अतिवापर टाळावा. <br>
                                                        * चांगल्या व्यवस्थापन पध्दतीव्दारे कापूस पिकाची अतिवाढ रोखावी.
                                                        <br>
                                                        * शेतातून पाण्याचा योग्य निचरा होण्याची सोय करावी. <br>
                                                        * पिकाची लागवड शिफारस केलेल्या अंतरावर करावी. <br>
                                                        * पात्या, फुले आणि बोंडे विकसीत होण्याच्या अवस्थेत रस शोषणारे
                                                        किटक (फुलकिडे व तुडतुडे) व हिरव्या, करड्या तसेच लाल रंगाचे ढेकूण
                                                        या किडीच्या नियंत्रणासाठी वेळेत योग्य उपाययोजना कराव्यात.

                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> <b> बोंडसड
                                                        नियंत्रणाचे रासायनिक उपाय ( खालीलपैकी कोणतेही एक बुरशीनाशकाची
                                                        फवारणी करावी.)</b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">बुरशीनाशकाचे
                                                        नाव
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> मात्रा/१०
                                                        लिटर पाणी
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"> <b> आंतरीक
                                                        बोंडसड</b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">कॉपर
                                                        ऑक्सीक्लोराईड (५०% डब्ल्यूपी)+ स्ट्रेप्टोमायसीन सल्फेट
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> २५ ग्रॅम +
                                                        १ग्रॅम
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0"><b> बाह्य बोंडसड    </b>
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">प्रोपीकोनाझोल
                                                        (२५ ईसी) किंवा
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> १० मि.ली.
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        पायराक्लोस्रोबीन (२०% डब्ल्यु.जी.) किंवा
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0">
                                                        प्रोपीकोनाझोल (२५ ईसी) किंवा
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">मेटीराम (५५%)
                                                        + पायराक्लोस्ट्रॉबीन (५% डब्ल्यु.जी.) किंवा
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> २० ग्रॅम
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">
                                                       ॲझोक्सीस्ट्रोबिन (१८.२% डब्ल्यु/डब्ल्यू) + डायफेनोकोनॅझोल
                                                        (११.४% एस.सी.) किंवा
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> १० मि.ली.
                                                    </td>

                                                </tr>
                                                <tr class=" border">
                                                    <td class=" text-dark border border-dark border-top-0">प्रोपीनेब
                                                        (७०% डब्ल्यु.पी.)
                                                    </td>
                                                    <td class=" text-dark border border-dark border-top-0"> २५ ते ३०
                                                        ग्रॅम
                                                    </td>

                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>



                            <!-- <h5>Completely Responsive</h5>
                                <img class="alignleft blog-side-img" src="images/blog/grid/pic4.jpg" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only                                 
                                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                                    Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                    It was popularised in the 1960s with the releasefive centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                    It was popularised in the 1960s with the release</p>
                                <div class="dez-divider bg-gray-dark"></div>
                                <img class="alignright blog-side-img" src="images/blog/grid/pic1.jpg" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only                                 
                                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                                    Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                    It was popularised in the 1960s with the release</p>
                            
                            <div class="dez-post-tags clear">
                                <div class="post-tags">
									<a href="javascript:void(0);">Child </a> 
									<a href="javascript:void(0);">Eduction </a> 
									<a href="javascript:void(0);">Money </a> 
									<a href="javascript:void(0);">Resturent </a> 
								</div>
                            </div> -->
                            <div class="dez-divider bg-gray-dark op4"><i class="icon-dot c-square"></i></div>
                            <div class="share-details-btn">
                                <ul>
                                    <li>
                                        <h5 class="m-a0">Share Post</h5>
                                    </li>
                                    <li><a href="javascript:void(0);" class="site-button facebook button-sm"><i
                                                class="fa fa-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0);" class="site-button google-plus button-sm"><i
                                                class="fa fa-google-plus"></i> Google Plus</a></li>
                                    <li><a href="javascript:void(0);" class="site-button linkedin button-sm"><i
                                                class="fa fa-linkedin"></i> Linkedin</a></li>
                                    <li><a href="javascript:void(0);" class="site-button instagram button-sm"><i
                                                class="fa fa-instagram"></i> Instagram</a></li>
                                    <li><a href="javascript:void(0);" class="site-button twitter button-sm"><i
                                                class="fa fa-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0);" class="site-button whatsapp button-sm"><i
                                                class="fa fa-whatsapp"></i> Whatsapp</a></li>
                                </ul>
                            </div>
                            <!-- </div> -->
                            <!-- <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
                                <h2 class="comments-title">8 Comments</h2>
                                <div class="clearfix m-b20">
                                     comment list END 
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic1.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neqnsectetur adipiscing elit. Nam viae neqnsectetur adipiscing elit.
                                                    Nam vitae neque vitae sapien malesuada aliquet. </p>
                                                <div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment odd parent">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic2.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                        <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
                                                            In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
                                                            ac elementum ligula blandit ac.</p>
                                                        <div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
                                                    </div>
                                                    <ol class="children">
                                                        <li class="comment odd parent">
                                                            <div class="comment-body">
                                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic3.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                                <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
                                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
                                                                    ac elementum ligula blandit ac.</p>
                                                                <div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                     list END 
                                                </li>
                                            </ol>
                                            list END 
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic1.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
                                                    ac elementum ligula blandit ac.</p>
                                                <div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic2.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
                                                    ac elementum ligula blandit ac.</p>
                                                <div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic3.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
                                                    ac elementum ligula blandit ac.</p>
                                                <div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                        </li>
                                    </ol> -->
                            <!-- comment list END -->
                            <!-- Form -->
                            <!-- <div class="comment-respond" id="respond">
                                        <h4 class="comment-reply-title" id="reply-title">Leave a Reply <small> <a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h4>
                                        <form class="comment-form" id="commentform" method="post" action="http://sedatelab.com/developer/donate/wp-comments-post.php">
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" value="Author" name="Author"  placeholder="Author" id="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="text" value="email" placeholder="Email" name="email" id="email">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="url">Website</label>
                                                <input type="text"  value="url"  placeholder="Website"  name="url" id="url">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Comment</label>
                                                <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Post Comment" class="submit site-button" id="submit" name="submit">
                                            </p>
                                        </form>
                                    </div> -->
                            <!-- Form -->
                        <!--</div>-->
                    </div>
                </div>
                <!-- blog END -->
            <!--</div>-->
            <!-- Left part END -->
            <!-- Side bar start -->
            <!--  -->
             <div class="col-lg-4 col-md-5 sticky-top">
                        <aside  class="side-bar">
                           
                             <div class="widget recent-posts-entry">
                                <h6 class="widget-title style-1">Recent Posts</h6>
                                <div class="widget-post-bx">
                                    <!--<div class="widget-post clearfix">-->
                                    <!--    <div class="dez-post-media"> <img src="images/blog/cotton_logo.jpeg" width="200" height="143" alt=""> </div>-->
                                    <!--    <div class="dez-post-info">-->
                                    <!--        <div class="dez-post-header">-->
                                    <!--            <h6 class="post-title"><a href="cotton_blog">कापूस लागवड तंत्रज्ञान</a></h6>-->
                                    <!--        </div>-->
											
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="images/blog/Picture1.jpg" width="200" height="160" alt=""> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title"><a href="blog-details-1">धान लागवड तंत्रज्ञान </a></h6>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="images/blog/Picture3.png" width="200" height="160" alt=""> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title"><a href="blog-details-2">सोयाबीन लागवड तंत्रज्ञान</a></h6>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="images/blog/Picture4.jpg" width="200" height="160" alt=""> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title"><a href="blog-details-3"> मिरची लागवड तंत्रज्ञान</a></h6>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="images/blog/picture16.jpg" width="200" height="160" alt=""> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title"><a href="blog-details-4">     तूर पिकाचे सुधारीत लागवड तंत्रज्ञान       </a></h6>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
							
						
							
            </aside>
        </div>
        <!-- Side bar END -->
    </div>
    </div>
    </div>
    </div>
    <!-- Content END-->
    <!-- Modal Box -->
    <div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body row m-a0 clearfix">
                    <div class="col-lg-6 col-md-6 overlay-primary-dark d-flex p-a0"
                        style="background-image: url(images/background/bg3.jpg);  background-position:center; background-size:cover;">
                        <div class="form-info text-white align-self-center">
                            <h3 class="m-b15">Login To You Now</h3>
                            <p class="m-b15">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                has been the industry.</p>
                            <ul class="list-inline m-a0">
                                <li><a href="#" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-a0">
                        <div class="lead-form browse-job text-left">
                            <form>
                                <h3 class="m-t0">Personal Details</h3>
                                <div class="form-group">
                                    <input value="" class="form-control" placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <input value="" class="form-control" placeholder="Mobile Number" />
                                </div>
                                <div class="clearfix">
                                    <button type="button" class="btn-primary site-button btn-block">Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box End -->
    <!-- Footer -->
    <?php 
	require_once "footer.php";
?>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up"></button>
    </div>


    <script>
        //app-collapse

        const collapses = document.querySelectorAll("[app-collapse-header-btn]");

        const handleInitCollapse = (btnElement, parentEle) => {
            const collapses = parentEle.querySelectorAll("[app-collapse-header-btn]");
            collapses.forEach(collapse => {
                const isIndipendente = collapse.getAttribute('indipendente') === 'true';
                const controlsId = collapse.getAttribute('aria-controls');
                const contentEl = document.getElementById(controlsId);

                if (!isIndipendente && collapse !== btnElement) {
                    collapse.setAttribute('aria-expanded', false);
                    contentEl.classList.remove('app-collapse-expanded');
                }
            })
        }

        const handleExpandToggle = (event) => {
            // console.log("handle Expand Toggle test log");
            const btnElement = event.currentTarget;
            const controlsId = btnElement.getAttribute('aria-controls');
            const contentEl = document.getElementById(controlsId);
            const parentEle = btnElement.closest("[app-accordian]");
            const indipendente = btnElement.getAttribute('indipendente') === 'true';

            if (!indipendente && parentEle) {
                handleInitCollapse(btnElement, parentEle);
            }

            let open = btnElement.getAttribute('aria-expanded') === 'true';
            if (open) {
                btnElement.setAttribute('aria-expanded', `${!open}`);
                contentEl.classList.remove('app-collapse-expanded');
            } else {
                btnElement.setAttribute('aria-expanded', `${!open}`);
                contentEl.classList.add('app-collapse-expanded');
            }

        }
        collapses.forEach(collapse => collapse.addEventListener('click', handleExpandToggle));
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
</body>

</html>