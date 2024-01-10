<?php 
require_once __DIR__ . '/../../Views/components/header.php';
?>


<div class="login-page ">
  <div class="form flex ">
    <form method="POST" class="login-form " id="form" action="checkSignup">
    <h1 style="font-size:26px">S'inscrire</h1>
    <div class="">
    <div class="input-control">
        <input type="text" name="name" id="username" placeholder="Saisissez votre nom d'utilisateur"/>
        <div class="error"></div>
      </div>
      <div class="input-control">
        <input type="text" name="email" id="email" placeholder="Entrez un email"/>
        <div class="error"></div>
      </div>
      <div class="input-control">
        <input type="password" name="pwd" id="password" placeholder="Entrz un mot de passe"/>
        <div class="error"></div>
      </div>
      <div class="input-control">
        <input type="password" name="tryPwd" id="password2" placeholder="Confirmez le mot de passe"/>
        <div class="error"></div>
      </div>
      <button type="submit" name="inscrire">S'inscrire</button>
      <p class="message mt-5 text-center ">vous avez un compte? <a href="/wikipedia/public/users/login" style="color:blue">Se connecter</a></p>
    </div>

    </form>
  </div>
</div>


    <script src="./../../public/assets/js/regex.js"></script>
  






