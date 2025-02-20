<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <?php include "connexion.php";
      $affichageclient = $bdd->query("select * from client where id_client=".$_GET['Mod']);
      $dataRecup = $affichageclient->fetch();
    ?>
    <?php include "header_admin.php" ?>
</head>
<body> 
    <div class="nar">

            <h1>Modifier client</h1>
<form class="nav1" action="" method="POST">
  <div class="form-group">

     
    <label for="nom">nom</label>
    <input type="text" name="nom" value="<?php echo $dataRecup["nom"]; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="prenom">prenom</label>
    <input type="prenom" name="prenom" value="<?php echo $dataRecup["prenom"]; ?>"class="form-control" id="exampleInputPassword1" placeholder="pname">

     <label for="email">email</label>
    <input type="email" name="email"  value="<?php echo $dataRecup["email"]; ?>" class="form-control" id="exampleInputPassword1" placeholder="email">

     <label for="telephone">Telephone</label>
    <input type="int" name="telephone" value="<?php echo $dataRecup["telephone"]; ?>" class="form-control" id="exampleInputPassword1" placeholder="Tel">

    <div class="etste12">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">Modifier</button>

    </div>
</div>
</form>
    <?php
            if(isset($_POST["send"])){
                $recupNom = $_POST["nom"];
                $recupPrenom = $_POST["prenom"];
                $recupTel = $_POST["telephone"];
                $recupMail = $_POST["email"];
    
                $modifCont = "update client set nom='$recupNom',prenom='$recupPrenom',email='$recupMail',telephone='$recupTel'where id_client=".$_GET['Mod']; 

                $bdd->exec($modifCont);
            
               header("location: affichage_client.php");

            }
        ?>


</body>
</html>