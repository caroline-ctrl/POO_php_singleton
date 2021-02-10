<?php
$title = "HappyGrossesse | Accueil";
include('Controllers/UserController.php');
include('templates/header.php');

$controller = new UserController();

?>

<div id="bandeau_haut">
    <h1 id="titre_accueil">Bienvenue sur HappyGrossesse</h1>
</div>

<div class="container">

<h1>Creation d'un user</h1>

<form action="UserController.php" method="POST" class="mt-5">
  <div class="form-group">
    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="mail" name="mail" placeholder="Mail">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary mb-5">Envoyer</button>
</form>

<p><?= $controller->create(); ?></p>
<p><?= isset($_POST['firstName']) ? $_POST['firstName'] : "" ; ?></p>


<h1>Tous les users</h1>

<?php

include('templates/footer.php');