<?php
include '../../config/database.php';
include '../../app/Controllers/ArticleController.php';

// Get article ID from URL
$articleId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($articleId > 0) {
	$controller = new ArticleController();
	$article = $controller->show($articleId);

	if (!$article) {
		// Article not found
		header("Location: ../../index.php");
		exit;
	}
} else {
	header("Location: ../../index.php");
	exit;
}
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

		<!-- ARTICLE -->
		<div class="m-0 md:mx-24">
			<div class="mt-20 mb-6 p-4 md:p-0">
				<span class="text-sm text-neutral-500 outfit-regular">Home / Article / <?= htmlspecialchars($article['judul']) ?></span>
			</div>
			<div class="w-full grid md:grid-cols-5 gap-8 md:gap-16 p-4 md:p-0">
				<div class="md:col-span-3">
					<div class="">
						<h1 class="text-4xl sm:text-5xl md:text-6xl text-neutral-900 outfit-semibold"><?= htmlspecialchars($article['judul']) ?></h1>
					</div>
					<div class="my-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
						<div class="flex items-center gap-4">
							<div class="size-12 rounded-full bg-neutral-200 flex items-center justify-center text-center">
								<span class="text-md text-neutral-400 outfit-bold">
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
							<div class="">
								<h1 class="text-xl/4 text-neutral-700 outfit-medium"><?= htmlspecialchars($article['publisher']) ?></h1>
								<span class="text-sm text-neutral-400 outfit-regular">Author</span>
							</div>
						</div>
						<div class="flex items-center gap-3">
							<span class="text-sm text-neutral-500 outfit-thin"><?= formatDate($article['tanggal']) ?></span>
							<div class="h-[1.2rem] w-px bg-neutral-400"></div>
							<span class="text-sm text-neutral-500 outfit-thin">Categories: Technology</span>
							<div class="h-[1.2rem] w-px bg-neutral-400"></div>
							<span class="text-sm text-neutral-500 outfit-thin">5 Min Read</span>
						</div>
					</div>
					<div class="">
						<div class="mb-8 md:md-16">
							<img src="./uploads/<?= htmlspecialchars($article['gambar']) ?>" alt="<?= htmlspecialchars($article['judul']) ?>" class="w-full h-auto object-cover rounded-lg">
						</div>
						<div class="">
							<div class="article-content">
								<?= $article['isi'] ?>
							</div>
						</div>
					</div>
				</div>
				<div class="hidden md:block md:col-span-2">
					<div class="my-8 md:my-20">
						<h1 class="text-xl text-neutral-800 outfit-regular mb-4">Table of Contents</h1>
						<ol class="space-y-2">
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Introduction</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Main Content</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Conclusion</a></li>
						</ol>
					</div>
					<div class="my-8 md:my-20">
						<h1 class="text-xl text-neutral-800 outfit-regular mb-4">Popular Articles</h1>
						<ol class="space-y-2">
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">How to build a modern website</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Understanding web development</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Best practices for PHP development</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Getting started with JavaScript</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- END ARTICLE -->

		<!-- FOOTER -->
		<?php
		include '../../includes/footer.php';
		?>
		<!-- END FOOTER -->

		<script type="module" src="../../assets/js/index.js"></script>
</body>

</html>