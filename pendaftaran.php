<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
</head>
<body bgcolor="#adebeb">
	<div align="center">
		<form method="POST">
			<table width="750" border="1" bgcolor="#33ff99">
				<tr>
					<td colspan="5" align="center" ><font style="Georgia" color="#0000ff" size="5px"><b>HALAMAN REGISTRASI</b></font></td>
				</tr>
				<tr>
					<td align="left" width="150">Nama</td>
					<td align="left" ><input type="text" name="nama" value=""></td>
				</tr>
				<tr>
					<td align="left" width="150">NIM</td>
					<td align="left" ><input type="text" name="nim" value=""></td>
				</tr>
				<tr>
					<td align="left" >Kelas</td>
					<td><input type="radio" name="kelas" value="D3MI-41-01"> D3MI-41-01 </td>
					<td><input type="radio" name="kelas" value="D3MI-41-02"> D3MI-41-02 </td>
					<td><input type="radio" name="kelas" value="D3MI-41-03"> D3MI-41-03 </td>	
					<td><input type="radio" name="kelas" value="D3MI-41-03"> D3MI-41-04 </td>	
					
				</tr>	 
				<tr>
					<td align="left" width="150">Jenis Kelamin</td>
					<td><input type="radio" name="jk" value="Perempuan" checked>Perempuan </td>
					<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki </td>	
				</tr>
				<tr>
					<td align="left" width="150">hobi</td>
					<td><input type="checkbox" name="hobi" value="Membaca">Membaca </td>
					<td><input type="checkbox" name="hobi" value="Travelling">Traveling </td>
					<td><input type="checkbox" name="hobi" value="Ngoding">Ngoding </td>
					<td><input type="checkbox" name="hobi" value="Belanja">Belanja </td>
				</tr>
				<tr>
					<td align="left" width="150">Fakultas</td>
					<td>
						<select name="fakultas">
							<option value="FIT">FIT</option>
							<option value="FKB">FKB</option>
							<option value="FEB">FEB</option>
							<option value="FIK">FIK</option>
							<option value="FIF">FIF</option>
							<option value="FRI">FRI</option>
							<option value="FTE">FTE</option>
						</select> <br>
					</td>
				</tr>
				<tr>
					<td align="left" width="150">Alamat	:</td>
					<td><textarea name="alamat" rows="4" cols=""></textarea></td>
				</tr>		
				<tr>
					<td colspan="5" align="center"><input type="submit" name="submit" value="SUBMIT" ></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

<?php 
session_start();
$con=mysqli_connect('localhost','root','','d_tamodul6');
/*
if ($conn=mysql_connect('localhost','root','','d_tamodul6')) {
	echo "berhasil";
}
*/
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nim  = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jk'];
	$hobi = $_POST['hobi'];
	$fakultas =$_POST['fakultas'];
	$alamat = $_POST['alamat'];
	
	if (strlen($nama)>35) {
		echo "Inputan nama maksimal 35 karakter <br>";
	}else{
		echo "Inputan nama berhasil! <br>";
	}

	if (strlen($nim)>'10') {
		echo "Inputan NIM tidak boleh lebih dari 10 karakter <br>";
	}elseif(strlen($nim)<'10'){
		echo "Inputan NIM tidak boleh kurang dari 10 karakter <br>";
	}else{
		echo "Inputan NIM berhasil <br>";
	}

		if (empty($nama)||empty($nim)||empty($kelas)||empty($jk)||empty($hobi)||empty($fakultas)||empty($alamat)) {
			echo "Pastikan semua data telah diisi".mysqli_connect_error();
			header("Location:pendaftaran.php");
		}


	$input=mysqli_query($con, "INSERT INTO t_tamodul6 VALUES('$nama', '$nim', '$kelas', '$jk', '$hobi', '$fakultas', '$alamat')");

	if ($input) {
		echo "Registrasi selesai. <br>";

header("Location:login.php");

	}else{
		echo "Gagal masuk ke database";
	}

}
 ?>