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

$id = null;

if (isset($_POST['id'])) {
  $id = (int)$_POST['id'];
} else {
  $input = json_decode(file_get_contents('php://input'), true);
  if (isset($input['id'])) {
    $id = (int)$input['id'];
  }
}

if (!$id || $id <= 0) {
  echo json_encode(['success' => false, 'message' => 'Invalid article id']);
  exit;
}

$controller = new ArticleController();
$result = $controller->delete($id);

if ($result) {
  echo json_encode(['success' => true, 'message' => 'Article deleted']);
} else {
  echo json_encode(['success' => false, 'message' => 'Failed to delete article']);
}
