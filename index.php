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
$_SESSION['level']=$post['level'];
header('Location: index.php');

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
	header('Location: index.php');

}
if(isset($_POST['fname']) && isset($_POST['mdp'])){
	$firstname=$_POST['fname'];
	$password=$_POST['mdp'];
	$lastname=$_POST['lname'];
	$email=$_POST['usremail'];
	$existauthors=exist_authors($bdd,$email);


	if($existauthors['count(*)']=='0'){
	$createnewuser=new_authors($bdd,$firstname,$lastname,$email,$password);
	echo "<p class='text-success'>Votre compte utilisateur a été créé, vous pouvez à présent vous connecter !</p>";

	}else{
	$_SESSION['unvalidemail']='true';
	header('location: newuser');
	
}

}


if(isset($_POST['formtitre']) && isset($_POST['formcontent'])){
	$title=$_POST['formtitre'];
	$content=$_POST['formcontent'];
	$file=$_FILES['uploadfile'];
$create=new_post($bdd,$title,$content,$file);
}

if(isset($_POST['formtitremodif']) && isset($_POST['formcontentmodif'])){
$title=$_POST['formtitremodif'];
$content=$_POST['formcontentmodif'];
$file=$_FILES['uploadfile'];
$id=$_POST['id'];
// $file=$_GET['formfile'];
$modif=modif_post($bdd,$title,$content,$file,$id);
var_dump($_FILES['uploadfile']['name']);
echo($_POST['oldfile']);
if($_FILES['uploadfile']['name'] != ''){
    unlink('img/repimg/'.$_POST['oldfile']);
}
}

if(isset($_GET['page'])){
	switch ($_GET['page']) {
		case 'article':

		$post=one_post($bdd,$_GET["id"]);
			require 'views/article.php';
			break;
		case 'editorform':
			$list_categories=list_categories($bdd);
			$list_authors=list_authors($bdd);
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
			case'signinform':

			$new_aut=new_authors($bdd,$firstname,$lastname,$email,$password);
			require'views/signinform.php';
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