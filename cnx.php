<?php
session_start();
if(isset($_POST['login'])){
  //connection au serveur
  
  $conn=mysqli_connect('localhost','root','','ensat')  ;

  if(!$conn){
      echo " :connection failed !".mysqli_connect_error();
  } 
  $_SESSION['Email']=$_POST['Email'];
  $_SESSION['password']=$_POST['password'];
 

$req="SELECT image,cne, nom, prénom, Email, password FROM eleves WHERE Email='". $_SESSION['Email']."' AND password = '".$_SESSION['password']."'";
$rslt= mysqli_query($conn, $req);

$tab = mysqli_fetch_assoc($rslt);

while($tab){

$_SESSION['cne']=$tab['cne'];
$_SESSION['nom']=$tab['nom'];
$_SESSION['prenom']=$tab['prénom'];

 header('Location:bienvenue.php');

}echo "login ou mot de pass incorrect! ";
  

}

?>



  
