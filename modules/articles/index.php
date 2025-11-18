<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../../config/database.php';
include '../../app/Controllers/ArticleController.php';

$controller = new ArticleController();
$articles = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Creative Developer & Designer</title>
  <link rel="stylesheet" href="../../assets/css/output.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

    .outfit-thin {
      font-family: "Outfit", sans-serif;
      font-optical-sizing: auto;
      font-weight: 300;
      font-style: normal;
    }

    .outfit-regular {
      font-family: "Outfit", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
    }

    .outfit-medium {
      font-family: "Outfit", sans-serif;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }

    .outfit-semibold {
      font-family: "Outfit", sans-serif;
      font-optical-sizing: auto;
      font-weight: 600;
      font-style: normal;
    }

    .outfit-bold {
      font-family: "Outfit", sans-serif;
      font-optical-sizing: auto;
      font-weight: 700;
      font-style: normal;
    }
  </style>
</head>

<body class="outfit-thin overflow-x-hidden">

  <div class="w-full">
    <!-- NAVBAR -->
    <div class="w-full fixed top-0 z-50 inset-x-0 h-auto bg-white/20 backdrop-blur-md">
      <div class="hidden p-2 md:flex items-center justify-between md:max-w-6xl md:mx-auto">
        <div class="px-18">
          <h1 class="text-lg outfit-bold text-neutral-900">Portfolio</h1>
        </div>
        <div class="flex items-center justify-center gap-4">
          <a href="../../index.php#projects" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Projects</a>
          <a href="../../index.php#skills" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Skills</a>
          <a href="../../index.php#feedback" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Feedback</a>
          <a href="./index.php" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Article</a>
        </div>
        <div class="flex items-center justify-end gap-2">
          <a href="../login/index.php" class="text-sm rounded-full border border-[#d7d7d7] px-6 py-2 hover:shadow-sm hover:bg-[#fafafa] transition-all">Login</a>
          <a href="../register/index.php" class="text-sm rounded-full bg-neutral-900 border border-[#d7d7d7] text-white px-6 py-2 hover:shadow-sm hover:bg-neutral-700 transition-all">Sign Up</a>
        </div>
      </div>
      <div class="navbar flex p-2 md:hidden items-center justify-between">
        <div class="px-2 cursor-pointer">
          <h1 class="text-lg outfit-bold text-neutral-900">Portfolio</h1>
        </div>
        <div class="">
          <button class="navbar-toggle cursor-pointer p-1 rounded-md border border-transparent hover:border-[#d7d7d7] transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
      </div>
      <div class="mobile-menu block md:hidden w-full h-screen bg-white/20 backdrop-blur-md" style="display: none;">
        <div class="grid grid-cols-1">
          <a href="../../../index.php#projects" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Projects</a>
          <a href="../../../index.php#skills" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Skills</a>
          <a href="../../../index.php#feedback" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Feedback</a>
          <a href="./modules/articles/index.php" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Articles</a>
          <a href="./modules/login/index.php" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Login</a>
        </div>
      </div>
      <div class="w-full h-px bg-linear-to-r from-white via-[#d7d7d7] to-white"></div>
    </div>
    <!-- END NAVBAR -->

    <!-- ARTICLES LIST -->
    <div class="m-0 md:mx-32">
      <div class="mt-20 mb-6 p-4 md:p-0">
        <h1 class="text-4xl sm:text-5xl md:text-6xl text-neutral-900 outfit-semibold">Latest Articles</h1>
        <p class="mt-4 text-lg text-neutral-600 outfit-regular">Discover our latest insights and thoughts</p>
      </div>

      <div class="w-full grid md:grid-cols-2 lg:grid-cols-3 gap-8 p-4 md:p-0">
        <?php foreach ($articles as $article): ?>
          <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <img src="./uploads/<?= htmlspecialchars($article['gambar']) ?>" alt="<?= htmlspecialchars($article['judul']) ?>" class="w-full h-48 object-cover">
            <div class="p-6">
              <div class="flex items-center gap-3 mb-3">
                <span class="text-sm text-neutral-500 outfit-thin"><?= formatDate($article['tanggal']) ?></span>
                <div class="h-1 w-1 rounded-full bg-neutral-400"></div>
                <span class="text-sm text-neutral-500 outfit-thin">5 Min Read</span>
              </div>
              <h2 class="text-xl font-semibold text-gray-900 outfit-medium mb-3"><?= htmlspecialchars($article['judul']) ?></h2>
              <div class="flex items-center gap-4">
                <div class="size-10 rounded-full bg-neutral-200 flex items-center justify-center text-center">
                  <span class="text-sm text-neutral-400 outfit-bold">
                    <?php
                    $publisher = $article['publisher'];
                    $initials = '';
                    $names = explode(' ', $publisher);
                    foreach ($names as $name) {
                      $initials .= strtoupper(substr($name, 0, 1));
                    }
                    echo $initials;
                    ?>
                  </span>
                </div>
                <div>
                  <h3 class="text-sm text-gray-900 outfit-medium"><?= htmlspecialchars($article['publisher']) ?></h3>
                  <p class="text-xs text-gray-500 outfit-regular">Author</p>
                </div>
              </div>
              <div class="mt-4">
                <a href="article.php?id=<?= $article['id'] ?>" class="text-indigo-600 hover:text-indigo-800 outfit-medium text-sm">Read More →</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <?php if (empty($articles)): ?>
          <div class="col-span-full text-center py-12">
            <h3 class="text-xl text-gray-900 outfit-medium mb-2">No articles found</h3>
            <p class="text-gray-600 outfit-regular">Check back later for new articles.</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <!-- END ARTICLES LIST -->

    <!-- FOOTER -->
    <?php
    include '../../includes/footer.php';
    ?>
    <!-- END FOOTER -->

    <script type="module" src="../../assets/js/index.js"></script>
    <script src="../../assets/js/articles.js"></script>
</body>

</html>