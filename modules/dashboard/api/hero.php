<?php
session_start();
require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../../app/Controllers/SectionController.php';

// Check if user is logged in
if (!isset($_SESSION['nama'])) {
  SectionController::jsonResponse(false, 'Unauthorized access');
}

$controller = new SectionController($con);
$method = $_SERVER['REQUEST_METHOD'];

try {
  switch ($method) {
    case 'GET':
      // Get hero data
      $hero = $controller->getHero();
      SectionController::jsonResponse(true, 'Hero data retrieved', $hero);
      break;

    case 'POST':
      // Update hero
      $data = $_POST;
      $file = isset($_FILES['gambar']) ? $_FILES['gambar'] : null;
      
      $result = $controller->updateHero($data, $file);
      
      if ($result) {
        SectionController::jsonResponse(true, 'Hero updated successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to update hero');
      }
      break;

    default:
      SectionController::jsonResponse(false, 'Method not allowed');
  }
} catch (Exception $e) {
  SectionController::jsonResponse(false, $e->getMessage());
}
