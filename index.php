<?php
session_reset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio - Creative Developer & Designer</title>
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
					<a href="#projects" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Projects</a>
					<a href="#skills" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Skills</a>
					<a href="#feedback" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Feedback</a>
				</div>
				<div class="flex items-center justify-end gap-2">
					<a href="./authentication/login.php" class="text-sm rounded-full border border-[#d7d7d7] px-6 py-2 hover:shadow-sm hover:bg-[#fafafa] transition-all">Login</a>
					<a href="./authentication/register.php" class="text-sm rounded-full bg-neutral-900 border border-[#d7d7d7] text-white px-6 py-2 hover:shadow-sm hover:bg-neutral-700 transition-all">Sign Up</a>
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
					<a href="#" class="text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Contact</a>
				</div>
			</div>
			<div class="w-full h-px bg-linear-to-r from-white via-[#d7d7d7] to-white"></div>
		</div>
		<!-- END NAVBAR -->

		<!-- HERO -->
		<div class="h-[92vh] flex items-center justify-center">
			<div class="max-w-4xl flex flex-col items-center justify-center gap-5 p-6 sm:p-0">
				<div class="rounded-full text-xs outfit-regular text-neutral-900 bg-white border border-neutral-300 px-4 py-1">✨ Creative Developer</div>
				<h1 class="text-4xl sm:text-5xl md:text-7xl text-center text-neutral-900 outfit-medium text-shadow-sm">Crafting Digital Experiences</h1>
				<p class="text-sm sm:text-md lg:text-lg text-center text-neutral-600">I'm a passionate developer and designer creating beautiful, functional web solutions. Specializing in modern web technologies, UI/UX design, and full-stack development with a focus on performance and user experience.</p>
				<div class="flex items-center gap-3">
					<button class="cursor-pointer rounded-full px-6 py-2 bg-neutral-900 text-white hover:bg-neutral-700 hover:shadow-sm transition-all">View My Work</button>
					<button class="cursor-pointer rounded-full px-6 py-2 bg-white border border-[#d7d7d7] hover:bg-neutral-[#fafafa] hover:shadow-sm transition-all">Contact Me</button>
				</div>
			</div>
		</div>
		<!-- END HERO -->

		<!-- REVIEW -->
		<!-- <div id="projects" class="relative mt-24 sm:mt-20 w-full flex items-center justify-center">
			<div class="absolute flex flex-col items-center justify-center -top-24 shadow-lg inset-x-auto w-auto px-6 py-3 bg-white rounded-lg border border-[#ebebeb]">
				<h1 class="text-2xl text-neutral-900 outfit-medium text-center">Featured Project Showcase</h1>
				<p class="text-sm text-neutral-600 outfit-regular text-center">My latest and best work</p>
			</div>
			<div class="bg-[#fafafa] w-5/8 sm:w-5/8 rounded-xl border border-[#d7d7d7] p-2 shadow-2xl">
				<div class="border border-[#d7d7d7] rounded-lg overflow-hidden bg-white">
					<img src="./menu/src/assets/review.png" alt="review" class="rounded-lg w-full h-auto">
				</div>
			</div>
		</div> -->
		<!-- END REVIEW -->

		<!-- TOOLS -->
		<div class="w-full my-10 sm:my-14 md:my-16">
			<h3 class="text-2xl outfit-medium text-neutral-800 text-center mb-2">Built With</h3>
			<div class="max-w-4xl mx-auto flex items-center justify-center gap-6">
				<div class="rounded-full bg-[#777BB3] w-16 h-16 flex items-center justify-center p-2">
					<img src="./menu/src/assets/php-logo-bigger.png" class="w-14 h-auto" alt="">
				</div>
				<div class="rounded-full overflow-hidden bg-[#F0DB4F] w-16 h-16 flex items-center justify-center p-2">
					<img src="./menu/src/assets/JavaScript-logo.png" class="w-14 h-auto" alt="">
				</div>
				<div class="rounded-full overflow-hidden bg-blue-100 w-16 h-16 flex items-center justify-center p-2">
					<img src="./menu/src/assets/tailwindcss-mark.d52e9897 (1).png" class="w-16 h-auto" alt="">
				</div>
				<div class="rounded-full bg-teal-100 w-16 h-16 flex items-center justify-center p-2">
					<img src="./menu/src/assets/greensock-gsap-icon-seeklogo.png" class="w-12 h-auto" alt="">
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
					<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
						<div class="text-indigo-600 text-2xl mb-4">�</div>
						<h3 class="text-xl font-medium text-gray-900 outfit-medium">Full-Stack Development</h3>
						<p class="mt-2 text-gray-600 outfit-regular">
							Building complete web solutions from frontend to backend with modern technologies and best practices.
						</p>
					</div>

					<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
						<div class="text-indigo-600 text-2xl mb-4">🎨</div>
						<h3 class="text-xl font-medium text-gray-900 outfit-medium">UI/UX Design</h3>
						<p class="mt-2 text-gray-600 outfit-regular">
							Creating intuitive and beautiful interfaces that provide excellent user experience and engagement.
						</p>
					</div>

					<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
						<div class="text-indigo-600 text-2xl mb-4">⚡</div>
						<h3 class="text-xl font-medium text-gray-900 outfit-medium">Performance Optimization</h3>
						<p class="mt-2 text-gray-600 outfit-regular">
							Optimizing websites for speed, scalability, and reliability to deliver exceptional performance.
						</p>
					</div>
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
				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">�</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">PHP & Backend</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Strong expertise in PHP, database design, and server-side architecture for robust applications.
					</p>
				</div>

				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">�</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">JavaScript / Typescript & Frontend</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Expert in JavaScript, React, and modern frontend frameworks for interactive user experiences.
					</p>
				</div>

				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">🎨</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">UI/UX & Design</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Proficient in Tailwind CSS, responsive design, and creating beautiful user interfaces.
					</p>
				</div>

				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">✨</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">Animations & Interactions</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Creating smooth animations and interactive elements with GSAP and modern CSS techniques.
					</p>
				</div>
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
				<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="flex items-center mb-4">
						<div class="text-yellow-400 text-xl">★★★★★</div>
					</div>
					<p class="text-gray-600 outfit-regular italic">
						"Exceptional work! The developer delivered exactly what we needed with clean, efficient code and great attention to detail."
					</p>
					<div class="mt-4 flex items-center">
						<div class="ml-3">
							<p class="text-gray-900 outfit-medium">Sarah Johnson</p>
							<p class="text-gray-500 outfit-regular text-sm">CEO, Digital Ventures</p>
						</div>
					</div>
				</div>

				<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="flex items-center mb-4">
						<div class="text-yellow-400 text-xl">★★★★★</div>
					</div>
					<p class="text-gray-600 outfit-regular italic">
						"Outstanding design and functionality. The project was completed on time and exceeded all our expectations. Highly recommended!"
					</p>
					<div class="mt-4 flex items-center">
						<div class="ml-3">
							<p class="text-gray-900 outfit-medium">Michael Chen</p>
							<p class="text-gray-500 outfit-regular text-sm">Project Manager, TechStart Inc</p>
						</div>
					</div>
				</div>

				<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="flex items-center mb-4">
						<div class="text-yellow-400 text-xl">★★★★★</div>
					</div>
					<p class="text-gray-600 outfit-regular italic">
						"Professional, responsive, and creative. They transformed our vision into reality with an amazing portfolio of work."
					</p>
					<div class="mt-4 flex items-center">
						<div class="ml-3">
							<p class="text-gray-900 outfit-medium">Emma Rodriguez</p>
							<p class="text-gray-500 outfit-regular text-sm">Marketing Director, Growth Labs</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END TESTIMONIALS -->

	<!-- PROJECTS CAROUSEL -->
	<div class="w-full mt-16 py-16 bg-gray-50">
		<div class="max-w-6xl mx-auto px-4">
			<div class="text-center mb-12">
				<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium" id="projects-carousel">My Projects</h2>
				<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">
					Explore my latest and greatest projects showcasing my technical expertise and creative solutions.
				</p>
			</div>

			<!-- Projects Carousel Container -->
			<div class="relative w-full overflow-hidden">
				<div class="carousel-wrapper projects-carousel" style="position: relative; overflow: hidden; border-radius: 12px;">
					<div class="carousel-container" style="display: flex; position: absolute; width: 100%; height: 100%;">
						<!-- Project 1 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative;">
							<img src="menu/src/assets/project1.png" alt="Project 1" class="w-full h-full object-cover rounded-lg">
							<div class="absolute bottom-0 inset-x-0 bg-neutral-900/60 rounded-lg p-2 sm:p-3 md:p-6">
								<div class="text-white">
									<h3 class="text-sm sm:text-base md:text-2xl outfit-bold mb-1 sm:mb-2">Third Portfolio</h3>
									<p class="outfit-regular text-xs sm:text-xs md:text-sm hidden sm:block">A comprehensive product management dashboard with real-time analytics.</p>
								</div>
							</div>
						</div>

						<!-- Project 2 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative;">
							<img src="menu/src/assets/project2.png" alt="Project 2" class="w-full h-full object-cover rounded-lg">
							<div class="absolute bottom-0 inset-x-0 bg-neutral-900/60 rounded-lg p-2 sm:p-3 md:p-6">
								<div class="text-white">
									<h3 class="text-sm sm:text-base md:text-2xl outfit-bold mb-1 sm:mb-2">Simple SaaS Web Design</h3>
									<p class="outfit-regular text-xs sm:text-xs md:text-sm hidden sm:block">A fully responsive e-commerce solution with payment integration.</p>
								</div>
							</div>
						</div>

						<!-- Project 3 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative;">
							<img src="menu/src/assets/project3.png" alt="Project 3" class="w-full h-full object-cover rounded-lg">
							<div class="absolute bottom-0 inset-x-0 bg-neutral-900/60 rounded-lg p-2 sm:p-3 md:p-6">
								<div class="text-white">
									<h3 class="text-sm sm:text-base md:text-2xl outfit-bold mb-1 sm:mb-2">Todo List App</h3>
									<p class="outfit-regular text-xs sm:text-xs md:text-sm hidden sm:block">Interactive social platform with real-time messaging and notifications.</p>
								</div>
							</div>
						</div>

						<!-- Project 4 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative;">
							<img src="menu/src/assets/project4.png" alt="Project 4" class="w-full h-full object-cover rounded-lg">
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
							<img src="./menu/src/assets/img/sertif1.png" alt="Certificate 1" class="w-full h-full object-contain rounded-lg">
						</div>

						<!-- Certificate 2 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative; padding: 20px;">
							<img src="./menu/src/assets/img/sertif2.png" alt="Certificate 2" class="w-full h-full object-contain rounded-lg">
						</div>

						<!-- Certificate 3 -->
						<div class="carousel-item" style="min-width: 100%; height: 100%; position: relative; padding: 20px;">
							<img src="./menu/src/assets/img/sertif3.png" alt="Certificate 3" class="w-full h-full object-contain rounded-lg">
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
	<div class="w-full mt-16 py-16 bg-white border-t border-gray-200">
		<div class="max-w-6xl mx-auto px-4">
			<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
				<div class="col-span-1 md:col-span-2">
					<h3 class="text-xl font-medium text-gray-900 outfit-medium mb-4">Portfolio</h3>
					<p class="text-gray-600 outfit-regular max-w-md">
						A creative developer and designer crafting beautiful, functional web solutions. Specializing in modern web technologies and user-centered design.
					</p>
				</div>

				<div>
					<h4 class="text-lg font-medium text-gray-900 outfit-medium mb-4">Navigate</h4>
					<ul class="space-y-2">
						<li><a href="#projects-carousel" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Projects</a></li>
						<li><a href="#skills" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Skills</a></li>
						<li><a href="#certificates" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Certificates</a></li>
						<li><a href="#feedback" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Feedback</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-lg font-medium text-gray-900 outfit-medium mb-4">Connect</h4>
					<ul class="space-y-2">
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">GitHub</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">LinkedIn</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Twitter</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Email</a></li>
					</ul>
				</div>
			</div>

			<div class="border-t border-gray-200 mt-12 pt-8 flex flex-col md:flex-row items-center justify-between">
				<p class="text-gray-600 outfit-regular text-sm">© 2024 My Portfolio. All rights reserved.</p>
				<div class="flex space-x-6 mt-4 md:mt-0">
					<a href="#" class="text-gray-400 hover:text-gray-500 transition-colors">
						<span class="sr-only">Twitter</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
						</svg>
					</a>
					<a href="#" class="text-gray-400 hover:text-gray-500 transition-colors">
						<span class="sr-only">GitHub</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
						</svg>
					</a>
					<a href="#" class="text-gray-400 hover:text-gray-500 transition-colors">
						<span class="sr-only">LinkedIn</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END FOOTER -->

	<script type="module" src="./scripts/index.js"></script>
</body>

</html>