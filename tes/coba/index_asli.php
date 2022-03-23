<?php

//Array Daftar Maskapai Tersedia
$daftarMaskapai = array(
	array("Garuda Indonesia", "Soekarno-Hatta (CGK)", "Ngurah Rai (DPS)", 1500000, 130000, 1630000),
	array("Lion Air", "Husein Sastranegara (BDO)", "Hasanuddin (UPG)", 1800000, 100000, 1900000),
	array("Sriwijaya Air", "Abdul Rachman Saleh (MLG)", "Ngurah Rai (DPS)", 1000000, 120000, 1120000),
);

//Array Daftar Bandara dan Pajak
//...


//Fungsi Menghitung Total Pajak Bandara
//...

/**
		Fungsi ini berguna untuk menghitung total biaya penerbangan sebuah maskapai
		-- Argumen pertama berisi total pajak dari Bandara
		-- Argumen kedua berisi harga tiket maskapai yang di input oleh user
		-- Balikan dari Fungsi ini adalah Total Biaya penerbangan
 **/
function totalHarga($totalPajak, $hargaTiket)
{
	return $totalPajak + $hargaTiket;
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Jadwal Penerbangan</title>
</head>

<body>
	<h1>Pendaftaran Rute Penerbangan</h1>

	<!-- Form Pendaftaran Rute Penerbangan -->
	<form>
		<table>
			<tr>
				<td><label>Maskapai</label></td>
				<td>:</td>
				<td><input type="text" placeholder="Nama Maskapai"></td> <!-- Input nama Maskapai -->
			</tr>
			<tr>
				<td><label>Bandara Asal</label></td>
				<td>:</td>
				<td>
					<select>
						<!-- Input Bandara Asal -->

					</select>
				</td>
			</tr>
			<tr>
				<td><label>Bandara Tujuan</label></td> <!-- Input Bandara Tujuan -->
				<td>:</td>
				<td>
					<select>

					</select>
				</td>
			</tr>
			<tr>
				<td><label>Harga Tiket</label></td>
				<td>:</td>
				<td><input type="number"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit" name="submit"></td> <!-- Submit Form -->
			</tr>
		</table>
	</form> <br>


	<?php
	if (isset($_POST['submit'])) {
		//Input Form
		//...

		//Memasukan Array baru kedalam Array Daftar Rute Penerbangan
		//...

		//Mengurutkan Daftar Maskapai sesuai Abjad dari yang terkecil
		//...
	}

	?>

	<!-- Menampilkan Daftar Maskapai Beserta Rute Penerbangannya -->
	<h1>Daftar Rute Tersedia</h1>
	<table border="1px" width="800px">
		<thead>
			<tr>
				<th>Maskapai</th>
				<th>Asal Penerbangan</th>
				<th>Tujuan Penerbangan</th>
				<th>Harga Tiket</th>
				<th>Pajak</th>
				<th>Total Harga Tiket</th>
			</tr>
		</thead>
		<tbody>
			<!-- Perulangan untuk menampilkan isi Array Daftar Maskapai beserta Rute Penerbangan -->
			<!-- ... -->

		</tbody>
	</table>


</body>

</html>