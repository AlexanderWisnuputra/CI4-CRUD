<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Product</title>
</head>
	<style>
		<table {
			width: 100%;
			border-collapse: collapse;
		}
	</style>
	<head>
	<body>
		<h2>Data barang</h2>
		<button type="button" onclick="window.location='/add'">
		Tambah Data</button>

		<table border="1">
			<thead>
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>harga</th>
					<th>Stock</th>
					<th>aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor = 0;
				foreach($tampildata as $row) :
					$nomor++;
					?>
					<tr>
						<th><?= $nomor ?></th>
						<td><?= $row->name ?></td>
						<td><?= $row->price ?></td>
						<td><?= $row->stock ?></td>
						<td>
							<button type="button" onclick="hapus(<?= $row->stock ?>)">Hapus</button>
							<button type="button" onclick="window.location='<?php echo site_url('/edit/'.$row->name)?>'">Edit </button>
						</td>
					</tr>
					<?php 
				endforeach;
				?>
			</tbody>
		</table>
		<script>
			function hapus(stock){
				pesan = confirm('Yakin ingin menghapus data?');
				if (pesan) {
					window.location.href = ("<?= site_url('/delete/') ?>") + stock;
				} else return false;
			}
		</script>
	</body>
</head>