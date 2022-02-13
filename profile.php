<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <style>
      .all{
        border:solid 1px;
        width: 400px;
        margin:20px;
        padding:10px;
        background-color:#CDDBE0;
        border-radius: 13px;
      }
      img{
        border-radius: 100%;
      }
      body{
        background:linear-gradient(#08203e,#557c93);
        
      }
      h1{
        color:#ffff;
      }
    
    </style>
    <body>
    <center>
      <h1>PROFILE</h1>
    <div class=all>
      <div>
           <img src="<?php echo $row['image']; ?>"height="100px" width="100px"><hr>
      </div>
              CNE:
              <?=$_SESSION['cne']?><br><hr>
  
  
              NOM: 
              <?=$_SESSION['nom']?><br><hr>
  
              PRENOM: 
              <?=$_SESSION['prenom']?><br><hr>

              EMAIL: 
              <?=$_SESSION['Email']?><br><hr>
  
              MOT DE PASSE: 
              <?=$_SESSION['password']?><br><hr>
    </div>
         

     
     <a href="liste.php" >Liste des étudiants</a><br>
     <a href="logout.php">Déconnexion</a><br>
     <a href="bienvenue.php">retour</a>
 
              </center>

    </body>

    </html>
