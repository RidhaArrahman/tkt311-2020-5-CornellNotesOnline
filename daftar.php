<?php
include 'koneksi.php';
$password= $_POST['password'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$name = $_POST['name'];
mysqli_query($koneksi, "INSERT INTO user (nama_user,username,email,password,npm,fct) 
            VALUES('$name','$name','$email','$password','npm','Teknik')");
 ?>