<?php
require_once __DIR__ . '/SectionModel.php';

/**
 * Client Model
 * Manages the Client Feedback/Testimonials section (tb_client)
 */
class ClientModel extends SectionModel
{
  /**
   * Get all client testimonials
   */
  public function getAllClients()
  {
    $sql = "SELECT id_feedback, rating, feedback, nama, jabatan FROM tb_client ORDER BY id_feedback DESC";
    return $this->selectAll($sql);
  }

  /**
   * Get client testimonial by ID
   */
  public function getClientById($id)
  {
    $sql = "SELECT id_feedback, rating, feedback, nama, jabatan FROM tb_client WHERE id_feedback = ?";
    return $this->selectOne($sql, "i", [$id]);
  }

  /**
   * Create new client testimonial
   */
  public function createClient($rating, $feedback, $nama, $jabatan)
  {
    $sql = "INSERT INTO tb_client (rating, feedback, nama, jabatan) VALUES (?, ?, ?, ?)";
    return $this->execute($sql, "isss", [$rating, $feedback, $nama, $jabatan]);
  }

  /**
   * Update client testimonial
   */
  public function updateClient($id, $rating, $feedback, $nama, $jabatan)
  {
    $sql = "UPDATE tb_client SET rating = ?, feedback = ?, nama = ?, jabatan = ? WHERE id_feedback = ?";
    return $this->execute($sql, "isssi", [$rating, $feedback, $nama, $jabatan, $id]);
  }

  /**
   * Delete client testimonial
   */
  public function deleteClient($id)
  {
    $sql = "DELETE FROM tb_client WHERE id_feedback = ?";
    return $this->execute($sql, "i", [$id]);
  }
}
