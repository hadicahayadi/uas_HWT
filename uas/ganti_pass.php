
<?php include("header.php"); ?>
		<div id="kanan">
			<center>
			<form action="ganti_pass_proses.php" method="post" ></br>
					<table width="320" border="0">
						<tr>
						  <td >Password Lama </td>
						  <td >:</td>
						  <td><input 	type="password" 
										name="pwd_lama" /></td>
						</tr>
						<tr>
						  <td>Password Baru </td>
						  <td>:</td>
						  <td><input	type="password" 
										name="pwd_baru" /></td>
						</tr>
						<tr>
						  <td>Konfirmasi password baru</td>
						  <td>:</td>
						  <td><input 	name="confirm" 
										type="password" /></td>
						</tr>
						<tr>
						  <td height="44" colspan="3">
							
							  <div align="center">
								<input type="submit" name="Submit" value="Changed Password" />
							</div></td>
						</tr>
					</table>
			  </form>
			  </center>
		</div><!--kanan-->
	</div><!--isi-->
	
<?php include("footer.php");?>