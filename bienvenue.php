<?php
// On appelle la session
session_start();
if(isset($_SESSION['Email'])){
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=
    <title></title>
</head>
<style>
    table{
  border-collapse: collapse;
  width: 500px;
  margin-bottom: 20px;
}
.t1{
  table-layout: fixed;
}
td{
  border: 1px solid black;
  padding: 10px;
}
div{
    border:solid 1px;
        width: 500px;
        margin:10px;
        padding:10px;
        background-color:#CDDBE0;
        border-radius: 13px;
}
.submit{
    color:#08203e;
}
input{
    width: 100%;
  padding: 8px 10px;
  
  box-sizing: border-box;
}
body{
    background:linear-gradient(#08203e,#557c93);
}
h1{
    color:#ffff;
}
h2{
    color:#ffff;
}
.top{
    width: 10%;
  padding: 5px 1px;
  
  box-sizing: border-box;  
}
</style>
<body>
    <center>
    <h1>Bienvenue..</h1>
    <h2>Vous pouvez ajouter une photo ou modifier vos informations</h2>
       <div>
           <form action="editcnx.php" method="POST" enctype="multipart/form-data">
      <table class=t1 >
      <tr>
              <td>Ajouter une photo: </td>
              <td><input type="file" name="photo" id="photo" value="ajouter photo" ></td>
          </tr>
          
          <tr>
              <td>Cne: </td>
              <td><input type="text" name="cne" value="<?=$_SESSION['cne']?>"></td>
          </tr>
          <tr>
              <td>Nom: </td>
              <td><input type="text" name="nom" value="<?=$_SESSION['nom']?>"></td>
          </tr>
          <tr>
              <td>Prénom: </td>
              <td><input type="text" name="prenom" value="<?=$_SESSION['prenom']?>"></td>
          </tr>
          <tr>
              <td>Email: </td>
              <td><input type="text" name="Email" value="<?=$_SESSION['Email']?>"></td>
          </tr>
          <tr>
              <td>Mot de passe: </td>
              <td><input type="password" name="password" value="<?=$_SESSION['password']?>"></td>
          </tr>
          
      </table>
      <input id="btn" type="submit" name="modifier" value="modifier le profile">
      </form>
      </div>
      
      </center>

      vous trouverez votre page <a href="profil.php">Profile</a> ici <br>
<a href="logout.php">Déconnexion</a></li>

</body>

</html>
<?php
}
?>
