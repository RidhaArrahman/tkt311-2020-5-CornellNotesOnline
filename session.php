<?php

session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:login.php");
} elseif ($_SESSION['level'] == "admin") {
    header("location:index.php");
} elseif ($_SESSION['level'] == "siswa") {
    header("location:index.php");
}


// Session Time Out (Nanti Buka Yang Bawah)



if (isset($_SESSION["username"])) {
    if (time() - $_SESSION["login_time_stamp"] > 2592000) {
        session_unset();
        session_destroy();
        header("location:login.php");
    }
} else {
    header("location:login.php");
}
