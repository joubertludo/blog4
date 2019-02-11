<?php
if (isset($_SESSION['id'])){

	$title=$_POST['formtitre'];
    $content=$_POST['formcontent'];
    
    if ($title != '' && $content != '') {
        if ($file=$_FILES['uploadfile']['name']=='') {
            $file='default/image.jpg';
            $create=new_post2($bdd,$title,$content,$file);
            require 'inc/controler_blog.php';	
            }else{
            $file=$_FILES['uploadfile'];
            $create=new_post($bdd,$title,$content,$file);
            require 'inc/controler_blog.php';	
            }
    }else{
    $message ='veuillez remplir les champs.';
    require 'inc/controler_emptypost.php';}
	

}else{
$message = 'Vous devez être connecté.';
}
    
?>