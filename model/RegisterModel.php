<?php

include "../bdd.php";


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$date = $_POST['date'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];
$password = $_POST['password'];




if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['genre']) && isset($_POST['ville']) && isset($_POST['password'])){

    $query = "INSERT INTO users (prenom, nom, email, date, genre, password, ville) VALUES ( '$prenom', '$nom', '$email', '$date', '$genre', '$password', '$ville')";
    $bdd->query($query);
    
          
    

}else{
    $status = "<div class='alert alert-danger' style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
    
}
var_dump($nom);
header('location: http://localhost:8000/index.php');

?>