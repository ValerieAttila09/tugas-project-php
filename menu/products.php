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
      <div id="main" class="min-w-[calc(100%-240px)] h-full">
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
            <div class="w-full flex items-center justify-between gap-6">
              <div class="w-auto">
                <h1 class="text-4xl text-neutral-900 outfit-semibold">Products</h1>
                <p class="text-sm text-neutral-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="mb-4 w-full flex items-center justify-end gap-2">
                <div class="rounded-md bg-white border border-[#ebebeb] p-4">
                  <h1 class="text-lg text-neutral-600 outfit-regular">Total Products</h1>
                  <div class="flex items-center gap-2 mb-2">
                    <h1 class="text-3xl text-neutral-900 outfit-medium">34</h1>
                    <div class="rounded-sm flex items-center justify-center px-2 py-[2px] bg-green-50 text-green-600">
                      <span class="text-xs">+34</span>
                    </div>
                  </div>
                  <p class="text-xs text-neutral-500">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="rounded-md bg-white border border-[#ebebeb] p-4">
                  <h1 class="text-lg text-neutral-600 outfit-regular">Total Products</h1>
                  <div class="flex items-center gap-2 mb-2">
                    <h1 class="text-3xl text-neutral-900 outfit-medium">$ 7,464</h1>
                    <div class="rounded-sm flex items-center justify-center px-2 py-[2px] bg-green-50 text-green-600">
                      <span class="text-xs">+$ 7,464</span>
                    </div>
                  </div>
                  <p class="text-xs text-neutral-500">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </div>
            </div>
            <div class="w-full">
              <div class="bg-white rounded-md border border-[#ebebeb] py-2">
                <div class="flex justify-between items-center px-2 mb-2">
                  <button type="button" id="toggleInsertModal" class="rounded-md bg-white border border-[#ebebeb] text-neutral-700 px-4 py-1 hover:bg-neutral-50 hover:shadow-sm transition-all">Add Product</button>
                </div>
                <div class="relative h-full">
                  <table class="w-full">
                    <thead>
                      <tr class="border-b border-t border-[#ebebeb] bg-neutral-50">
                        <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">No</th>
                        <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Product Name</th>
                        <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Description</th>
                        <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Price</th>
                        <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Stock</th>
                        <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Category</th>
                        <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Action</th>
                      </tr>
                    </thead>
                    <tbody class="relative">
                      <?php
                      $query = "SELECT * FROM tb_produk WHERE id_user = '" . $_SESSION['id'] . "'";
                      $result = mysqli_query($con, $query);
                      $no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <tr id="product-<?php echo $row['id_produk']; ?>" class="border-b border-[#ebebeb] hover:-translate-y-[2px] hover:rounded-lg hover:shadow-lg transition-all cursor-pointer">
                          <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $no++; ?></td>
                          <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $row['nama_produk']; ?></td>
                          <td class="text-sm w-[400px] text-neutral-800 p-3"><?php echo $row['deskripsi']; ?></td>
                          <td class="text-sm text-nowrap text-neutral-800 p-3 outfit-medium"><?php echo $row['harga']; ?>$</td>
                          <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $row['kuantitas']; ?></td>
                          <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $row['kategori']; ?></td>
                          <td class="text-sm text-neutral-800 p-3 flex items-center flex-nowrap justify-start gap-2">
                            <button class="rounded-md bg-white cursor-pointer border hover:bg-yellow-100 hover:text-yellow-600 hover:border-yellow-200 hover:shadow-sm transition-all border-[#ebebeb] px-4 py-1">Edit</button>
                            <button class="rounded-md bg-white cursor-pointer border hover:bg-red-100 hover:text-red-600 hover:border-red-200 hover:shadow-sm transition-all border-[#ebebeb] px-4 py-1">Delete</button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div id="overlay" class="w-full h-full z-10 fixed inset-0 bg-black/50 hidden" />
          <div id="insertModal" class="fixed z-15 top-[6%] bottom-[6%] inset-x-[25%] hidden bg-white rounded-md border border-[#ebebeb]">
            <div class="w-full h-full relative overflow-y-auto">
              <div class="p-6">
                <form method="POST">
                  <div class="space-y-4">
                    <div class="border-b border-neutral-900/10 pb-12">
                      <div class="flex items-start justify-between space-x-[calc(1rem*8)]">
                        <div class="">
                          <h2 class="text-2xl outfit-medium text-neutral-900">Product Details</h2>
                          <p class="mt-1 text-sm/6 text-neutral-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non libero culpa error hic? Ea harum quo veritatis. Ab quia omnis eum asperiores animi, cum dignissimos totam beatae temporibus? Unde, eius!</p>
                        </div>
                        <div class="">
                          <button type="button" id="toggleInsertModal" class="cursor-pointer p-1 rounded-md border border-[#ebebeb] hover:bg-neutral-50 hover:text-neutral-900 hover:shadow-sm transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-neutral-600">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                          </button>
                        </div>
                      </div>

                      <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                          <label for="product_name" class="block text-sm/6 font-medium text-neutral-900">Product Name</label>
                          <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-neutral-300 focus-within:outline-1 focus-within:-outline-offset-1 focus-within:outline-blue-600">
                              <div class="shrink-0 text-base text-neutral-500 select-none sm:text-sm/6 pe-3">AriesUp </div>
                              <input id="product_name" type="text" name="product_name" placeholder="something..." class="w-full block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-neutral-900 border border-[#d7d7d7] rounded-r-md placeholder:text-neutral-400 focus:outline-none sm:text-sm/6" />
                            </div>
                          </div>
                        </div>

                        <div class="sm:col-span-6">
                          <label for="description" class="block text-sm/6 font-medium text-neutral-900">Description</label>
                          <div class="mt-2 w-full">
                            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-neutral-900 outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline-1 focus:-outline-offset-1 focus:outline-blue-600 sm:text-sm/6"></textarea>
                          </div>
                          <p class="mt-1 text-sm/6 text-neutral-600">Write a few sentences about the product.</p>
                        </div>

                        <div class="sm:col-span-3">
                          <label for="catergory" class="block text-sm/6 font-medium text-gray-900">Category</label>
                          <div class="mt-2 grid grid-cols-1">
                            <select id="catergory" name="catergory" autocomplete="catergory-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6">
                              <option value="Furniture">Furniture</option>
                              <option value="Clothes">Clothes</option>
                              <option value="Technology">Technology</option>
                              <option value="Stationery">Stationery</option>
                              <option value="Toys">Toys</option>
                              <option value="Others">Others</option>
                            </select>
                          </div>
                        </div>

                        <div class="sm:col-span-2">
                          <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                          <div class="mt-2">
                            <input id="price" type="number" name="price" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6" />
                          </div>
                        </div>

                        <div class="sm:col-span-1">
                          <label for="quantity" class="block text-sm/6 font-medium text-gray-900">Quantity</label>
                          <div class="mt-2">
                            <input id="quantity" type="number" name="quantity" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" id="toggleInsertModal" class="text-sm/6 outfit-medium cursor-pointer text-neutral-900">Cancel</button>
                    <button type="submit" name="insertNewProduct" class="cursor-pointer rounded-md bg-blue-600 px-3 py-2 text-sm outfit-medium text-white shadow-xs hover:bg-blue-500 focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Save</button>
                  </div>
                </form>
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

  <script src="./src/js/products.js"></script>
</body>

</html>