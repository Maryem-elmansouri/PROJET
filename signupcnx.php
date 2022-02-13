<?php
session_start();


if(isset($_POST['signup'])){
  $cne=$_POST['cne'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $Email=$_POST['Email'];
  $password=$_POST['password'];
  
  
      $conn=mysqli_connect('localhost','root','','ensat');
      if(!$conn){
          echo" erreur de connexion!";
      }
     
          // la requete de insertion
         
       $req="INSERT INTO eleves(cne,nom,prénom,Email,password) VALUES('$cne','$nom','$prenom','$Email','$password')";
      $result=( mysqli_query($conn,$req));
          if($result){
           // metre les variables en session
           $_SESSION['cne']=$_POST['cne'];
           $_SESSION['nom']=$_POST['nom'];
           $_SESSION['prenom']=$_POST['prenom'];
           $_SESSION['Email']=$_POST['Email'];
           $_SESSION['password']=$_POST['password'];

              echo "inscription réussite!";
              header('location:login.php');
          } else {echo " erreur d'inscription!".mysqli_error();
           
  }

  }
  ?>
