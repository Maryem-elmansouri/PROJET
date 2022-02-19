<?php
session_start();

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
    
   
    $sql = "UPDATE eleves SET image='$profileimage',cne='$newcne' ,nom=' $newnom',prénom='$newprenom', Email= '$newEmail' , password= '$newpassword' WHERE Email='".$_SESSION['Email']."'";
    $result=mysqli_query($conn,$sql);
    if ($result) {
      
     $_SESSION['cne'] =$newcne;
     $_SESSION['nom'] =$newnom;
     $_SESSION['prenom'] =$newprenom;
     $_SESSION['Email'] =$newEmail;
     $_SESSION['password'] =$newpassword;
     
      if (is_uploaded_file($_FILES['photo']['tmp_name'])){

              @move_uploaded_file($_FILES['photo']['tmp_name'],$profileimage);
               echo "Profile updated successfully";
              } else {
                  echo "Error updating record: " . $conn->error;
                     }
     }                
    }
  $sel="SELECT*FROM eleves WHERE Email='".$_SESSION['Email']."'";
  $res=mysqli_query($conn,$sel);
  
  while($row=mysqli_fetch_array($res)){
    
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
  a{
color:white;
display:inline-block;
text-decoration:none;
display:inline-block;
color:#ffff;
border-right:1px solid #ffff;
padding-right:1vw;
padding-left:1vw
    }
  a:hover{
color: black;
text-decoration: none;
background-color: white;
border-radius:5px;
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
     <a href="liste.php" >Liste des étudiants</a>
     <a href="bienvenue.php">Retour </a>
     <a href="logout.php">Déconnexion</a><br>
     
 
              </center>

    </body>
     </html>
  <?php
   }   
?>
  <?php
   }   
?>
