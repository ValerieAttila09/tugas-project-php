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
                <?php
                $productQuery = "SELECT * FROM tb_produk WHERE id_user = '" . $_SESSION['id'] . "'";
                $productResult = mysqli_query($con, $productQuery);
                $productCount = mysqli_num_rows($productResult);
                ?>
                <div class="rounded-md bg-white border border-[#ebebeb] p-4">
                  <h1 class="text-lg text-neutral-600 outfit-regular">Total Products</h1>
                  <div class="flex items-center gap-2 mb-2">
                    <h1 class="text-3xl text-neutral-900 outfit-medium"><?php echo $productCount ?></h1>
                    <div class="rounded-sm flex items-center justify-center px-2 py-[2px] bg-green-50 text-green-600">
                      <span class="text-xs">+<?php echo $productCount ?></span>
                    </div>
                  </div>
                  <p class="text-xs text-neutral-500">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <?php
                $revenueQuery = "SELECT SUM(harga * kuantitas) AS total_revenue FROM tb_produk WHERE id_user = '" . $_SESSION['id'] . "'";
                $revenueResult = mysqli_query($con, $revenueQuery);
                $revenueRow = mysqli_fetch_assoc($revenueResult);
                $totalRevenue = $revenueRow['total_revenue'];
                $totalRevenue = ($totalRevenue != null) ? $totalRevenue : 0;
                $totalRevenue = number_format($totalRevenue, 2);
                ?>
                <div class="rounded-md bg-white border border-[#ebebeb] p-4">
                  <h1 class="text-lg text-neutral-600 outfit-regular">Total Value</h1>
                  <div class="flex items-center gap-2 mb-2">
                    <h1 class="text-3xl text-neutral-900 outfit-medium">$ <?php echo $totalRevenue; ?></h1>
                    <div class="rounded-sm flex items-center justify-center px-2 py-[2px] bg-green-50 text-green-600">
                      <span class="text-xs">+$ <?php echo $totalRevenue; ?></span>
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
                            <button class="rounded-md bg-white cursor-pointer border hover:bg-yellow-100 hover:text-yellow-600 hover:border-yellow-200 hover:shadow-sm transition-all border-[#ebebeb] px-4 py-1"
                              data-id="<?php echo $row['id_produk']; ?>"
                              data-name="<?php echo htmlspecialchars($row['nama_produk']); ?>"
                              data-desc="<?php echo htmlspecialchars($row['deskripsi']); ?>"
                              data-category="<?php echo $row['kategori']; ?>"
                              data-price="<?php echo $row['harga']; ?>"
                              data-qty="<?php echo $row['kuantitas']; ?>"
                              onclick="editProduct(this)">Edit</button>
                            <a href="products.php?delete=product&id=<?php echo $row['id_produk']; ?>" class="rounded-md bg-white cursor-pointer border hover:bg-red-100 hover:text-red-600 hover:border-red-200 hover:shadow-sm transition-all border-[#ebebeb] px-4 py-1">Delete</a>
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
          <div id="insertModal" class="fixed z-15 top-[6%] bottom-auto inset-x-[25%] hidden bg-white rounded-md border border-[#ebebeb]">
            <div class="w-full flex items-center justify-between p-4">
              <div class="">
                <h1 class="text-2xl outfit-medium text-neutral-900">Insert Product</h1>
              </div>
              <div class="">
                <button type="button" id="toggleInsertModal" class="cursor-pointer p-1 rounded-md border border-[#ebebeb] hover:bg-neutral-50 hover:text-neutral-900 hover:shadow-sm transition-all">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-neutral-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="w-full h-full relative overflow-y-auto">
              <div class="px-6 pb-6">
                <form method="POST">
                  <div class="space-y-4">
                    <div class="border-b border-neutral-900/10 pb-12">
                      <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                          <label for="nama_produk" class="block text-sm/6 font-medium text-neutral-900">Product Name</label>
                          <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-neutral-300 focus-within:outline-1 focus-within:-outline-offset-1 focus-within:outline-blue-600">
                              <div class="shrink-0 text-base text-neutral-500 select-none sm:text-sm/6 pe-3">AriesUp </div>
                              <input required id="nama_produk" type="text" name="nama_produk" placeholder="something..." class="w-full block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-neutral-900 border border-[#d7d7d7] rounded-r-md placeholder:text-neutral-400 focus:outline-none sm:text-sm/6" />
                            </div>
                          </div>
                        </div>

                        <div class="sm:col-span-6">
                          <label for="deskripsi" class="block text-sm/6 font-medium text-neutral-900">Description</label>
                          <div class="mt-2 w-full">
                            <textarea id="deskripsi" name="deskripsi" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-neutral-900 outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline-1 focus:-outline-offset-1 focus:outline-blue-600 sm:text-sm/6"></textarea>
                          </div>
                          <p class="mt-1 text-sm/6 text-neutral-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, distinctio.</p>
                        </div>

                        <div class="sm:col-span-3">
                          <label for="kategori" class="block text-sm/6 font-medium text-gray-900">Category</label>
                          <div class="mt-2 grid grid-cols-1">
                            <select id="kategori" name="kategori" autocomplete="kategori-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6">
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
                          <label for="harga" class="block text-sm/6 font-medium text-gray-900">Price</label>
                          <div class="mt-2">
                            <input required id="harga" type="number" name="harga" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6" />
                          </div>
                        </div>

                        <div class="sm:col-span-1">
                          <label for="kuantitas" class="block text-sm/6 font-medium text-gray-900">Quantity</label>
                          <div class="mt-2">
                            <input required id="kuantitas" type="number" name="kuantitas" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" id="toggleInsertModal" class="text-sm/6 outfit-medium cursor-pointer text-neutral-900">Cancel</button>
                    <button type="submit" name="insertNewProduct" class="cursor-pointer rounded-md bg-blue-600 px-3 py-2 text-sm outfit-medium text-white shadow-xs hover:bg-blue-500 focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Insert</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Edit Product Modal -->
          <div id="editModal" class="fixed z-15 top-[6%] bottom-auto inset-x-[25%] hidden bg-white rounded-md border border-[#ebebeb]">
            <div class="w-full flex items-center justify-between p-4">
              <div class="">
                <h1 class="text-2xl outfit-medium text-neutral-900">Edit Product</h1>
              </div>
              <div class="">
                <button type="button" id="toggleEditModal" class="cursor-pointer p-1 rounded-md border border-[#ebebeb] hover:bg-neutral-50 hover:text-neutral-900 hover:shadow-sm transition-all">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-neutral-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="w-full h-full relative overflow-y-auto">
              <div class="px-6 pb-6">
                <form method="POST">
                  <input type="hidden" id="edit_id_produk" name="id_produk">
                  <div class="space-y-4">
                    <div class="border-b border-neutral-900/10 pb-12">
                      <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                          <label for="edit_nama_produk" class="block text-sm/6 font-medium text-neutral-900">Product Name</label>
                          <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-neutral-300 focus-within:outline-1 focus-within:-outline-offset-1 focus-within:outline-blue-600">
                              <div class="shrink-0 text-base text-neutral-500 select-none sm:text-sm/6 pe-3">AriesUp </div>
                              <input required id="edit_nama_produk" type="text" name="nama_produk" placeholder="something..." class="w-full block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-neutral-900 border border-[#d7d7d7] rounded-r-md placeholder:text-neutral-400 focus:outline-none sm:text-sm/6" />
                            </div>
                          </div>
                        </div>

                        <div class="sm:col-span-6">
                          <label for="edit_deskripsi" class="block text-sm/6 font-medium text-neutral-900">Description</label>
                          <div class="mt-2 w-full">
                            <textarea id="edit_deskripsi" name="deskripsi" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-neutral-900 outline-1 -outline-offset-1 outline-neutral-300 placeholder:text-neutral-400 focus:outline-1 focus:-outline-offset-1 focus:outline-blue-600 sm:text-sm/6"></textarea>
                          </div>
                          <p class="mt-1 text-sm/6 text-neutral-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, distinctio.</p>
                        </div>

                        <div class="sm:col-span-3">
                          <label for="edit_kategori" class="block text-sm/6 font-medium text-gray-900">Category</label>
                          <div class="mt-2 grid grid-cols-1">
                            <select id="edit_kategori" name="kategori" autocomplete="kategori-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6">
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
                          <label for="edit_harga" class="block text-sm/6 font-medium text-gray-900">Price</label>
                          <div class="mt-2">
                            <input required id="edit_harga" type="number" name="harga" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6" />
                          </div>
                        </div>

                        <div class="sm:col-span-1">
                          <label for="edit_kuantitas" class="block text-sm/6 font-medium text-gray-900">Quantity</label>
                          <div class="mt-2">
                            <input required id="edit_kuantitas" type="number" name="kuantitas" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-1 focus:-outline-offset-1 focus:outline-indigo-600 sm:text-sm/6" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" id="toggleEditModal" class="text-sm/6 outfit-medium cursor-pointer text-neutral-900">Cancel</button>
                    <button type="submit" name="updateProduct" class="cursor-pointer rounded-md bg-blue-600 px-3 py-2 text-sm outfit-medium text-white shadow-xs hover:bg-blue-500 focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Update</button>
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

  <script src="./src/js/products.js"></script>
