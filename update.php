<?php 

include 'koneksi.php';

// inquiry ke database
$idnim = "";
$row = NULL;

if (isset($_GET['nim']) && !empty($_GET['nim'])) {
	
	$idnim = $_GET['nim'];
	$query = "select * from mhs where nim='$idnim'";
	$exec = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($exec);
}
if ($row == NULL || $idnim=="") {
	
	echo "Data tidak ada";
	echo "<br> <a href='list.php'>List data</a>";
	exit();
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Data</title>
 </head>
 <body>

 	<form action="" method="POST">
 		
 		NIM : <input type="text" name="nim" value="<?=$idnim?>" readonly></br>
 		Nama : <input type="text" name="nama" value="<?=$row['nama']?>"></br>
 		Jenis Kelamin : <select name="jenkel">
 							<option value="L" <?= ($row['jenkel']=="L")?"selected":""?> >Laki-laki</option>
 							<option value="P" <?= ($row['jenkel']=="P")?"selected":""?> >Perempuan</option>
 						</select></br>
 		<input type="submit" name="submit" value="Edit">

 	</form>

 	<br><a href="list.php">List data</a></br>
 
 </body>
 </html>

 <?php 

if(isset($_POST['submit'])){

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenkel = $_POST['jenkel'];

	$query = "update mhs set nama='$nama', jenkel='$jenkel' where nim='$nim'";

	$exec = mysqli_query($conn, $query);

	if($exec){
		echo "Data berhasil diupdate";
	}
	else{
		echo "Gagal update data";
	}
}

?>