<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>THE MEMAGINARY SHOPPING</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Raleway:wght@600&family=Righteous&family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="css\img\favicon-logo.ico">
<style media="screen">
html {
  scroll-behavior: smooth;
}

body {
  color: black;
  margin: 0;
  padding: 0;
}

nav {
  font-size: 1.1em;
}

a:hover {
  text-decoration: none;
}

/* IDEA: navigation bar */
nav {
  box-shadow: 1px 1px 10px 2px rgba(0, 0, 0, 0.3);
  z-index: 2;
  transition: 0.3s;
}

nav:hover {
  box-shadow: 2px 2px 20px 4px rgba(0, 0, 0, 0.3);
  z-index: 7;
}

.navbar-brand h2 {
  font-size: 1.4em;
  font-family: serif;
}

/* IDEA: slideshow carousel */
.carousel-caption h1 {
  font-size: 260%;
  font-family: 'Righteous', cursive;
}

.carousel-caption p, h3 {
  color: white;
  font-size: 150%;
}

.carousel-item img {
  filter: brightness(60%);
}

/* IDEA: information pannel */
.info {
  background-color: white;
  padding: 5%;
}

.info h4, p {
  text-align: center;
  color: black;
}

.info img {
  padding: 10%;
}

.certified {
  height: 198px;
  width: 198px;
}

/* IDEA: feature products */
.f-products h5 {
  text-align: left;
  color: black;
  font-family: cursive;
}

.f-products p {
  text-align: left;
  color: black;
}

.f-products {
  padding: 12% 5%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  background-color: white;
}

.fpimg:hover {
  position: relative;
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  transform: scale(1.1);
  z-index: 99;
}

.fpdes {
  height: 80%;
}

.fpimg {
  height: 102%;
}

.background {
  background-color: #fd5e53;
  width: 100%;
  padding: 30px 0;
}

.container h1 {
  font-family: 'Fredoka One', cursive;
  padding: 2%;
  color: white;
}

/* IDEA: about company */
.ab-com {
  margin: 5% auto;
  text-align: center;
}

.about {
  margin: 2% 0 0 0;
}

/* IDEA: bottom to top */
.arrow-btn {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 2;
}

.arrow-btn a {
  height: 39px;
  width: 37px;
  text-align: center;
  background: #edc988;
  display: block;
  border-radius: 100%;
  transition: 0.3s;
}

.arrow-btn a span {
  color: white;
  line-height: 39px;
  font-size: 25px;
}

.arrow-btn a:hover {
  display: block;
  background-color: #ff971d;
}

/* IDEA: video */
.video {
  margin: 8% auto auto auto;
}

/* IDEA: gallery */
main {
  margin: 80px 120px;
  display: grid;
  grid-template-rows: repeat(2, 49%);
  grid-template-columns: auto auto auto 18% 18%;
  grid-gap: 20px;
  align-content: center;
}

.gallery1 {
  grid-row: 1/3;
  grid-column: 1/4;
  transition: 0.6s;
}

.gallery2 {
  grid-column: 4/5;
  transition: 0.6s;
}

.gallery3 {
  grid-column: 5/6;
  transition: 0.6s;
}

.gallery4 {
  grid-column: 4/5;
  grid-row: 2/3;
  transition: 0.6s;
}

.gallery5 {
  grid-column: 5/6;
  grid-row: 2/3;
  transition: 0.6s;
}

.gallery1:hover,
.gallery2:hover,
.gallery3:hover,
.gallery4:hover,
.gallery5:hover {
  filter: brightness(60%);
  transform: scale(1.1);
}

/* IDEA: contact */
form {
  margin: 5% 0;
  font-size: 110%;
  color: white;
}

input, textarea {
  border: 0;
  border-radius: 4px;
  margin: auto auto 2% auto;
  padding: 2%;
}

#name, #email {
  width: 90%;
}

button {
  margin: auto auto auto 45%;
  border: 0;
  border-radius: 4px;
  color: white;
  background-color: black;
  padding: 2%;
  width: 20%;
}

/* IDEA: timevalue */
.timevalue {
  text-align: center;
  background-color: black;
  color: white;
  padding: 4%;
}

.timevalue h2 {
  font-size: 160%;
  margin-bottom: 7%;
}

