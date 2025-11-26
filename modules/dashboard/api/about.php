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
      // Get all about items or single item by ID
      if (isset($_GET['id'])) {
        $about = $controller->getAboutById($_GET['id']);
        SectionController::jsonResponse(true, 'About item retrieved', $about);
      } else {
        $aboutList = $controller->getAllAbout();
        SectionController::jsonResponse(true, 'About items retrieved', $aboutList);
      }
      break;

    case 'POST':
      // Create new about item
      $data = json_decode(file_get_contents('php://input'), true);
      $result = $controller->createAbout($data);
      
      if ($result) {
        SectionController::jsonResponse(true, 'About item created successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to create about item');
      }
      break;

    case 'PUT':
      // Update about item
      $data = json_decode(file_get_contents('php://input'), true);
      $id = $data['id'];
      $result = $controller->updateAbout($id, $data);
      
      if ($result) {
        SectionController::jsonResponse(true, 'About item updated successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to update about item');
      }
      break;

    case 'DELETE':
      // Delete about item
      $data = json_decode(file_get_contents('php://input'), true);
      $id = $data['id'];
      $result = $controller->deleteAbout($id);
      
      if ($result) {
        SectionController::jsonResponse(true, 'About item deleted successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to delete about item');
      }
      break;

    default:
      SectionController::jsonResponse(false, 'Method not allowed');
  }
} catch (Exception $e) {
  SectionController::jsonResponse(false, $e->getMessage());
}
