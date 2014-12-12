
<?php include("header.php"); ?>	

		<div id="kanan">
		
<center>
<form action="login_proses.php" method="POST"></br>
	<table>
		<tbody>
			<tr>
				<td>Username</td>
				<td>:<input type="text" 
							name="username"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:<input type="password" 
							name="password"/></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input 	type="submit" 
							name="login" 
							value="login"/></td>
			</tr>
		</tbody>
	</table>
</form>
	
</center>
		</div><!--kanan-->
	</div><!--isi-->
	
<?php include("footer.php");?>