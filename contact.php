
<?php $active ='Contact'; ?>

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
	
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- FAVICONS ICON -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
	<link rel="stylesheet" href="css/footer-slider.css">
	<!-- PAGE TITLE HERE -->
	<title>संपर्क | आत्मा चंद्रपूर </title>
	
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<style>

        #content {
    width: 100%;     
    height: 500px;
    box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    z-index: 1;
    display: block;
    background-color: white;
    border-radius: 15px;
}


.bg-faint-dark {
  background-color: #444 !important; 
}



    </style>
</head>
<body id="bg" class="">
	
<div class="page-wraper">
	<!-- header -->
	<?php 
	require_once "header.php";
?>
   		
         <!-- heading -->

    <section id="inner-headline" class=" py-4" style="background-color:#3e464c;">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <h2 class=" text-white start m-0">
             संपर्क
             </h2>
            </div>
           </div>
        </div>
    </section>

     <!-- links -->

  <div class="container my-5">

  <div class="row">
    <!-- Contact Form and Links -->
    <div class="col-md-6">
      <p>
        <a href="pdf/Project Director ATMA Office Contact Number.pdf" target="_blank;" style="color:black;font-weight:bold;">
          <u>View ATMA Office Contact List (Chandrapur District)</u>
        </a>
      </p>
      <p>
        <a href="pdf/DSAO SDAO TAO Contact List.pdf" target="_blank;" style="color:black;font-weight:bold;">
          <u>DSAO SDAO TAO Contact List (Chandrapur District)</u>
        </a>
      </p>

      <form name="sentMessage" id="contactForm" method="post" action="" class="mt-4" >
       
		<h3 style="color:#5AA320; font-weight: bold;">आमच्याशी संपर्क साधा</h3>

        <div class="mb-3 mt-3">
          
          <input type="text" class="form-control" name="contact_full_name" placeholder="Enter Full Name" required>
        </div>

        <div class="mb-3">
          
          <input type="email" class="form-control" name="contact_email" placeholder="Enter Email" required>
        </div>

        <div class="mb-3">
          <label>Enter Your Message Here... (Maximum 100 characters)</label>
          <textarea class="form-control" name="contact_message" rows="6" placeholder="Enter Message" required minlength="5" maxlength="100" style="resize: none;"></textarea>
        </div>

        <div class="text-end mt-3">
  <button type="submit" name="submit" class="btn" style="background-color: #5AA320; color: black; border: 1px solid black;">
    Send
  </button>
</div>
      </form>
    </div>

    <!-- Google Map -->
    <div class="col-md-6">
      <div class="h-100 w-100" style="min-height: 100%;">
        <iframe class="w-100 h-100" frameborder="0" style="border:0;" allowfullscreen
          loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7682563.675960417!2d74.80339470803266!3d19.91379146172766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd2d5ec53f7ada9%3A0xb37c52b7760fe86d!2sProject%20Director%2C%20ATMA%2C%20Chandrapur%20(M.S.)!5e0!3m2!1sen!2sin!4v1583217931960!5m2!1sen!2sin">
        </iframe>
      </div>
    </div>
  </div>
</div>>


	<!-- Footer -->
  
    <?php 
	require_once "footer.php";
?>
    <!-- Footer END -->


   

<!-- font awsome-->
<script src="https://kit.fontawesome.com/a34a653280.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Slick Slider JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  
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