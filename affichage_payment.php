<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Affichage1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style4.css">

	
	 <?php include "connexion.php";  ?>

	 	
        <?php
            if(isset($_POST["send"])){
                $recupid_client = $_POST["id_client"];
                $recupmont = $_POST["montant"];
                $recupmode_paiement = $_POST["mode_paiement"];
                $recupdat_py= $_POST["date_paiement"];

                $insertCont = "insert into payment(id_client,montant,mode_paiement,date_paiement) values($recupid_client,$recupmont,'$recupmode_paiement','$recupdat_py')";
                $bdd->exec($insertCont);

                 header("location:affichage_payment.php");

            }
        ?>


	 <?php include "header_admin.php" ; 

	 		 $affichagepayment = $bdd->query("select * from payment as pay join client as cl on pay.id_client=cl.id_client");
	 // $dataRecup = $affichagepayment->fetch(); //recuperation des donnees de la bd
	
	 ?>


</head>
<body>
		<h1>Payment</h1>
		<table border="1">
			<tr>
				<th>Nom client</th>
				<th>Telephone client</th>
				<th>montant</th>
				<th>mode_paiement</th>
				<th>date_paiement</th>
				
				
			</tr>
			<?php 
                while ( $dataRecup = $affichagepayment->fetch()) {         
            ?>
                <tr>
                  
                    <td ><?php echo $dataRecup["nom"]; ?></td>
                    <td ><?php echo $dataRecup["telephone"]; ?></td>
                    <td><?php echo $dataRecup["montant"]; ?></td>
                    <td ><?php echo $dataRecup["mode_paiement"]; ?></td>
                    <td><?php echo $dataRecup["date_paiement"]; ?></td>
                    


                   
                </tr>
            <?php } ?>
		</table>
</body>
</html>