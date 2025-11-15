<?php
include '../auth/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
include './components/header.php';
?>

<body class="outfit-thin overflow-x-hidden">

	<div class="w-full">
		<!-- NAVBAR -->
		<?php
		include './components/navbar.php';
		?>
		<!-- END NAVBAR -->

		<!-- ARTICLE -->
		<?php
		$queryArticle = "SELECT * FROM tb_artikel";
		$resultArticle = mysqli_query($con, $queryArticle);
		while ($rowArticle = mysqli_fetch_assoc($resultArticle)) {
			$articleId = $rowArticle['id'];
			$articleTitle = $rowArticle['judul'];
			$articleDescription = $rowArticle['deskripsi'];
			$articleImage = $rowArticle['gambar'];
		?>
			<div class=""></div>
		<?php
		}
		?>
		<div class="m-0 md:mx-24">
			<div class="mt-20 mb-6 p-4 md:p-0">
				<span class="text-sm text-neutral-500 outfit-regular">Home / Article / Test Article</span>
			</div>
			<div class="w-full grid md:grid-cols-5 gap-8 md:gap-16 p-4 md:p-0">
				<div class="md:col-span-3">
					<div class="">
						<h1 class="text-4xl sm:text-5xl md:text-6xl text-neutral-900 outfit-semibold">Suffering with lack of responsibility?</h1>
					</div>
					<div class="my-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
						<div class="flex items-center gap-4">
							<div class="size-12 rounded-full bg-neutral-200 flex items-center justify-center text-center">
								<span class="text-md text-neutral-400 outfit-bold">VA</span>
							</div>
							<div class="">
								<h1 class="text-xl/4 text-neutral-700 outfit-medium">Vian Abella</h1>
								<span class="text-sm text-neutral-400 outfit-regular">Adaptive Behavior</span>
							</div>
						</div>
						<div class="flex items-center gap-3">
							<span class="text-sm text-neutral-500 outfit-thin">22nd, March, 2025</span>
							<div class="h-[1.2rem] w-px bg-neutral-400"></div>
							<span class="text-sm text-neutral-500 outfit-thin">Categories: Addiction</span>
							<div class="h-[1.2rem] w-px bg-neutral-400"></div>
							<span class="text-sm text-neutral-500 outfit-thin">5 Min Read</span>
						</div>
					</div>
					<div class="">
						<div class="mb-8 md:md-16">
							<img src="./store/uploads/aaron-burson-YihQdPSK9jI-unsplash.jpg" alt="example" class="w-full h-auto object-cover rounded-lg">
						</div>
						<div class="">
							<h1 class="text-3xl text-neutral-900 outfit-medium mb-4 md:mb-6">WHAT IS GASLIGHTING?</h1>
							<p class="text-base text-neutral-600 outfit-regular mb-4 md:mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl sit amet nisl. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl sit amet nisl.</p>
							<p class="text-base text-neutral-600 outfit-regular mb-4 md:mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem nam optio pariatur voluptas dicta natus maiores aperiam. Vel, ullam unde? Numquam fugit doloribus inventore animi dolorem repellendus assumenda at possimus. Maiores beatae ab repellendus iure. Odio illo libero expedita magni debitis enim aperiam minus. Perspiciatis earum dolorum laboriosam quaerat. Soluta ipsa expedita pariatur minus dolorum vel, ad rem at saepe, nisi inventore harum! Minus exercitationem ex dolore veniam non quae amet odit placeat, eligendi assumenda sint quam ullam provident sunt sed cum, eum impedit neque ab qui laborum voluptate quibusdam.</p>
							<p class="text-base text-neutral-600 outfit-regular mb-4 md:mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem consequuntur eveniet vel! Soluta eaque exercitationem debitis at, vel doloribus molestiae modi ut deleniti saepe. Itaque voluptatum voluptates nisi dolor eveniet sit reprehenderit repellat quas hic obcaecati, suscipit sed tempore! Molestiae quasi, ab aperiam maiores perferendis temporibus atque ut totam quaerat placeat laboriosam hic minima nam corporis officia. Pariatur expedita debitis iusto vero corporis ab est ad? Recusandae doloremque assumenda magni quaerat obcaecati! Libero voluptatem molestiae minus asperiores consequuntur amet fugit accusantium rem, aut qui ullam iusto quaerat tenetur velit laborum obcaecati fugiat saepe. Quae quia soluta dolor at atque quisquam officiis maiores explicabo hic vel aut, culpa, velit eveniet inventore corporis quis obcaecati ut eligendi accusamus laborum alias. Tenetur aperiam amet exercitationem atque?</p>
							<h3 class="text-2xl text-neutral-900 outfit-medium mb-4 md:mb-6">THE EFFECTS OF GASLIGHTING</h3>
							<p class="text-base text-neutral-600 outfit-regular mb-4 md:mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt deserunt saepe labore nisi corporis eligendi autem voluptatem eaque laboriosam natus mollitia officia beatae numquam illo quod possimus delectus est, repellat minima dolore sapiente ut fugit. Sequi minima, modi ex possimus tempore quae et accusamus molestias velit quis voluptatem quo, quisquam, accusantium excepturi dicta labore eveniet magni quia earum itaque? Molestias, rem! Eos officiis atque, consectetur sit molestiae fuga esse reprehenderit fugiat labore laboriosam nisi ab eligendi magnam quos, commodi error ratione soluta voluptatibus alias asperiores? Amet officia doloremque incidunt deserunt consequuntur nam cupiditate, harum dolores culpa molestiae sapiente sint vel dolorum fugit vitae magni quibusdam eos tempore nostrum atque excepturi dignissimos quia minima. Laborum iste ipsam corrupti, illo ducimus reiciendis non dolor ullam, accusantium dolores voluptatem ea fugiat quis eum sit, architecto dignissimos quos eius! Consectetur porro perspiciatis cumque nobis nesciunt voluptatem illum quod eius. Debitis ad cupiditate exercitationem facilis eos accusamus?</p>
						</div>
					</div>
				</div>
				<div class="hidden md:block md:col-span-2">
					<div class="my-8 md:my-20">
						<h1 class="text-xl text-neutral-800 outfit-regular mb-4">Table of Contents</h1>
						<ol class="space-y-2">
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Lorem ipsum dolor sit, amet consectetur adipisicing.</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Lorem ipsum dolor sit amet.</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Lorem ipsum dolor sit amet consectetur.</a></li>
						</ol>
					</div>
					<div class="my-8 md:my-20">
						<h1 class="text-xl text-neutral-800 outfit-regular mb-4">Popular Articles</h1>
						<ol class="space-y-2">
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Lorem ipsum dolor sit amet consectetur.</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Lorem ipsum dolor sit amet consectetur adipisicing.</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique!</a></li>
							<li class="outift-thin"><a href="#" class="text-base text-neutral-600">Lorem ipsum dolor sit amet.</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- END ARTICLE -->

		<!-- FOOTER -->
		<?php
		include './components/footer.php';
		?>
		<!-- END FOOTER -->

		<script type="module" src="../scripts/index.js"></script>
</body>

</html>