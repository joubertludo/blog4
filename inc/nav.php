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
                    <p class='nav-link'>Bonjour, ".$_SESSION['firstname']."</p>
                    </li>";
                    echo" <li class='nav-item'>
                    <a class='nav-link' href='newpost'>Ajouter un article</a>
                    </li>";                  
                        if ($_SESSION['level']=='1') {
                        echo" <li class='nav-item'>
                        <a class='nav-link' href='newuser'>Créer un utilisateur</a>
                        </li>";
                        echo" <li class='nav-item'>
                        <a class='nav-link' href='index.php?page=admin'>Admin</a>
                        </li>";
                        }
                        echo" <li class='nav-item'>
                        <a class='nav-link' href='index.php?stopsession=yes' title='Se déconnecter'><i class='fas fa-user-times'></i></a>
                        </li>";   


                    }else{
                        echo"<li class='nav-item'>
                    <a class='nav-link hand'  data-toggle='modal' data-target='#exampleModalCenter' title='Se connecter'><i class='fas fa-user'></i></a>
                </li>";
               
      
                    }
                    ?>
<!-- <div class='dropdown'>
 <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
   Dropdown button
 </button>
 <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
   <a class='dropdown-item' href='#'>Action</a>
   <a class='dropdown-item' href='#'>Another action</a>
   <a class='dropdown-item' href='#'>Something else here</a>
 </div>
</div> -->
               
            </ul>
        </div>
        
</nav>
