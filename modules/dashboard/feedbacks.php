<?php
include "../../config/database.php";
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/output.css">
</head>

<body class="outfit-thin">

  <div class="w-full h-full overflow-hidden">
    <div class="w-full h-screen flex">
     <?php
      include '../../includes/sidebar.php';
      ?>
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
             include '../../includes/profile.php';
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

  <script src="../../assets/js/feedbacks.js"></script>
</body>

</html>