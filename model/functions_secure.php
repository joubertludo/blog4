<?php

function delete_secure($bdd,$id){
    $reponse=$bdd->prepare('SELECT id_aut FROM `posts` WHERE id=? ');
     $reponse->execute(array($id));
      $post=$reponse->fetch();
      $reponse->closeCursor();
      return $post;
  }

?>