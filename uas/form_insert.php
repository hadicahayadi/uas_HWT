<?php
// form_insert.php
include("koneksi.php");

// 2. Query SQL
$sql = "INSERT INTO mahasiswa (nama, jurusan, alamat, no_telepon)
		VALUES('$_POST[nama]', '$_POST[jurusan]', '$_POST[alamat]', '$_POST[no_telepon]')";

mysqli_query($koneksi, $sql);

header('Location: daftar.php');
?>
	