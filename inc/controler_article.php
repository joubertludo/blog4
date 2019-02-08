<?php

if (isset($_GET['id'])){
$post=one_post($bdd,$_GET["id"]);
require 'views/article.php';}
else{
    $message = "Erreur lors de l'affichage de l'article.";
    require 'inc/controler_blog.php';
}
?>