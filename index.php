<?php
session_start();


require('model/connection.php');
require('model/functions.php');
require('inc/head.php');
require('inc/nav.php');
require('inc/header.php');
if (isset($_POST['usr']) && isset($_POST['mdp']) )

{
 $post=connect_user($bdd,$_POST['usr'], $_POST['mdp']);
	if ($post){echo'ok';
$_SESSION['id']=$post['id'];
$_SESSION['usr']=$post['email'];
$_SESSION['firstname']=$post['firstname'];
$_SESSION['lastname']=$post['lastname'];


}

	else{echo'mot de passe et identifiant incorrect';}



	// echo $_POST['usr'].' '.$_POST['mdp'];
}
// echo" merci de remplir les champs indiqués";
if(isset($_GET['stopsession']) && $_GET['stopsession']=='yes'){
	unset($_SESSION['id']);
	unset($_SESSION['usr']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
	session_destroy();


}
if(isset($_GET['page'])){
	switch ($_GET['page']) {
		case 'article':

		$post=one_post($bdd,$_GET["id"]);
			require 'views/article.php';
			break;
		case 'editorform':
			$edit=edit_post($bdd,$_GET["id"]);
			require 'views/editorform.php';
			break;
			case 'userform':
			
			require 'views/userform.php';
			break;
		default:
			$all_posts=search_all_posts($bdd);
			// var_dump($all_posts);
			require 'views/blog.php';
			break;
	}
	
}
else{
			$all_posts=search_all_posts($bdd);
			// var_dump($all_posts);
			require 'views/blog.php';
		
	}



require('inc/footer.php');
?>