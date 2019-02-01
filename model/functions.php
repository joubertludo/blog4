<?php

function search_all_posts($bdd){
    $reponse = $bdd->prepare('SELECT P.id,P.title,A.firstname,P.updated_date,P.content,P.file from posts as P INNER JOIN authors as A ON P.id_aut=A.id INNER JOIN categories as C ON P.id_cat=C.id');
    $reponse->execute();
    $list_post = array();
    while ($post = $reponse->fetch()) {
     
        $list_post[] = $post;
    }
    $reponse->closeCursor();
    return $list_post;
}
// as A INNER JOIN authors as P ON A.id_aut=P.id
// INNER JOIN categories as C ON A.id_cat=C.id
function one_post($bdd,$id)
{
  $reponse=$bdd->prepare('SELECT  P.id,P.title,A.firstname,P.updated_date,P.content,P.file,C.name from posts as P INNER JOIN authors as A ON P.id_aut=A.id INNER JOIN categories as C ON P.id_cat=C.id where P.id=?' );
  $reponse->execute(array($id));
$post=$reponse->fetch();
    $reponse->closeCursor();
    return $post;
}
function edit_post($bdd,$id)
{
  $reponse=$bdd->prepare('SELECT P.id,P.id_cat,P.id_aut,P.title,A.firstname,P.updated_date,P.content,P.file,C.name from posts as P INNER JOIN authors as A ON P.id_aut=A.id INNER JOIN categories as C ON P.id_cat=C.id where P.id=?' );
  $reponse->execute(array($id));
$post=$reponse->fetch();
    $reponse->closeCursor();
    return $post;
}
function connect_user($bdd,$usr,$mdp){
  $reponse=$bdd->prepare('SELECT A.id,A.firstname,A.lastname,A.email,A.level from authors as A where A.email=? and A.password=?');
   $reponse->execute(array($usr,MD5($mdp)));
    $post=$reponse->fetch();
    $reponse->closeCursor();
    return $post;
}
function delete_post($bdd,$id){
    $reponse=$bdd->prepare('DELETE from posts where id=?');
    $reponse->execute(array($id));
   
}
function new_post($bdd,$title,$content,$file){
    $new_name=md5(basename($file['name']. time()));
    $extension1=explode('.',$file['name']);
    $extension=end($extension1);
    move_uploaded_file($file['tmp_name'], 'img/repimg/'.$new_name.'.'.$extension);
    $reponse=$bdd->prepare('INSERT INTO `posts` (`title`, `content`,`file`,`id_aut`,`id_cat`) VALUES (?,?,?,?,?)');
    $reponse->execute(array(utf8_decode($title),utf8_decode($content),$new_name.'.'.$extension,$_POST['nameaut'],$_POST['namecat']));
}
function modif_post($bdd,$title,$content,$file,$id){
    $new_name=md5(basename($file['name']. time()));
    $extension1=explode('.',$file['name']);
    $extension=end($extension1);
    move_uploaded_file($file['tmp_name'], 'img/repimg/'.$new_name.'.'.$extension);
    $reponse=$bdd->prepare('UPDATE `posts` set title=?, content=?,file=?,id_aut=?, id_cat=? where posts.id=?');
    $reponse->execute(array(utf8_decode($title),utf8_decode($content),$new_name.'.'.$extension,$_POST['modifnameaut'],$_POST['modifnamecat'],$id));
}
function list_categories($bdd){
  $reponse=$bdd->prepare('SELECT * from categories');
  $reponse->execute();
  $list_categories=array();
while ($categorie = $reponse->fetch()) {
     
        $list_categories[] = $categorie;
    }
    $reponse->closeCursor();
    return $list_categories;
}
function list_authors($bdd){
  $reponse=$bdd->prepare('SELECT id,firstname from authors');
  $reponse->execute();
  $list_authors=array();
while ($author = $reponse->fetch()) {
     
        $list_authors[] = $author;
    }
    $reponse->closeCursor();
    return $list_authors;
}


