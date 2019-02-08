<?php
require('model/functions_secure.php');
$id=$_GET['id'];
$secure=delete_secure($bdd,$id);
// var_dump($secure['id_aut']);
// var_dump($_SESSION['id']);
if ($_SESSION['level']==1) {
    $delete=delete_post($bdd,$_GET['id']);
    echo(" <script>alert('Vous avez supprimé ce post')</script>");
}else if ($_SESSION['level']>1 && $_SESSION['id']==$_GET['auteur'] &&  $_SESSION['id']==$secure['id_aut']) {
    $delete=delete_post($bdd,$_GET['id']);
    echo(" <script>alert('Vous avez supprimé ce post')</script>");
}else {
   $message = "Bien tenté mais vous n'êtes pas autorisé à supprimer ce message !";
}
 
?>