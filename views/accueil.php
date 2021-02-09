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

<p><?php var_dump($controller->connectDB()) ?></p>



<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

include('templates/footer.php');