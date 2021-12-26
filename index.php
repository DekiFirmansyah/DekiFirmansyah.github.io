<?php
include'koneksi.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mbolang.com</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-md nav-justified bg-light navbar-light">
    <a class="navbar-brand" href="#">
      <img src="img/logo1.png" alt="Logo" style="width:130px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><b>Destinasi Wisata</b></a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="pantai.php">Pantai</a>
              <a class="dropdown-item" href="pegunungan.php">Pegunungan</a>
              <a class="dropdown-item" href="hutan.php">Hutan</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cerita.php"><b>Ceritaku</b></a>
        </li>
      </ul>
      <ul class="nav navbar-nav mr-3">
        <li class="nav-item">
          <a class="nav-link mr-3" href="home.html"><b>About Us</b></a>
        </li>
        <li>
          <a href="logout.php" class="nav-link mr-3"><b>Logout</b></a>
        </li>
      </ul>
    </div>
    </nav>
  </div>

  <div class="container">
    <br>
    <center><h1>DESTINASI WISATA ALAM</h1></center>
    <center><h2>JAWA TIMUR</h2></center>
    <br>
  </div>
  
  <div class="row">
  <div class="container col-md-6">
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="mx-auto d-block" src="img/Gunung Raung.jpg" alt="Gunung Raung" style="width:100%; height: 100%;">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block" src="img/Pantai Bawean.jpg" alt="Pantai Bawean" style="width:100%; height: 100%;">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block" src="img/Hutan Pohon Trinil.jpg" alt="Hutan Pohon Trinil" style="width:100%; height: 100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
  </div>
</div>

<div class="container">
  <br><hr><br>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="pantai.php"><img src="img/Pantai Tiga Warna.jpg" alt="" style="width:250px;"></a>
      <div class="caption">
        <h3>Wisata Pantai</h3>
        <p>Berikut kumpulan informasi destinasi wisata pantai yang ada di jawa timur, klik gambar jika ingin melihat destinasi wisata</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="pegunungan.php"><img src="img/Gunung Ijen.jpg" alt="" style="width:250px;"></a>
      <div class="caption">
        <h3>Wisata Pegunungan</h3>
        <p>Berikut kumpulan informasi destinasi wisata pegunungan yang ada di jawa timur, klik gambar jika ingin melihat destinasi wisata</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="hutan.php"><img src="img/Hutan Bambu Keputih.jpg" alt="" style="width:250px;"></a>
      <div class="caption">
        <h3>Wisata Hutan</h3>
        <p>Berikut kumpulan informasi destinasi wisata hutan yang ada di jawa timur, klik gambar jika ingin melihat destinasi wisata</p>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php
}
else {
  echo "<script>
    alert('Anda Harus Login Dahulu!');
  </script>";
  header('location:login.php');
}
?>