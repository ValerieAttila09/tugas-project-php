<?php
/**
 * Base Section Model
 * Provides common functionality for all section models
 * Uses prepared statements for SQL injection prevention
 */
class SectionModel
{
  protected $con;

  public function __construct($database)
  {
    $this->con = $database;
  }

  /**
   * Execute a prepared SELECT query and return all results
   */
  protected function selectAll($sql, $types = "", $params = [])
  {
    if (empty($params)) {
      $result = $this->con->query($sql);
      return $result->fetch_all(MYSQLI_ASSOC);
    }

    $stmt = $this->con->prepare($sql);
    if (!empty($types)) {
      $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $data;
  }

  /**
   * Execute a prepared SELECT query and return single result
   */
  protected function selectOne($sql, $types = "", $params = [])
  {
    $stmt = $this->con->prepare($sql);
    if (!empty($types)) {
      $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    return $data;
  }

  /**
   * Execute a prepared INSERT/UPDATE/DELETE query
   */
  protected function execute($sql, $types = "", $params = [])
  {
    $stmt = $this->con->prepare($sql);
    if (!empty($types)) {
      $stmt->bind_param($types, ...$params);
    }
    $success = $stmt->execute();
    $stmt->close();
    return $success;
  }

  /**
   * Get last inserted ID
   */
  protected function getLastInsertId()
  {
    return $this->con->insert_id;
  }
}
