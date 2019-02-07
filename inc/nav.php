<nav style="background-color: #e8e2db " class=" navbar navbar-expand-lg navbar-light  fixed-top">
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
                    
                    echo "
                    <div class='dropdown '>
                   <button class='btn btn-ligth dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <i class='fas fa-drum'></i>
                     </button>
                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenuButton'>
                    <h6 class='dropdown-header'>Bonjour, ".$_SESSION['firstname']."</h6>
                    <div class='dropdown-divider'></div>
                  <a class='dropdown-item'  href='newpost'>Ajouter un article</a>";

                        if ($_SESSION['level']=='1') {
                        echo"  <a class='dropdown-item'  href='newuser'>Créer un utilisateur</a>";
                        echo" <a class='dropdown-item' href='admin'>Administrer</a>";
                        }
                        echo" 
                        <div class='dropdown-divider'></div>
                     <a class='dropdown-item text-center' href='index.php?stopsession=yes'><i class='fas fa-user-times'></i></a> 
                     </div>
                    </div>";
       


                    }else{
                        echo"<li class='nav-item'>
                    <a class='nav-link hand'  data-toggle='modal' data-target='#exampleModalCenter' title='Se connecter'><i class='fas fa-user'></i></a>
                </li>";
               
      
                    }
                    ?>

    
  
  
         
            </ul>
        </div>
        
</nav>
