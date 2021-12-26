<?php
include'koneksi.php';
$id_wisata=$_POST['id_wisata'];
$nama=$_POST['nama'];
$kategori=$_POST['kategori'];
$alamat=$_POST['alamat'];
$keterangan=$_POST['keterangan'];

If(isset($_POST['simpan'])){
	
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $nama.".".$tipe_file;
		// Tentukan folder untuk menyimpan file
		$folder = "../img/$file_foto";
		@unlink ("$folder");
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto=$foto_awal;
	
	mysqli_query($db,
		"UPDATE tbwisata
		SET nama='$nama',kategori='$kategori',alamat='$alamat',keterangan='$keterangan',foto='$file_foto'
		WHERE id_wisata='$id_wisata'");
	
	header("location:wisata_admin.php");
}
?>
