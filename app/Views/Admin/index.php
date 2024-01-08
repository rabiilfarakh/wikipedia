<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./../../public/assets/css/admin.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Wikipedia</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed text-info" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-sliders pe-2 text-secondary"></i>
                            Gestion des catégories
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action" id="creerC">
                                    <span>Créer catégorie</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action" id="modifierC">
                                    <span>Modifier catégorie</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action">
                                    <span>Supprimer catégorie</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed text-info" data-bs-target="#tags" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-sliders pe-2 text-secondary"></i>
                        Gestion des tags
                    </a>
                        <ul id="tags" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action ">
                                    <span>Ajouter tag</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action ">
                                    <span>Modifier tag</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action ">
                                    <span>Supprimer tag</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed text-info" data-bs-target="#auth" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-regular fa-user pe-2 text-secondary"></i>
                            Admin
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action ">
                                    <span>Déconnecter</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link list-group-item list-group-item-action ">
                                    <span>mot de passe oublié</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100 bg-info">
                                        <div class="col-6 ">
                                            <div class="p-3 m-1 ">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Admin Dashboard, CodzSword</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                $ 78.00
                                            </h4>
                                            <p class="mb-2">
                                                Total Earnings
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +9.0%
                                                </span>
                                                <span class="text-muted">
                                                    Since Last Month
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Element -->
                    <div class="card border-0" id="table">
                        <div class="card-header">
                            <h5 class="card-title">
                                Basic Table
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ducimus,
                                necessitatibus reprehenderit itaque!
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- --------------------------------gestion des categories--------------------------------- -->
                    <!-- ajouter categorie -->
                    <div id="creeCategorie" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:16vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerCC">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                            <h2>Ajouter Catégorie</h2>
                            <form method="POST" action="../categories/addCategorie" class="d-flex justify-content-center flex-column">
                                <label for="nomCategorie">Nom de Catégorie:</label>
                                <input type="text" id="nomCategorie" name="nomCategorie"><br>
                                <button class="btn btn-light btn-outline-dark" style="border-radius: 10px; width: 6vw" type="submit" name="creerCat">Ajouter</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <!-- modifier categorie -->
                    <div id="modifierCategorie" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:22vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerCM">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                        <h2>Modifier Catégorie</h2>
                        <form method="POST" action="" class="d-flex justify-content-center flex-column">
                            <label>Sélectionnez la catégorie à modifier :</label>
                            <select id="idCategorieModification" name="idCategorieModification" class="form-control">
                                <?php
                                foreach($data["categories"] as $categorie) {
                                    echo "<option value='{$categorie->__get('idCategorie')}'>{$categorie->__get('nameCategorie')}</option>";
                                    }
                                ?>
                            </select><br>
                            <label for="nouveauNomCategorie">Nouveau nom de la catégorie :</label>
                            <input type="text" id="nouveauNomCategorie" name="nouveauNomCategorie" class="form-control"><br>
                            <button class="btn btn-light btn-outline-dark" style="border-radius: 10px; width: 6vw" type="submit" name="modifierCat">Modifier</button>
                        </form>
                        </div>
                        </div>
                    </div>
                    <!-- supprimer categorie -->
                    <!-- --------------------------------gestion des tags--------------------------------- -->
                    <!-- ajouter tag -->
                    <!-- supprimer tag -->
                    <!-- modifier tag -->

                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>Wikipedia</strong>
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./../../public/assets/js/admin.js"></script>
</body>

</html>