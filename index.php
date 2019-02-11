<?php
session_start();
require('model/connection.php');
require('model/functions.php');
require('inc/head.php');
require('inc/nav.php');
require('inc/header.php');

if(isset($_GET['stopsession']) && $_GET['stopsession']=='yes'){
	 require 'inc/controler_disconnect.php';
}


if(isset($_GET['page'])){
	switch ($_GET['page']) {
		case 'article':
			require 'inc/controler_article.php';
        	break;
		case 'editorform':
			require 'inc/controler_editorform.php';
			break;
		case 'userform':
			require 'inc/controler_userform.php';
			break;
		case 'emptypost':
			require 'inc/controler_emptypost.php';
			break;
		case'signinform':
			require 'inc/controler_forminsertuser.php';
			break;
		case'admin':
			require 'inc/controler_admin.php';
			break;
		default:
			require 'inc/controler_blog.php';			
			break;
	}
	
}

else{ if (isset($_GET['action']))
	{
	if ($_GET['action']=='delete') {
	
		require 'inc/controler_delete_post.php';   
	}
	
	if ($_GET['action']=='connect'){
		require 'inc/controler_connect.php';
	}
	
	if($_GET['action']=='newuser'){
		require 'inc/controler_insertuser.php';
	}
	
	if($_GET['action']=='insertpost'){
		require 'inc/controler_insertpost.php';
	}
	
	if($_GET['action']=='updatepost'){
		require 'inc/controler_updatepost.php';
	}
	}else{
	require 'inc/controler_blog.php';	
	$message = '';}
	}

require('inc/footer.php');
?>