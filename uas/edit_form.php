<?php
include("koneksi.php");
$id = $_GET['id'];

//2
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$hasil = mysqli_query($koneksi, $sql);

//3
$baris = mysqli_fetch_assoc($hasil);

?>

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
							value="<?php echo $baris['Nama']; ?>"/></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input	type="text"
							name="jurusan"
							value="<?php echo $baris['Jurusan']; ?>"/></td>
			</tr>
			<tr>
			<tr>
				<input 	type="hidden"
						name="id"
						value="<?php echo $baris['ID']; ?>" />
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

