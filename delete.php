<?php 

include 'koneksi.php';

if (isset($_GET['nim']) && !empty($_GET['nim'])) {
	
	$idnim = $_GET['nim'];
	$query = "delete from mhs where nim = '$idnim'";
	$exec = mysqli_query($conn, $query);

	if ($exec) {
		echo "Data berhasil dihapus";
	}
	else{
		echo "Data gagal dihapus";
	}

	echo "<br><a href='index.php'>list data</a>";
}
else{
	echo "NIM Tidak Ada";
}


?>