<?php 
require_once __DIR__ . '/../../Views/components/header.php';
?>


<div class="login-page ">
  <div class="form flex ">
    <form method="POST" class="login-form " id="form" action="checkLogin">
    <h1 style="font-size:26px">Se connecter</h1>
    <div class="">
    <div class="input-control">
        <input type="text" name="email" id="email" placeholder="Entrez un email"/>
        <div class="error"></div>
      </div>
      <div class="input-control">
        <input type="password" name="pwd" id="password" placeholder="Entrz un mot de passe"/>
        <div class="error"></div>
      </div>
      <button type="submit" name="login">Se connecter</button>
      <p class="message mt-5 text-center ">Vous n'avez pas un compte? <a href="/wikipedia/public/users/signup" style="color:blue">Créer un compte</a></p>
    </div>
    </form>
  </div>
</div>


<script src="./../../public/assets/js/login.js"></script>

<script src="./../../public/assets/js/regex.js"></script>
  






