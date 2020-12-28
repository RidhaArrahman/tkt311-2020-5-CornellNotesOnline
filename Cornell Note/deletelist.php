<?php
include 'koneksi.php';
$course = $_POST['course'];
$id = $_POST['id'];
foreach ($id as $element) {
if ($element !== '') {
	$sql = "DELETE FROM list_course WHERE id='$element'";
	
    $query = mysqli_query($koneksi, $sql);
}
	
}
 ?>
