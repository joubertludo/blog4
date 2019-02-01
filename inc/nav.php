<nav class=" navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
               
                    <?php
                    if(isset($_SESSION['id']))
                    {
                echo" <li class='nav-item'>
                
                    <a class='nav-link' href='index.php?stopsession=yes'>Se déconnecter</a>
                    </li>";
                    echo" <li class='nav-item'>
                        <a class='nav-link' href='index.php?page=emptypost'>Ajouter un article</a>
                        </li>";
                          echo" <li class='nav-item'>
                       <p class='nav-link'>Bonjour, ".$_SESSION['firstname']."</p>
                        </li>";
                        


                    }else{
                        echo"<li class='nav-item'>
                    <a class='nav-link hand'  data-toggle='modal' data-target='#exampleModalCenter'>Se connecter</a>
                </li>";
                echo" <li class='nav-item'>
                        <a class='nav-link' href='index.php?page=signinform'>Créer un utilisateur</a>
                        </li>";
      
                    }
                    ?>

               
                <!-- <li class="nav-item">
                    <a id="" class="nav-link" href="index.php?page=article">article</a>
                </li>
                 <li class="nav-item">
                    <a id="" class="nav-link" href="index.php?page=editorform">article</a>
                </li>
                 <li class="nav-item">
                    <a id="" class="nav-link" href="index.php?page=userform">article</a>
                </li>
                 <li class="nav-item">
                    <a id="" class="nav-link" href="index.php?page=blog">article</a>
                </li> -->
            </ul>
        </div>
        
</nav>
