

<!-- <head> -->
 

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    

    .desktop_logo {
      height: 100px;
      padding: 20px 0;
      justify-content: center;
    }

    @media (max-width: 992px) {
      .desktop_logo {
        display: none;
      }
    }

/* Whatsapp */
.whats-app {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 60px;
    right: 15px;
    /* background-color: #25d366; */
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    /* box-shadow: 2px 2px 3px #999; */
    z-index: 999;
     filter: drop-shadow(0 -1mm 2mm rgb(189,151, 72));
}
.my-float {
    margin-top: 16px;
}
.bg-blue {
  background-color :#081536;
  text : white;
}
.text-light {
  color : white;
}
.return{
  color : white !important; 
}

.the {
  background-color :rgb(20, 53, 29);
  border-bottom :1px;
  color : white;
  padding-top :0px;
  padding-bottom :0px;
}
.img {
  height : 120px;
}
.drop{
  color : white;
  /* border-bottom : solid 1px; */
}
.main {
  padding-top :20px;
}

    .nav-link:hover {
      background-color: #e9ecef;
      border-radius: 5px;
    }

    .whats-app {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 60px;
      right: 15px;
      border-radius: 50%;
      text-align: center;
      z-index: 999;
      filter: drop-shadow(0 -1mm 2mm rgb(189, 151, 72));
    }

    .bg-vector{
      background: url("images/vector/leaf-3.png");
  background-position: right;
  background-size: contain;
  background-repeat: no-repeat;
    }
  </style>
  
 <script>
// Add active class to the current button (highlight it)
// var header = document.getElementById("header");
// var btns = header.getElementsByClassName("action");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }
  </script>
<!-- </head>

<body> -->

  
 
      <!-- Top-Section -->

<header class="site-header mo-left header fullwidth" style="align-content:center;">
 <div class="bg-blue text-light py-2 px-3 d-none d-md-block ">
    <div class="container ">
      <div class="row align-items-center">
        <div class="col-md-6 text-start">
          <a href="mailto:pd.atmachandrapur@gmail.com" class="text-dark text-decoration-none return">
            <i class="fa-regular fa-envelope text-light"></i> pd.atmachandrapur@gmail.com
          </a>
        </div>

       
        <div class="col-md-6 d-flex flex-wrap align-items-center justify-content-md-end gap-3 mt-2 mt-md-0">

         
          <!-- <div class="d-flex align-items-center gap-2">
            <button id="btn-decrease" class="btn btn-outline-secondary btn-sm px-2 text-light ">A-</button>
            <button id="btn-orig" class="btn btn-outline-secondary btn-sm px-2 text-light ">A</button>
            <button id="btn-increase" class="btn btn-outline-secondary btn-sm px-2 text-light ">A+</button>
          </div> -->

          <div class="d-flex align-items-center gap-1">
           <i class="fa-solid fa-phone text-light "></i>
            <span style="color:white"> 07172-262162, 270163</span>
          </div>
        </div>
      </div>
    </div>
  </div>

          <!-- Heading -->

		 <div class="d-none d-sm-block border-top py-3 bg-blue">
    <div class="container">
      <div class="row align-items-center">

       
        <div class="col-2 text-center">
          <img src="images/atmalogo.png" class="img-fluid img" alt="Atma Logo">
        </div>

        
        <div class="col-8 text-center">
          <h2 class="fw-bold mb-1 text-white" style="font-size: 40px;">
            कृषि तंत्रज्ञान व्यवस्थापन यंत्रणा ( आत्मा )  चंद्रपूर
          </h2>
          <p class="fw-bold mb-0 text-danger" style="font-size: 20px;">" शेतकरी गट करा बळकट "</p>
        </div>

        
        <div class="col-2 text-center">
          <img src="images/KrushiLogo.png" class="img-fluid img" alt="Krushi Logo">
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow bg-success bg-opacity-25">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h5 class="fw-bold mb-1 text-success navbar-toggler border-0 w-75 mx-auto text-start">
            <div class="text-center">
                 कृषि तंत्रज्ञान व्यवस्थापन यंत्रणा ( आत्मा )  चंद्रपूर
            </div>
      </h5>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mx-auto gap-4" >

          <li class="nav-item"><a class="nav-link" href="home"> <b>मुख्य पृष्ठ </b></a></li>

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle text-dark fw-semibold px-2" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">आमच्या विषयी</a>
          <ul class="dropdown-menu the" aria-labelledby="aboutDropdown">
            <li><a class="dropdown-item drop main" href="about-us">आमच्याबद्दल</a></li>
            <li><a class="dropdown-item drop" href="about-us#section1">संस्थात्मक रचना</a></li>
            <li><a class="dropdown-item drop" href="about-us#section2">आत्मा नियामक मंडल</a></li>
            <li><a class="dropdown-item drop" href="district-farmer">जिल्हा शेतकरी सल्लागार समिती</a></li>
            <li><a class="dropdown-item drop" href="taluka-farmer">तालुका शेतकरी सल्लागार समिती</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle text-dark fw-semibold px-2" href="#" id="yojanaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">योजना</a>
          <ul class="dropdown-menu the" aria-labelledby="yojanaDropdown">
            <li><a class="dropdown-item drop" href="scheme_info">माहिती</a></li>
          </ul>
        </li>

        <li class="nav-item drop"><a class="nav-link text-dark fw-semibold px-2" href="news">बातम्या आणि घडामोडी</a></li>
        <li class="nav-item drop"><a class="nav-link text-dark fw-semibold px-2" href="success">यशोगाथा</a></li>
        <li class="nav-item drop"><a class="nav-link text-dark fw-semibold px-2" href="market-rate">बाजार भाव</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark fw-semibold px-2" href="#" id="galleryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">गॅलरी</a>
          <ul class="dropdown-menu the" aria-labelledby="galleryDropdown">
            <li><a class="dropdown-item drop" href="photos">छायाचित्र</a></li>
            <li><a class="dropdown-item drop" href="video">व्हिडिओ</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark fw-semibold px-2" href="#" id="kattDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">शेतकरी कट्टा</a>
          <ul class="dropdown-menu the" aria-labelledby="kattDropdown">
            <li><a class="dropdown-item drop" href="feedback">अभिप्राय</a></li>
            <li><a class="dropdown-item drop" href="e-book">शेतकरी ई-बुक</a></li>
            <li><a class="dropdown-item drop" href="complaint">शेतकरी तक्रार</a></li>
            <li><a class="dropdown-item drop" href="talukas">पिक माहिती</a></li>
          </ul>
        </li>

        <li class="nav-item drop"><a class="nav-link text-dark fw-semibold px-2" href="contact">संपर्क</a></li>

        </ul>
      </div>
    </div>
  </nav>

  </div>
</nav>
								<!-- <a href="#">Blog <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="blog-classic.html" class="dez-page">Classic</a></li>
									
									<li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
								</ul> -->
							<!-- </li>
						</ul>			
                    </div>
                </div>
            </div>-->
        </div> 
        <!-- main header END -->
    </header>
    
    
    
    <!-- <div> -->
<!--  
</body>

</html> -->
