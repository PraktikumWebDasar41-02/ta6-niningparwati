<?php 
session_start();
echo "Akun : ".$_SESSION['nama']."<br><br>";

$conn = mysqli_connect('localhost','root','','d_tamodul6');
$query="SELECT * FROM t_posting";
$hasil=mysqli_query($conn,$query);
$akhir=mysqli_fetch_array($hasil);
mysqli_close($conn);
 ?>

 <form method="POST">
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
		<tr>
			<td colspan="2" align="center"><input type="submit" name="kembali" value="HALAMAN AWAL"></td>
			<td colspan="2" align="center"><input type="submit" name="logout" value="LOGOUT"></td>
		</tr>
	</table>
</form>
<?php 
if (isset($_POST['kembali'])) {
	header("Location:halamanawal.php");
}
if (isset($_POST['logout'])) {
	header("Location:login.php");
}
 ?>