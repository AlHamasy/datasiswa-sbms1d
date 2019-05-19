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
			<td><b>Delete</b></td>
			<td><b>Update</b></td>
		</tr>

		<?php 

			$query = $conn->prepare("SELECT * FROM db_siswa");
			$query -> execute();
			

// 			while ($row = $query->fetchObject()) {
				
//  				echo "<tr>";
//  				echo "<td>".$row->nim."</td>";
//  				echo "<td>".$row->nama."</td>";
// 				echo "<td>".($row->jenkel == "L" ? "Laki-laki" : "Perempuan")."</td>";
//  				echo "<td><a href='delete.php?nim=".$row['nim']."'>delete</a></td>";
//  				echo "<td><a href='update.php?nim=".$row['nim']."'>update</a></td>";
//  				echo "<tr>";
			
//  			}
		
			while($data =  $query->fetchObject()){
        
			    <tr>
				<td><?php echo $data->nim ?></td>
				<td><?php echo $data->nama ?></td>
				<td><?php echo $data->jenkel ?></td>
				<td>
				    <a href="index.php?aksi=update&nim=<?php echo $data->nim ?>&nama=<?php echo $data->nama ?>&jenisKelamin=<?php echo $data->jenisKelamin ?>&alamat=<?php echo $data->alamat ?>&hobi=<?php echo $data->hobi ?>">Ubah</a> |
				    <a href="index.php?aksi=delete&nim=<?php echo $data->nim ?>">Hapus</a>
				</td>
			    </tr>
        
    			}

		 ?>

	</table>

	<br>
	<a href="add.php">Tambah data</a>

</body>
</html>


