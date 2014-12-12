<?php

// edit_proses.php

include("koneksi.php");

$sql = "UPDATE mahasiswa SET
		nama = '$_POST[nama]',
		jurusan = '$_POST[jurusan]'
		WHERE id=$_POST[id]";
mysqli_query($koneksi, $sql);
header('Location:daftar.php');