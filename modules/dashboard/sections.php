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
  <title>Sections - AriesUp</title>
  <link rel="stylesheet" href="../../assets/css/output.css">
  <!-- Quill.js CSS -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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

    /* Tab Styles */
    .tab-btn {
      color: #737373;
      background-color: transparent;
    }

    .tab-btn.active {
      background-color: #fafafa;
      color: #171717;
      border: 1px solid #ebebeb;
    }

    .tab-btn:hover {
      background-color: #f5f5f5;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    /* Quill Editor Styles */
    .ql-container {
      font-family: "Outfit", sans-serif;
      font-size: 14px;
      min-height: 150px;
    }

    .ql-editor {
      min-height: 150px;
    }

    /* Table Styles */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    table th {
      background-color: #fafafa;
      text-align: left;
      font-weight: 500;
      padding: 12px;
      border-bottom: 1px solid #ebebeb;
    }

    table td {
      padding: 12px;
      border-bottom: 1px solid #ebebeb;
    }

    table tr:hover {
      background-color: #fafafa;
    }
  </style>
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
                    <path fill-rule="evenodd" d="M7.5 6a 4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
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
          <!-- Header -->
          <div class="mb-6">
            <h1 class="text-2xl outfit-semibold text-neutral-900">Portfolio Sections</h1>
            <p class="text-sm text-neutral-600 outfit-regular mt-1">Manage your portfolio content dynamically</p>
          </div>

          <!-- Tabs Navigation -->
          <div class="bg-white rounded-lg shadow-sm border border-[#ebebeb] mb-4">
            <div class="flex items-center gap-2 p-2 overflow-x-auto">
              <button class="tab-btn active px-4 py-2 rounded-md text-sm outfit-medium transition-all" data-tab="hero">
                Hero Section
              </button>
              <button class="tab-btn px-4 py-2 rounded-md text-sm outfit-medium transition-all" data-tab="about">
                About Me
              </button>
              <button class="tab-btn px-4 py-2 rounded-md text-sm outfit-medium transition-all" data-tab="skills">
                Skills
              </button>
              <button class="tab-btn px-4 py-2 rounded-md text-sm outfit-medium transition-all" data-tab="client">
                Client Feedback
              </button>
            </div>
          </div>

          <!-- Tab Contents -->
          
          <!-- Hero Section Tab -->
          <div id="hero-tab" class="tab-content active">
           <div class="bg-white rounded-lg shadow-sm border border-[#ebebeb] p-6">
              <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl outfit-semibold text-neutral-900">Hero Section</h2>
              </div>
              <div id="hero-content" class="space-y-4">
                <!-- Will be populated by JavaScript -->
              </div>
            </div>
          </div>

          <!-- About Me Tab -->
          <div id="about-tab" class="tab-content">
            <div class="bg-white rounded-lg shadow-sm border border-[#ebebeb] p-6">
              <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl outfit-semibold text-neutral-900">About Me Items</h2>
                <button id="add-about-btn" class="px-4 py-2 bg-neutral-900 text-white rounded-md text-sm outfit-medium hover:bg-neutral-700 transition-all">
                  + Add Item
                </button>
              </div>
              <div id="about-table" class="overflow-x-auto">
                <!-- Will be populated by JavaScript -->
              </div>
            </div>
          </div>

          <!-- Skills Tab -->
          <div id="skills-tab" class="tab-content">
            <div class="bg-white rounded-lg shadow-sm border border-[#ebebeb] p-6">
              <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl outfit-semibold text-neutral-900">Skills</h2>
                <button id="add-skill-btn" class="px-4 py-2 bg-neutral-900 text-white rounded-md text-sm outfit-medium hover:bg-neutral-700 transition-all">
                  + Add Skill
                </button>
              </div>
              <div id="skills-table" class="overflow-x-auto">
                <!-- Will be populated by JavaScript -->
              </div>
            </div>
          </div>

          <!-- Client Feedback Tab -->
          <div id="client-tab" class="tab-content">
            <div class="bg-white rounded-lg shadow-sm border border-[#ebebeb] p-6">
              <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl outfit-semibold text-neutral-900">Client Testimonials</h2>
                <button id="add-client-btn" class="px-4 py-2 bg-neutral-900 text-white rounded-md text-sm outfit-medium hover:bg-neutral-700 transition-all">
                  + Add Testimonial
                </button>
              </div>
              <div id="client-table" class="overflow-x-auto">
                <!-- Will be populated by JavaScript -->
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Overlay -->
        <div id="modal-overlay" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
          <div id="modal-content" class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal content will be injected here -->
          </div>
        </div>

        <!-- Toast Notification -->
        <div id="toast" class="hidden fixed bottom-4 right-4 bg-neutral-900 text-white px-6 py-3 rounded-lg shadow-lg z-50">
          <p id="toast-message" class="text-sm outfit-medium"></p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <!-- Quill.js -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

  <script src="../../assets/js/sections-fixed.js"></script>
</body>

</html>