<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Tambah Product</title>
</head>


	<style>
		<table {
			width: 100%;
			border-collapse: collapse;
		}
	</style>
	<head>
	<body>
		<h2>Form Tambah barang</h2>
		<p>
	
	<button type="button" onclick="window.location='/list'"> Kembali</button>
</p>
<?= form_open('/simpandata') ?>
<table>
	<tr>
		<td>Input Name :</td>
		<td>
			<input type="text" name="name" maxlength="50" readonly value="<?= $name; ?>">
		</td>
	</tr>	
	<tr>
		<td>Input Price :</td>
		<td>
			<input type="text" name="price" maxlength="25">
		</td>
	</tr>
		<tr>
		<td>Input Stock :</td>
		<td>
			<input type="text" name="stock" maxlength="10">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" value="Simpan Data">
		</td>
	</tr>
</table>
<?= form_close();?>

		
		</table>
	</body>
</head>