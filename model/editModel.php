<?php

include "../bdd.php";
include "user_info.php";
session_start();

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$date = $_POST['date'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];
$password = $_POST['password'];




if(isset($_POST['editbtn'])){

    $query = "UPDATE users SET nom='$nom',prenom='$prenom',email='$email',date='$date',genre='$genre',ville='$ville',password='$password' WHERE id='$id';";
    
    $bdd->exec($query);
    
          
    

}else{
    $status = "<div class='alert alert-danger' style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
    
}

header('location: http://localhost:8000/index.php');
exit;

?>