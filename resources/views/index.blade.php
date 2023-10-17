<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MJ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Favicons -->
  <link href="file/images/favicon.png" rel="icon">
  <link href="file/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="file/vendor/aos/aos.css" rel="stylesheet">
  <link href="file/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="file/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="file/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="file/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="file/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->

  <!----maps---->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <link href="file/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171620673-1"></script>


</head>

<style>
  #map{
    height: 290px;
    width: 100%;
  }


  #footer {
    font-size: 14px;
    background: #444444;
  }








  /*--------------------------------------------------------------*/







/* Clients
--------------------------------------------------------------*/
.clients {
  padding: 12px 0;
  text-align: center;
}

.clients img {
  max-width: 45%;
  transition: all 0.4s ease-in-out;
  display: inline-block;
  padding: 15px 0;
  filter: grayscale(100);

}


.clients img:hover {
  filter: none;
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .clients img {
    max-width: 40%;
  }
}

/*--------------------------------------------------------------*/
.client {
    margin-right:  5%;
}
.clients {
    margin-left: 5%
}
.clientt {
    margin-left: 5%
}
.clieent {
    margin-left: 5%
}


/* MODAL
 */

.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: hsla(0, 0%, 0%, 0.5);
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  z-index: 10;
  -webkit-animation: popup 1s ease-in-out 5s forwards;
          animation: popup 1s ease-in-out 5s forwards;
}

@-webkit-keyframes popup {

  0% {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }

  100% {
    opacity: 1;
    visibility: visible;
    pointer-events: all;
  }

}

@keyframes popup {

  0% {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }

  100% {
    opacity: 1;
    visibility: visible;
    pointer-events: all;
  }

}

.modal.closed { display: none; }

.modal-close-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.newsletter-img { display: none; }

.modal-content {
  position: relative;
  max-width: 350px;
  margin: 20px;
  background: white;
  -webkit-border-radius: var(--border-radius-md);
          border-radius: var(--border-radius-md);
  overflow: hidden;
  z-index: 2;
  -webkit-animation: scaleUp 0.5s ease-in-out 5s forwards;
          animation: scaleUp 0.5s ease-in-out 5s forwards;
}

@-webkit-keyframes scaleUp {

  0% { -webkit-transform: scale(0.9); transform: scale(0.9); }
  100% { -webkit-transform: scale(1); transform: scale(1); }

}

@keyframes scaleUp {

  0% { -webkit-transform: scale(0.9); transform: scale(0.9); }
  100% { -webkit-transform: scale(1); transform: scale(1); }

}

.modal-close-btn {
  position: absolute;
  top: 15px;
  right: 15px;
  background: black;
  color: white;
  font-size: 16px;
  padding: 5px;
  -webkit-border-radius: var(--border-radius-sm);
          border-radius: var(--border-radius-sm);
}

.modal-close-btn:hover { opacity: 0.9; }

.modal-close-btn ion-icon { --ionicon-stroke-width: 70px; }

.newsletter {
  padding: 50px 30px;
  text-align: center;
}

.newsletter-header { margin-bottom: 20px; }

.newsletter-title {
  color: red;
  font-size: var(--fs-2);
  font-weight: var(--weight-600);
  margin-bottom: 10px;
}

.newsletter-desc {
  color: black;
  font-size: var(--fs-7);
  line-height: 1.6;
}

.email-field {
  font-size: var(--fs-7);
  padding: 8px 16px;
  -webkit-border-radius: var(--border-radius-sm);
          border-radius: var(--border-radius-sm);
  border: 1px solid var(--cultured);
  margin-bottom: 16px;
}

.btn-newsletter {
  background: red;
  color: white;
  font-size: var(--fs-7);
  font-weight: var(--weight-600);
  text-transform: uppercase;
  padding: 10px 15px;
  -webkit-border-radius: var(--border-radius-sm);
          border-radius: var(--border-radius-sm);
  margin: auto;
  -webkit-transition: var(--transition-timing);
  -o-transition: var(--transition-timing);
  transition: var(--transition-timing);
}

