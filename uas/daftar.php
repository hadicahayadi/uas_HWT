<?php
include("koneksi.php");

//2. Lakukan Query SQL
//2.a. Siapkan SQL Statement
	   $sql = "SELECT * FROM mahasiswa";
//2.b. Lakukan Query SQL
	   $hasil = mysqli_query($koneksi, $sql);
?>
<?php include("header.php"); ?>
<div id="kanan">
		<center>

				<form action="form.php" method="POST">
				<table border="1">
				<h2>Daftar Mahasiswa</h2>
					<tr>
						<td>ID</td>
						<td>Nama</td>
						<td>Jurusan</td>
						<td>Alamat</td>
						<td>No. Telepon</td>
						<td>Option</td>
					</tr>

				<?php
				//3. Tampilkan hasil query
				while($baris = mysqli_fetch_assoc($hasil)) {
					echo "<tr>";
					echo "<td>" . $baris['ID'] . "</td>";
					echo "<td>" . $baris['Nama'] . "</td>";
					echo "<td>" . $baris['Jurusan'] . "</td>";
					echo "<td>" . $baris['alamat'] . "</td>";
					echo "<td>" . $baris['no_telepon'] . "</td>";
					echo "<td>";
						echo "<a href='hapus.php?id=" . $baris['ID'] . "'><img src='hapus.png'/></a>	|";
						echo "<a href='edit_form.php?id=" . $baris['ID'] . "'><img src='update.png'/></a>";
					echo "</td>";
					echo "</tr>";
				}
				?>
					<tr>
						<td colspan="6" align="right">
						<input	type="submit"
								name="add"
								value="Tambah"/>
						</td>
					</tr>
				</table>
				</form>
				</center>	
			</div><!--kanan-->
		</div><!--isi-->
<?php include("footer.php");?>

<?php
//4. Free up memory hasil query
mysqli_free_result($hasil);
//5. Tutup koneksi
mysqli_close($koneksi);
?>
