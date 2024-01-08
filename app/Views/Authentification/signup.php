<?php 
require_once __DIR__ . '/../../Views/components/header.php';
?>

<div class="login-page ">
  <div class="form flex ">
    <form method="POST" class="login-form " action="checkSignup">
      <input type="text" name="name" placeholder="Saisissez votre nom d'utilisateur"/>
      <input type="text" name="email" placeholder="Entrez un email"/>
      <input type="password" name="pwd" placeholder="Entrz un mot de passe"/>
      <input type="password" name="tryPwd" placeholder="Confirmez le mot de passe"/>
      <button type="submit" name="inscrire">S'inscrire</button>
      <p class="message">vous avez un compte? <a href="/wikipedia/public/users/login">Se connecter</a></p>
    </form>
  </div>
</div>