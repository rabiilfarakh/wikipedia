<?php 
require_once __DIR__ . '/../../Views/components/header.php';
?>

<div class="login-page">
  <div class="form">
    <form  method="POST" class="login-form" action="checkLogin">
      <input type="text" name="email" placeholder="Entez un email"/>
      <input type="password" name="pwd" placeholder="Entrz un mot de passe"/>
      <button type="submit" name="login">Se connecter</button>
      <p class="message">Vous n'avez pas un compte? <a href="/wikipedia/public/users/signup">Créer un compte</a></p>
    </form>
  </div>
</div>