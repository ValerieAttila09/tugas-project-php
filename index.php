<?php
session_reset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AriesUp - The Ultimate Solution</title>
	<link rel="stylesheet" href="./menu/src/css/output.css">
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
					<h1 class="text-lg outfit-bold text-neutral-900">AriesUp</h1>
				</div>
				<div class="flex items-center justify-center gap-4">
					<a href="#" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Docs</a>
					<a href="#" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Products</a>
					<a href="#" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Contact</a>
				</div>
				<div class="flex items-center justify-end gap-2">
					<a href="./authentication/login.php" class="text-sm rounded-full border border-[#d7d7d7] px-6 py-2 hover:shadow-sm hover:bg-[#fafafa] transition-all">Login</a>
					<a href="./authentication/register.php" class="text-sm rounded-full bg-neutral-900 border border-[#d7d7d7] text-white px-6 py-2 hover:shadow-sm hover:bg-neutral-700 transition-all">Sign Up</a>
				</div>
			</div>
			<div class="navbar flex p-2 md:hidden items-center justify-between">
				<div class="px-2 cursor-pointer">
					<h1 class="text-lg outfit-bold text-neutral-900">AriesUp</h1>
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
					<button class="navbar-toggle cursor-pointer text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Home</button>
					<button class="navbar-toggle cursor-pointer text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Docs</button>
					<button class="navbar-toggle cursor-pointer text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Products</button>
					<button class="navbar-toggle cursor-pointer text-start p-3 bg-transparent text-lg outfit-semibold text-neutral-700 hover:bg-[#fafafa]/20 hover:shadow-sm transition-all">Contact</button>
				</div>
			</div>
			<div class="w-full h-px bg-linear-to-r from-white via-[#d7d7d7] to-white"></div>
		</div>
		<!-- END NAVBAR -->

		<!-- HERO -->
		<div class="h-[86vh] flex items-center justify-center">
			<div class="max-w-4xl flex flex-col items-center justify-center gap-5 p-6 sm:p-0">
				<div class="rounded-full text-xs outfit-regular text-neutral-900 bg-white border border-neutral-300 px-4 py-1">🔥 More Faster</div>
				<h1 class="text-4xl sm:text-5xl md:text-7xl text-center text-neutral-900 outfit-medium text-shadow-sm">Most Powerful Way To Manage Everything</h1>
				<p class="text-sm sm:text-md lg:text-lg text-center text-neutral-600">A comprehensive and intuitive product management dashboard designed to streamline your workflow, enhance team collaboration, and accelerate project delivery with cutting-edge tools and real-time insights.</p>
				<div class="flex items-center gap-3">
					<button class="cursor-pointer rounded-full px-6 py-2 bg-neutral-900 text-white hover:bg-neutral-700 hover:shadow-sm transition-all">Get Started</button>
					<button class="cursor-pointer rounded-full px-6 py-2 bg-white border border-[#d7d7d7] hover:bg-neutral-[#fafafa] hover:shadow-sm transition-all">Docs</button>
				</div>
			</div>
		</div>
		<!-- END HERO -->


		<!-- REVIEW -->
		<div class="relative mt-24 sm:mt-20 w-full flex items-center justify-center">
			<div class="absolute flex flex-col items-center justify-center -top-24 shadow-lg inset-x-auto w-auto px-6 py-3 bg-white rounded-lg border border-[#ebebeb]">
				<h1 class="text-2xl text-neutral-900 outfit-medium text-center">Minimalist Dashboard Design</h1>
				<p class="text-sm text-neutral-600 outfit-regular text-center">Best choice for your work-space</p>
			</div>
			<div class="bg-[#fafafa] w-7/8 sm:w-5/8 rounded-xl border border-[#d7d7d7] p-2 shadow-2xl">
				<div class="border border-[#d7d7d7] rounded-lg overflow-hidden bg-white">
					<img src="./menu/src/assets/review.png" alt="review" class="rounded-lg w-full h-auto">
				</div>
			</div>
		</div>
		<!-- END REVIEW -->

		<!-- TOOLS -->
		<div class="w-full my-20 sm:my-24 md:my-26">
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
		<div class="w-full py-16 mt-16 bg-white">
			<div class="max-w-6xl mx-auto px-4">
				<div class="text-center mb-12">
					<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium">About the Product Management Dashboard</h2>
					<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">A modern and minimalistic solution for managing your projects and team with high efficiency.</p>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
					<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
						<div class="text-indigo-600 text-2xl mb-4">📊</div>
						<h3 class="text-xl font-medium text-gray-900 outfit-medium">Data Visualization</h3>
						<p class="mt-2 text-gray-600 outfit-regular">
							Real-time data visualization for your team and project progress.
						</p>
					</div>

					<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
						<div class="text-indigo-600 text-2xl mb-4">🔒</div>
						<h3 class="text-xl font-medium text-gray-900 outfit-medium">Security Guaranteed</h3>
						<p class="mt-2 text-gray-600 outfit-regular">
							Protect your company's important data with advanced encryption and flexible access controls.
						</p>
					</div>

					<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
						<div class="text-indigo-600 text-2xl mb-4">⚡</div>
						<h3 class="text-xl font-medium text-gray-900 outfit-medium">High Performance</h3>
						<p class="mt-2 text-gray-600 outfit-regular">
							Enjoy a distraction-free experience with a system optimized for maximum speed and scalability.
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
				<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium">Powerful Features</h2>
				<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">
					Discover the essential tools designed to streamline your project management experience.
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">📋</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">Task Management</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Create, assign, and track tasks with intuitive drag-and-drop functionality.
					</p>
				</div>

				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">👥</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">Team Collaboration</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Communicate seamlessly with your team through integrated messaging and comments.
					</p>
				</div>

				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">📈</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">Progress Tracking</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Monitor project milestones and deadlines with real-time progress indicators.
					</p>
				</div>

				<div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="text-indigo-600 text-2xl mb-4">⚙️</div>
					<h3 class="text-xl font-medium text-gray-900 outfit-medium">Customizable Workflows</h3>
					<p class="mt-2 text-gray-600 outfit-regular">
						Tailor workflows to match your team's unique processes and requirements.
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
				<h2 class="text-3xl md:text-4xl font-semibold text-gray-900 outfit-medium">Trusted by Teams Worldwide</h2>
				<p class="mt-4 text-lg text-gray-600 outfit-regular max-w-3xl mx-auto">
					Hear what our users say about transforming their project management experience.
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="flex items-center mb-4">
						<div class="text-yellow-400 text-xl">★★★★★</div>
					</div>
					<p class="text-gray-600 outfit-regular italic">
						"This dashboard has completely changed how our team collaborates. The minimalist design keeps everyone focused."
					</p>
					<div class="mt-4 flex items-center">
						<div class="ml-3">
							<p class="text-gray-900 outfit-medium">Alex Morgan</p>
							<p class="text-gray-500 outfit-regular text-sm">Product Lead, TechNova</p>
						</div>
					</div>
				</div>

				<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="flex items-center mb-4">
						<div class="text-yellow-400 text-xl">★★★★★</div>
					</div>
					<p class="text-gray-600 outfit-regular italic">
						"Incredibly intuitive and fast. We've seen a 40% increase in productivity since switching to this platform."
					</p>
					<div class="mt-4 flex items-center">
						<div class="ml-3">
							<p class="text-gray-900 outfit-medium">Jamie Chen</p>
							<p class="text-gray-500 outfit-regular text-sm">CTO, BuildEase</p>
						</div>
					</div>
				</div>

				<div class="bg-gray-50 p-6 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
					<div class="flex items-center mb-4">
						<div class="text-yellow-400 text-xl">★★★★★</div>
					</div>
					<p class="text-gray-600 outfit-regular italic">
						"The real-time data visualization helps us make informed decisions quickly. A game-changer for our workflow."
					</p>
					<div class="mt-4 flex items-center">
						<div class="ml-3">
							<p class="text-gray-900 outfit-medium">Taylor Williams</p>
							<p class="text-gray-500 outfit-regular text-sm">Operations Director, InnovateX</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END TESTIMONIALS -->

	<!-- FOOTER -->
	<div class="w-full mt-16 py-16 bg-white border-t border-gray-200">
		<div class="max-w-6xl mx-auto px-4">
			<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
				<div class="col-span-1 md:col-span-2">
					<h3 class="text-xl font-medium text-gray-900 outfit-medium mb-4">AriesUp</h3>
					<p class="text-gray-600 outfit-regular max-w-md">
						Modern and minimalist product management dashboard designed to help teams collaborate efficiently and manage projects with ease.
					</p>
				</div>

				<div>
					<h4 class="text-lg font-medium text-gray-900 outfit-medium mb-4">Resources</h4>
					<ul class="space-y-2">
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Documentation</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Tutorials</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Blog</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Support</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-lg font-medium text-gray-900 outfit-medium mb-4">Company</h4>
					<ul class="space-y-2">
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">About Us</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Careers</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Contact</a></li>
						<li><a href="#" class="text-gray-600 outfit-regular hover:text-gray-900 transition-colors">Privacy Policy</a></li>
					</ul>
				</div>
			</div>

			<div class="border-t border-gray-200 mt-12 pt-8 flex flex-col md:flex-row items-center justify-between">
				<p class="text-gray-600 outfit-regular text-sm">© 2023 AriesUp. All rights reserved.</p>
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