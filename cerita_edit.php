<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbcerita WHERE id_cerita='$id'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
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
<body>
	<div class="container-fluid">
    <br>    
    <h2>Wisata Baru</h2> <br>
    <form action="cerita_edit_proses.php" method="post" id="ceritaku" enctype="multipart/form-data">
    	<div class="form-group row">
            <label for="id_cerita" class="col-sm-2 col-form-label">ID Cerita</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_cerita" value="<?php echo $r_tampil_anggota['id_cerita']; ?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group row">
            <label for="id_user" class="col-sm-2 col-form-label">ID User</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_user" value="<?php echo $r_tampil_anggota['id_user']; ?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group row">
            <label for="id_wisata" class="col-sm-2 col-form-label">ID Wisata</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_wisata" value="<?php echo $r_tampil_anggota['id_wisata']; ?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group row">
            <label for="cerita" class="col-sm-2 col-form-label">Cerita</label>
            <div class="col-sm-10">
                <textarea name="cerita" class="form-control"><?php echo $r_tampil_anggota['cerita']; ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
            	<img src="img/<?php echo $foto; ?>" width=70px height=75px>
                <input type="file" class="form-control" name="foto">
				<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="spasi" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <a href="cerita_admin.php" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </form>
    </div>
</body>
</html>