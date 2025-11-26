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
      // Get all clients or single client by ID
      if (isset($_GET['id'])) {
        $client = $controller->getClientById($_GET['id']);
        SectionController::jsonResponse(true, 'Client testimonial retrieved', $client);
      } else {
        $clientList = $controller->getAllClients();
        SectionController::jsonResponse(true, 'Client testimonials retrieved', $clientList);
      }
      break;

    case 'POST':
      // Create new client testimonial
      $data = json_decode(file_get_contents('php://input'), true);
      $result = $controller->createClient($data);
      
      if ($result) {
        SectionController::jsonResponse(true, 'Client testimonial created successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to create client testimonial');
      }
      break;

    case 'PUT':
      // Update client testimonial
      $data = json_decode(file_get_contents('php://input'), true);
      $id = $data['id'];
      $result = $controller->updateClient($id, $data);
      
      if ($result) {
        SectionController::jsonResponse(true, 'Client testimonial updated successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to update client testimonial');
      }
      break;

    case 'DELETE':
      // Delete client testimonial
      $data = json_decode(file_get_contents('php://input'), true);
      $id = $data['id'];
      $result = $controller->deleteClient($id);
      
      if ($result) {
        SectionController::jsonResponse(true, 'Client testimonial deleted successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to delete client testimonial');
      }
      break;

    default:
      SectionController::jsonResponse(false, 'Method not allowed');
  }
} catch (Exception $e) {
  SectionController::jsonResponse(false, $e->getMessage());
}
