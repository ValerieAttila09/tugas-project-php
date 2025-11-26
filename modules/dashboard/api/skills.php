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
      // Get all skills or single skill by ID
      if (isset($_GET['id'])) {
        $skill = $controller->getSkillById($_GET['id']);
        SectionController::jsonResponse(true, 'Skill retrieved', $skill);
      } else {
        $skillList = $controller->getAllSkills();
        SectionController::jsonResponse(true, 'Skills retrieved', $skillList);
      }
      break;

    case 'POST':
      // Create new skill
      $data = json_decode(file_get_contents('php://input'), true);
      $result = $controller->createSkill($data);
      
      if ($result) {
        SectionController::jsonResponse(true, 'Skill created successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to create skill');
      }
      break;

    case 'PUT':
      // Update skill
      $data = json_decode(file_get_contents('php://input'), true);
      $id = $data['id'];
      $result = $controller->updateSkill($id, $data);
      
      if ($result) {
        SectionController::jsonResponse(true, 'Skill updated successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to update skill');
      }
      break;

    case 'DELETE':
      // Delete skill
      $data = json_decode(file_get_contents('php://input'), true);
      $id = $data['id'];
      $result = $controller->deleteSkill($id);
      
      if ($result) {
        SectionController::jsonResponse(true, 'Skill deleted successfully');
      } else {
        SectionController::jsonResponse(false, 'Failed to delete skill');
      }
      break;

    default:
      SectionController::jsonResponse(false, 'Method not allowed');
  }
} catch (Exception $e) {
  SectionController::jsonResponse(false, $e->getMessage());
}
