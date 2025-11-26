<?php
require_once __DIR__ . '/SectionModel.php';

/**
 * About Me Model
 * Manages the About Me section (tb_about_me)
 */
class AboutMeModel extends SectionModel
{
  /**
   * Get all about me items
   */
  public function getAllAbout()
  {
    $sql = "SELECT id_about, icon, judul, keterangan FROM tb_about_me ORDER BY id_about ASC";
    return $this->selectAll($sql);
  }

  /**
   * Get about me item by ID
   */
  public function getAboutById($id)
  {
    $sql = "SELECT id_about, icon, judul, keterangan FROM tb_about_me WHERE id_about = ?";
    return $this->selectOne($sql, "i", [$id]);
  }

  /**
   * Create new about me item
   */
  public function createAbout($icon, $judul, $keterangan)
  {
    $sql = "INSERT INTO tb_about_me (icon, judul, keterangan) VALUES (?, ?, ?)";
    return $this->execute($sql, "sss", [$icon, $judul, $keterangan]);
  }

  /**
   * Update about me item
   */
  public function updateAbout($id, $icon, $judul, $keterangan)
  {
    $sql = "UPDATE tb_about_me SET icon = ?, judul = ?, keterangan = ? WHERE id_about = ?";
    return $this->execute($sql, "sssi", [$icon, $judul, $keterangan, $id]);
  }

  /**
   * Delete about me item
   */
  public function deleteAbout($id)
  {
    $sql = "DELETE FROM tb_about_me WHERE id_about = ?";
    return $this->execute($sql, "i", [$id]);
  }
}
