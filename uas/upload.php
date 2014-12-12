<!--file name:upload.php-->

<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

$file_name = $_FILES['gambar']['name'];
$file_type = $_FILES['gambar']['type'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$file_error = $_FILES['gambar']['error'];
$file_size = $_FILES['gambar']['size'];

$file_ext = strtolower(end(explode(".", $file_name)));
echo $file_ext;
$ext_boleh = array("jpg", "png", "gif", "bmp");


if(in_array($file_ext , $ext_boleh)){
	//EXT FILE DIPERBOLEHKAN
	if($file_size<= 2*1024*1024){
		
		// MOVE file to new directory
		$sumber = $file_tmp;
		$tujuan = "img/" . $file_name;
		move_uploaded_file($sumber, $tujuan);
		
		//2. SQL Query
		$sql = "INSERT INTO gallery(title, body, file)
				VALUES('$judul', '$ket' , '$tujuan')";
		mysqli_query($koneksi,$sql);
			echo "upload berhasil";
		// cek kalo query gagal
		if(mysqli_error($koneksi)){
			echo "Upload gambar gagal";
			echo mysqli_error($koneksi);
			die();
		}
		header('Location: gambar.php');
		}else{
			echo "ukuran gambar terlalu besar. max 2MB.";
		}
	}else{
		echo "jenis file yang diperbolehkan hanya gambar.";
	}