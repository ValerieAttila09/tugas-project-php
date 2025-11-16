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
  </style>
</head>

<body class="outfit-thin">

  <div class="w-full h-full overflow-hidden">
    <div class="w-full h-screen flex">
      <?php
      include '../../includes/sidebar.php';
      ?>
      <div id="mainContent" class="w-[100%] h-screen">
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
          <div class="w-full p-2">
            <div class="mb-4 py-2">
              <h1 class="mb-1 text-4xl text-neutral-900 outfit-medium">Welcome back, <?= $_SESSION['nama'] ?></h1>
              <p class="text-md text-neutral-600 outfit-regular">Here's what's happening today</p>
            </div>
            <div class="mb-2 flex items-center gap-2">
              <div class="bg-white w-full rounded-md p-4 border border-[#ebebeb]">
                <div class="flex items-center justify-between">
                  <h1 class="text-lg text-neutral-700 outfit-regular">Total Revenue</h1>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-neutral-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                </div>
                <div class="flex items-center gap-2">
                  <h1 class="text-4xl text-neutral-900 outfit-regular">$ 8,436.35</h1>
                  <div class="rounded-sm px-2 py-[2px] text-xs flex items-center gap-1 bg-green-50">
                    <span class="text-green-600">23.4%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 text-green-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>
                  </div>
                </div>
                <div class="">
                  <span class="text-sm text-neutral-600">
                    Compared to last week
                  </span>
                </div>
              </div>
              <div class="bg-white w-full rounded-md p-4 border border-[#ebebeb]">
                <div class="flex items-center justify-between">
                  <h1 class="text-lg text-neutral-700 outfit-regular">Total Sales</h1>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-neutral-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                </div>
                <div class="flex items-center gap-2">
                  <h1 class="text-4xl text-neutral-900 outfit-regular">$ 9,436.35</h1>
                  <div class="rounded-sm px-2 py-[2px] text-xs flex items-center gap-1 bg-green-50">
                    <span class="text-green-600">23.4%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 text-green-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>
                  </div>
                </div>
                <div class="">
                  <span class="text-sm text-neutral-600">
                    Compared to last week
                  </span>
                </div>
              </div>
              <div class="bg-white w-full rounded-md p-4 border border-[#ebebeb]">
                <div class="flex items-center justify-between">
                  <h1 class="text-lg text-neutral-700 outfit-regular">Bounce Rate</h1>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-neutral-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                </div>
                <div class="flex items-center gap-2">
                  <h1 class="text-4xl text-neutral-900 outfit-regular">84.3%</h1>
                  <div class="rounded-sm px-2 py-[2px] text-xs flex items-center gap-1 bg-green-50">
                    <span class="text-green-600">23.4%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 text-green-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>
                  </div>
                </div>
                <div class="">
                  <span class="text-sm text-neutral-600">
                    Compared to last week
                  </span>
                </div>
              </div>
            </div>
            <div class="w-full grid grid-cols-5 gap-4">
              <div class="col-span-3 bg-white flex flex-col justify-between rounded-md p-4 border border-[#ebebeb]">
                <canvas id="chart1" class="mb-2 w-full h-auto" aria-label="test chart" role="img"></canvas>
                <div class="flex items-center gap-2">
                  <button class="rounded-md px-4 py-2 hover:bg-[#fafafa] border border-[#ebebeb] text-sm text-neutral-600 bg-neutral-white transition-all">See more</button>
                  <button class="rounded-md p-2 hover:bg-[#fafafa] border border-[#ebebeb] text-sm text-neutral-600 bg-neutral-white transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="col-span-2 bg-white rounded-md p-4 border border-[#ebebeb]">
                <canvas id="chart2" class="mb-2 w-full h-auto" aria-label="pie chart" role="img"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

  <script src="../../assets/js/dashboard.js"></script>
</body>

</html>