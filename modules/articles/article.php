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

		h3 {
			font-size: 3rem;
			color: #212432;
			margin: 18px 0px;
		}

		h4 {
			font-size: 1.6rem;
			color: #565658;
			margin: 16px 0px;
		}

		strong {
			font-weight: 500;
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

		<!-- ARTICLE -->
		<div class="m-0 md:mx-24">
			<div class="mt-20 mb-6 p-4 md:p-0 space-y-2">
				<div class="">
					<a href="./index.php" class="text-neutral-800 text-xl outfit-regular hover:underline hover:text-neutral-900 transition-all">Go back</a>
				</div>
				<div class="">
					<p class="text-sm text-neutral-500 outfit-regular">Home / Article / <?= htmlspecialchars($article['judul']) ?></p>
				</div>
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