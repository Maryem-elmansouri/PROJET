<?php
session_start();

// si l'utilisateur veut modifier son profile

if(isset($_POST['modifier'])){
  $conn=mysqli_connect('localhost','root','','ensat');
    if(!$conn){
        echo " erreur!".mysqli_error();
    }
    $db="SELECT*FROM eleves WHERE Email='".$_SESSION['Email']."'";
    if(mysqli_query($conn,$db)){
    $profileimage= $_FILES['photo']['name'];
    $newcne=$_POST['cne'];
    $newnom=$_POST['nom'];
    $newprenom=$_POST['prenom'];
    $newEmail=$_POST['Email'];
    $newpassword=$_POST['password'];
   
    $sql = "UPDATE eleves SET image='$profileimage', cne='$newcne',nom='$newnom',prénom='$newprenom ', Email='$newEmail' , password= '$newpassword' WHERE Email='".$_SESSION['Email']."'";
    $result=mysqli_query($conn,$sql);
    if ($result) {
      move_uploaded_file($_FILES['photo']['tmp_name'],$profileimage);
      echo "Profile updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }
  $sel="SELECT*FROM eleves WHERE Email='".$_SESSION['Email']."'";
  $res=mysqli_query($conn,$sel);
  
  while($row=mysqli_fetch_array($res)){
    header('location:profil.php');
    

    }
  }
  
