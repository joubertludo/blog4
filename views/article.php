<section class="container">

  <div class="d-flex justify-content-end">

    <div>
      <?php 
      if(isset($_SESSION['id']) && $_SESSION['level']==1){
        echo" <a href='editpost-".$_GET['id']."' type='button' class='btn btn-light mb-2 btn-sm'>  Editer</a>
              <a data-toggle='modal' href='#Modal' type='button' class='btn btn-light mb-2 btn-sm'> Supprimer</a>";
  
      }elseif(isset($_SESSION['id']) && $_SESSION['id']==$_GET['auteur']){
        echo" <a href='editpost-".$_GET['id']."' type='button' class='btn btn-light mb-2 btn-sm'>Editer</a>
        <a href='index.php?action=delete&id=".$_GET['id']."' type='button' class='btn btn-light mb-2 btn-sm'>Supprimer</a>";
      }
  
      ?>
<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">X</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez-vous vraiment supprimer cet article ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a type="button" class="btn btn-primary" href="index.php?action=delete&id=<?php echo $_GET['id'] ?>" >Confirmer</a>
      </div>
    </div>
  </div>
</div>
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
              <?php echo''.$post['firstname'].', Publié le : '. date("d-m-Y",strtotime($post['updated_date']));?>
            </h6>

          </div>
          <?php echo($post['content']) ?>
        </div>
        </div>
        <div class="col-md-6 justify-content-center">
          <img src='img/repimg/<?php echo($post['file'])?>' class="img-fluid rounded float-right" alt="...">
          
          <h5 class="text-right">Catégorie : <?php echo utf8_encode($post['name']);?></h5>
     
        </div>
    </div>
  </section>
  <section class="container bg-light mb-3 rounded">
<div class="media pt-3 pb-3 ">
  <img style="max-height: 80px;" src="img/repimg/default/png1.png" class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Commentaires</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
</section>