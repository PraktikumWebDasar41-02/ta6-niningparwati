<?php 
session_start();
echo "Akun : ".$_SESSION['nama']."<br><br>";
$conn = mysqli_connect('localhost','root','','d_tamodul6');
/*
if(!$conn){
	echo "Gagal connect";
}else{
	echo "Berhasil connect database <br>";
}
*/
$nim=$_SESSION['nim'];
$query="SELECT * FROM t_posting where nim=$nim";
$hasil=mysqli_query($conn,$query);
$akhir=mysqli_fetch_array($hasil);
mysqli_close($conn);

?>

<form method="POST">
	<input type="hidden" name="nim" value="<?php echo $akhir['nim']; ?>">
	<table border="1">
		<tr>
			<th>Judul</th>
			<th>Postingan</th>
			<th>Gambar</th>
			<th>Tangggal</th>
		</tr>
		<tr>
			<td><?php echo $akhir['judul']; ?></td>
			<td><?php echo $akhir['posting']; ?></td>
			<td ><img src="<?php echo $akhir['gambar']; ?>" width="200px" height="100px"></td>
			<td><?php echo $akhir['tanggal']; ?></td>
		</tr>
	</table>
</form>

<br>
<a href="editprofile.php"><button>EDIT</button></a>
<a href="posting.php"><button>POSTING</button></a>
<a href="login.php"><button>LOGOUT</button></a>