
<?php include("header.php"); ?>
		<div id="kanan">
		<center>
			
	<form action="form_insert.php" method="POST">
		<table>
		<h2> Tambah data Mahasiswa</h2>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input	type="text"
							name="nama"
							value=""/></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input	type="text"
							name="jurusan"
							value=""/></td>
			</tr>
			<tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input	type="text"
							name="alamat"
							value=""/></td>
			</tr>
			
				<td>No telepon</td>
				<td>:</td>
				<td><input	type="text"
							name="no_telepon"/></td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<input	type="submit"
							name="simpan"
							value="SAVE"  /></td>
		</table>
	</form>
<center>
		</div><!--kanan-->
	</div><!--isi-->

<?php include("footer.php");?>

<?php
//4. Free up memory hasil query
mysqli_free_result($hasil);
//5. Tutup koneksi
mysqli_close($koneksi);
?>

