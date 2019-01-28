<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog12devs', 'root', '');
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}
?>