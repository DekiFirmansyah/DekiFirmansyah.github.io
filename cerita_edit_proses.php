<?php
include'koneksi.php';
$id_wisata=$_POST['id_wisata'];
$cerita=$_POST['cerita'];

If(isset($_POST['simpan'])){
	
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $id_wisata.".".$tipe_file;
		// Tentukan folder untuk menyimpan file
		$folder = "../img/$file_foto";
		@unlink ("$folder");
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto=$foto_awal;
	
	mysqli_query($db,
		"UPDATE tbcerita
		SET cerita='$cerita',foto='$file_foto'
		WHERE id_cerita='$id_cerita'");
	
	header("location:cerita_admin.php");
}
?>
