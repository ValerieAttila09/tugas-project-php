<?php
require_once __DIR__ . '/SectionModel.php';

/**
 * Hero Model
 * Manages the Hero section (tb_hero)
 */
class HeroModel extends SectionModel
{
  /**
   * Get hero data (single row)
   */
  public function getHero()
  {
    $sql = "SELECT id, quote, judul, keterangan, gambar FROM tb_hero LIMIT 1";
    $result = $this->selectAll($sql);
    return !empty($result) ? $result[0] : null;
  }

  /**
   * Update hero content
   */
  public function updateHero($id, $quote, $judul, $keterangan, $gambar = null)
  {
    if ($gambar !== null) {
      $sql = "UPDATE tb_hero SET quote = ?, judul = ?, keterangan = ?, gambar = ? WHERE id = ?";
      return $this->execute($sql, "ssssi", [$quote, $judul, $keterangan, $gambar, $id]);
    } else {
      $sql = "UPDATE tb_hero SET quote = ?, judul = ?, keterangan = ? WHERE id = ?";
      return $this->execute($sql, "sssi", [$quote, $judul, $keterangan, $id]);
    }
  }

  /**
   * Create hero entry if not exists
   */
  public function createHero($quote, $judul, $keterangan, $gambar)
  {
    $sql = "INSERT INTO tb_hero (quote, judul, keterangan, gambar) VALUES (?, ?, ?, ?)";
    return $this->execute($sql, "ssss", [$quote, $judul, $keterangan, $gambar]);
  }
}
