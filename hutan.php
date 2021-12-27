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
<div class="container-fluid">
  <br>
  <center><b><h1>Destinasi Hutan</h1></b></center>
  <?php
    include 'koneksi.php';
    extract($_GET);
    $query = "SELECT * FROM tbwisata WHERE kategori='Hutan'";
    
    $q_tampil_anggota = mysqli_query($db, $query);
    if(mysqli_num_rows($q_tampil_anggota)>0){
      while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
        if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-')){
          $foto = "admin-no-photo.jpg";
        }
        else{
          $foto = $r_tampil_anggota['foto'];
        }
    ?>
      
    <h3><?php echo $r_tampil_anggota['nama']; ?></h3>
    <p>ID Wisata : <?php echo $r_tampil_anggota['id_wisata']; ?></p>
    <img src="img/<?php echo $foto; ?>" class="img-thumbnail" style="width: 500px;">
    <p>Lokasi : <?php echo $r_tampil_anggota['alamat']; ?></p>
    <p><?php echo $r_tampil_anggota['keterangan']; ?></p>
    <hr>
    <?php
      }
    }
    else {
      echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
    }?>   
  
</div>
</body>
</html>