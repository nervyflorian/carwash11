<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <?php 
        include "Connexion.php" ;
        $affichageuser = $bdd->query("Select * from users");
    ?>

    <?php
        if(isset($_GET["sup"])){
            $suppressionuser = $bdd->query("delete from users where id_users=".$_GET['sup']);
            
        }
    ?>

    <?php include "Accueil.php" ?>
</head>
<body> 
    <br><br>
    <div class="container">
    
        <h1>User</h1>
        <table border="1px" cellpadding="5px">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php 
                while ( $dataRecup = $affichageuser->fetch()) {         
            ?>
                <tr>
                    <td ><?php echo $dataRecup["users_name"]; ?></td>
                    <td><?php echo md5($dataRecup["PASSWORD"]); ?></td>
                    <td><a href="affichage_users.php?sup=<?php echo $dataRecup["id_users"]; ?>">Supprimer</a></td>
                    <td><a href="modif_users.php?mod=<?php echo $dataRecup["id_users"]; ?>">Modifier</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>