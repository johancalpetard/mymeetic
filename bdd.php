<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=kevin_tbl;charset=utf8', 'root', 'root');
} catch (Exception $e)  {
    echo " Erreur de connection a la base de donnée" . $e->getMessage();
}
?>