<?php  
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=UTF-8');
// require('../model/connection.php');
// require('../model/functions.php');


try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog12devs', 'root', '');
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}


function search_all_posts($bdd){
    $reponse = $bdd->prepare('SELECT P.id,P.title,A.lastname,A.firstname,P.updated_date,P.content,P.file,P.id_aut from posts as P INNER JOIN authors as A ON P.id_aut=A.id INNER JOIN categories as C ON P.id_cat=C.id');
    $reponse->execute();
    $list_post = array();
    $one_post =array();
    while ($post = $reponse->fetch()) {
        $one_post = ['id' => $post['id'], 
        'title' => utf8_encode($post['title']), 
        'content' => utf8_encode($post['content']), 
        // 'id_cat' => $post['id_cat'],
        'id_aut' => $post['id_aut'],
        // 'created_date' => $post['created_date'],
        'updated_date' => $post['updated_date'],
        'file' => $post['file'],
        'firstname' => utf8_encode($post['firstname']),
        // 'name' => utf8_encode($post['name']),
        'lastname' => utf8_encode($post['lastname'])];
        $list_post[] = $one_post;
    }
    $reponse->closeCursor();
    return $list_post;
};


$all_posts=search_all_posts($bdd);
// var_dump ($all_posts);

$myJSON = json_encode($all_posts);
echo $myJSON;




?>