.btn-newsletter:hover { background: red; }


/*--------------------------------------------------------------
  # Contact
  --------------------------------------------------------------*/
  .contact{
    margin-top: 40%;
  }
  .contact .info {
    border-top: 3px solid #47b2e4;
    border-bottom: 3px solid #47b2e4;
    padding: 30px;
    background: #fff;
    width: 100%;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);

  }

  .contact .info i {
    font-size: 20px;
    color: #47b2e4;
    float: left;
    width: 44px;
    height: 44px;
    background: #e7f5fb;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
  }

  .contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #37517e;
  }

  .contact .info p {
    padding: 0 0 10px 60px;
    margin-bottom: 20px;
    font-size: 14px;
    color: #6182ba;
  }

  .contact .info .email p {
    padding-top: 5px;
  }

  .contact .info .social-links {
    padding-left: 60px;
  }

  .contact .info .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #333;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    margin-right: 10px;
  }

  .contact .info .social-links a:hover {
    background: #47b2e4;
    color: #fff;
  }

  .contact .info .email:hover i,
  .contact .info .address:hover i,
  .contact .info .phone:hover i {
    background: #47b2e4;
    color: #fff;
  }

  .contact .emaill {
    width: 100%;
    border-top: 3px solid #47b2e4;
    border-bottom: 3px solid #47b2e4;
    padding: 30px;
    background: #fff;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
  }

  .contact .emaill .form-group {
    padding-bottom: 8px;
  }

  .contact .emaill .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
  }

  .contact .emaill .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
  }

  .contact .emaill .error-message br+br {
    margin-top: 25px;
  }

  .contact .emaill .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
  }

  .contact .emaill .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
  }

  .contact .emaill .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    animation: animate-loading 1s linear infinite;
  }

  .contact .emaill .form-group {
    margin-bottom: 20px;
  }

  .contact .emaill label {
    padding-bottom: 8px;
  }

  .contact .emaill input,
  .contact .emaill textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    border-radius: 4px;
  }

  .contact .email input:focus,
  .contact .emaill textarea:focus {
    border-color: #47b2e4;
  }

  .contact .email input {
    height: 44px;
  }

  .contact .email textarea {
    padding: 10px 12px;
  }

  .contact .email button[type=submit] {
    background: #47b2e4;
    border: 0;
    padding: 12px 34px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
  }

  .contact .email button[type=submit]:hover {
    background: #209dd8;
  }

  @keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

.containerr{
  position:absolute;
  left: 50%;
  transform: translate(-50%,-50%);
  width:1000px;
  height:600px;
  padding: 50px;
  background-color: #f5f5f5;
  box-shadow: 0 30px 50px #dbdbdb;
  margin-top: 20%;
  padding-bottom: 20%;


}
#slidee{
  width: max-content;
  margin-top: 50px;
}
.iteem{
  width:200px;
  height:300px;
  background-position: 50% 50%;
  display: inline-block;
  transition: 0.5s;
  background-size: cover;
  position: absolute;
  z-index: 1;
  top:50%;
  transform: translate(0,-50%);
  border-radius: 20px;
  box-shadow: 0 30px 50px #505050;
}
.iteem:nth-child(1),
.iteem:nth-child(2){
  left: 0;
  top: 0;
  transform: translate(0,0);
  border-radius: 0;
  width: 100%;
  height: 100%;
  box-shadow: none;
}
.iteem:nth-child(3){
  left: 50%;

}
.iteem:nth-child(4){
  left: calc(50% + 220Px);

}
.iteem:nth-child(5){
  left: calc(50% + 440Px);

}
.iteem:nth-child(n+6){
  left: calc(50% + 660Px);
  opacity: 0;

}
.iteem .content{
  position: absolute;
  top: 50%;
  left: 100%;
  width: 300px;
  text-align: left;
  padding: 0;
  color: #eee;
  transform: translate(0,-50%);
  display: none;
  font-family: system-ui;
}
.iteem:nth-child(2) .conteent{
  display:block;
  z-index: 11111;

}
.iteem .name{
  font-size: 40px;
  font-weight: bold;
  opacity: 0;
  animation: showconteent 1s ease-in-out  1 forwards
}
.iteem .des{
  margin: 20px 0;
  opacity: 0;
  animation: showconteent 1s ease-in-out 0.3s 1 forwards
}
.iteem button{
  padding: 10px 20px;
  border:none;
  opacity:0;
  animation: showconteent 1s ease-in-out 0.6s 1 forwards
}
@keyframes showconteent{
  from{
    opacity: 0;
    transform: translate(0,100px);
    filter:blur(33px);
  }
  to{
    opacity: 0;
    transform: translate(0,100px);
    filter:blur(0);
  }
}
.buttons{
  position: absolute;
  bottom: 30px;
  z-index: 222222;
  text-align: center;
  width:100%;
}
.buttons button{
   width: 50px;
   height: 50px;
   border-radius: 50%;
   border:1px solid #555;
   transition: 0.5s;
}
.buttons button:hover{
  background-color: #10100c;
}
/* Testimonials Area css
============================================================================================ */



