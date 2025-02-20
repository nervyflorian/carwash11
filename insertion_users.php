<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <?php include "connexion.php" ?>
    <?php include "Accueil.php" ?>
</head>
<body>
    <br><br>
    <section id="comment-form">
        <h1> Ajout d'un utilisateur </h1>
        <form  action="affichage_users.php" method="POST">
  <div class="form-group">

     
    <label for="nom">users_name</label>
    <input type="text" name="users_name" id="users_name" required pattern="^[a-zA-Z0-9_]{3,20}$">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="pswd">Mot de passe</label>
    <input type="password" name="pswd" id="pswd" required>

    <div class="etste12">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">send</button>

    </div>
 
        <?php
            if(isset($_POST["valider"])){
                $recupusers_name = $_POST["users_name"];
                $recupPswd = $_POST["pswd"];
    
                $insertuser = "insert into users(users_name,PASSWORD) values('$recupusers_name','$recupPswd')";

                $bdd->exec($insertuser); 
            

            }
        ?>
    </section>
</body>
</html>