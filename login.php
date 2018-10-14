<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style type="text/css">

		table{
			font-family: Georia, Verdana, Helvetica, Arial,sans-serif;
			font-style: 12px;
		}
		input{
			font-family: Georia, Verdana, Helvetica, Arial,sans-serif;
			font-style: 12px;
			height: 20px;
		}
		button{
			background-color:  #ff6666;
		}
	</style>
</head>
<body bgcolor="#ffcc99">
	<div align="center">
		<form method="POST">
			<table border="0" width="400" >
				<tr bgcolor="#ff0000">
					<td height="10" colspan="2" align="center" width="400">
						<h2><font color="#ffffff">HALAMAN LOGIN</font></h2>
					</td>
				</tr>
				<tr>
					<td bgcolor="#ff8080" width="100" height="40">
						Nama  
					</td>
					<td bgcolor="#ff9999" width="300" height="40">
						: <input type="text" name="nama" value=""><br>
					</td>
				</tr>
				<tr>
					<td bgcolor="#ff8080" width="100" height="40">
						NIM	 
					</td>
					<td bgcolor="#ff9999" width="300" height="40">
						: <input type="text" name="nim" value=""><br>
					</td>
				</tr>
				<tr >
					<td colspan="2" align="center" width="400" height="40" bgcolor="#ff9999">
						<input type="submit" name="kirim" value="LOGIN" bgcolor=" #ff6666">
					</td>
				</tr>	
				<tr bgcolor="#ff9999" align="center" >
					<td colspan="2" height="40">
						belum punya akun?
					</td>
				</tr>
				<tr bgcolor="#ff9999" align="center">
					<td colspan="2" height="40">
						<button name="daftar" >Daftar</button>
					</td>
				</tr>					
			</table>
		</form>
	</div>
</body>
</html>

<?php 
session_start();
$conn = mysqli_connect('localhost','root','','d_tamodul6');

if (isset($_POST['kirim'])) {
	$nama1 = $_POST['nama'];
	$nim1  = $_POST['nim'];

	$_SESSION['nama']=$nama1;
	$_SESSION['nim']=$nim1;

	$query="SELECT * FROM t_tamodul6 where nim='$nim1' && nama='$nama1'";
	$hasil=mysqli_query($conn,$query);
	$akhir=mysqli_fetch_array($hasil);

	if ($nama1==$akhir['nama'] && $nim1==$akhir['nim']) {
		echo "Nama dan NIM yang Anda masukan terdaftar di database <br>";	
		header("Location:halamanawal.php");
	}else{
		echo "Nama atau NIM yang Anda masukan tidak terdaftar di database <br> Pastikan Nama dan NIM yang Anda masukan benar";
	}
}

if (isset($_POST['daftar'])) {
	header("Location:pendaftaran.php");
}
 ?>
