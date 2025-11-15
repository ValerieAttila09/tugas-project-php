<?php
include "koneksi.php";

if (isset($_POST["signup"])) {
    $nama = $_POST['nama'];
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    $level = "admin";

    $regiter = mysqli_prepare($con, "INSERT INTO tb_user (nama, username, pass, level) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($regiter, 'ssss', $nama, $user, $pass, $level);
    mysqli_stmt_execute($regiter);
    if (mysqli_stmt_get_result($regiter)) {
        echo "<script>alert('Register Complete!');</script>";
        header("Location: ./login.php");
    } else {
        echo "<script>alert('Register Failed!');</script>";
        header("Location: ./register.php");
    }
    
}
