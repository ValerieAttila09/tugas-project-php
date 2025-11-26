<?php
session_start();
include './modules/auth/koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<?php
include './includes/header.php';
?>

<body class="outfit-thin overflow-x-hidden">

	<div class="w-full">
		<!-- NAVBAR -->
		<div class="w-full fixed top-0 z-50 inset-x-0 h-auto bg-white/20 backdrop-blur-md">
			<div class="hidden p-2 md:flex items-center justify-between md:max-w-6xl md:mx-auto">
				<div class="px-18">
					<h1 class="text-lg outfit-bold text-neutral-900">Valerie</h1>
				</div>
				<div class="flex items-center justify-center gap-4">
					<a href="#projects" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Projects</a>
					<a href="#skills" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Skills</a>
					<a href="#feedback" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Feedback</a>
					<a href="./modules/articles/index.php" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Article</a>
				</div>
				<div class="flex items-center justify-end gap-2">
					<a href="./modules/login/index.php" class="text-sm rounded-full border border-[#d7d7d7] px-6 py-2 hover:shadow-sm hover:bg-[#fafafa] transition-all">Login</a>
					<a href="./modules/register/index.php" class="text-sm rounded-full bg-neutral-900 border border-[#d7d7d7] text-white px-6 py-2 hover:shadow-sm hover:bg-neutral-700 transition-all">Sign Up</a>
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
					<a href="#projects" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Projects</a>
					<a href="#skills" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Skills</a>
					<a href="#feedback" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Feedback</a>
					<a href="./modules/articles/index.php" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Articles</a>
					<a href="./modules/login/index.php" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Login</a>
				</div>
			</div>
			<div class="w-full h-px bg-linear-to-r from-white via-[#d7d7d7] to-white"></div>
		</div>
		<!-- END NAVBAR -->

		<!-- HERO -->
		<div class="h-[92vh] flex items-center justify-center">
			<?php
			$hero_stmt = mysqli_prepare($con, "SELECT quote, judul, keterangan, gambar FROM tb_hero");
			mysqli_stmt_execute($hero_stmt);
			$hero_result = mysqli_stmt_get_result($hero_stmt);
			$hasil_query_hero = mysqli_fetch_assoc($hero_result);
			mysqli_stmt_close($hero_stmt);
			?>
			<div class="max-w-6xl md:flex md:items-center md:justify-around grid gap-6 p-6 md:p-0">
				<div class="flex flex-col items-start justify-start gap-4">
					<div class="flex items-center justify-start">
						<span class="rounded-full text-xs outfit-regular text-neutral-900 bg-white border border-neutral-300 px-4 py-1">✨ <?= $hasil_query_hero['quote'] ?></span>
					</div>
					<h1 class="text-4xl sm:text-5xl md:text-7xl text-start text-neutral-900 outfit-medium text-shadow-sm"><?= $hasil_query_hero['judul'] ?></h1>
					<p class="text-sm sm:text-md lg:text-lg text-start text-neutral-600"><?= $hasil_query_hero['keterangan'] ?></p>
					<div class="flex items-center gap-3">
						<button class="cursor-pointer rounded-full px-6 py-2 bg-neutral-900 text-white hover:bg-neutral-700 hover:shadow-sm transition-all">View My Work</button>
						<button class="cursor-pointer rounded-full px-6 py-2 bg-white border border-[#d7d7d7] hover:bg-neutral-[#fafafa] hover:shadow-sm transition-all">Contact Me</button>
					</div>
				</div>
				<div class="w-auto h-[360px] overflow-hidden rounded-xl relative">
					<img src="./assets/images/<?= $hasil_query_hero['gambar'] ?>" alt="ini gambar gw" class="w-full h-full object-cover rounded-xl">
				</div>
			</div>
		</div>
		<!-- END HERO -->

		<!-- TOOLS -->
		<div class="w-full my-10 sm:my-14 md:my-16">
			<h3 class="text-2xl outfit-medium text-neutral-800 text-center mb-2">Built With</h3>
			<div class="max-w-4xl mx-auto flex items-center justify-center gap-6">
				<div class="rounded-full bg-[#777BB3] w-16 h-16 flex items-center justify-center p-2">
					<img src="./assets/images/php-logo-bigger.png" class="w-14 h-auto" alt="">
				</div>
				<div class="rounded-full overflow-hidden bg-[#F0DB4F] w-16 h-16 flex items-center justify-center p-2">
					<img src="./assets/images/JavaScript-logo.png" class="w-14 h-auto" alt="">
				</div>
				<div class="rounded-full overflow-hidden bg-blue-100 w-16 h-16 flex items-center justify-center p-2">
					<img src="./assets/images/tailwindcss-mark.d52e9897 (1).png" class="w-16 h-auto" alt="">
				</div>
				<div class="rounded-full bg-teal-100 w-16 h-16 flex items-center justify-center p-2">
					<img src="./assets/images/greensock-gsap-icon-seeklogo.png" class="w-12 h-auto" alt="">
				</div>
			</div>
		</div>
		<!-- END TOOLS -->

		<!-- ABOUT -->
		<div class="w-full py-16 mt-16 sm:mt-22 md:mt-26 bg-white">
			<div class="max-w-6xl mx-auto px-4">
				<div class="text-center mb-12">
					<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium">About Me</h2>
					<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">Experienced developer with a passion for creating elegant solutions to complex problems. Combining technical expertise with creative design thinking.</p>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
					<?php
					$about_stmt = mysqli_prepare($con, "SELECT icon, judul, keterangan FROM tb_about_me");
					mysqli_stmt_execute($about_stmt);
					$about_result = mysqli_stmt_get_result($about_stmt);
					while ($hasil_query_about = mysqli_fetch_assoc($about_result)) {
					?>
						<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
							<div class="text-indigo-600 text-2xl mb-4"><?= $hasil_query_about['icon'] ?></div>
							<h3 class="text-xl font-medium text-gray-900 outfit-medium"><?= $hasil_query_about['judul'] ?></h3>
							<p class="mt-2 text-gray-600 outfit-regular">
								<?= $hasil_query_about['keterangan'] ?>
							</p>
						</div>
					<?php
					}
					mysqli_stmt_close($about_stmt);
					?>
				</div>
			</div>
		</div>
		<!-- END ABOUT -->
	</div>

	<!-- FEATURES -->
	<div class="w-full mt-16 py-16 bg-gray-50">
		<div class="max-w-6xl mx-auto px-4">
			<div class="text-center mb-12">
				<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium" id="skills">My Skills & Expertise</h2>
				<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">
					Proficient in a range of modern technologies and frameworks for building robust web applications.
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
				<?php
				$skill_stmt = mysqli_prepare($con, "SELECT icon, skill, keterangan FROM tb_skill");
				mysqli_stmt_execute($skill_stmt);
				$skill_result = mysqli_stmt_get_result($skill_stmt);
				while ($hasil_query_skill = mysqli_fetch_assoc($skill_result)) {
				?>
					<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
						<div class="text-indigo-600 text-2xl mb-4"><?= $hasil_query_skill['icon'] ?></div>
						<h3 class="text-xl font-medium text-gray-900 outfit-medium"><?= $hasil_query_skill['skill'] ?></h3>
						<p class="mt-2 text-gray-600 outfit-regular">
							<?= $hasil_query_skill['keterangan'] ?>
						</p>
					</div>
				<?php
				}
				mysqli_stmt_close($skill_stmt);
				?>
			</div>
		</div>
	</div>
	<!-- END FEATURES -->

	<!-- TESTIMONIALS -->
	<div class="w-full mt-16 py-16 bg-white">
		<div class="max-w-6xl mx-auto px-4">
			<div class="text-center mb-12">
				<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium" id="feedback">Client Feedback</h2>
				<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">
					What my clients and collaborators say about working with me.
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<?php
				$testimonial_stmt = mysqli_prepare($con, "SELECT rating, feedback, nama, jabatan FROM tb_client");
				mysqli_stmt_execute($testimonial_stmt);
				$testimonial_result = mysqli_stmt_get_result($testimonial_stmt);
				while ($hasil_query_testimonial = mysqli_fetch_assoc($testimonial_result)) {
				?>
					<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
						<div class="">
							<div class="flex items-center mb-4">
								<div class="text-yellow-400 text-xl">
									<?php
									for ($i = 0; $i < $hasil_query_testimonial['rating']; $i++) {
									?>
										★
									<?php
									}
									?>
								</div>
							</div>
							<p class="text-gray-600 outfit-regular italic">
								"<?= $hasil_query_testimonial['feedback'] ?>"
							</p>
						</div>
						<div class="mt-4 flex items-center">
							<div class="ml-3">
								<p class="text-gray-900 outfit-medium"><?= $hasil_query_testimonial['nama'] ?></p>
								<p class="text-gray-500 outfit-regular text-sm"><?= $hasil_query_testimonial['jabatan'] ?></p>
							</div>
						</div>
					</div>
				<?php
				}
				mysqli_stmt_close($testimonial_stmt);
				?>
			</div>
		</div>
	</div>
	<!-- END TESTIMONIALS -->

	<!-- PROJECTS CAROUSEL -->
	<div class="hidden w-full mt-16 py-16 bg-gray-50">
		<div class="max-w-6xl mx-auto px-4">
			<div class="text-center mb-12">
				<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium" id="projects-carousel">My Projects</h2>
				<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">
					Explore my latest and greatest projects showcasing my technical expertise and creative solutions.
				</p>
			</div>

			<!-- Projects Carousel Container -->
			<div class="relative w-full h-[400px]">
				<div class="carousel-wrapper projects-carousel" style="position: relative; overflow: hidden; border-radius: 12px;">
					<div class="carousel-container" style="display: flex; position: absolute; width: 100%; height: 100%;">
						<!-- Project 1 -->
						<div class="carousel-item" style="min-width: 100%; min-height: 100%; position: relative;">
							<img src="./assets/images/project1.png" alt="Project 1" class="min-w-full h-full object-cover rounded-lg">
							<div class="absolute bottom-0 inset-x-0 bg-neutral-900/60 rounded-lg p-2 sm:p-3 md:p-6">
								<div class="text-white">
									<h3 class="text-sm sm:text-base md:text-2xl outfit-bold mb-1 sm:mb-2">Third Portfolio</h3>
									<p class="outfit-regular text-xs sm:text-xs md:text-sm hidden sm:block">A comprehensive product management dashboard with real-time analytics.</p>
								</div>
							</div>
						</div>

						<!-- Project 2 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative;">
							<img src="./assets/images/project2.png" alt="Project 2" class="w-full h-auto object-cover rounded-lg">
							<div class="absolute bottom-0 inset-x-0 bg-neutral-900/60 rounded-lg p-2 sm:p-3 md:p-6">
								<div class="text-white">
									<h3 class="text-sm sm:text-base md:text-2xl outfit-bold mb-1 sm:mb-2">Simple SaaS Web Design</h3>
									<p class="outfit-regular text-xs sm:text-xs md:text-sm hidden sm:block">A fully responsive e-commerce solution with payment integration.</p>
								</div>
							</div>
						</div>

						<!-- Project 3 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative;">
							<img src="./assets/images/project3.png" alt="Project 3" class="w-full h-auto object-cover rounded-lg">
							<div class="absolute bottom-0 inset-x-0 bg-neutral-900/60 rounded-lg p-2 sm:p-3 md:p-6">
								<div class="text-white">
									<h3 class="text-sm sm:text-base md:text-2xl outfit-bold mb-1 sm:mb-2">Todo List App</h3>
									<p class="outfit-regular text-xs sm:text-xs md:text-sm hidden sm:block">Interactive social platform with real-time messaging and notifications.</p>
								</div>
							</div>
						</div>

						<!-- Project 4 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative;">
							<img src="./assets/images/project4.png" alt="Project 4" class="w-full h-auto object-cover rounded-lg">
							<div class="absolute bottom-0 inset-x-0 bg-neutral-900/60 rounded-lg p-2 sm:p-3 md:p-6">
								<div class="text-white">
									<h3 class="text-sm sm:text-base md:text-2xl outfit-bold mb-1 sm:mb-2">Fourth Portfolio</h3>
									<p class="outfit-regular text-xs sm:text-xs md:text-sm hidden sm:block">Interactive social platform with real-time messaging and notifications.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Navigation Buttons -->
				<button class="carousel-prev projects-carousel-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-neutral-900 p-2 rounded-full shadow-lg transition-all hover:shadow-xl">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
					</svg>
				</button>

				<button class="carousel-next projects-carousel-next absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-neutral-900 p-2 rounded-full shadow-lg transition-all hover:shadow-xl">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5L15.75 12l-7.5 7.5" />
					</svg>
				</button>
			</div>

			<!-- Carousel Indicators -->
			<div class="flex items-center justify-center gap-2 mt-6">
				<span class="carousel-indicator projects-indicator text-xs outfit-medium text-neutral-900">1</span>
				<span class="text-neutral-400 outfit-regular">/</span>
				<span class="carousel-total projects-total text-xs outfit-medium text-neutral-600">4</span>
				<div class="flex gap-2 ml-4">
					<button class="carousel-dot projects-dot active" data-index="0" style="width: 10px; height: 10px; border-radius: 50%; background-color: #1f2937; cursor: pointer;"></button>
					<button class="carousel-dot projects-dot" data-index="1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #d1d5db; cursor: pointer;"></button>
					<button class="carousel-dot projects-dot" data-index="2" style="width: 10px; height: 10px; border-radius: 50%; background-color: #d1d5db; cursor: pointer;"></button>
					<button class="carousel-dot projects-dot" data-index="3" style="width: 10px; height: 10px; border-radius: 50%; background-color: #d1d5db; cursor: pointer;"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- END PROJECTS CAROUSEL -->

	<!-- CERTIFICATES CAROUSEL -->
	<div class="w-full mt-16 py-16 bg-white">
		<div class="max-w-6xl mx-auto px-4">
			<div class="text-center mb-12">
				<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium" id="certificates">My Certificates</h2>
				<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">
					Professional certifications and achievements that validate my expertise and commitment to continuous learning.
				</p>
			</div>

			<!-- Certificates Carousel Container -->
			<div class="relative w-full overflow-hidden">
				<div class="carousel-wrapper certificates-carousel" style="position: relative; height: 450px; overflow: hidden; border-radius: 12px;">
					<div class="carousel-container" style="display: flex; position: absolute; width: 100%; height: 100%;">
						<!-- Certificate 1 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative; padding: 20px;">
							<img src="./assets/images/img/sertif1.png" alt="Certificate 1" class="w-full h-full object-contain rounded-lg">
						</div>

						<!-- Certificate 2 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative; padding: 20px;">
							<img src="./assets/images/img/sertif2.png" alt="Certificate 2" class="w-full h-full object-contain rounded-lg">
						</div>

						<!-- Certificate 3 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative; padding: 20px;">
							<img src="./assets/images/img/sertif3.png" alt="Certificate 3" class="w-full h-full object-contain rounded-lg">
						</div>
					</div>
				</div> <!-- Navigation Buttons -->
				<button class="carousel-prev certificates-carousel-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-neutral-900 p-2 rounded-full shadow-lg transition-all hover:shadow-xl">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
					</svg>
				</button>

				<button class="carousel-next certificates-carousel-next absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-neutral-900 p-2 rounded-full shadow-lg transition-all hover:shadow-xl">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5L15.75 12l-7.5 7.5" />
					</svg>
				</button>
			</div>

			<!-- Carousel Indicators -->
			<div class="flex items-center justify-center gap-2 mt-6">
				<span class="carousel-indicator certificates-indicator text-xs outfit-medium text-neutral-900">1</span>
				<span class="text-neutral-400 outfit-regular">/</span>
				<span class="carousel-total certificates-total text-xs outfit-medium text-neutral-600">3</span>
				<div class="flex gap-2 ml-4">
					<button class="carousel-dot certificates-dot active" data-index="0" style="width: 10px; height: 10px; border-radius: 50%; background-color: #1f2937; cursor: pointer;"></button>
					<button class="carousel-dot certificates-dot" data-index="1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #d1d5db; cursor: pointer;"></button>
					<button class="carousel-dot certificates-dot" data-index="2" style="width: 10px; height: 10px; border-radius: 50%; background-color: #d1d5db; cursor: pointer;"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- END CERTIFICATES CAROUSEL -->

	<!-- FOOTER -->
	<?php
	include './includes/footer.php';
	?>
	<!-- END FOOTER -->

	<script type="module" src="./assets/js/landingPage.js"></script>
</body>

</html>