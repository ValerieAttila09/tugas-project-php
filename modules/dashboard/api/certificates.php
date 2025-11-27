<?php
session_start();
require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../../app/Controllers/SectionController.php';

// Check if user is logged in
if (!isset($_SESSION['nama'])) {
  SectionController::jsonResponse(false, 'Unauthorized access');
  exit;
}

$controller = new SectionController($con);
$method = $_SERVER['REQUEST_METHOD'];

try {
  if ($method === 'GET') {
    // Get all certificates or single certificate by ID
    if (isset($_GET['id'])) {
      $certificate = $controller->getCertificateById($_GET['id']);
      SectionController::jsonResponse(true, 'Certificate retrieved', $certificate);
    } else {
      $certificateList = $controller->getAllCertificates();
      SectionController::jsonResponse(true, 'Certificates retrieved', $certificateList);
    }
  } elseif ($method === 'POST') {
    // Create new certificate with image upload
    if (!isset($_FILES['gambar'])) {
      SectionController::jsonResponse(false, 'No file uploaded');
      exit;
    }

    $result = $controller->createCertificate($_FILES['gambar']);

    if ($result) {
      SectionController::jsonResponse(true, 'Certificate created successfully');
    } else {
      SectionController::jsonResponse(false, 'Failed to create certificate');
    }
  } elseif ($method === 'PUT') {
    // Update certificate (optionally with new image)
    $data = [];
    parse_str(file_get_contents("php://input"), $data);
    $id = $data['id'] ?? null;

    if (!$id) {
      SectionController::jsonResponse(false, 'Certificate ID is required');
      exit;
    }

    $file = isset($_FILES['gambar']) ? $_FILES['gambar'] : null;
    $result = $controller->updateCertificate($id, $file);

    if ($result) {
      SectionController::jsonResponse(true, 'Certificate updated successfully');
    } else {
      SectionController::jsonResponse(false, 'Failed to update certificate');
    }
  } elseif ($method === 'DELETE') {
    // Delete certificate
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? null;

    if (!$id) {
      SectionController::jsonResponse(false, 'Certificate ID is required');
      exit;
    }

    $result = $controller->deleteCertificate($id);

    if ($result) {
      SectionController::jsonResponse(true, 'Certificate deleted successfully');
    } else {
      SectionController::jsonResponse(false, 'Failed to delete certificate');
    }
  } else {
    SectionController::jsonResponse(false, 'Method not allowed');
  }
} catch (Exception $e) {
  SectionController::jsonResponse(false, $e->getMessage());
}
