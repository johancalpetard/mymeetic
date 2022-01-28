<?php
session_start();
?>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">My_Meetic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
if(@!$_SESSION['user_log']){
  ?>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a value="inscription" name="inscription"class="nav-link" href="register.php">Inscription</a>
      </li>
     
  </div>
  <?php
    
}else{
    ?> 
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="search.php">Recherche ton Ame Soeur <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Mes match <span class="sr-only">(current)</span></a>
      </li>
      </ul>
      
     
  </div>
    <button class="btn btn-danger" onclick="deconnexion()">Deconnexion</button>
    <?php
}
?>
  
</nav>
</header>
