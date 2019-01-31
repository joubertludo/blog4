
<section class="container">
	<div class="d-flex flex-row justify-content-between">
	<h2 class="text-white"><?php echo ($post['title']) ?></h2> 
	<div>
    <?php
    if(isset($_SESSION['id'])){
      echo" <a href='index.php?page=editorform&id=".$_GET['id']."' type='button' class='btn btn-secondary btn-sm'>  Editer</a>
<a href='index.php?action=delete&id=".$_GET['id']."' type='button' class='btn btn-secondary btn-sm'> Supprimer</a>";

    }

    ?>
  
</div>
</div>
<div class="row">
    <div  class="col-md-7 bg-secondary p-3 d-flex align-items-center">
    <div style="height: 800px"  class=" flex-column">
    <div  class="text-white d-flex">
    	<h5><?php echo" ".$post['firstname']?></h5>
      <h5><?php  
     
      echo' -'.date("d-m-Y",strtotime($post['updated_date']));
      ?></h5>
      <h5><?php echo' -'.$post['name']?></h5>
    </div>
    <?php echo($post['content']) ?>
 
    </div>
    </div>
    <img style="height:400px" src=<?php echo"https://picsum.photos/500/500".$post['file']?> class="col-md-5 img-fluid" alt="...">
  </div>
</section>