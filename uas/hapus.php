<?php
// hapus.php

include("koneksi.php");

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa
		WHERE ID=$id";
mysqli_query($koneksi, $sql);

header('Location:daftar.php');