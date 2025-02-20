<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <?php include "connexion.php"?>
    <?php include "header_admin.php" ?>
</head>
<body> 
    <div class="nar">

            <h1>inserez feedback</h1>
<form class="" action="affichage_feedback.php" method="POST">
  <div class="form-group">

     
    <label for="id_client">id_client</label>
    <input type="text" name="id_client" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter id">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="commantaire">commentaire</label>
    <br>
     <textarea rows="10" cols="50" name="commentaire"></textarea>
   </div>

   <div>
     <label for="note">note</label>
    <input type="text" name="note" class="form-control" id="exampleInputPassword1" placeholder="note">
      </div>

      <div>
     <label for="feedback">date_feedback</label>
    <input type="text" name="date_feedback" class="form-control" id="exampleInputPassword1" placeholder="date_Tel">
      </div>

    <div class="etste12">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="send">send</button>
    </div>

  </form>
</body>
</html>