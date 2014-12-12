<!-- filename: gambar.php-->

<?php include("header.php"); ?>
<div id="kanan">
	
		
		<form	action="upload.php"
				method="POST"
				enctype="multipart/form-data">
	<center>
		<h2>Admin Gallery</h2>
		<table>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input	type="text"
							name="judul" /></td>
			</tr>
			
			<tr>
				<td>Keterangan</td>
				<td>:</td>
					<td><textarea name="body"></textarea></td>
			</tr>
			
			<tr>
				<td>File</td>
				<td>:</td>
				<td><input	type="file"
							name="gambar"/></td>
			</tr>
			
			<tr>
				<td colspan="3" align="right">
					<input	type="submit"
							name="simpan"
							value="SAVE" /></td>
			</tr>
		</table>
		</form>
	</center>
					
		</div><!--kanan-->
	</div><!--isi-->
	
<?php include("footer.php");?>