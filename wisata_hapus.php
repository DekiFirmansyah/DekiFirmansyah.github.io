<?php
include'koneksi.php';
$id_wisata=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbwisata
	WHERE id_wisata='$id_wisata'"
);

header("location:wisata_admin.php");
?>