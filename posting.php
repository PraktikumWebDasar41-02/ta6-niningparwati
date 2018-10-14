<body bgcolor="#adebeb">
<div align="center">
	<?php
		session_start();
		echo "Akun : ".$_SESSION['nama']."<br><br>";
	?>
	<form method="POST" enctype="multipart/form-data">
		<table border="1" bgcolor="#4dffff">
			<tr>
				<td colspan="2" align="center">HALAMAN POSTING</td>
			</tr>
			<tr>
				<td>Judul Postingan </td>
		 		<td><input type="text" name="judul" value=""></td>
			</tr>
			<tr>
				<td>Ketikan postingan Anda di sini </td>
				<td><textarea name="posting" value="" cols="30" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Posting gambar </td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="submit" value="KIRIM"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="lihat" value="LIHAT POSTINGAN"></td>
			</tr>
		</table>
	</form>
	<?php 
	$conn = mysqli_connect('localhost','root','','d_tamodul6');
	/*
	if (!$conn) {
		echo "gagal masuk database";
	}else{
		echo "berhasil masuk database";
	}
	*/
	if (isset($_POST['submit'])) {

		$judul = $_POST['judul'];
		$posting = $_POST['posting'];
		$tanggal = date("Y-m-d H:i:s");
		$nim = $_SESSION['nim'];

		$target_dir="uploads/";
		$target_file=$target_dir.basename($_FILES['gambar']['name']);

		if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
			echo "file berhasil diupload <br>";
		}else{
			echo "file gagal diupload <br>";
		}


		if (str_word_count($posting)<30) {
			echo "Minimal posting minimal 30 kata <br>";	
		}else{
			echo "Postingan sudah memenuhi syarat <br>";
		}

		$masukan = mysqli_query($conn, "INSERT INTO t_posting VALUES ('','$judul','$posting','$target_file','$tanggal','$nim')");
		if ($masukan) {
			echo "berhasil upload";
		}else{
			echo "gagal upload".mysqli_error($conn);
		}
	}

	if (isset($_POST['lihat'])) {
		header("Location:daftarposting.php");
	}
	?>
</div>
</body>