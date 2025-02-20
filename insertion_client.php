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

            <h1>inserez client</h1>
<form class="nav1" action="affichage_client.php" method="POST">
  <div class="form-group">

     
    <label for="nom">nom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="prenom">prenom</label>
    <input type="prenom" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="pname">
  </div>

    <div>
     <label for="email">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
  </div>

    <div>
         <label for="telephone">Telephone</label>
    <input type="int" name="telephone" class="form-control" id="exampleInputPassword1" placeholder="Tel">
  </div>
    <div class="etste12">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">send</button>

    </div>
  </form>
</body>
</html>