<?php
include'koneksi.php';
$id_cerita=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbcerita
	WHERE id_cerita='$id_cerita'"
);

header("location:cerita_admin.php");
?>