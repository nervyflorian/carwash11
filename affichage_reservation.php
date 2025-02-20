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
                $recupid_service = $_POST["id_service"];
                $recupdatr = $_POST["date_reservation"];
                $recupres= $_POST["heure_reservation"];

                $insertCont = "insert into reservation(id_service,date_reservation,heure_reservation) values('$recupid_service','$recupdatr','$recupres')";

                $bdd->exec($insertCont);

                 header("location:affichage_reservation.php");

            }
        ?>


	 <?php include "header_admin.php" ; 
	 		 $affichagereservation = $bdd->query("select * from reservation");
	 ?>


</head>
<body>
		<h1>reservation</h1>
		<table border="1">
			<tr>
				
				<th>service</th>
				<th>date_reservation</th>
				<th>Heure_reservation</th>
				
				
			</tr>
			<?php 
                while ( $dataRecup = $affichagereservation->fetch()) {         
            ?>
                <tr>
                  
                   
                    <td ><?php echo $dataRecup["id_service"];?></td>
                    <td ><?php echo $dataRecup["date_reservation"];?></td>
                    <td><?php echo $dataRecup["heure_reservation"];?></td>
                    


                   
                </tr>
            <?php } ?>
		</table>
</body>
</html>