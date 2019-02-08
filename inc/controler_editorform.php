<?php
	$list_categories=list_categories($bdd);
	$list_authors=list_authors($bdd);
	$id=$_GET["id"];
	$edit=edit_post($bdd,$id);
	require 'views/editorform.php';
?>