<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  table{
    border-collapse: collapse;
    width: 300px;
    margin-bottom: 10px;
  }
  td {
  font-family: sans-serif;
  border: thin solid #6495ed;
  width: 50%;
  padding: 5px;
  text-align: center;
  background-color:#CDDBE0;
  }
  a{
      color:white;
      display:inline-block;
      text-decoration:none;
    display:inline-block;
    color:#3b4350;
    border-right:1px solid #A3A3A3;
    padding-right:1vw;
      padding-left:1vw
  }
  a:hover{
      color: black;
      text-decoration: none;
      background-color: white;
      border-radius:5px;
  }
  
  input{
      height:20px;
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
  <h1>La liste des étudiants</h1>
  </center>
</body>
</html>


<?php
session_start();
//connexion a la base de donnes
$conne=mysqli_connect('localhost','root','');
if($conne){
    //selection de la base de donnees
    mysqli_select_db($conne,"ensat") ;
    $result=mysqli_query($conne,"SELECT * FROM eleves ORDER BY id");?>
     
     <center>
         <div>
     <table border>
     <tr>
       <td>cne</td>
       <td>nom</td>
       <td>prenom</td>
       <td>Email</td>
       <td>image</td>
      </tr>
    <?php
    foreach($result as $row){
    ?>
           <tr>
                
                <td><?php echo $row['cne'];?></td>
                <td><?php echo $row['nom'];?></td>
                <td><?php echo $row['prénom'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><img src="<?php echo $row['image']; ?>"height="50" width=""></td>
                
            </tr>
            <?php
                }
             ?>
    </table>
    <a href="signup.php">Ajouter un étudiant </a>
    <a href="signup.php">Supprimer un étudiant </a>
    <a href="login.php">Déconnexion</a> 
    
    </div>
    </center>


<?php
                }
             ?>
