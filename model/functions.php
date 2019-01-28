<?php $json=file_get_contents('data/articles.json');
$articles=json_decode($json);

if (isset($_GET['action']) && $_GET['action']=='delete') {
   echo("
   <script>
   alert('Vous avez supprimé ce post')
   </script>");
}

function search_all_posts($bdd){
    $reponse = $bdd->prepare('SELECT * from posts as A INNER JOIN authors as P ON A.id_aut=P.id');
    $reponse->execute();
    $list_post = array();
    while ($post = $reponse->fetch()) {
     
        $list_post[] = $post;
    }
    $reponse->closeCursor();
    return $list_post;
}
// INNER JOIN categories as C ON A.id_cat=C.id
?>