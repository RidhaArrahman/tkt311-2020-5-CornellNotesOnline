<?php
include 'koneksi.php';
$course = $_POST['course'];
$des = $_POST['des'];

mysqli_query($koneksi, "INSERT INTO course (course,des) 
            VALUES('$course','$des')");
 ?>