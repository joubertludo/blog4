<?php  
	if (isset($_SESSION['id']) && $_SESSION['level']==1){
    
    $firstname=$_POST['fname'];
	$password=$_POST['mdp'];
	$lastname=$_POST['lname'];
    $email=$_POST['usremail'];
    
    if ($firstname == '' || $password == '' || $lastname == '' || $email == '') {
        $message2 = 'Veuillez remplir les champs du formulaire nouvel utilisateur.';
        require 'inc/controler_forminsertuser.php';
    }else{

    $existauthors=exist_authors($bdd,$email);
    
	if($existauthors['count(*)']=='0'){
	$createnewuser=new_authors($bdd,$firstname,$lastname,$email,$password);
    $message = 'Votre compte utilisateur a été créé, vous pouvez à présent vous connecter !';
    require 'inc/controler_blog.php';

	    }else{
            // $message = 'Le mail est déjà utilisé.';
            // require 'inc/controler_forminsertuser.php';
           
	    $_SESSION['unvalidemail']='true';
        header('location: newuser');

	    }
    }
}
?>