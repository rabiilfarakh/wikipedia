
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../../public/assets/css/auteur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-Gn5384xqQ1P5TT3I5Z4iMXskFq2exzYmbwJG4a7kS/eVhvoiRyjq8tD4g7NNSGcxhOvLbbXvcGrZbYFQ8EyW3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <div class="serach">
                <input class="border-solid border w-80 h-8 p-4 border-black" type="search" id="site-search" name="search" placeholder='Rechercher sur Wikipédia' />
                <button class="border-solid border h-8 w-28 border-black text-black bg-[#f0f0f0]">Rechercher</button>
            </div>
        </div>
        <div class="nav-links mr-12">
            <ul class="nav-list flex gap-2">
                <li class="nav-item hover:bg-[#e1e3e6] hover:shadow-lg py-2 px-4  rounded-3xl">
                    <a href="/wikipedia/public/users/logout" class="nav-link text-black">Déconnecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>












