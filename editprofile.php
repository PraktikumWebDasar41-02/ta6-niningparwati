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
$query="SELECT * FROM t_tamodul6 where nim='$nim'";
$hasil=mysqli_query($conn,$query);
$akhir=mysqli_fetch_array($hasil);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#adebeb">
	<div align="center">
		<form method="POST" action="update.php">
			<?php echo "Akun : ".$_SESSION['nama']."<br><br>"; ?>
			<input type="hidden" name="nim" value="<?php echo $akhir['nim']; ?>">
			<table border="1" bgcolor=" #00ff55"> 
				<tr>
					<td colspan="6" align="center">HALAMAN EDIT DATA </td>
				</tr>
				<tr>
					<td align="left" width="150">Nama</td>
					<td align="left"><input type="text" name="nama" value="<?php echo $akhir['nama']; ?>" size="10"></td>
				</tr>
				<tr>
					<td align="left" width="150">NIM </td>
					<td align="left"><input type="text" name="nim" value="<?php echo $akhir['nim']; ?>" size="10"></td>
				</tr>
				<tr>
					<td align="left" width="150">Kelas</td>
					<td><input type="radio" name="kelas" value="<?php echo $akhir['kelas']; ?>" checked> <?php echo $akhir['kelas']; ?></td>
					<td><input type="radio" name="kelas" value="D3MI-41-01"> D3MI-41-01 </td>
					<td><input type="radio" name="kelas" value="D3MI-41-02"> D3MI-41-02 </td>
					<td><input type="radio" name="kelas" value="D3MI-41-03"> D3MI-41-03 </td>
					<td><input type="radio" name="kelas" value="D3MI-41-03"> D3MI-41-04 </td>
				</tr>
				<tr>
					<td align="left" width="150">Jenis Kelamin : </td>
					<td><input type="radio" name="jk" value="<?php echo $akhir['jenis_kelamin']; ?>" checked><?php echo $akhir['jenis_kelamin']; ?></td>
					<td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
					<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</td>
				</tr>	
				<tr>
					<td align="left" width="150">Hobi :</td>
					<td><input type="checkbox" name="hobi" value="<?php echo $akhir['hobi'] ?>" checked><?php echo $akhir['hobi'] ?></td>
					<td><input type="checkbox" name="hobi" value="Membaca">Membaca</td>
					<td><input type="checkbox" name="hobi" value="Travelling">Traveling</td>
					<td><input type="checkbox" name="hobi" value="Ngoding">Ngoding</td>
					<td><input type="checkbox" name="hobi" value="Belanja">Belanja</td>
				</tr>
				<tr>
					<td align="left" width="150">Fakultas</td>
					<td>
						<select name="fakultas">
						<option value="<?php echo $akhir['fakultas'] ?>" ><?php echo $akhir['fakultas'] ?></option>
						<option value="FIT">FIT</option>
						<option value="FKB">FKB</option>
						<option value="FEB">FEB</option>
						<option value="FIK">FIK</option>
						<option value="FIF">FIF</option>
						<option value="FRI">FRI</option>
						<option value="FTE">FTE</option>
					</select>
					</td>
				</tr>
				<tr>
					<td align="left" width="150">Alamat :</td>
					<td><textarea name="alamat" rows="4" cols="" value="<?php echo $akhir['alamat'] ?>"><?php echo $akhir['alamat'] ?></textarea></td>
				</tr>
				<tr></tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="edit" value="SIMPAN PERUBAHAN"></td>
					<td colspan="3" align="center"><input type="submit" name="kembali" value="HALAMAN AWAL"></td>
				</tr>		
			</table>
		</form>
	</div>
</body>
</html>
<?php 
if (isset($_POST['edit'])) {
	$nama 		= $_POST['nama'];
	$nim  		= $_POST['nim'];
	$kelas 		= $_POST['kelas'];
	$jk 		= $_POST['jk'];
	$hobi 		= $_POST['hobi'];
	$fakultas 	= $_POST['fakultas'];
	$alamat 	= $_POST['alamat'];

	$_SESSION['nama']=$nama;
	$_SESSION['nim']=$nim;
	$_SESSION['kelas']=$kelas;
	$_SESSION['jk']=$jk;
	$_SESSION['hobi']=$hobi;
	$_SESSION['fakultas']=$fakultas;
	$_SESSION['alamat']=$alamat;

	header("Location:update.php");
}
if (isset($_POST['kembali'])) {
	header("Location:halamanawal.php");
}

 ?>