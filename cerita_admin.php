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
  
<div class="container-fluid"> 
	<br>    
   	<h1>Sharing Cerita</h1>
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right">
		<form method=post>
			<input type="text" name="pencarian">
			<input type="submit" name="search" value="search" class="btn btn-primary">
		</form>
	</FORM>
	</div>
	</p>
	<table id="tabel-tampil" class="table table-bordered table-striped">
		<tr style="background-color: darkslategrey;">
			<th id="label-tampil-no" style="color: white;">No</td>
			<th style="color: white;">ID Cerita</th>
			<th style="color: white;">ID User</th>
			<th style="color: white;">ID Wisata</th>
			<th style="color: white;">Cerita</th>
			<th style="color: white;">Foto</th>
			<th id="label-opsi" style="color: white;">Opsi</th>
		</tr>
		
		<?php
		include 'koneksi.php';
		$batas = 10;
		extract($_GET);
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		} else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi+1;
		}

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbcerita WHERE id_user LIKE '%$pencarian%'
						OR id_wisata LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbcerita LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbcerita";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbcerita LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbcerita";
			$no = $posisi * 1;
		}
		
		$sql="SELECT * FROM tbcerita ORDER BY id_cerita DESC";
		$q_tampil_anggota = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_anggota)>0)
		{
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_anggota['id_cerita']; ?></td>
			<td><?php echo $r_tampil_anggota['id_user']; ?></td>
			<td><?php echo $r_tampil_anggota['id_wisata']; ?></td>
			<td><?php echo $r_tampil_anggota['cerita']; ?></td>
			<td><img src="img/<?php echo $foto; ?>" width=70px height=70px></td>
			<td>
				<a href="cerita_edit.php?id=<?php echo $r_tampil_anggota['id_cerita'];?>" class="btn btn-warning">Edit</a>
				<a href="cerita_hapus.php?id=<?php echo $r_tampil_anggota['id_cerita']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger">Hapus</a>
			</td>			
		</tr>
		<?php $nomor++; } 
		}
		else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}?>		
	</table>
	<?php
	if(isset($_POST['pencarian'])){
	if($_POST['pencarian']!=''){
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Data Hasil Pencarian: <b>$jml</b>";
		echo "</div>";
	}
	}
	else{ ?>
		<div style="float: left;">		
		<?php
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
		?>			
		</div>		
		<div class="pagination">		
				<?php
				$jml_hal = ceil($jml/$batas);
				for($i=1; $i<=$jml_hal; $i++){
					if($i != $hal){
						echo "<a href=\"?cerita_edit&hal=$i\">$i</a>";
					}
					else {
						echo "<a class=\"active\">$i</a>";
					}
				}
				?>
		</div>
	<?php
	}
	?>
	
</div>
</body>
</html>