<?php
include '../../config/database.php';
include '../../app/Controllers/ArticleController.php';

$controller = new ArticleController();
$articles = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">

<?php
include '../../includes/header.php';
?>

<body class="outfit-thin overflow-x-hidden">

	<div class="w-full">
		<!-- NAVBAR -->
		<?php
		include '../../includes/navbar.php';
		?>
		<!-- END NAVBAR -->

		<!-- ARTICLES LIST -->
		<div class="m-0 md:mx-24">
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
	</body>

</html>