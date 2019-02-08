<?php

unset($_SESSION['id']);
unset($_SESSION['usr']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
session_destroy();
$message ='Merci de votre visite';
require 'inc/nav.php';
require 'inc/controler_blog.php';

?>