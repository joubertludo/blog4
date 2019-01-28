
<section class="container">
	<div class="d-flex flex-row justify-content-between">
	<h2 class="text-white"><?php echo($articles[$_GET['id']]->title) ?></h2> 
	<div>
  	<a href='index.php?page=editorform&id=<?php echo($_GET['id']) ?>' type="button" class="btn btn-secondary btn-sm">  Editer</a>
<a href="index.php?action=delete" type="button" class="btn btn-secondary btn-sm"> Supprimer</a>
</div>
</div>
<div class="row">
    <div  class="col-md-7 bg-secondary p-3 d-flex align-items-center">
    <div style="height: 800px"  class=" flex-column">
    <div  class="text-white d-flex">
    	<h5><?php echo($articles[$_GET['id']]->auteur)?></h5>
      <h5><?php  
      $datePost = gmdate("d/m/y", $articles[$_GET['id']]->date);
      echo($datePost);
      ?></h5>
      <h5><?php echo($articles[$_GET['id']]->catégorie)?></h5>
    </div>
    <?php echo($articles[$_GET['id']]->body) ?>
 
    </div>
    </div>
    <img style="height:400px" src="<?php echo($articles[$_GET['id']]->image)?>" class="col-md-5 img-fluid" alt="...">
  </div>
</section>