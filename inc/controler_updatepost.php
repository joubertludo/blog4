<?php
if (isset($_SESSION['id'])){
$title=$_POST['formtitremodif'];
$content=$_POST['formcontentmodif'];
$id=$_POST['id'];

if ($_FILES['uploadfile']['name']==''){
	$file=$_POST['oldfile'];
	$modif=modif_post2($bdd,$title,$content,$file,$id);
}else{
	$file=$_FILES['uploadfile'];
	$modif=modif_post($bdd,$title,$content,$file,$id);
	if ($file!='default/image.jpg') {
		unlink('img/repimg/'.$_POST['oldfile']);
	}
}}
?>