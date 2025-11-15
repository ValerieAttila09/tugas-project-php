<?php
include "../auth/koneksi.php";
session_start();
if (!isset($_SESSION['nama'])) {
  header("location:../");
}
?>


<!DOCTYPE html>
<html lang="en" id="container">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - AriesUp</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./src/css/style.css" />
</head>

<body class="outfit-thin">

  <div class="w-full h-full overflow-hidden">
    <div class="w-full h-screen flex">
      <div id="sidebar" class="relative overflow-hidden h-screen border-r border-[#ebebeb]" style="width: 280px;">
        <div class="w-full h-full flex flex-col items-center justify-between">
          <div class="w-full flex flex-col items-center gap-4">
            <div class="w-full flex items-center justify-between px-3 py-2">
              <div class="flex items-center gap-4 ps-2">
                <img src="./src/assets/logo.png" alt="logo" class="size-8">
                <h1 id="sidebarMenu" class="outfit-semibold text-2xl text-transparent bg-clip-text bg-linear-to-r from-blue-700 to-sky-500">AriesUp</h1>
              </div>
            </div>
            <div class="w-full flex flex-col items-center gap-2 p-3">
              <a href="./dashboard.php" class="w-full p-2 rounded-md bg-white hover:bg-[#fafafa] hover:shadow-sm transition-all">
                <div class="w-full flex items-center justify-start ps-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                  </svg>
                  <span id="sidebarMenu" class="text-sm text-neutral-600 outfit-regular">Dashboard</span>
                </div>
              </a>
              <a href="./products.php" class="w-full p-2 rounded-md bg-white hover:bg-[#fafafa] hover:shadow-sm transition-all">
                <div class="w-full flex items-center justify-start ps-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                  </svg>
                  <span id="sidebarMenu" class="text-sm text-neutral-600 outfit-regular">Products</span>
                </div>
              </a>
              <a href="./feedbacks.php" class="w-full p-2 rounded-md bg-white hover:bg-[#fafafa] hover:shadow-sm transition-all">
                <div class="w-full flex items-center justify-start ps-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                  </svg>
                  <span id="sidebarMenu" class="text-sm text-neutral-600 outfit-regular">Feedbacks</span>
                </div>
              </a>
              <a href="../index.php" class="w-full p-2 rounded-md bg-white hover:bg-[#fafafa] hover:shadow-sm transition-all">
                <div class="w-full flex items-center justify-start ps-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  <span id="sidebarMenu" class="text-sm text-neutral-600 outfit-regular">Home</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="mainContent" class="w-[100%] h-full">
        <div id="navbar" class="w-full border-b border-[#ebebeb] p-2">
          <div class="w-full flex items-center justify-between">
            <div class="">
              <button id="sidebar-toggle" class="p-2 rounded-md bg-white border border-[#ebebeb] hover:bg-[#fafafa] transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                </svg>
              </button>
            </div>
            <div class="flex items-center gap-2">
              <button id="profileToggle" class="cursor-pointer flex items-center gap-2">
                <div class="rounded-full bg-neutral-400 text-lg outfit-semibold size-8 p-1 flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-neutral-100">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                  </svg>
                </div>
                <span class="text-sm text-neutral-600 outfit-regular"><?= $_SESSION['nama'] ?></span>
              </button>

              <?php 
             include './components/profile.php';
             ?>
            </div>
          </div>
        </div>
        <div id="content" class="relative w-full h-[calc(100%-55px)] overflow-y-auto bg-neutral-50 p-4">
          <?php
          $totalFeedbacks = $con->query("SELECT * FROM tb_feedback")->num_rows;
          $totalUsers = $con->query("SELECT * FROM tb_user")->num_rows;
          $totalProducts = $con->query("SELECT * FROM tb_produk")->num_rows;
          ?>
          <div class="grid grid-cols-3 gap-4">
            <div class="w-full h-[150px] bg-white rounded-md flex flex-col items-center justify-center gap-2">
              <h1 class="text-lg text-neutral-700 outfit-medium">Total Feedbacks</h1>
              <p class="text-sm text-neutral-600 outfit-regular"><?= $totalFeedbacks ?></p>
            </div>
            <div class="w-full h-[150px] bg-white rounded-md flex flex-col items-center justify-center gap-2">
              <h1 class="text-lg text-neutral-700 outfit-medium">Total Users</h1>
              <p class="text-sm text-neutral-600 outfit-regular"><?= $totalUsers ?></p>
            </div>
            <div class="w-full h-[150px] bg-white rounded-md flex flex-col items-center justify-center gap-2">
              <h1 class="text-lg text-neutral-700 outfit-medium">Total Products</h1>
              <p class="text-sm text-neutral-600 outfit-regular"><?= $totalProducts ?></p>
            </div>
          </div>
          <div class="w-full h-px bg-[#ebebeb] my-6"></div>
          <div class="grid grid-cols-3 gap-4">
            <?php
            $feedbacksQuery = "SELECT * FROM tb_feedback WHERE id_user = " . $_SESSION['id'];
            $feedbacks = mysqli_query($con, $feedbacksQuery);
            while ($feedback = mysqli_fetch_assoc($feedbacks)) {
            ?>
              <div class="bg-white rounded-md border border-[#ebebeb] p-4 flex flex-col justify-between">
                <div class="space-y-2">
                  <div class="">
                    <h1 class="text-xl text-neutral-700 outfit-medium"><?= $feedback['nama_pengirim'] ?></h1>
                    <h3 class="text-sm text-neutral-600 outfit-thin"><?= $feedback['email_pengirim'] ?></h3>
                  </div>
                  <div class="min-h-20">
                    <p class="text-lg text-neutral-600 outfit-regular">"<?= $feedback['komentar'] ?>"</p>
                  </div>
                </div>
                <div class="flex items-center gap-1 mb-2">
                  <?php
                  for ($i = 0; $i < $feedback['rating']; $i++) {
                  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-yellow-500">
                      <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                  <?php
                  }
                  ?>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

  <script src="./src/js/feedbacks.js"></script>
</body>

</html>