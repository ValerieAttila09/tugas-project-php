<?php
require_once '../../app/Models/Article.php';
require_once '../../app/Helpers/functions.php';
require_once '../../config/database.php';

class ArticleController
{
  private $articleModel;

  public function __construct()
  {
    global $con;
    $this->articleModel = new Article($con);
  }

  /**
   * Display all articles
   */
  public function index()
  {
    $articles = $this->articleModel->getAllArticles();
    return $articles;
  }

  /**
   * Show a specific article
   */
  public function show($id)
  {
    $article = $this->articleModel->getArticleById($id);
    return $article;
  }

  /**
   * Store a new article
   */
  public function store($data, $gambar)
  {
    $judul = sanitizeInput($data['judul']);
    $isi = $data['isi'];
    $kategori = $data['kategori'];
    $publisher = getUserName();
    $imageName = $this->handleImageUpload($gambar);

    $result = $this->articleModel->createArticle($judul, $isi, $kategori, $publisher, $imageName);
    return $result;
  }

  /**
   * Update an existing article
   */
  public function update($id, $data, $gambar)
  {
    $judul = sanitizeInput($data['judul']);
    $isi = $data['isi'];
    $kategori = $data['kategori'];
    $imageName = $this->handleImageUpload($gambar);

    $result = $this->articleModel->updateArticle($id, $judul, $isi, $kategori, $imageName);
    return $result;
  }

  /**
   * Delete an article
   */
  public function delete($id)
  {
    $result = $this->articleModel->deleteArticle($id);
    return $result;
  }

  /**
   * Handle image upload
   */
  private function handleImageUpload($gambar)
  {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
      mkdir($targetDir, 0777, true);
    }

    if (isset($gambar) && $gambar["name"] != '') {
      $imageName = time() . "_" . basename($gambar["name"]);
      $targetFilePath = $targetDir . $imageName;

      if (move_uploaded_file($gambar["tmp_name"], $targetFilePath)) {
        return $imageName;
      }
    }

    return 'default.jpg';
  }
}
