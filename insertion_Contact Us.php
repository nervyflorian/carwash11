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

</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="image/viva.jpg" width="100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="header.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insertion_About.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="insertion_client.php">client</a>
          <a class="dropdown-item" href="insertion_payment.php">payment</a>
          <a class="dropdown-item" href="insertion_reservation.php">reservation</a>
          <a class="dropdown-item" href="insertion_employes.php">employes</a>
          <a class="dropdown-item" href="insertion_feedback.php">feedback</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insertion_Contact Us.php" tabindex="-1">Contact Us</a>
      </li>
    </ul>
</div>
</nav>

		  <div class="nar">

            <h1>Contact Us</h1>

            <p>
Pour toute demande de renseignements ou suggestions sur notre site, n'hésitez pas à nous contacter, nous vous répondrons dans les plus brefs délais. Remplissez notre formulaire de contact et précisez bien l'objet de votre demande ainsi que vos coordonnées complètes.</p>
<form  method="POST" action="affichage_Contact Us.php">
  <div class="form-group">

     
    <label for="Civilité">Civilité</label>
    <select name="Civilité" id="Civilité"> 
    	<option value="Madame">Madame</option>
    	<option value="Monsieur">Monsieur</option>

    </select>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="montant">Nom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputPassword1" placeholder="name">
  </div>

  <div>
     <label for="mode_paiement">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="pname">
  </div>

  <div>
     <label for="date_paiement">Telephone</label>
    <input type="int" name="telephone" class="form-control" id="exampleInputPassword1" placeholder="Tel">
  </div>

  <div>
      <label for="date_paiement">Objet_de_votre_message</label>
    <input type="int" name="Objet_de_votre_message" class="form-control" id="exampleInputPassword1" placeholder="obdm">
      </div>

      <div>
      <label for="ameliorer" >Vos questions, suggestions ou commentaires</label>
    
      <br/>
        
      <textarea rows="10" cols="50" name="commantaire"></textarea>
    </div>
    <div class="e12"> 
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">send</button>

      </div>
    </form>
</body>
</html>