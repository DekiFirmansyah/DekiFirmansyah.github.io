<?php
include'koneksi.php';
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
	
if(isset($_POST['simpan'])){
	extract($_POST);
	$sql = 
	"INSERT INTO tbuser (nama,umur,jenis_kelamin,alamat,email,username,password)
		VALUES('$nama', '$umur', '$jenis_kelamin', '$alamat', '$email', '$username', '$password')";

	if (mysqli_query($db, $sql)) {
		header('Location:login.php');
	} else {
		echo "Gagal menambahkan data";
	}
}
?>