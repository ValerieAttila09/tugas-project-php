<?php
session_reset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="outfit-thin">

    <div class="w-full">
        <!-- NAVBAR -->
        <div class="max-w-5xl mx-auto p-2 flex items-center justify-between">
            <div class="px-18">
                <h1 class="text-lg outfit-bold text-neutral-900">AriesUp</h1>
            </div>
            <div class="flex items-center justify-center gap-4">
                <a href="#" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Docs</a>
                <a href="#" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Products</a>
                <a href="#" class="text-md outfit-regular p-2 text-neutral-700 hover:text-neutral-900 hover:text-shadow-sm transition-all">Contact</a>
            </div>
            <div class="flex items-center justify-end gap-2">
                <a href="./authentication/login.php" class="text-sm rounded-full border border-[#d7d7d7] px-6 py-2 hover:shadow-sm hover:bg-[#fafafa] transition-all">Login</a>
                <a href="./authentication/register.php" class="text-sm rounded-full bg-neutral-900 border border-[#d7d7d7] text-white px-6 py-2 hover:shadow-sm hover:bg-neutral-700 transition-all">Sign Up</a>
            </div>
        </div>
        <!-- END NAVBAR -->

        <!-- LANDING PAGE -->
        <div class="h-[96vh] flex items-center justify-center">
            <div class="max-w-4xl flex flex-col gap-5 items-center justify-center gap-1">
                <div class="rounded-full text-xs outfit-regular text-neutral-900 bg-white border border-neutral-300 px-4 py-1">About Us</div>
                <h1 class="text-7xl text-center text-neutral-900 outfit-medium text-shadow-sm">Most Powerful Way To Manage Everything</h1>
                <p class="text-lg text-center text-neutral-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quia laborum ipsum aut. Id cumque excepturi numquam sunt dolor quo ratione, impedit ullam in voluptatum magni architecto voluptate repellendus similique!</p>
                <div class="flex items-center gap-3">
                    <button class="rounded-full px-6 py-2 bg-neutral-900 text-white hover:bg-neutral-700 hover:shadow-sm transition-all">Get Started</button>
                    <button class="rounded-full px-6 py-2 bg-white border border-[#d7d7d7] hover:bg-neutral-[#fafafa] hover:shadow-sm transition-all">Docs</button>
                </div>
            </div>
        </div>
        <!-- END LANDING PAGE -->

        <!-- ABOUT -->
        <div class="w-full"></div>
        <!-- END ABOUT -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>