 <body bgcolor="#adebeb">
 	<div align="center">
		<?php 
			if (isset($_POST['edit'])) {
				session_start();
				echo "Akun : ".$_SESSION['nama']."<br><br>";
				$conn=mysqli_connect('localhost','root','','d_tamodul6');
				/*
				if (!$conn) {
					echo "gagal DB";
				}else{
					echo "konek";
				}
				*/

				$nama 		= $_POST['nama'];
				$nim  		= $_POST['nim'];
				$kelas 		= $_POST['kelas'];
				$jk 		= $_POST['jk'];
				$hobi 		= $_POST['hobi'];
				$fakultas 	= $_POST['fakultas'];
				$alamat 	= $_POST['alamat'];
				$nim=$_SESSION['nim'];

				$sql=("UPDATE t_tamodul6 SET nama='$nama', nim='$nim', kelas='$kelas', jenis_kelamin='$jk', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' WHERE nim='$nim' ");
					
				if (mysqli_query($conn, $sql)) {
					echo "Update data berhasil disimpan. <br>";
				}else{
					echo "Update gagal disimpan :".mysqli_error($conn);
				}

			}
			echo "Apakah Anda ingin kembali ke halaman awal? <br>";
		 ?>


		 <form method="POST">
		 	<input type="submit" name="kembali" value="HALAMAN AWAL">
		 </form>

		  <?php 
		 if (isset($_POST['kembali'])) {
		  	header("Location:halamanawal.php");
		  	  } ?>
</div>
 </body>