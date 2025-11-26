<?php
require_once __DIR__ . '/../Models/HeroModel.php';
require_once __DIR__ . '/../Models/AboutMeModel.php';
require_once __DIR__ . '/../Models/SkillModel.php';
require_once __DIR__ . '/../Models/ClientModel.php';
require_once __DIR__ . '/../Helpers/functions.php';

/**
 * Section Controller
 * Main controller for managing all portfolio sections
 * Uses MVC pattern with prepared statements
 */
class SectionController
{
  private $heroModel;
  private $aboutModel;
  private $skillModel;
  private $clientModel;
  private $uploadDir;

  public function __construct($database)
  {
    $this->heroModel = new HeroModel($database);
    $this->aboutModel = new AboutMeModel($database);
    $this->skillModel = new SkillModel($database);
    $this->clientModel = new ClientModel($database);
    $this->uploadDir = __DIR__ . '/../../assets/images/';
  }

  // ==================== HERO SECTION ====================

  /**
   * Get hero data
   */
  public function getHero()
  {
    return $this->heroModel->getHero();
  }

  /**
   * Update hero section
   */
  public function updateHero($data, $file = null)
  {
    $id = $data['id'];
    $quote = sanitizeInput($data['quote']);
    $judul = sanitizeInput($data['judul']);
    $keterangan = $data['keterangan']; // Allow HTML from Quill.js
    
    $imageName = null;
    if ($file && isset($file['name']) && $file['name'] != '') {
      $imageName = $this->handleImageUpload($file);
    }

    return $this->heroModel->updateHero($id, $quote, $judul, $keterangan, $imageName);
  }

  // ==================== ABOUT ME SECTION ====================

  /**
   * Get all about me items
   */
  public function getAllAbout()
  {
    return $this->aboutModel->getAllAbout();
  }

  /**
   * Get single about me item
   */
  public function getAboutById($id)
  {
    return $this->aboutModel->getAboutById($id);
  }

  /**
   * Create about me item
   */
  public function createAbout($data)
  {
    $icon = sanitizeInput($data['icon']);
    $judul = sanitizeInput($data['judul']);
    $keterangan = $data['keterangan']; // Allow HTML from Quill.js

    return $this->aboutModel->createAbout($icon, $judul, $keterangan);
  }

  /**
   * Update about me item
   */
  public function updateAbout($id, $data)
  {
    $icon = sanitizeInput($data['icon']);
    $judul = sanitizeInput($data['judul']);
    $keterangan = $data['keterangan']; // Allow HTML from Quill.js

    return $this->aboutModel->updateAbout($id, $icon, $judul, $keterangan);
  }

  /**
   * Delete about me item
   */
  public function deleteAbout($id)
  {
    return $this->aboutModel->deleteAbout($id);
  }

  // ==================== SKILLS SECTION ====================

  /**
   * Get all skills
   */
  public function getAllSkills()
  {
    return $this->skillModel->getAllSkills();
  }

  /**
   * Get single skill
   */
  public function getSkillById($id)
  {
    return $this->skillModel->getSkillById($id);
  }

  /**
   * Create skill
   */
  public function createSkill($data)
  {
    $icon = sanitizeInput($data['icon']);
    $skill = sanitizeInput($data['skill']);
    $keterangan = $data['keterangan']; // Allow HTML from Quill.js

    return $this->skillModel->createSkill($icon, $skill, $keterangan);
  }

  /**
   * Update skill
   */
  public function updateSkill($id, $data)
  {
    $icon = sanitizeInput($data['icon']);
    $skill = sanitizeInput($data['skill']);
    $keterangan = $data['keterangan']; // Allow HTML from Quill.js

    return $this->skillModel->updateSkill($id, $icon, $skill, $keterangan);
  }

  /**
   * Delete skill
   */
  public function deleteSkill($id)
  {
    return $this->skillModel->deleteSkill($id);
  }

  // ==================== CLIENT SECTION ====================

  /**
   * Get all client testimonials
   */
  public function getAllClients()
  {
    return $this->clientModel->getAllClients();
  }

  /**
   * Get single client testimonial
   */
  public function getClientById($id)
  {
    return $this->clientModel->getClientById($id);
  }

  /**
   * Create client testimonial
   */
  public function createClient($data)
  {
    $rating = intval($data['rating']);
    $feedback = $data['feedback']; // Allow HTML from Quill.js
    $nama = sanitizeInput($data['nama']);
    $jabatan = sanitizeInput($data['jabatan']);

    return $this->clientModel->createClient($rating, $feedback, $nama, $jabatan);
  }

  /**
   * Update client testimonial
   */
  public function updateClient($id, $data)
  {
    $rating = intval($data['rating']);
    $feedback = $data['feedback']; // Allow HTML from Quill.js
    $nama = sanitizeInput($data['nama']);
    $jabatan = sanitizeInput($data['jabatan']);

    return $this->clientModel->updateClient($id, $rating, $feedback, $nama, $jabatan);
  }

  /**
   * Delete client testimonial
   */
  public function deleteClient($id)
  {
    return $this->clientModel->deleteClient($id);
  }

  // ==================== HELPER METHODS ====================

  /**
   * Handle image upload
   */
  private function handleImageUpload($file)
  {
    if (!is_dir($this->uploadDir)) {
      mkdir($this->uploadDir, 0777, true);
    }

    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $maxSize = 5 * 1024 * 1024; // 5MB

    if (!in_array($file['type'], $allowedTypes)) {
      throw new Exception('Invalid file type. Only JPG, PNG, GIF, and WebP are allowed.');
    }

    if ($file['size'] > $maxSize) {
      throw new Exception('File size exceeds 5MB limit.');
    }

    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $imageName = time() . '_' . uniqid() . '.' . $extension;
    $targetPath = $this->uploadDir . $imageName;

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
      return $imageName;
    }

    throw new Exception('Failed to upload image.');
  }

  /**
   * Send JSON response
   */
  public static function jsonResponse($success, $message, $data = null)
  {
    header('Content-Type: application/json');
    echo json_encode([
      'success' => $success,
      'message' => $message,
      'data' => $data
    ]);
    exit;
  }
}
