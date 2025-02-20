<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style4.css">

 <?php include "connexion.php";

    
            
    ?>
    
    <?php
            if(isset($_POST["send"])){
                $recupNom = $_POST["nom"];
                $recupPrenom = $_POST["prenom"];
                $recupTel = $_POST["poste"];
                $recupobjet = $_POST["salaire"];
    
                $insertCont = "insert into employes(nom,prenom,poste,salaire) values('$recupNom','$recupPrenom','$recupTel','$recupobjet')";
                    
                    $bdd->exec($insertCont);

                        header("location:affichage_employes.php");
            }
        ?>


 ?>
 <?php include "header_admin.php";
$affichageemployes=  $bdd->query("select * from employes");
 ?> 

</head>
<body>


    <table border="1">
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>poste</th>
        <th>salaire</th>
        
        
        
      </tr>
               <?php 
                while ( $dataRecup = $affichageemployes->fetch()) {         
               ?>
                <tr>
                  
                    <td ><?php echo $dataRecup["nom"]; ?></td>
                    <td><?php echo $dataRecup["prenom"]; ?></td>
                    <td><?php echo $dataRecup["poste"]; ?></td>
                    <td><?php echo $dataRecup["salaire"]; ?></td>
                </tr>
            <?php } ?>

    </table>
        
    
</body>
</html>