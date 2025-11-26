<?php
require_once __DIR__ . '/SectionModel.php';

/**
 * Skill Model
 * Manages the Skills section (tb_skill)
 */
class SkillModel extends SectionModel
{
  /**
   * Get all skills
   */
  public function getAllSkills()
  {
    $sql = "SELECT id_skill, icon, skill, keterangan FROM tb_skill ORDER BY id_skill ASC";
    return $this->selectAll($sql);
  }

  /**
   * Get skill by ID
   */
  public function getSkillById($id)
  {
    $sql = "SELECT id_skill, icon, skill, keterangan FROM tb_skill WHERE id_skill = ?";
    return $this->selectOne($sql, "i", [$id]);
  }

  /**
   * Create new skill
   */
  public function createSkill($icon, $skill, $keterangan)
  {
    $sql = "INSERT INTO tb_skill (icon, skill, keterangan) VALUES (?, ?, ?)";
    return $this->execute($sql, "sss", [$icon, $skill, $keterangan]);
  }

  /**
   * Update skill
   */
  public function updateSkill($id, $icon, $skill, $keterangan)
  {
    $sql = "UPDATE tb_skill SET icon = ?, skill = ?, keterangan = ? WHERE id_skill = ?";
    return $this->execute($sql, "sssi", [$icon, $skill, $keterangan, $id]);
  }

  /**
   * Delete skill
   */
  public function deleteSkill($id)
  {
    $sql = "DELETE FROM tb_skill WHERE id_skill = ?";
    return $this->execute($sql, "i", [$id]);
  }
}
