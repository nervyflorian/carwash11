<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <?php include "connexion.php" ?>
    <?php include "header_admin.php" ?>
</head>
<body> 
    <div class="nar">

            <h1>inserez payment</h1>
<form class="nav2" action="affichage_payment.php" method="POST">
  <div class="form-group">

     
    <label for="id_client">client</label>
    <select  name="id_client" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      <?php
    $affichage_client=$bdd->query("select * from client");
    while($dataclient=$affichage_client->fetch()){
 ?> 
 <option value="<?php echo $dataclient["id_client"]?>"> 

<?php echo $dataclient["nom"]."_".$dataclient["telephone"];?>
 </option>
<?php } ?>
</select>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="montant">montant</label>
    <input type="text" name="montant" class="form-control" id="exampleInputPassword1" placeholder="mont">

     <label for="mode_paiement">mode_paiement</label>
    <input type="text" name="mode_paiement" class="form-control" id="exampleInputPassword1" placeholder="mode_paiement">

     <label for="date_paiement">date_paiement</label>
    <input type="text" name="date_paiement" class="form-control" id="exampleInputPassword1" placeholder="dat_py">

    <div class="e12">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">send</button>

    </div>
</body>
</html>