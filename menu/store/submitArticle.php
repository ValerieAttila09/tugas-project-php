<?php 
include "../../auth/koneksi.php";

$title       = $_POST['title'];
$description = $_POST['description'];

$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true); // buat folder jika belum ada
}

$imageName = time() . "_" . basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $imageName;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
    // Simpan ke database
    $sql = "INSERT INTO tb_artikel (judul, deskripsi, gambar) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $title, $description, $imageName);

    if ($stmt->execute()) {
        echo "Artikel berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Gagal upload gambar.";
}

$con->close();
?>