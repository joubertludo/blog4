<section class="container">


  <div class="d-flex justify-content-end">

    <div>
      <?php 
      if(isset($_SESSION['id']) && $_SESSION['level']==1){
        echo" <a href='editpost-".$_GET['id']."' type='button' class='btn btn-light mb-2 btn-sm'>  Editer</a>
  <a href='index.php?action=delete&id=".$_GET['id']."' type='button' class='btn btn-light mb-2 btn-sm'> Supprimer</a>";
  
      }elseif(isset($_SESSION['id']) && $_SESSION['id']==$_GET['auteur']){
        echo" <a href='editpost-".$_GET['id']."' type='button' class='btn btn-light mb-2 btn-sm'>  Editer</a>
  <a href='index.php?action=delete&id=".$_GET['id']."' type='button' class='btn btn-light mb-2 btn-sm'> Supprimer</a>";
      }
  
      ?>

    </div>
  </div>
  </section>
  <section class="container p-3 mb-5 bg-white rounded">
    <div class="row">
      <div class="col-md-6  d-flex ">
        <div class="text-justify">
          <div class="text-dark">
            <h2>
              <?php echo (utf8_encode($post['title'])) ?>
            </h2>
            <h6 class="text-right">Par 
              <?php echo''.$post['firstname']?>
            </h6>
            
          </div>
          <?php echo($post['content']) ?>
        </div>
        </div>
        <div class="col-md-6 justify-content-center">
          <img src='img/repimg/<?php echo($post['file'])?>' class="img-fluid rounded float-right" alt="...">
          
          <h5 class="text-right">Catégorie : <?php echo utf8_encode($post['name']) .'. '. date("d-m-Y",strtotime($post['updated_date']));?></h5>
     
        </div>
      <p>Bonjour camarade syndiqué</p>
    </div>
  </section>
