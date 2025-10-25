<?php
include "koneksi.php";
session_start();

if (isset($_POST["login"])) {
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);


    $select = mysqli_prepare($con, "SELECT * FROM tb_user WHERE username=? AND pass=?");
    mysqli_stmt_bind_param($select, 'ss', $user, $pass);
    mysqli_stmt_execute($select);
    $data = mysqli_stmt_get_result($select);
    $cek = mysqli_fetch_array($data);

    if ($cek != 0) {
        if ($cek['level'] == "admin") {
            $_SESSION['id'] = $cek['id_user'];
            $_SESSION['nama'] = $cek['nama'];
            $_SESSION['username'] = $cek['username'];
            $_SESSION['level'] = $cek['level'];
            echo '<script>alert("berhasil login dengan id '.$cek['id_user'].'")</script>';
            header("location:../menu/dashboard.php");
            exit;
        } else {
            echo '<script>window.location.href="index.php"</script>';
        }
    } else {
        echo '<script>alert("gagal login")</script>';
    }
}
