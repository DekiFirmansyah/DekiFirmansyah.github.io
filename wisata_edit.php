<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbwisata WHERE id_wisata='$id'");
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
    <form action="wisata_edit_proses.php" method="post" id="wisatabaru" enctype="multipart/form-data">
    	<div class="form-group row">
            <label for="id_wisata" class="col-sm-2 col-form-label">ID Wisata</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_wisata" value="<?php echo $r_tampil_anggota['id_wisata']; ?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kategori" value="<?php echo $r_tampil_anggota['kategori']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea name="keterangan" class="form-control"><?php echo $r_tampil_anggota['keterangan']; ?></textarea>
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
                <a href="wisata_admin.php" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </form>
    </div>
</body>
</html>