.timevalue p {
  font-size: 150%;
  color: white;
}

.fa {
  padding: 2%;
  font-size: 200%;
  width: 6.5%;
  text-align: center;
  text-decoration: none;
  border-radius: 100%;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

/* IDEA: for phone */
@media only screen and (max-width: 992px) {
  h4, h1 {
    font-size: 3em;
  }

  h5 {
    font-size: 2em;
  }

  .f-products p {
    font-size: 2em;
  }

  p {
    font-size: 3em;
  }

  nav {
    font-size: 2.1em;
  }

  .navbar-brand h2 {
    font-size: 2.4em;
    font-family: serif;
  }

  /* IDEA: carousel slideshow */
  .carousel-caption h1 {
    font-size: 300%;
    font-family: 'Righteous', cursive;
  }

  /* IDEA: bottom to top */
  .arrow-btn {
    position: fixed;
    bottom: 40px;
    right: 40px;
    z-index: 2;
  }

  .arrow-btn a {
    height: 129px;
    width: 127px;
    text-align: center;
    background: #edc988;
    display: block;
    border-radius: 100%;
    transition: 0.3s;
  }

  .arrow-btn a span {
    color: white;
    line-height: 126px;
    font-size: 85px;
  }

  .arrow-btn a:hover {
    display: block;
    -webkit-animation: color 0.6s forwards;
    -moz-animation: color 0.6s forwards;
    -o-animation: color 0.6s forwards;
  }

  @-webkit-keyframes color {
    0% {
      background-color: #edc988;
    }

    50% {
      background-color: #ff971d;
    }

    100% {
      background-color: #edc988;
    }
  }

  @-moz-keyframes color {
    0% {
      background-color: #edc988;
    }

    50% {
      background-color: #ff971d;
    }

    100% {
      background-color: #edc988;
    }
  }

  @-o-keyframes color {
    0% {
      background-color: #edc988;
    }

    50% {
      background-color: #ff971d;
    }

    100% {
      background-color: #edc988;
    }
  }

  .certified {
    height: 298px;
    width: 298px;
  }

  /* IDEA: feature product */
  .fpdes {
    height: 90%;
    font-size: 150%;
  }

  .fpdes p {
    padding: 0 auto auto auto;
    margin: auto auto 0 auto;
  }

  .fpdes h5 {
    padding: auto auto 0 auto;
  }

  .fpimg {
    height: 102%;
  }

  /* IDEA: gallery */
  main {
    margin: 100px;
    display: grid;
    grid-template-rows: auto 40% auto;
    grid-template-columns: (4, 1fr);
    grid-gap: 20px;
    align-content: center;
  }

  .gallery1 {
    grid-row: 2/3;
    grid-column: 1/6;
    transition: 0.5s;
  }

  .gallery2 {
    grid-column: 1/3;
    grid-row: 1/2;
    transition: 0.5s;
  }

  .gallery3 {
    grid-column: 3/6;
    grid-row: 1/2;
    transition: 0.5s;
  }

  .gallery4 {
    grid-column: 1/4;
    grid-row: 3/4;
    transition: 0.5s;
  }

  .gallery5 {
    grid-column: 4/6;
    grid-row: 3/4;
    transition: 0.5s;
  }

  .gallery1:hover,
  .gallery2:hover,
  .gallery3:hover,
  .gallery4:hover,
  .gallery5:hover {
    filter: brightness(60%);
    transform: scale(1.1);
  }
}

</style>
</head>

<body>

  <!-- IDEA: bottom to top -->

  <div class="arrow-btn">
    <a href="#"><span class="fas fa-angle-up"></span></a>
  </div>

  <!-- IDEA: end of bottom to top -->

  <!-- IDEA:jquary first then bootstrap.js-->

  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>

  <!-- IDEA: end of jquary and bootstrap -->

  <!-- IDEA: navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img class="d-none d-lg-block d-xl-block" src="css\img\logo.png" alt="TMB" height="54px" width="59px">
    <img class="d-lg-none d-xl-none d-md-block d-sm-block d-xs-block" src="css\img\logo.png" alt="TMB" height="104px" width="109px">
    <div class="collapse navbar-collapse" id="myMenu">
      <a href="#" class="navbar-brand">
        <h2>The Memaginary Shop</h2>
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#contactme" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- IDEA: end of navbar -->

  <!-- IDEA: slideshow -->

  <div id="myslideshow" class="carousel slide d-lg-block d-xl-block d-sm-none d-md-none d-none" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="css\img\pic1.jpg" width="100%" alt="shoping" class="img-fluid">
      </div>
      <div class="carousel-caption">
        <h1>THE MEMAGINARY SHOPING</h1>
        <p>| Place were you like to shop Cuz the Site is DOPE! |</p>
      </div>
      <div class="carousel-item">
        <img src="css\img\pic2.jpg" alt="shoping" width="100%" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="css\img\pic3.jpg" alt="shoping" width="100% " class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="css\img\pic4.jpg" width="100%" alt="shoping" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="css\img\pic5.jpg" alt="shoping" width="100%" class="img-fluid">
      </div>
    </div>
  </div>

  <!-- IDEA: end of slideshow -->

  <!-- IDEA: cropped slidshow -->

  <div id="myslideshow" class="carousel slide d-xl-none d-lg-none d-sm-block" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="css\croped\cropped1.jpg" width="100%" alt="shoping" class="img-fluid">
      </div>
      <div class="carousel-caption">
        <h1>THE MEMAGINARY SHOPING</h1>
        <p>| Place were you like to shop Cuz the Site is DOPE! |</p>
      </div>
      <div class="carousel-item">
        <img src="css\croped\cropped2.jpg" width="100%" alt="shoping" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="css\croped\cropped3.jpg" width="100%" alt="shoping" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="css\croped\cropped4.jpg" width="100%" alt="shoping" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="css\croped\cropped5.jpg" width="100%" alt="shoping" class="img-fluid">
      </div>
    </div>
  </div>

  <!-- IDEA: end of cropped slideshow -->

  <!-- IDEA: information -->

  <div id="service" class="info">
    <div class="container">
      <div class="row ">
        <div class="col-lg-4">
          <img class="mx-auto d-block" src="css\img\info-1.png">
          <h4>WorldWide Shipping</h4>
          <p>Lorem ipsum dolor sit amet, incididunt ut laboriatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-4">
          <img class="mx-auto d-block certified" src="css\img\info-2.png">
          <h4>Certified from falana</h4>
          <p>Lorem ipsum dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-4">
          <img class="mx-auto d-block" src="css\img\info-3.png">
          <h4>30 Days Cash back</h4>
          <p>Lorem ipsum dolor dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IDEA: end of information -->

  <!-- IDEA: feature products -->

  <div class="background">

    <!-- IDEA: for desktop -->

    <div class="container d-lg-block d-xl-block d-sm-none d-md-none d-none">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">FEATURE PRODUCT</h1>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-1.jpg" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-2.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-3.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpdes">
              <h5>OnePlus 7T Pro </h5>
              <p><br>(8GB RAM, Fluid AMOLED Display, 256GB Storage, 4085mAH Battery) <br> <strong>Rs. 43,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpdes">
              <h5>OPPO ENCO W51 </h5>
              <p>True Wireless Earphone (Floral White)</p>
              <p> <br> <strong>Rs. 4,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpdes">
              <h5>F-gear Bag</h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- IDEA: end of for desktop -->

    <!-- IDEA: for phone -->

    <div class="container d-xl-none d-lg-none d-sm-block">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h1 class="text-center">FEATURE PRODUCT</h1>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-1.jpg" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpdes">
              <h5>OnePlus 7T Pro </h5>
              <p><br>(8GB RAM, Fluid AMOLED Display, 256GB Storage, 4085mAH Battery) <br> <strong>Rs. 43,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-2.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpdes">
              <h5>OPPO ENCO W51 </h5>
              <p>True Wireless Earphone (Floral White)</p>
              <p> <br> <strong>Rs. 4,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-3.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpdes">
              <h5>F-gear Bag</h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- IDEA: end of for phone -->

  </div>

  <!-- IDEA: end of feature product -->

  <!-- IDEA: about company -->

  <div id="about" class="container ab-com">
    <div class="row">
      <div class="col-lg-6">
        <img class="mx-auto d-block" src="css\img\logo.png" width="230px" height="195px">
      </div>
      <div class="col-lg-6 about">
        <h4>About Company</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pa </p>
      </div>
    </div>
  </div>

  <!-- IDEA: end of about company -->

  <!-- IDEA: products -->

  <div class="background">

    <!-- IDEA: for desktop -->

    <div class="container d-lg-block d-xl-block d-sm-none d-md-none d-none">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">PRODUCTS</h1>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-1.jpg" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-2.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-3.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpdes">
              <h5>OnePlus 7T Pro </h5>
              <p><br>(8GB RAM, Fluid AMOLED Display, 256GB Storage, 4085mAH Battery) <br> <strong>Rs. 43,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpdes">
              <h5>OPPO ENCO W51 </h5>
              <p>True Wireless Earphone (Floral White)</p>
              <p> <br> <strong>Rs. 4,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpdes">
              <h5>F-gear Bag</h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- IDEA: end of for desktop -->

    <!-- IDEA: for phone -->

    <div class="container d-xl-none d-lg-none d-sm-block">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h1 class="text-center">PRODUCTS</h1>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-1.jpg" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/347Ibq0" target="_blank">
            <div class="f-products fpdes">
              <h5>OnePlus 7T Pro </h5>
              <p><br>(8GB RAM, Fluid AMOLED Display, 256GB Storage, 4085mAH Battery) <br> <strong>Rs. 43,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-2.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/3ihJ0S1" target="_blank">
            <div class="f-products fpdes">
              <h5>OPPO ENCO W51 </h5>
              <p>True Wireless Earphone (Floral White)</p>
              <p> <br> <strong>Rs. 4,999.00</strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-3.jpg" alt="" width="100%"> <br>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://amzn.to/2SdzlRX" target="_blank">
            <div class="f-products fpdes">
              <h5>F-gear Bag</h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpimg">
              <img class="mx-auto d-block" src="css\img\fp-4.jpg" alt="" width="100%">
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12">
          <a href="https://www.google.com" target="_blank">
            <div class="f-products fpdes">
              <h5> Men's T-Shirt </h5>
              <p> <br> Get Your Meme T-shirt <br> <strong> Rs. 1,200 </strong></p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- IDEA: end of for phone -->

  </div>

  <!-- IDEA: end of products -->

  <!-- IDEA: video -->
  <div class="video">
    <video width="100%" autoplay loop muted>
      <source src="css/video/video.mp4" type="video/mp4">
    </video>
  </div>
  <!-- IDEA: end of video -->
  <!-- IDEA: gallery -->

  <main>
    <div class="gallery1"><img src="css/img/gallery-1.jpg" class="img-fluid"></div>
    <div class="gallery2"><img src="css/img/gallery-2.jpg" class="img-fluid mx-auto d-block"></div>
    <div class="gallery3"><img src="css/img/gallery-3.jpg" class="img-fluid mx-auto d-block"></div>
    <div class="gallery4"><img src="css/img/gallery-4.jpg" class="img-fluid mx-auto d-block"></div>
    <div class="gallery5"><img src="css/img/gallery-5.jpg" class="img-fluid mx-auto d-block"></div>
  </main>

  <!-- IDEA: end of gallery -->

  <!-- IDEA: contact me -->

  <div id="contactme" class="background">
    <div class="container">
      <div class="row">
        <h3>Contact Us</h3>
        <form method="post">
          <label for="name">Enter name</label><br>
          <input id="name" type="text" name="textdata" value="" placeholder="Enter name"><br>
          <label for="email">Enter email</label><br>
          <input id="email" type="email" name="textdata" value="" placeholder="Enter email"><br>
          <label for="message">Message</label><br>
          <textarea id="message" name="name" rows="8" cols="80" placeholder="Message"></textarea><br>
          <input id="cheackbox" type="checkbox" name="" value="">
          <label for="cheackbox">Subscribe to newsletter</label> <br> <br>
          <button type="submit">submit</button>
        </form>
      </div>
    </div>
  </div>

  <!-- IDEA: contact me -->

  <div class="timevalue">
    <h2>TIME VALUE</h2>
    <p>Lorem ipsum dolor sit amet,d minim veniam, quis nostratur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-instagram"></a><br> <br>
    <p>© Copy Right Time Value</p>
  </div>
  </div>

  </div>

</body>

</html>


<?php

if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
