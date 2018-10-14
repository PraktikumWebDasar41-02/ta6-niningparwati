<?php 
session_start();
$conn = mysqli_connect('localhost','root','','d_tamodul6');
/*
if(!$conn){
	echo "Gagal connect";
}else{
	echo "Berhasil connect database <br>";
}
*/
$nim=$_SESSION['nim'];
$query="SELECT * FROM t_tamodul6 where nim=$nim";
$hasil=mysqli_query($conn,$query);
$akhir=mysqli_fetch_array($hasil);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#66ffc2">
<div align="center">
	<form method="POST">
		<?php echo "Akun : ".$_SESSION['nama']."<br><br>"; ?>
		<input type="hidden" name="nim" value="<?php echo $akhir['nim']; ?>">
		<table border="1" bgcolor="#00ff55">
			<tr>
				<td colspan="7" align="center"><b>Halaman Awal</b></td>
			</tr>
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Kelas</th>
				<th>Jenis Kelamin</th>
				<th>Hobi</th>
				<th>Fakultas</th>
				<th>Alamat</th>
			</tr>
			<tr>
				<td><?php echo $akhir['nama']; ?></td>
				<td><?php echo $akhir['nim']; ?></td>
				<td><?php echo $akhir['kelas']; ?></td>
				<td><?php echo $akhir['jenis_kelamin']; ?></td>
				<td><?php echo $akhir['hobi']; ?></td>
				<td><?php echo $akhir['fakultas']; ?></td>
				<td><?php echo $akhir['alamat']; ?></td>
			</tr>
		</table>
	</form>

	<br>
	<a href="editprofile.php"><button>EDIT</button></a>
	<a href="posting.php"><button>POSTING</button></a>
	<a href="semuaposting.php"><button>IHAT SEMUA POSTINGAN</button></a>
	<a href="login.php"><button>LOGOUT</button></a>

</div>
</body>
</html>