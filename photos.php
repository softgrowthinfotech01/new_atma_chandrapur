
<?php $active ='Photos'; ?>

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
	<title>छायाचित्र | आत्मा चंद्रपूर </title>
	
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
      height: 300px;
      box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      z-index: 1;
      display: block;
      background-color: white;
      border-radius: 15px;
    }

    .cards {
      box-sizing: border-box;
      width: 100%;
      height: 100%;
      padding: 40px 20px;
      background: #b5eb54;
      box-shadow: 12px 17px 51px #b5eb54;
      backdrop-filter: blur(6px);
      border-radius: 17px;
      text-align: center;
      cursor: pointer;
      transition: all 0.5s;
      display: flex;
      align-items: center;
      justify-content: center;
      user-select: none;
      font-weight: bolder;
      color: black;
      font-size: 20px;
    }

    .cards:hover {
      border: 1px solid black;
      transform: scale(1.05);
    }

    .cards:active {
      transform: scale(0.95) rotateZ(1.7deg);
    }

    .card-wrapper {
      display: flex;
      justify-content: center;
      padding-left: 10px;
      padding-right: 10px;
    }

    .gallery-section {
      display: none;
    }

   .gallery ul {
  list-style: none;
  padding: 0;
  margin: 2rem auto;
  display: grid;
  gap: 1.5rem;
  grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); 
  max-width: 800px;
}


    .gallery figure {
      margin: 0;
      position: relative;
      overflow: hidden;
    }

    .gallery img {
      width: 100%;
      aspect-ratio: 1 / 1;
      object-fit: cover;
      transition: transform 0.8s;
      display: block;
    }

    .gallery figure::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 200%;
      height: 200%;
      background: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transform: scale(2);
      transform-origin: center;
      transition: opacity 0.3s, transform 0.9s;
      border-radius: 50%;
    }

    .gallery figcaption {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      color: white;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.6s, transform 0.6s;
      z-index: 2;
      text-align: center;
      padding: 1rem;
    }

    .gallery a:hover img {
      transform: scale(1.2);
    }

    .gallery a:hover figure::after {
      opacity: 1;
      transform: scale(2.5);
    }

    .gallery a:hover figcaption {
      opacity: 1;
      transform: translateY(0);
      transition: opacity 0.6s 0.4s, transform 0.6s 0.4s;
    }

    .btn-back {
      margin-bottom: 2rem;
    }

    .btn-outline-b5eb54{
        border:1px solid black !important;
    }

    .btn-outline-b5eb54:hover{
        background:#b5eb54 !important;
    }
    </style>
</head>
<body id="bg" class="">
	
<div class="page-wraper">
	<!-- header -->
	<?php 
	require_once "header.php";
?>
   		
  <!-- Header Section -->
<section id="inner-headline" class="py-4" style="background-color:#3e464c;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="text-white m-0">छायाचित्र</h2>
      </div>
    </div>
  </div>
</section>

<!-- Cards -->
<section class="gallery py-5 bg-white" id="cardView">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-4 card-wrapper">
        <div class="cards" onclick="showGallery('vruttapatra')">वृत्तपत्र कात्रण</div>
      </div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-4 card-wrapper">
        <div class="cards" onclick="showGallery('year2023')">सन २०२३ - २४</div>
      </div>
    </div>
  </div>
</section>

<!-- वृत्तपत्र कात्रण Gallary -->
<section class="gallery-section bg-white py-5" id="vruttapatra">
  <div class="container">
    <button class="btn btn-md btn-back btn-outline-b5eb54" onclick="goBack()">← मागे</button>
    <h4 class="mb-4 bg-light p-3">वृत्तपत्र कात्रण</h4>
    <div class="gallery">
      <ul>
        <li>
          <a href="#">
            <figure>
              <img src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?w=400" alt="Volcano">
              <figcaption>Mountains</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="#">
            <figure>
              <img src="https://images.unsplash.com/photo-1633621533308-8760aefb5521?w=400" alt="Bridge">
              <figcaption>Adventure getaways</figcaption>
            </figure>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!--  सन २०२३ - २४ gallary -->
<section class="gallery-section bg-white py-5" id="year2023">
  <div class="container">
    <button class="btn btn-md btn-back btn-outline-b5eb54" onclick="goBack()">← मागे</button>
    <h4 class="mb-4 bg-light p-3">सन २०२३ - २४</h4>
    <div class="gallery">
      <ul>
        <li>
          <a href="#">
            <figure>
              <img src="https://images.unsplash.com/photo-1633635146842-12d386e64058?w=400" alt="Forest">
              <figcaption>Forest escapes</figcaption>
            </figure>
          </a>
        </li>
        <li>
		<a href="#">
			<figure>
				<img src='https://images.unsplash.com/photo-1568444438385-ece31a33ce78?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Person hiking on a trail through mountains while taking a photo with phone'>
				<figcaption>Hiking trails</figcaption>
			</figure>
		</a>
	</li>
      </ul>
    </div>
  </div>
</section>

   



	<!-- Footer -->
  
    <?php 
	require_once "footer.php";
?>
    <!-- Footer END -->


   <!-- JavaScript for toggling views -->
<script>
  function showGallery(id) {
    document.getElementById('cardView').style.display = 'none';
    document.querySelectorAll('.gallery-section').forEach(section => {
      section.style.display = 'none';
    });
    document.getElementById(id).style.display = 'block';
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function goBack() {
    document.getElementById('cardView').style.display = 'block';
    document.querySelectorAll('.gallery-section').forEach(section => {
      section.style.display = 'none';
    });
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

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