<?php 

include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>List Data</title>
</head>
<body>

	<h3>List Data</h3>

	<table border="1" cellpadding="2" cellspacing="0">
		<tr>
			<td><b>NIM</b></td>
			<td><b>Nama</b></td>
			<td><b>Jenis Kelamin</b></td>
		</tr>

		<?php 

			$query = $conn->prepare("SELECT * FROM datasiswa");
			$query -> execute();
		
			//$row = $query->fetchObject();
			
 			while ($row = $query->fetchObject()) {
				
  				echo "<tr>";
  				echo "<td>".$row->nim."</td>";
  				echo "<td>".$row->nama."</td>";
 				echo "<td>".($row->jenkel == "L" ? "Laki-laki" : "Perempuan")."</td>";
  				echo "<tr>";
			
  			}
		 ?>
	</table>

	<br>
	<a href="add.php">Tambah data</a>

</body>
</html>