.wel_item1:hover {
  text-align: center;
  border: 1px  solid  #86e7ff;
  padding: 20px 20px;
  border-radius: 14px;
  background-color: #222222;
  box-shadow: 1.5px 1.5px 0px 0px #2c2b2b;
}

.wel_item1 {
text-align: center;
border: 1px ;
min-height: 100%;
padding: 20px 20px;
border-radius: 5px;
 }


.wel_item1 i {
  padding-bottom: 15px;

  /* padding-left:30%; */
  font-size: 45px;
  background: linear-gradient(to right, #766dff 0%, #86e7ff 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; }




.wel_item1 h4 {
  font-size: 24px;
  font-family: "Heebo", sans-serif;
  font-weight: bold;
  color: #ffffff;
  margin-bottom: 5px;
  margin-top: 10px; }
.wel_item1 p {
  font-size: 16px;
  font-family: "Roboto", sans-serif;
  color: #c7c7c7;
  margin-bottom: 0px; }


.testimonials_area {
  background: #121212;
  margin-top: 40%;
 }

  .testimonials_area.testi_two {
    background: #fff; }

    .testimonials_area.testi_two .testi_inner {
      margin-top: -20px;
      margin-bottom: -20px; }

    .testimonials_area.testi_two .owl-item {
      padding: 20px 0px; }

    .testimonials_area.testi_two .testi_item {
      background: #f9f9ff;
      border-color: #f9f9ff;
      transition: all 300ms linear 0s; }

      .testimonials_area.testi_two .testi_item:hover {
        background: #fff;
        border-color: #fff;
        box-shadow: 0px 10px 30px 0px rgba(153, 153, 153, 0.1); }

.testi_inner .col-lg-3 {
  vertical-align: middle;
  align-self: center; }

.test_title h2 {
  color: rgb(255, 255, 255);
  font-size: 36px;
  font-family: "Roboto", sans-serif;
  font-weight: bold;
  margin-bottom: 12px; }
.test_title p {

  margin-bottom: 0px; }

.testi_item {
  border: 1px solid #eeeeee;
  border-radius: 10px;
  background: #222222;
  padding: 40px 28px; }
  .testi_item p {
    color:#c7c7c7;
    text-align: center;
    font-style: italic; }

    .testi_item h3 {
    color: #edf0f1;
    font-size: 30px;
    font-family: "Outfit";
    text-align: center;
    text-transform: capitalize;
    margin-bottom: 20px; }

  .testi_item h4 {
    color: #c3c3c3;
    font-size: 18px;
    font-weight: lighter;
    font-family: "Montserrat";
    text-align: center;
    text-transform: lowercase;
    margin: -5px 0 10px 0; }
  .testi_item a {
    color: #ffbf00; }

/* End Testimonials Area css
======================================*/




</style>















<body>







   <!-- ======= Header ======= -->
   <div class="overlay" data-overlay></div>

   <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="images/333.jpg" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Anon</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>


   <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">MJR</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#propos">Propos</a></li>
          <li><a class="nav-link scrollto" href="#service">Service</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#equipe">Equipe</a></li>
          <li class="dropdown"><a href="#"><span>Dérouler</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Dérouler 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Profonde Dérouler 1</a></li>
                  <li><a href="#">Profonde Dérouler 2</a></li>
                  <li><a href="#">Profonde Dérouler 3</a></li>
                  <li><a href="#">Profonde Dérouler 4</a></li>
                  <li><a href="#">Profonde Dérouler 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dérouler 2</a></li>
              <li><a href="#">Dérouler 3</a></li>
              <li><a href="#">Dérouler 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
            @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <li>
            <a href="{{ route('login') }}">Log in</a>
        </li>
          <li>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif
          </li>




          </div>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>



  </header><!-- End Header -->


 <!-- ======= hero Section ======= -->
 <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(images/111.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Bienvenue à <span>Maison des jeunes Rouhia</span> </h2>
                <p class="animate__animated animate__fadeInUp">Découvrez la maison de jeunes chez nous</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">inscrivez vous</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(images/1111.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Bienvenue à <span>Maison des jeunes Rouhia</span></h2>
                <p class="animate__animated animate__fadeInUp">Découvrez la maison de jeunes chez nous</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">inscrivez vous</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(images/s3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Bienvenue à <span>Maison des jeunes Rouhia</span></h2>
                <p class="animate__animated animate__fadeInUp"> Découvrez la maison de jeunes chez nous</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">inscrivez vous</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->



  <!-- ======= Hero Section ======= -->
  <!--
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <!--
        <div class="carousel-item active" style="background-image: url(images/photo.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Bienvenue à <span>Maison des jeunes Rouhia</span></h2>
              <p class="animated fadeInUp">  Découvrez la maison de jeunes chez nous</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <!--
        <div class="carousel-item" style="background-image: url(images/s2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Bienvenue à <span>Maison des jeunes Rouhia</span></h2>
              <p class="animated fadeInUp">  Découvrez la maison de jeunes chez nous</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">En savoir plus</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <!--
        <div class="carousel-item" style="background-image: url(images/s3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Bienvenue à <span>Maison des jeunes Rouhia</span></h2>
              <p class="animated fadeInUp">  Découvrez la maison de jeunes chez nous</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">En savoir plus</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->



 <!-- ======= Clients Section ======= -->

 <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row">

        <div class="client col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="images/apec.jpg" class="img-fluid" alt="" height="5%">
        </div>

        <div class="clients col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="images/centre.jpg" class="img-fluid" alt="" height="3%">
        </div>

        <div class="clientt col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="images/banque.jpg" class="img-fluid" alt="" height="3%">
        </div>

        <div class="clieent col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="images/giz.jpg" class="img-fluid" alt="" height="3%">
        </div>


      </div>

    </div>
  </section><!-- End Cliens Section -->




<!------------About-------------->

    <section id="propos" class="about">
        <div class="container">

          <div class="section-title">
            <h2>A propos de nous</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                La Maison Spirituelle des la jeunesse a été créée en 1988 et est classée deuxiéme génération. Sa superficie
                totale est 8720 mètres carrés et la superficie couverte est de 852 mètres
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i>Elle a conclu un accord de partenairat avec l'organisme public GIZ</li>
              <li><i class="ri-check-double-line"></i>Accord avec la Banque Internationale de Développement et les associations locales</li>
              <li><i class="ri-check-double-line"></i>Des formations dans diverses spécialisations (Bureau de formation Makther)
            et également des interventions en préparation de filières externes </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                La Maison Spirituelle de la Jeunesse dispose d'un effectif qui comprend 11 agents de nettoyage ; garde; Réception ; entretien 6 ouvriers de basse-cour 4 activateurs


            </p>
            <a href="#" class="btn-learn-more">Apprendre plus</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us section-bg">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Activités fournis par la <strong>Maison de la Jeunesse</strong></h3>
              <p>
                La Maison de la Jeunesse est une institution qui accueil des jeunes et propose des services
                à caractère culturel, éducatif, récréatif et artistique principalement centrés autour
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Quels sont ces objectifs ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                         Élargir la base de praticiens des loisirs intellectuels, dans le domaine de la culture, des arts, des sciences et des compétences manuelles, parmi les jeunes, et cela en enseignant les principes et les règles des arts du chant, stimulants, dramatiques et autres.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Comment guider lrs jeunes? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                         C'est-à-dire accueillir les jeunes et les écouter dans le but d'œuvrer à les protéger des maux sociaux et de les aider à incarner leurs initiatives dans tous les domaines.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Que signifie le mentorat des jeunes ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                         C'est-à-dire accueillir les jeunes et les écouter pour œuvrer à les protéger des maux sociaux et les aider à mettre en œuvre leurs initiatives dans tous les domaines.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("images/mjr.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
     <!-- ======= Services Section ======= -->

     <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h2>Services</h2>
            <p>Fournir des services à caractère culturel, éducatif, de divertissement et artistique Partiquer des loisirs culturels, artistiques et scientifiqu
            </p>
            </p>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">Activation</a></h4>
                <p class="description">Fournir des services à caractère culturel, éducatif, de divertissement et artistique Partiquer des loisirs culturels, artistiques et scientifiqu
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Activer la jeunesse</a></h4>
                <p class="description"> Beaux-arts, différents sport et théatre Euvrer pour permettre aux jeunes d'exercer et de développer leur identité
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Activités d'éducation et de formation</a></h4>
                <p class="description">Activités destinées aux jeunes sans instruction, telles que la formation professionnelle pour réduire le chomage </p>  </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Manification culturelles et scientifiques</a></h4>
                <p class="description">Rencontres entre institutions culturelles, concours culturels et scientifiques...</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->





















           <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Portfolio</h2>
              </div>
            </div>
          </div>
          <div class="row wesome-project-1 fix">
            <!-- Start Portfolio -page -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">Toute</li>
                  <li data-filter=".filter-app">Peinture</li>
                  <li data-filter=".filter-card">Scène</li>
                  <li data-filter=".filter-web">Sport</li>
                </ul>
              </div>
            </div>
            <div class="row awesome-project-content portfolio-container">

                <!-- portfolio-item start -->
                <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="#"><img src="images/pen2.jpg" alt=""  width="100%" height="300px"/></a>
                      <div class="add-actions text-center">
                        <div class="project-dec">
                          <a class="portfolio-lightbox" data-gallery="myGallery" href="images/pen2.jpg">
                            <h4>Beaux-Arts</h4>

                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- portfolio-item end -->
                <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/sport2.jpg" alt="" width="150%" height="300px" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="sport2.jpg">
                      <h4>Sport</h4>

                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="images/m2.jpg" alt="" width="100%" height="300px" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                  <a class="portfolio-lightbox" data-gallery="myGallery" href="images/m2.jpg">
                    <h4>Scène</h4>

                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- portfolio-item end -->
<!-- portfolio-item start -->
<div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
    <div class="single-awesome-project">
      <div class="awesome-img">
        <a href="#"><img src="images/sport7.jpg" alt="" width="100%" height="300px" /></a>
        <div class="add-actions text-center">
          <div class="project-dec">
            <a class="portfolio-lightbox" data-gallery="myGallery" href="images/sport7.jpg">
              <h4>Sport</h4>

            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/pen4.jpg" alt="" width="100%" height="300px" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="images/pen4.jpg">
                      <h4>Beaux-Arts</h4>

                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="images/sport6.jpg" alt="" width="100%" height="300px" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                  <a class="portfolio-lightbox" data-gallery="myGallery" href="images/sport6.jpg">
                    <h4>Sport</h4>

                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- portfolio-item end -->
    </div>
</div>
</div><!-- End Portfolio Section -->






          <!-- ======= Team Section ======= -->
    <section id="equipe" class="team section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Equipe</h2>



            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="images/monia.jpg" class="img-fluid" alt="" width="100px" height="100px"></div>
                <div class="member-info">
                  <h4>Monia Smii</h4>

                  <p>Club d'éducation a la citoyenneté</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="images/lamia.jpg" class="img-fluid" alt="" width="100px" height="100px"></div>
                <div class="member-info">
                  <h4>Lamia Karoui</h4>

                <p>Club d'anglais et de soft skills</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="images/sonia.jpg" class="img-fluid" alt="" width="100px" height="100px"></div>
              <div class="member-info">
                <h4>Sonia Bahri</h4>

                <p>Chokeball, speedball et sports</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="images/nour.jpg" class="img-fluid" alt="" width="100px" height="100px"></div>
              <div class="member-info">
                <h4>Nour Chourabi</h4>

                <p>Mini-football pour garçons et basket-ball pour filles</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->

<!--<section>
        <div class="containerr">
          <div class="row col-lg-4">
             <div id="slidee col-lg-6">
                <div class="col-md-4 col-sm-4 col-xs-12 iteem" style="background-image: url(images/ne3.jpg);">
                  <div class="conteent">
                    <div class="name">lundev</div>
                    <div class="des">lundev gthkjc yhvjlh</div>
                    <button>see more</button>
                  </div>

                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 iteem" style="background-image: url(images/r1.jpg);">
                  <div class="conteent">
                    <div class="name">lundev</div>
                    <div class="des">lundev gthkjc yhvjlh</div>
                    <button>see more</button>
                  </div>

                </div>
                <div class="iteem" style="background-image: url(images/333.jpg);">
                  <div class="conteent">
                    <div class="name">lundev</div>
                    <div class="des">lundev gthkjc yhvjlh</div>
                    <button>see more</button>
                  </div>

                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 iteem" style="background-image: url(images/444.jpg);">
                  <div class="conteent">
                    <div class="name">lundev</div>
                    <div class="des">lundev gthkjc yhvjlh</div>
                    <button>see more</button>
                  </div>

                </div>
                <div class=" col-md-4 col-sm-4 col-xs-12 iteem" style="background-image: url(images/222.jpg);">
                  <div class="conteent">
                    <div class="name">lundev</div>
                    <div class="des">lundev gthkjc yhvjlh</div>
                    <button>see more</button>
                  </div>

                </div>
                <div class="iteem" style="background-image: url(images/111.jpg);">
                  <div class="conteent">
                    <div class="name">lundev</div>
                    <div class="des">lundev gthkjc yhvjlh</div>
                    <button>see more</button>
                  </div>

                </div>
             </div>
             <div class="buttons">
              <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
              <button id="next"><i class="fa-solid fa-angle-right"></i></button>
             </div>
        </div>
      </div>
</section>
  <!--================Testimonials Area =================-->
  <!--
  <section class="testimonials_area p_120">
    <div class="container">

  <div class="main_title">
         <h1> Workings  </h1>

  </div>
       <div class="testi_inner">
    <div class="testi_slider owl-carousel">
      <div class="item">
        <div class="testi_item">
          <h3>Web Developer</h3>  <h4>WordPress & Contenting</h4>  <p><br>Worked in the website as a junior dev worked in wordpress and content posting where the website is designed in wordpress</p>
          <a href="https://github.com/8bithemant" target="_blank"> <h4>Nlogn</h4> </a>


              <div class="wel_item1">
                <i class="lnr lnr-users"></i>
                <h4>March 2020 To Present</h4>
                <p>Junior Web Dev</p>
              </div>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star-half-o"></i></a>
        </div>
      </div>


      <div class="item">
        <div class="testi_item">
          <h3>Core Web Dev</h3>
          <h4>Full Stack</h4>
          <p> Build and Managing the website built in Mern, where the website is designed on rest api call and the two different servers are used to host website and the security of api is well managed </p>

          <a href="https://github.com/8bithemant" target="_blank"> <h4>All Design Events.CO</h4>  </a>


                <div class="wel_item1">
                  <i class="lnr lnr-users"></i>
                  <h4>May 2020 To Present</h4>
                  <p>Mern Stack Dev</p>
            </div>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star"></i></a>
          <a href="#"><i class="fa fa-star-half-o"></i></a>
        </div>
      </div>
    </div>
      </div>
    </div>
  </section>-->
  <!--================End Testimonials Area =================-->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Rouhia 6150</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+21699608757</p>
              </div>
              <div id="map"></div>
            </div>




          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{url('contact_mail')}}" method="post" role="form" class="emaill">
              {{csrf_field()}}
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Votre nom</label>
                  <input type="text" name="name" class="form-control" id="name"placeholder="Votre Nom" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Votre Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Suijet</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10"placeholder=" Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->

  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Abonnez-vous à notre page</h4>

            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Maison des Jeunes</h3>
            <p>
              Rue Al-Ons <br>
              Rouhia 6150<br>

              <strong>téléphone:</strong> +21699608757<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conditions d'utilisation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialité</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Education et formation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Développer les aptitudes et les compétences</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accompagner et accompagner</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Activation et divertissement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Culture et art</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos réseaux sociaux</h4>
            <p>Vous pouvez nous contacter via</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Droits d'auteur <strong><span>Maison des Jeunes</span></strong>. Tous droits réservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

    </div>
</div>
</footer><!-- End Footer -->
<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




























<script>
    /**
* Template Name: eBusiness
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/



























</script>

<!----maps---->
<script>
  var map = L.map('map').setView([36.0917, 9.3761], 14); // Replace with the coordinates of Rouhia, Siliana.

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  L.marker([36.0917, 9.3761]).addTo(map)
      .bindPopup('Rouhia, Siliana')
      .openPopup();



</script>
<script>
document.getElementById('next').onclick=function(){
  let lists = document.querySelectorAll('.iteem');
  document.getElementById('slidee').appendChild(lists[0]);
}
document.getElementById('prev').onclick=function(){
  let lists = document.querySelectorAll('.iteem');
  document.getElementById('slidee').prepend(lists[lists.length - 1]);
}
</script>



<script>
    /**
* Template Name: eBusiness
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)





   /* Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)





   /* Hero carousel indicators
   */
  let heroCarouselIndicators = select("#hero-carousel-indicators")
  let heroCarouselItems = select('#heroCarousel .carousel-item', true)

  heroCarouselItems.forEach((item, index) => {
    (index === 0) ?
    heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
  });




   /* Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

})()
</script>

<script>
  // modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);


</script>

























































  <!-- ======= Footer ======= -->
  <!--
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Abonnez-vous à notre page</h4>
            <p>Rendons votre vie plus positive</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Maison des Jeunes</h3>
            <p>
              Rue Al-Ons <br>
              Rouhia 6150<br>

              <strong>Phone:</strong> +21699608757<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Education et formation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Développer les aptitudes et les compétences</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accompagner et accompagner</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Activation et divertissement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Culture et art</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Vous pouvez nous contacter via</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Maison des Jeunes</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

      </div>
    </div>
  </footer><!-- End Footer -->















 <!-- <script src="file/js/main.js"></script>-->
 <script src="js/jquery-3.3.1.min.js"></script>

<script src="file/vendor/aos/aos.js"></script>
  <script src="file/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="file/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="file/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="file/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="file/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="file/vendor/php-email-form/validate.js"></script>
  <script src="file/js/main.js"></script>

</body>

</html>
