<?php
session_start();
if (!isset($_SESSION['nama'])) {
  header("location:../");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - AriesUp</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./src/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="outfit-thin">

  <div class="w-full h-full overflow-hidden">
    <div class="w-full h-screen flex">
      <div id="sidebar" class="w-[240px] relative overflow-hidden h-screen border-r border-[#ebebeb]">
        <div class="w-full h-full flex flex-col items-center justify-between">
          <div class="w-full flex flex-col items-center gap-4">
            <div class="w-full flex items-center justify-between px-3 py-2">
              <div class="flex items-center gap-4 ps-2">
                <img src="./src/assets/logo.png" alt="logo" class="size-8">
                <h1 id="sidebarMenu" class="outfit-semibold text-2xl text-transparent bg-clip-text bg-linear-to-r from-blue-700 to-sky-500">AriesUp</h1>
              </div>
              <div id="sidebarMenu" class="">
                <button class="p-2 rounded-md bg-white border border-[#ebebeb] hover:bg-[#fafafa] transition-all">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                  </svg>
                </button>
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
      <div id="main" class="min-w-[calc(100%-240px)] h-screen">
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

              <div id="profileDropdown" class="hidden fixed top-12 min-w-xs right-10 z-10 p-6 rounded-md border border-[#ebebeb] shadow-md bg-white">
                <div class="w-full flex items-center justify-between">
                  <div class="mb-4 w-full flex items-center justify-between">
                    <h1 class="text-lg text-neutral-700 outfit-regular">Profile</h1>
                    <button id="profileToggle" class="p-1 cursor-pointer rounded-md bg-white border border-[#ebebeb] hover:bg-[#fafafa] transition-all">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="mb-4 w-full flex items-center justify-between">
                  <div class="flex items-center justify-center rounded-full size-20 bg-neutral-400 text-2xl outfit-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12 text-neutral-100">
                      <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-md outfit-regular text-neutral-900"><?= $_SESSION['nama'] ?></p>
                    <p class="text-sm text-neutral-600 outfit-regular"><?= $_SESSION['username'] ?></p>
                  </div>
                </div>
                <div class="w-full flex items-center gap-2">
                  <a href="#" class="rounded-md text-sm text-neutral-800 border border-[#ebebeb] px-4 py-1 bg-white hover:bg-[#fafafa] hover:shadow-sm transition-all">Edit</a>
                  <a href="../index.php" class="rounded-md text-sm text-neutral-800 border border-[#ebebeb] px-4 py-1 bg-white hover:bg-red-50 hover:shadow-sm hover:border-red-100 hover:text-red-600 transition-all">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="content" class="relative w-full h-[calc(100%-55px)] overflow-y-auto bg-neutral-50 p-4">
          <div class="w-full p-2">
            <div class="mb-4 py-2">
              <h1 class="mb-1 text-4xl text-neutral-900 outfit-medium">Welcome back, <?= $_SESSION['nama'] ?></h1>
              <p class="text-md text-neutral-600 outfit-regular">Here's what's happening today</p>
            </div>
            <div class="mb-2 flex items-center gap-2">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

  <script src="./src/js/dashboard.js"></script>
</body>

</html>