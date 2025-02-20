<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <?php include "connexion.php"?>
    <?php include "header_admin.php" ?>
</head>
<body> 
    <div class="nar">

            <h1>inserez employes</h1>
<form class="nav1" action="affichage_employes.php" method="POST" >
  <div class="form-group">

    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="prenom" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="pname">
  </div>

  <div>
     <label for="poste">Poste</label>
    <input type="text" name="poste" class="form-control" id="exampleInputPassword1" placeholder="post">
  </div>

  <div>
     <label for="salaire">Salaire</label>
    <input type="int" name="salaire" class="form-control" id="exampleInputPassword1" placeholder="sal">
      </div>
    <div class="etste12">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">send</button>
    </div>
  </form>
</body>
</html>