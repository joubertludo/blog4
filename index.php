<?php
session_start();
require('model/connection.php');
require('model/functions.php');
require('inc/head.php');
require('inc/nav.php');
require('inc/header.php');

if (isset($_GET['action']) && $_GET['action']=='delete') {
    $delete=delete_post($bdd,$_GET['id']);
    echo("
   <script>
   alert('Vous avez supprimé ce post')
   </script>");
}
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



if(isset($_GET['formtitre']) && isset($_GET['formcontent'])){
	$title=$_GET['formtitre'];
$content=$_GET['formcontent'];
// $file=$_GET['formfile'];
$create=new_post($bdd,$title,$content);
}




if(isset($_GET['page'])){
	switch ($_GET['page']) {
		case 'article':

		$post=one_post($bdd,$_GET["id"]);
			require 'views/article.php';
			break;
		case 'editorform':
			$id=$_GET["id"];
			$edit=edit_post($bdd,$id);
			require 'views/editorform.php';
			break;
		case 'userform':
			require 'views/userform.php';
			break;
		case 'emptypost':
		$list_categories=list_categories($bdd);
		$list_authors=list_authors($bdd);
		require 'views/emptypost.php';
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