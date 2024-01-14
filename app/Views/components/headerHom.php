<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../../public/assets/css/auteur.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-Gn5384xqQ1P5TT3I5Z4iMXskFq2exzYmbwJG4a7kS/eVhvoiRyjq8tD4g7NNSGcxhOvLbbXvcGrZbYFQ8EyW3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="justify-center">
    <nav class="text-white shadow-lg" >
        <div class="container mx-auto flex justify-between items-center gap-40 py-4">
            <div class="flex gap-16 items-center">
                <div class="ml-20 logo">
                    <img class="h-14" src="/wikipedia/public/assets/img/wikipedia.png">
                </div>
                <div class="search">
                    <form method="POST" action="searchAjax">
                        <input class="border-solid border w-80 h-4 p-4 border-black" style="color:black" type="search" id="search" name="search" placeholder='Rechercher sur Wikipédia' />
                    </form>
                    <div id="searchResult" class="text-black"></div>
                </div>
            </div>
            <div class="nav-links mr-12">
                <ul class="nav-list flex gap-2">
                    <li class="nav-item hover:bg-[#e1e3e6] hover:shadow-lg py-2 px-4 rounded-3xl">
                        <a href="/wikipedia/public/users/logout" class="nav-link text-black">Déconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="./../../public/assets/js/search.js"></script>
</body>

</html>
