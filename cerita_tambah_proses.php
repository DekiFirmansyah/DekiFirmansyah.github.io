<?php
include'koneksi.php';
$id_user=$_POST['id_user'];
$id_wisata=$_POST['id_wisata'];
$cerita=$_POST['cerita'];
	
if(isset($_POST['simpan'])){
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $id_wisata.".".$tipe_file;

		// Tentukan folder untuk menyimpan file
		$folder = "../img/$file_foto";
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto="-";
	
	$sql = 
	"INSERT INTO tbcerita (id_user,id_wisata,cerita,foto)
		VALUES('$id_user','$id_wisata','$cerita','$file_foto')";
	$query = mysqli_query($db, $sql);

	header("location:cerita.php");
}
?>