<?php $json=file_get_contents('data/articles.json');
$articles=json_decode($json);

if (isset($_GET['action']) && $_GET['action']=='delete') {
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
  $reponse=$bdd->prepare('SELECT  P.id,title,A.firstname,P.updated_date,P.content,P.file,C.name from posts as P INNER JOIN authors as A ON P.id_aut=A.id INNER JOIN categories as C ON P.id_cat=C.id' );
  $reponse->execute(array($id));
$post=$reponse->fetch();
    $reponse->closeCursor();
    return $post;
}
?>

