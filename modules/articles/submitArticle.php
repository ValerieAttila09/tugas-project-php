<?php 
include "../../config/database.php";
include "../../app/Helpers/functions.php";

session_start();

// Check if user is logged in
if (!isLoggedIn()) {
    die("Unauthorized access");
}

$title       = sanitizeInput($_POST['judul']);
$content     = $_POST['isi']; // This comes from Quill.js editor
$category    = sanitizeInput($_POST['kategori']);
$publisher   = getUserName(); // Get publisher name from session

// Handle image upload
$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true); // Create folder if it doesn't exist
}

$imageName = '';
if (isset($_FILES["gambar"]) && $_FILES["gambar"]["name"] != '') {
    $imageName = time() . "_" . basename($_FILES["gambar"]["name"]);
    $targetFilePath = $targetDir . $imageName;
    
    if (!move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)) {
        echo "Gagal upload gambar.";
        $con->close();
        exit;
    }
} else {
    $imageName = 'default.jpg'; // Default image if none uploaded
}

// Save to database with your specified INSERT statement
$sql = "INSERT INTO tb_artikel (id, judul, isi, publisher, gambar, tanggal) VALUES (NULL, ?, ?, ?, ?, NOW())";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssss", $title, $content, $publisher, $imageName);

if ($stmt->execute()) {
    echo "Artikel berhasil disimpan!";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$con->close();
?>