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

            <h1>inserez reservation</h1>
<form class="nav2" action="affichage_reservation.php" method="POST">
  <div class="form-group">

  <div class="form-group">
    <label for="montant">id_service</label>
    <input type="text" name="id_service" class="form-control" id="exampleInputPassword1" placeholder="mont">
        </div>

        <div>
     <label for="mode_paiement">date_reservation</label>
    <input type="text" name="date_reservation" class="form-control" id="exampleInputPassword1" placeholder="mode_paiement">
    </div>
    <div>
     <label for="date_paiement">Heure_reservation</label>
    <input type="text" name="heure_reservation" class="form-control" id="exampleInputPassword1" placeholder="dat_py">
        </div>
    <div class="e12">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">send</button>

    </div>
</div>
</form>
</body>
</html>