</body>

</html>

<?php
if (isset($_POST['insertNewProduct'])) {
  $nama_produk = $_POST['nama_produk'];
  $deskripsi = $_POST['deskripsi'];
  $kategori = $_POST['kategori'];
  $harga = $_POST['harga'];
  $kuantitas = $_POST['kuantitas'];

  $sql = "INSERT INTO tb_produk (id_user, nama_produk, deskripsi, kategori, harga, kuantitas) VALUES (?, ?, ?, ?, ?, ?)";
  $insert = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($insert, 'issssi', $_SESSION['id'], $nama_produk, $deskripsi, $kategori, $harga, $kuantitas);
  if (mysqli_stmt_execute($insert)) {
    echo '<script>alert("Insert Berhasil");window.location.href="products.php";</script>';
  } else {
    echo '<script>alert("Insert Gagal");window.location.href="products.php";</script>';
  }
}

if (isset($_POST['updateProduct'])) {
  $id_produk = $_POST['id_produk'];
  $nama_produk = $_POST['nama_produk'];
  $deskripsi = $_POST['deskripsi'];
  $kategori = $_POST['kategori'];
  $harga = $_POST['harga'];
  $kuantitas = $_POST['kuantitas'];

  $sql = "UPDATE tb_produk SET nama_produk=?, deskripsi=?, kategori=?, harga=?, kuantitas=? WHERE id_produk=? AND id_user=?";
  $update = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($update, 'ssssiii', $nama_produk, $deskripsi, $kategori, $harga, $kuantitas, $id_produk, $_SESSION['id']);

  if (mysqli_stmt_execute($update)) {
    echo '<script>alert("Update Berhasil");window.location.href="products.php";</script>';
  } else {
    echo '<script>alert("Update Gagal");window.location.href="products.php";</script>';
  }
}

if (isset($_GET['id']) && isset($_GET['delete']) && $_GET['delete'] === 'product') {
  $id_produk = $_GET['id'];
  $sql = "DELETE FROM tb_produk WHERE id_produk = ? AND id_user = ?";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, 'ii', $id_produk, $_SESSION['id']);
  mysqli_stmt_execute($stmt);
  if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo '<script>alert("Delete Berhasil");window.location.href="products.php";</script>';
  } else {
    echo '<script>alert("Delete Gagal");window.location.href="products.php";</script>';
  }
}
?>