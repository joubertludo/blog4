<?php
require('model/connection.php');
require('model/functions.php');
require('inc/head.php');
require('inc/nav.php');
require('inc/header.php');
if(isset($_GET['page'])){
	switch ($_GET['page']) {
		case 'article':
			require 'views/article.php';
			break;
		case 'editorform':
			
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