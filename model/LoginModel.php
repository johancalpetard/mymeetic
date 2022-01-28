<?php

include "../bdd.php";
include "user_info.php";

if(isset($_POST['email']) && isset($_POST['password'])){

    $query = "SELECT * FROM users WHERE email='".$_POST['email']."'";
    $result= [];

    foreach($bdd->query($query) as $key => $value){
        $result = $value;
    }

    if(($result['email']==$_POST['email']) && ($result['password']==$_POST['password'])){
        session_start();
        $_SESSION['user'] = $result;
        $_SESSION["user_log"] = new user_meetic($id=$_SESSION['user']["id"],$name=$_SESSION['user']["nom"], $firstname=$_SESSION['user']["prenom"],$email=$_SESSION['user']["email"],$date=$_SESSION['user']["date"], $genre=$_SESSION['user']["genre"],$location=$_SESSION['user']["ville"] ,   $loisir=["manger", "dormir", "coder"]);
        

        
    }
    

}

header('location: http://localhost:8000/index.php');
exit;
?>