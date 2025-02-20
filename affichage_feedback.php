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

	
	 <?php include "connexion.php";

	 	?>

        <?php
            if(isset($_POST["send"])){
                $recupid_client = $_POST["id_client"];
                $recupmont = $_POST["commentaire"];
                $recupmode_paiement = $_POST["note"];
                $recupdat_py= $_POST["date_feedback"];

                $insertCont = "insert into feedback(id_client,commentaire,note,date_feedback) values('$recupid_client','$recupmont','$recupmode_paiement','$recupdat_py')";

                $bdd->exec($insertCont);

                 header("location:affichage_feedback.php");

            }
        ?>
        	
	 <?php include "header_admin.php"; 

	 		 $affichagefeedback = $bdd->query("select * from feedback");
	
	 ?>


</head>
<body>
		<h1>Affichage</h1>
		<table border="1">
			<tr>
				<th>id_client</th>
				<th>commentaire</th>
				<th>note</th>
				<th>date_feedback</th>
				
				
			</tr>
			<?php 
                while ( $dataRecup = $affichagepayment->fetch()) {         
            ?>
                <tr>
                  
                    <td ><?php echo $dataRecup["id_client"]; ?></td>
                    <td ><?php echo $dataRecup["commentaire"]; ?></td>
                    <td><?php echo $dataRecup["note"]; ?></td>
                    <td><?php echo $dataRecup["date_feedback"]; ?></td>
                    


                   
                </tr>
            <?php } ?>
		</table>
</body>
</html>