<?php
$title = "Happy | Accueil";
include('Controllers/UserController.php');
include('templates/header.php');
$controller = new UserController();
$data = $_POST;
$result = $controller->createUser($data);

?>

<div id="bandeau_haut">
    <h1 id="titre_accueil">Bienvenue sur Happy</h1>
</div>

<div class="container">

<h1>Creation d'un user</h1>

<form method="POST" class="mt-5" id="monForm">
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
    <input type="password" class="form-control" id="passwordA" name="passwordA" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="passwordVerif" name="passwordVerif" placeholder="Vérification mot de passe">
  </div>
  <?php
  if(!empty($_POST)){
    if($_POST['passwordVerif'] != $_POST['passwordA']){
  ?>    
    <div class="alert alert-danger" role="alert">
      Les deux mot de passe ne sont pas identiques
    </div>
  <?php
  }
}
  ?>

  <button type="submit" class="btn btn-primary">Submit</button>
  <!--<input type="button" class="btn btn-primary mb-5" id="monBouton" value="envoyer">-->
</form>


<?php
if (!empty($_POST)){
  echo "<p>Prénom : " . $result[0] . "</p>";
  echo "<p>Nom : " . $result[1] . "</p>";
  echo "<p>Pseudo : " . $result[2] . "</p>";
  echo "<p>Mail : " . $result[2] . "</p>";
  echo "<p>Mot de passe : " . $result[4] . "</p>";
}


include('templates/footer.php');

// ajouter passwordVerif dans le formulaire