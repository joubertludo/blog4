<?php $json=file_get_contents('data/articles.json');
$articles=json_decode($json);

if (isset($_GET['action']) && $_GET['action']=='delete') {
    $delete=delete_post($bdd);
    echo("
   <script>
   alert('Vous avez supprimé ce post')
   </script>");
}

function search_all_posts($bdd){
    $reponse = $bdd->prepare('SELECT P.id,title,A.firstname,P.updated_date,P.content,P.file from posts as P INNER JOIN authors as A ON P.id_aut=A.id INNER JOIN categories as C ON P.id_cat=C.id');
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
  $reponse=$bdd->prepare('SELECT P.id,P.title,A.firstname,P.updated_date,P.content,P.file,C.name from posts as P INNER JOIN authors as A ON P.id_aut=A.id INNER JOIN categories as C ON P.id_cat=C.id where P.id=?' );
  $reponse->execute(array($id));
$post=$reponse->fetch();
    $reponse->closeCursor();
    return $post;
}
function connect_user($bdd,$usr,$mdp){
  $reponse=$bdd->prepare('SELECT A.id,A.firstname,A.lastname,A.email from authors as A where A.email=? and A.password=?');
   $reponse->execute(array($usr,MD5($mdp)));
$post=$reponse->fetch();
    $reponse->closeCursor();
    return $post;
}
function delete_post($bdd){
    $id=$_GET['id'];
    $reponse=$bdd->prepare('DELETE from posts where id=?');
    $reponse->execute(array($id));
   
}
?>

