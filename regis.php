<h1> <center> REGISTRASI </center> </h1>

<form method="POST">
	<table>
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td><input type="text" name="nama" length="35"></td>
		</tr>

		<tr>
			<td> NIM </td>
			<td> : </td>
			<td><input type="text" name="nim" legth="10"></td>
		</tr>

		<tr>
			<td> Kelas </td>
			<td> : </td>
			<td><input type="radio" name="kelas" value="01">01</td>
			<td><input type="radio" name="kelas" value="02">02</td>
			<td><input type="radio" name="kelas" value="03">03</td>
			<td><input type="radio" name="kelas" value="04">04</td>
		</tr>

		<tr>
			<td> Jenis Kelamin </td>
			<td> : </td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</td>
			<td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>

		<tr>
			<td> Hobi </td>
			<td> : </td>
			<td><input type="checkbox" name="hobi" value="Basket">Basket</td>
			<td><input type="checkbox" name="hobi" value="Travelling"> Travelling</td>
			<td><input type="checkbox" name="hobi" value="Shopping"> Shopping </td>
			<td><input type="checkbox" name="hobi" value="Diving"> Diving</td>
			<td><input type="checkbox" name="hobi" value="Climbing"> Climbing</td>
		</tr>

		<tr>
			<td> Fakultas </td>
			<td> : </td>
			<td> <select name="fakultas">
				 <option value="FIT"> Fakultas Ilmu Terapan </option>
				 <option value="FIK"> Fakultas Industri Kreatif </option>
				 <option value="FKB"> Fakultas Komunikasi Bisnis </option>
				 <option value="FEB"> Fakultas Ekonomi Bisnis </option> </select>
			</td>
		</tr>

		<tr>
			<td> Alamat </td>
			<td> : </td>
			<td><input type="textarea" name="alamat"></td>
		</tr>

		<tr>
			<td> Password </td>
			<td> : </td>
			<td><input type="text" name="pass"></td>
		</tr>

		<tr>
			<td><input type="submit" name="Send" value="kirim"></td>
		</tr>

	</table>
</form>

<?php 
if (isset($_POST['send'])) {
	include('prosesregis.php');
}
?>