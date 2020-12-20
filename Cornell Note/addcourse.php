<?php
include 'koneksi.php';
$course = $_POST['course'];
$id = $_POST['id'];
foreach ($id as $element) {
if ($element !== '') {
	mysqli_query($koneksi, "INSERT INTO list_course (course,nama_user)VALUES('$course','$element')");
}
	
}

 ?>
