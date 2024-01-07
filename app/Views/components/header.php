<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= APP_URL ?>public/assets/css/style.css">
    <title><?= SITE_NAME ?> | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#323437]">
<nav class="text-white shadow-lg">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="flex">
            <strong class="">PAROLY</strong>
        </div>
        <div class="nav-links">
            <ul class="nav-list flex gap-4">
                <li class="nav-item hover:bg-[#E2B714] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item hover:bg-[#E2B714] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item hover:bg-[#E2B714] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="#" class="nav-link">Artists</a>
                </li>
                <li class="nav-item hover:bg-[#E2B714] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 cursor-pointer">
            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
        </div>
    </div>
</nav>
