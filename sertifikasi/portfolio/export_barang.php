<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Barang.xls");
	?>

	<center>
		<h1>Laporan Data Barang<br/>Muhammad Aditio Kamal Ibrahim</h1>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Tanggal Masuk</th>
			<th>Nama Barang</th>
			<th>Spesifikasi</th>
			<th>Supplier</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
		</tr>
		<?php
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_sertifikasi");

		// menampilkan data barang
		$data = mysqli_query($koneksi,"select * from data_barang");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['kode_barang']; ?></td>
			<td><?php echo $d['tgl_masuk']; ?></td>
			<td><?php echo $d['nama_barang']; ?></td>
			<td><?php echo $d['spesifikasi']; ?></td>
			<td><?php echo $d['supplier']; ?></td>
			<td><?php echo $d['harga_beli']; ?></td>
			<td><?php echo $d['harga_jual']; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>