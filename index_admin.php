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
          <a class="nav-link" href="index_admin.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wisata_admin.php"><b>Destinasi Wisata</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cerita_admin.php"><b>Ceritaku</b></a>
        </li>
      </ul>
      <ul class="nav navbar-nav mr-3">
        <li>
          <a href="logout.php" class="nav-link mr-3"><b>Logout</b></a>
        </li>
      </ul>
    </div>
    </nav>
  </div>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">Mbolang</span></h1>
          <hr>
          <p class="lead font-weight-bold">Data Wisata Alam yang Ada di Jawa Timur<br> 
          Happy Holiday</p>
        </div>
      </div>
    
     

<!---->
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <div class="judul text-center mt-5">
        <h3 class="font-weight-bold">Mbolang</h3>
        <p class="text-justify"><br><b>Mbolang</b> adalah sebuah web pencarian informasi wisata alam yang berada di Daerah Jawa Timur</p>
        <p><br>Dengan adanya <b> Mbolang </b> maka wisatawan dalam negeri ataupun luar negeri akan lebih mudah untuk mengeksplorasi wisata alam yang ada di Indonesia khususnya di jawa Timur</p>
      </div>
    </div>

  <!-- Awal Footer -->
  <hr class="footer">
  <div class="container">
    <div class="row footer-body">
      <div class="col-md-6">
      <div class="copyright">
        <strong>Copyright</strong> <i class="far fa-copyright"></i> 2021 - Deki - Dherisma</p>
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