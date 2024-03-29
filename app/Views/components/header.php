
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../../public/assets/css/signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-Gn5384xqQ1P5TT3I5Z4iMXskFq2exzYmbwJG4a7kS/eVhvoiRyjq8tD4g7NNSGcxhOvLbbXvcGrZbYFQ8EyW3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" justify-center">
<nav class=" text-white shadow-lg ">
    <div class="container mx-auto flex justify-between items-center gap-40 py-4">
        <div class="flex gap-16 items-center ">
            <div class=" ml-20 logo">
                <img class ="h-14" src="/wikipedia/public/assets/img/wikipedia.png">
            </div>
            <!-- <div class="serach">
                <input class="border-solid border w-80 h-8 p-4 border-black" type="search" id="search" name="search" placeholder='Rechercher sur Wikipédia' />
            </div> -->
        </div>
        <div class="nav-links mr-12">
            <ul class="nav-list flex gap-2">
                <li class="nav-item hover:bg-[#e1e3e6] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="/wikipedia/public/users/signup" class="nav-link text-black">Créer un compte</a>
                </li>
                <li class="nav-item hover:bg-[#e1e3e6] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="/wikipedia/public/users/login" class="nav-link text-black">Se connecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="./../../public/assets/js/search.js"></script>