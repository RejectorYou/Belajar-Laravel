<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
</head>
<body>
	<table>
		<tr>	
			<td colspan="2" align="center">Formulir Karyawan Baru</td>
		</tr>
		<form action="/karyawan/add/process" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<tr>
			<td>
				Nama
			</td>
			<td>
				<input type="text" id="nama" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				posisi
			</td>
			<td>
				<input type="checkbox" id="posisi[1]" name="posisi[1]" value="Operator">
					<label for="posisi[1]">Operator</label><br>
				<input type="checkbox" id="posisi[2]" name="posisi[2]" value="Karyawan">
					<label for="posisi[2]">Karyawan</label><br>
				<input type="checkbox" id="posisi[3]" name="posisi[3]" value="Finishing">
					<label for="posisi[3]">Finishing</label><br>
				<input type="checkbox" id="posisi[4]" name="posisi[4]" value="Repairing">
					<label for="posisi[4]">Repairing</label><br>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="simpan">
			</td>
		</tr>
		</form>
	</table>
</body>
</html>