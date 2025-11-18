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

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
if ($id <= 0) {
  echo json_encode(['success' => false, 'message' => 'Invalid article id']);
  exit;
}

$controller = new ArticleController();
$result = $controller->update($id, $_POST, $_FILES['gambar'] ?? null);

if ($result) {
  echo json_encode(['success' => true, 'message' => 'Article updated']);
} else {
  echo json_encode(['success' => false, 'message' => 'Failed to update article']);
}
