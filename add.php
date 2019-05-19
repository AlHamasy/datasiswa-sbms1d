<?php 

include 'koneksi.php';
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data</title>
 </head>
 <body>

 	<form action="" method="POST">
 		
 		NIM : <input type="text" name="nim"></br>
 		Nama : <input type="text" name="nama"></br>
 		Jenis Kelamin : <select name="jenkel">
 							<option value="L">Laki-laki</option>
 							<option value="P">Perempuan</option>
 						</select></br>
 		<input type="submit" name="submit" value="Tambah">

 	</form>

 	<br><a href="index.php">List data</a></br>
 
 </body>
 </html>

 <?php 

if(isset($_POST['submit'])){

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenkel = $_POST['jenkel'];

	$sql = "INSERT INTO datasiswa (nim, nama, jenkel)";
	$sql .= "values ('$nim','$nama','$jenkel')";
	
	$query = $conn->prepare($sql);
        $query -> execute();

	if($query){
		header('location: index.php');
	}
	else{
		echo "Gagal menambahkan data";
	}
}

?>
