<form method="POST">
	<table>
		<tr> 
			<td> Username </td>
			<td> : </td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td> Passwod </td>
			<td> : </td>
			<td><input type="text" name="pass"></td>
		</tr>
	</table> <br> <br>

	<input type="submit" name="submit" value="Log In">
	<button> <a href="regis.php"> Registrasi </a></button>
</form>

<?php 
	if (isset($_POST['send'])) {
		session_start();

		include "koneksi.php"

		$nim = $_POST['nim'];
		$pass = $_POST['pass'];

		$sql = "SELECT nim, password FROM jurusan WHERE nim='$nim'";

		$qry = mysqli_query($conn,$sql);
		$row = mysqli_fetch_row($qry);

		if ($nim == $row[0]) {
			if ($pass == $row[1]) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["username"]=$row[0];
        		$_SESSION["password"]=$row[1];

        		echo "SELAMAT LOGIN SUKSES";
        		
			}
			else{
				echo "MAAF PASSWORD YANG ANDA MASUKKAN SALAH";
			}
		}
		else{
			echo "MAAF NIM YANG ANDA MASUKKAN SALAH";
		}
	}
?>






 ?>




