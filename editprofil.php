
<?php
session_start();
if(isset($_SESSION['Email']))
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
    

</style>
<body>
<center>
    <h1>PROFILE</h1>
       <div>
       <form action="profile.php"  method="POST">
      <table border >
     
     <tr>
              <td>Ajouter une photo: </td>
              <td><input type="file" name="image" ></td>
          </tr>
         <tr>
              <td>Nom: </td>
              <td><input type="text" name="newnom" ></td>
          </tr>
          <tr>
              <td>Prénom: </td>
              <td><input type="text" name="newprenom" ></td>
          </tr>
          <tr>
              <td>Email: </td>
              <td><input type="text" name="newEmail" ></td>
          </tr>
          <tr>
              <td>Cne: </td>
              <td><input type="text" name="newcne" ></td>
          </tr>
          <tr>
              <td>Mot de passe: </td>
              <td><input type="password" name="newpassword" ></td>
          </tr>

      </table>
      <input type="submit" name=edit value="validé" >
    </form>
      </div>
      
      </center>

</body>
</html>
