<?php
include "../auth/register.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/output.css">
</head>

<body class="outfit-thin">

	<div class="h-screen w-full flex items-center justify-center">
		<div class="max-w-4xl p-6 rounded-lg border border-[#ebebeb] shadow-md">
			<form method="POST">
				<div class="mb-6">
					<h1 class="text-2xl text-neutral-900 outfit-medium">Create Account to continue</h1>
					<p class="text-sm text-neutral-600">You need to register first to access the our website.</p>
				</div>
				<div class="grid grid-cols-1 gap-4">
					<div class="flex flex-col gap-1">
						<label for="nama" class="text-sm text-neutral-700 outfit-regular">Full Name</label>
						<input type="text" class="border border-[#ebebeb] rounded-md px-2 py-1 focus:shadow-md transition-all" name="nama">
					</div>
					<div class="flex flex-col gap-1">
						<label for="user" class="text-sm text-neutral-700 outfit-regular">Username</label>
						<input type="text" class="border border-[#ebebeb] rounded-md px-2 py-1 focus:shadow-md transition-all" name="user">
					</div>
					<div class="flex flex-col gap-1">
						<label for="pass" class="text-sm text-neutral-700 outfit-regular">Password</label>
						<input type="password" class="border border-[#ebebeb] rounded-md px-2 py-1 focus:shadow-md transition-all" name="pass">
					</div>
					<div class="mt-2 flex items-center justify-center">
						<button name="signup" class="w-full rounded-md mx-auto bg-indigo-600 hover:bg-indigo-700 p-2 text-white transition-all">Register</button>
					</div>
				</div>
			</form>
			<div class="my-2">
				<p class="text-sm text-neutral-700">
					Already have an account? <a href="../login/index.php" class="text-indigo-500 hover:underline">Log in</a>
				</p>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>