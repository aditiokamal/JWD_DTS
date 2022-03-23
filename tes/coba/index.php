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
	<form method="post" name="form">
		<table>
			<tr>
				<td><label>Maskapai</label></td>
				<td>:</td>
				<td><input type="text" placeholder="Nama Maskapai" name="nama_maskapai[]"></td> <!-- Input nama Maskapai -->
			</tr>
			<tr>
				<td><label>Bandara Asal</label></td>
				<td>:</td>
				<td>
					<select name="bandara_asal[]">
						<!-- Input Bandara Asal -->
						<option selected="selected">Choose one</option>
						<?php
						// A sample product array
						$bandaraAsal = array("sukarnohatta", "bandung", "malang", "solo");
						
						// Iterating through the product array
						foreach($bandaraAsal as $v){
								echo "<option value='$v'>$v</option>";
						}
						?>

					</select>
				</td>
			</tr>
			<tr>
				<td><label>Bandara Tujuan</label></td> <!-- Input Bandara Tujuan -->
				<td>:</td>
				<td>
					<select name="bandara_tujuan">
						<option selected="selected">Choose one</option>
						<?php
						// A sample product array
						$bandaraTujuan = array("sukarnohatta", "bandung", "malang", "solo");
						
						// Iterating through the product array
						foreach($bandaraTujuan as $v){
								echo "<option value='$v'>$v</option>";
						}
						?>

					</select>
				</td>
			</tr>
			<tr>
				<td><label>Harga Tiket</label></td>
				<td>:</td>
				<td><input type="number" name="harga_tiket[]"></td>
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
		$namaMaskapai = $_POST['nama_maskapai'];
		$hargaTiket = $_POST['harga_tiket'];
		$bandaraAsal = $_POST['bandara_asal'];
		$bandaraTujuan = $_POST['bandara_tujuan'];

		//Memasukan Array baru kedalam Array Daftar Rute Penerbangan
		//...

		//Mengurutkan Daftar Maskapai sesuai Abjad dari yang terkecil
		//...
		foreach($namaMaskapai as $key => $val){
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
			<tr>
				<th><?= $namaMaskapai[$key]; ?></th>				
				<th><?= $bandaraAsal[$key]; ?></th>
				<th><?= $bandaraTujuan[$key]; ?></th>
				<th><?= $hargaTiket[$key]; ?></th>
			</tr>
			<!-- Perulangan untuk menampilkan isi Array Daftar Maskapai beserta Rute Penerbangan -->
			<!-- ... -->

		</tbody>
		<?php
			}
		?>
	</table>


</body>

</html>