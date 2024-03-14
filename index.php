<!DOCTYPE html>
<html lang="en">
<head>\<title>Photo Gallery </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#archi">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
  </div>
</nav>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/archi.jpg" class="d-block w-100" alt="imageofarchi">
        <div class="carousel-caption d-none d-md-block">
          <h4>Architecture</h4>
         </div>
      </div>
      <div class="carousel-item">
        <img src="images/Nature.jpg" class="d-block w-100" alt="nature">
        <div class="carousel-caption d-none d-md-block">
          <h4>Nature</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/travel.jpg" class="d-block w-100" alt="travel">
        <div class="carousel-caption d-none d-md-block">
          <h4>Travel</h4>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<a id="nature">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
    <img src="images/nature (1).jpg" height="100" width="200"class="img-fluid pb=3">
</div>

<div class="col-lg-4 col-md-4 col-12">
    <img src="images/nature (2).jpg" height="100" width="200" class="img-fluid pb=3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/nature (3).jpg" height="100" width="200"  class="img-fluid pb=3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/nature (4).jpg" height="100" width="200" class="img-fluid pb=3">
</div>
</div>
</div>
</section>
</a>
<a id="archi">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Architecture</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
    <img src="images/archi (1).jpg" height="100" width="200" class="img-fluid pb=3">
</div>

<div class="col-lg-4 col-md-4 col-12">
    <img src="images/archi (2).jpg" height="100" width="200"  class="img-fluid pb=3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/archi (3).jpg" height="100" width="200" class="img-fluid pb=3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/archi (4).jpg" height="100" width="200" class="img-fluid pb=3">
</div>
</div>
</div>
</section>
<a>
  <a id="travel">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Travel</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
<div class="col-lg-4 col-md-4 col-12">
<img src="images/travel (1).jpg" height="100" width="200" class="img-fluid pb=3">

</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/travel (2).jpg" height="100" width="200" class="img-fluid pb=3">
</div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="images/travel (4).jpg"  height="100" width="200" class="img-fluid pb=3">
</div>
</div>
</section>
</a>
<a id="contact">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="about.php" method="POST">
        <div class="form-group">
          <label>Name:</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>phone number:</label>
          <input type="text" name="number" class="form-control">
        </div><br/>
        <button type="submit" class="btn btn-success">Submit</button>

</form>
</div>
    </section>
</a>
<a id="about">
    <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <h3 class="text-center">KUSUMA</h3><br>
      <p class="text-center"><b>I am passionate photographer intersted in working in Architecture,Nature and Travel photography .I am full time freelancer with in experience of 5 years</b></p>
</div>
</section>
</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 

