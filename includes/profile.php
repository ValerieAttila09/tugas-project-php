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
     <a href="../auth/logout.php" class="rounded-md text-sm text-neutral-800 border border-[#ebebeb] px-4 py-1 bg-white hover:bg-red-50 hover:shadow-sm hover:border-red-100 hover:text-red-600 transition-all">Logout</a>
   </div>
 </div>