<?php // filename: login_proses.php
session_start();
//but koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "uas");

$user= $_POST['username']; // data dari form login
$pass= $_POST['password']; //data dari form login

// query sql
$sql = " SELECT * FROM loginsystem WHERE username = '$user' ";
$hasil = mysqli_query ($koneksi ,$sql);
 

?>

<?php include("header.php"); ?>	
	<div id="header">		
		<div id="banner">
			<img src="banner.jpg">
		</div><!--banner-->
		<div id="menu">
					
		</div><!--menu-->	
	</div> <!--header-->
	
	<div id="isi">
		<div id="kiri">
		</div><!--kiri-->
		<div id="kanan">
		
<center>
		<?php
			//cek apakah hasil query menemukan username yang cocok
			if(mysqli_num_rows($hasil) == 0){ ?>
				<script>alert("Login gagal!");document.location.href="login.php"</script> 
		<?php
			}else{	
				
				$baris 		= mysqli_fetch_assoc($hasil);
				$format 	= "$2y$10$";
				$hash 		= "dhaskjdsahiyerqr123128217";
				$salt 		= $format . $hash ;
				$newpass 	= crypt($pass , $salt);
			if($newpass == $baris['password']){
				echo "password cocok";
				$_SESSION['login'] = 1;
				header("Location: admin.php");
			}else{ ?>
				<script>alert("password salah !!");document.location.href="login.php"</script> 
				<?php
			}
			}
		?>
</center>
		</div><!--kanan-->
	</div><!--isi-->
	
<?php include("footer.php");?>