<?php
class Article {
    private $con;

    public function __construct($database) {
        $this->con = $database;
    }

    /**
     * Get all articles
     */
    public function getAllArticles() {
        $sql = "SELECT * FROM tb_artikel ORDER BY tanggal DESC";
        $result = $this->con->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Get article by ID
     */
    public function getArticleById($id) {
        $sql = "SELECT * FROM tb_artikel WHERE id = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    /**
     * Create a new article
     */
    public function createArticle($judul, $isi, $publisher, $gambar) {
        $sql = "INSERT INTO tb_artikel (judul, isi, publisher, gambar, tanggal) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ssss", $judul, $isi, $publisher, $gambar);
        return $stmt->execute();
    }

    /**
     * Update an article
     */
    public function updateArticle($id, $judul, $isi, $gambar) {
        $sql = "UPDATE tb_artikel SET judul = ?, isi = ?, gambar = ? WHERE id = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sssi", $judul, $isi, $gambar, $id);
        return $stmt->execute();
    }

    /**
     * Delete an article
     */
    public function deleteArticle($id) {
        $sql = "DELETE FROM tb_artikel WHERE id = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>