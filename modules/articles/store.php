<?php
header('Content-Type: application/json');
session_start();
require_once '../../config/database.php';
require_once '../../app/Controllers/ArticleController.php';
require_once '../../app/Helpers/functions.php';

if (!isLoggedIn()) {
  echo json_encode(['success' => false, 'message' => 'Unauthorized']);
  exit;
}

$controller = new ArticleController();
$result = $controller->store($_POST, $_FILES['gambar'] ?? null);

if ($result) {
  echo json_encode(['success' => true, 'message' => 'Article created']);
} else {
  echo json_encode(['success' => false, 'message' => 'Failed to create article']);
}
