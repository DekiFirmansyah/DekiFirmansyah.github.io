<?php
include'koneksi.php';
$nama=$_POST['nama'];
$kategori=$_POST['kategori'];
$alamat=$_POST['alamat'];
$keterangan=$_POST['keterangan'];
	
if(isset($_POST['simpan'])){
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $nama.".".$tipe_file;

		// Tentukan folder untuk menyimpan file
		$folder = "../img/$file_foto";
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto="-";
	
	$sql = 
	"INSERT INTO tbwisata (nama,kategori,alamat,keterangan,foto)
		VALUES('$nama','$kategori','$alamat','$keterangan','$file_foto')";
	$query = mysqli_query($db, $sql);

	header("location:wisata_admin.php");
}
?>