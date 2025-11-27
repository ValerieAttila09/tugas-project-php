<?php
require_once __DIR__ . '/SectionModel.php';

/**
 * Certificate Model
 * Manages the Certificate section (tb_sertif)
 */
class CertificateModel extends SectionModel
{
  /**
   * Get all certificates
   */
  public function getAllCertificate()
  {
    $sql = "SELECT id_sertif, gambar FROM tb_sertif ORDER BY id_sertif ASC";
    return $this->selectAll($sql);
  }

  /**
   * Get certificate by ID
   */
  public function getCertificateById($id)
  {
    $sql = "SELECT id_sertif, gambar FROM tb_sertif WHERE id_sertif = ?";
    return $this->selectOne($sql, "i", [$id]);
  }

  /**
   * Create new certificate
   */
  public function createCertificate($gambar)
  {
    $sql = "INSERT INTO tb_sertif (gambar) VALUES (?)";
    return $this->execute($sql, "s", [$gambar]);
  }

  /**
   * Update certificate
   */
  public function updateCertificate($id, $gambar)
  {
    $sql = "UPDATE tb_sertif SET gambar = ? WHERE id_sertif = ?";
    return $this->execute($sql, "si", [$gambar, $id]);
  }

  /**
   * Delete certificate
   */
  public function deleteCertificate($id)
  {
    $sql = "DELETE FROM tb_sertif WHERE id_sertif = ?";
    return $this->execute($sql, "i", [$id]);
  }
}
