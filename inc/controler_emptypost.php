<?php
if (isset($_SESSION['id'])){
$list_categories=list_categories($bdd);
$list_authors=list_authors($bdd);
require 'views/emptypost.php';}
echo 'Vous ne passerez pas !';
?>