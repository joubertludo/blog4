<?php

if ($_POST['usr']=='' || $_POST['mdp']=='') {
   $message='Veuillez remplir tous les champs.';
   require ('inc/modal.php');
}else{
$post=connect_user($bdd,$_POST['usr'], $_POST['mdp']);
	
if ($post){echo'ok';
$_SESSION['id']=$post['id'];
$_SESSION['usr']=$post['email'];
$_SESSION['firstname']=$post['firstname'];
$_SESSION['lastname']=$post['lastname'];
$_SESSION['level']=$post['level'];
header('Location: index.php');

}
   else{
    $message = 'Mot de passe ou identifiant incorrect';

}
}

?>