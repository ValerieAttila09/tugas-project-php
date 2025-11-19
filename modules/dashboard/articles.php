<?php
include "../../config/database.php";
include "../../app/Helpers/functions.php";

if (!isLoggedIn()) {
  redirect("../../modules/auth/login.php");
}
?>

<!DOCTYPE html>
<html lang="en" id="container">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles - AriesUp</title>
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
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

    /* #overlay {
      pointer-events: none !important;
    } */
  </style>
</head>

<body class="outfit-thin">

  <div class="w-full h-full overflow-hidden">
    <div class="w-full h-screen flex">
      <?php
      include '../../includes/sidebar.php';
      ?>
      <div id="mainContent" class="w-[100%] h-full">
        <div id="navbar" class="w-full border-b border-[#d7d7d7] p-2">
          <div class="w-full flex items-center justify-between">
            <div class="">
              <button id="sidebar-toggle" class="p-2 rounded-md bg-white border border-[#d7d7d7] hover:bg-[#fafafa] transition-all">
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
                <span class="text-sm text-neutral-600 outfit-regular"><?= getUserName() ?></span>
              </button>

              <?php
              include '../../includes/profile.php';
              ?>
            </div>
          </div>
        </div>
        <div id="content" class="relative w-full h-[calc(100%-55px)] overflow-y-auto bg-neutral-50 p-6">
          <div class="w-full space-y-2">
            <div class="">
              <h1 class="text-4xl text-neutral-800 outfit-medium">Articles</h1>
            </div>
            <div class="grid grid-cols-3 gap-3">
              <div class="col-span-1 rounded-lg border border-[#d7d7d7] p-4 bg-white">
                <div class="flex items-center justify-between">
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-500">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                  </div>
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                  </div>
                </div>
                <div class="">
                  <h3 class="text-lg text-neutral-700 outfit-regular">Total Articles</h3>
                  <h1 class="text-3xl text-neutral-900 outfit-semibold">24 Articles</h1>
                </div>
              </div>
              <div class="col-span-1 rounded-lg border border-[#d7d7d7] p-4 bg-white">
                <div class="flex items-center justify-between">
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-500">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                  </div>
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                  </div>
                </div>
                <div class="">
                  <h3 class="text-lg text-neutral-700 outfit-regular">Total Articles</h3>
                  <h1 class="text-3xl text-neutral-900 outfit-semibold">24 Articles</h1>
                </div>
              </div>
              <div class="col-span-1 rounded-lg border border-[#d7d7d7] p-4 bg-white">
                <div class="flex items-center justify-between">
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-500">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                  </div>
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                  </div>
                </div>
                <div class="">
                  <h3 class="text-lg text-neutral-700 outfit-regular">Total Articles</h3>
                  <h1 class="text-3xl text-neutral-900 outfit-semibold">24 Articles</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full mt-6">
            <div class="bg-white rounded-md border border-[#d7d7d7] py-2">
              <div class="flex justify-between items-center px-2 mb-2">
                <button type="button" id="toggleInsertArticle" class="rounded-md bg-white border border-[#d7d7d7] text-neutral-700 px-4 py-1 hover:bg-neutral-50 hover:shadow-sm transition-all">Add article</button>
              </div>
              <div class="relative h-full">
                <table class="w-full">
                  <thead>
                    <tr class="border-b border-t border-[#d7d7d7] bg-neutral-50">
                      <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">No</th>
                      <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Title</th>
                      <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Content</th>
                      <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Category</th>
                      <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Publisher</th>
                      <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Gambar</th>
                      <th class="text-md text-start text-neutral-600 outfit-regular px-3 py-2">Action</th>
                    </tr>
                  </thead>
                  <tbody class="relative">
                    <?php
                    $query = "SELECT * FROM tb_artikel";
                    $result = mysqli_query($con, $query);
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $content = $row['isi'];
                      $content_singkat = substr($content, 0, 36);
                    ?>
                      <tr id="article-<?php echo $row['id']; ?>" class="border-b border-[#d7d7d7] hover:-translate-y-[2px] hover:rounded-lg hover:shadow-lg transition-all cursor-pointer">
                        <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $no++; ?></td>
                        <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $row['judul']; ?></td>
                        <td class="text-sm text-neutral-800 p-3 flex"><?php echo $content_singkat; ?></td>
                        <td class="text-sm text-nowrap text-neutral-800 p-3 outfit-medium"><?php echo $row['kategori']; ?></td>
                        <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $row['publisher']; ?></td>
                        <td class="text-sm text-nowrap text-neutral-800 p-3"><?php echo $row['gambar']; ?></td>
                        <td class="text-sm text-neutral-800 p-3 flex items-center flex-nowrap justify-start gap-2">
                          <button type="button" class="edit-article rounded-md bg-white cursor-pointer border hover:bg-yellow-100 hover:text-yellow-600 hover:border-yellow-200 hover:shadow-sm transition-all border-[#d7d7d7] px-4 py-1"
                            data-id="<?php echo $row['id']; ?>"
                            data-title="<?php echo htmlspecialchars($row['judul']); ?>"
                            data-content="<?php echo htmlspecialchars($row['isi']); ?>"
                            data-category="<?php echo $row['kategori']; ?>"
                            data-publisher="<?php echo $row['publisher']; ?>"
                            data-image="<?php echo $row['gambar']; ?>">
                            Edit
                          </button>
                          <button type="button" class="delete-article rounded-md bg-white cursor-pointer border hover:bg-red-100 hover:text-red-600 hover:border-red-200 hover:shadow-sm transition-all border-[#d7d7d7] px-4 py-1" data-id="<?php echo $row['id']; ?>">Delete</button>
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
          <div id="overlay" class="w-full h-full fixed inset-0 bg-black/50 hidden z-40" />
          <div id="insertArticle" class="fixed z-50 top-[6%] hidden bottom-auto inset-x-[25%] bg-white rounded-md overflow-y-scroll border border-[#d7d7d7]">
            <form id="articleForm" action="../articles/store.php" method="POST" enctype="multipart/form-data" class="w-full space-y-4 rounded-lg border border-[#d7d7d7] p-6 bg-white">
              <div class="">
                <label for="judul" class="text-lg text-neutral-800 outfit-medium">Judul</label>
                <input type="text" id="judul" name="judul" class="w-full rounded-lg border border-[#cdcdcd] p-2 outline-none focus:border-indigo-600 focus:ring-indigo-600" required />
              </div>
              <div class="">
                <label for="isi" class="text-lg text-neutral-800 outfit-medium">Isi</label>
                <div class="w-full rounded-t-lg border border-b-0 border-[#cdcdcd] bg-white px-4 py-2">
                  <p class="text-sm text-neutral-600 outfit-regular flex items-center gap-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                      </svg>
                    </span>
                    Deskripsikan artikel Anda di sini
                  </p>
                </div>
                <div class="rounded-b-lg bg-white" id="editor"></div>
                <input type="hidden" id="isi" name="isi" />
              </div>
              <div class="grid grid-cols-5 gap-3">
                <div class="col-span-4">
                  <label for="cover-photo" class="text-lg text-neutral-800 outfit-medium">Upload Gambar</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true" class="mx-auto size-12 text-gray-300">
                        <path d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" fill-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm/6 text-gray-600">
                        <label for="gambar" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-600 hover:text-indigo-500">
                          <span>Upload a file</span>
                          <input id="gambar" type="file" name="gambar" class="sr-only" />
                        </label>
                        <p class="pl-1">or drag and drop</p>
                      </div>
                      <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="col-span-1">
                  <label for="kategori" class="text-lg text-neutral-800 outfit-medium">Kategori</label>
                  <div class="mt-2 grid grid-cols-1">
                    <select id="kategori" name="kategori" autocomplete="kategori-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                      <option value="Teknologi">Teknologi</option>
                      <option value="Fashion">Fashion</option>
                      <option value="Kuliner">Kuliner</option>
                      <option value="Olahraga">Olahraga</option>
                      <option value="Kesehatan">Kesehatan</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                      <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="w-full h-[1px] bg-[#d7d7d7] my-4"></div>
              <div class="w-full flex items-center justify-start gap-4">
                <button type="submit" class="rounded-md bg-indigo-600 px-6 py-[6px] text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-600/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Publish Artikel</button>
              </div>
            </form>
          </div>
          <div id="editArticle" class="fixed z-50 top-[6%] hidden bottom-auto inset-x-[25%] bg-white rounded-md overflow-y-scroll border border-[#d7d7d7]">
            <form id="articleEditForm" action="../articles/update.php" method="POST" enctype="multipart/form-data" class="w-full space-y-4 rounded-lg border border-[#d7d7d7] p-6 bg-white">
              <input type="hidden" name="id" id="edit_article_id" />
              <div class="">
                <label for="edit_judul" class="text-lg text-neutral-800 outfit-medium">Judul</label>
                <input type="text" id="edit_judul" name="judul" class="w-full rounded-lg border border-[#cdcdcd] p-2 outline-none focus:border-indigo-600 focus:ring-indigo-600" required />
              </div>
              <div class="">
                <label for="edit_isi" class="text-lg text-neutral-800 outfit-medium">Isi</label>
                <div class="w-full rounded-t-lg border border-b-0 border-[#cdcdcd] bg-white px-4 py-2">
                  <p class="text-sm text-neutral-600 outfit-regular flex items-center gap-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-neutral-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                      </svg>
                    </span>
                    Deskripsikan artikel Anda di sini
                  </p>
                </div>
                <div class="rounded-b-lg bg-white" id="editor-edit"></div>
                <input type="hidden" id="edit_isi" name="isi" />
              </div>
              <div class="grid grid-cols-5 gap-3">
                <div class="col-span-4">
                  <label for="edit_cover-photo" class="text-lg text-neutral-800 outfit-medium">Upload Gambar</label>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true" class="mx-auto size-12 text-gray-300">
                        <path d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" fill-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm/6 text-gray-600">
                        <label for="edit_gambar" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-600 hover:text-indigo-500">
                          <span>Upload a file</span>
                          <input id="edit_gambar" type="file" name="gambar" class="sr-only" />
                        </label>
                        <p class="pl-1">or drag and drop</p>
                      </div>
                      <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="col-span-1">
                  <label for="edit_kategori" class="text-lg text-neutral-800 outfit-medium">Kategori</label>
                  <div class="mt-2 grid grid-cols-1">
                    <select id="edit_kategori" name="kategori" autocomplete="kategori-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                      <option value="Teknologi">Teknologi</option>
                      <option value="Fashion">Fashion</option>
                      <option value="Kuliner">Kuliner</option>
                      <option value="Olahraga">Olahraga</option>
                      <option value="Kesehatan">Kesehatan</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                      <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="w-full h-[1px] bg-[#d7d7d7] my-4"></div>
              <div class="w-full flex items-center justify-start gap-4">
                <button type="submit" id="editPublishBtn" class="rounded-md bg-indigo-600 px-6 py-[6px] text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-600/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Artikel</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="../../assets/js/articles.js"></script>
</body>

</html>