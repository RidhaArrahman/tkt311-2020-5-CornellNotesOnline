<?php 
include 'koneksi.php';
$namaTugas = $_POST['namaTugas'];
$detilTugas = $_POST['detilTugas'];

$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['berkas']['name'];
$ukuran = $_FILES['berkas']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 104857600){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['berkas']['tmp_name'], 'berkas/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO nama VALUES(NULL,'$namaTugas','$detilTugas','$xx')");
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagal_ukuran");
	}
}