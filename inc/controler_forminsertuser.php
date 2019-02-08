<?php
if (isset($_SESSION['id']) && $_SESSION['level']==1){
require'views/signinform.php';

}else {
    echo "<p class='text-white'>Vous n'avez rien à faire ici ! Passez votre chemin mécréant !</p>";
}
?>