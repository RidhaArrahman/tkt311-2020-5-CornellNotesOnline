<?php

// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['email'];
$password = md5($_POST['password']);
$link = '';

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where email='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {


    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {
        // buat session login dan username
       $_SESSION['username'] = $data ['nama_user'];
        $_SESSION['email'] = $data ['email'];
        $_SESSION["login_time_stamp"] = time();
        // alihkan ke halaman dashboard admin
        header("location:index.php");

        // cek jika user login sebagai siswa
    } else if ($data['level'] == "siswa") {
        // buat session login dan username
        $_SESSION['username'] = $data ['nama_user'];
        $_SESSION['email'] = $data ['email'];
        $_SESSION["login_time_stamp"] = time();
        // alihkan ke halaman dashboard siswa
        header("location:index.php");
//print_r($_POST);
    } else {

        // alihkan ke halaman login kembali
        header("location:login.php");
    }
}
} else {
    header("location:login.php");
}
