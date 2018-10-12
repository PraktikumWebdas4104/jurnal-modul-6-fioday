<?php
error_reporting(0);

	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "jurusan";

	$conn=mysqli_connect($host, $user, $pass, $database);

	if(isset($_POST['send'])){
		$nama 	  = $_POST['nama'];
		$nim 	  = $_POST['nim'];
		$kelas 	  = $_POST['kelas'];
		$jk 	  = $_POST['jk'];
		$hobi 	  = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat   = $_POST['alamat'];
		$password = $_POST['pass'];


		if(strlen($nama)==35){
			if(strlen($nim)<10){
				$qry = $conn -> query("INSERT INTO `jurusan` (`nama`,`nim`,`kelas`,`jk`,`hobi`,`fakultas`,`alamat`,`pass`) VALUES ('$nama','$nim','kelas','$jk','$hobi','$fakultas','$alamat','$pass')");

				echo "Registrasi Berhasil";
				echo "<button> <a href='login.php'>Log In</button></a>";
			}else{
				echo "Registrasi Gagal";
			}
		}else{
			echo "Registrasi Gagal";
		}
	}
?>