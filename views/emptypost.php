
<?php
if (isset($_SESSION['id'])) {

?>

<div class="container pb-5 mb-5 bg-light rounded">
  <h2 class="text-center pt-3">Editer votre article</h2>
  <form class="" onsubmit="return validateEmptyPost()" method="post" action="index.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="sfrvsvdv">Titre</label>
      <input name="formtitre" type="text" class="form-control" id="title" placeholder="Exemple" value="">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Contenu</label>
      <textarea name="formcontent" class="form-control" id="content" rows="3" ></textarea>
    </div>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input name="uploadfile" type="file" class="custom-file-input" id="File01" aria-describedby="inputGroupFileAddon01">
    <label  class="custom-file-label" for="inputGroupFile01"></label>
  </div>

</div>
    <div class="form-row">
      <?php
      if ($_SESSION['level']==1){
        echo"  <div class='form-group col-6'>
        <label for='inputState'>Auteurs</label>
        <select name='nameaut'  id='inputState' class='form-control'>
          "?>
          <?php
          foreach($list_authors as $author){
            echo '<option value='.$author['id'].'>'.$author['firstname'].'</option>';
          }
          ?> <?php echo "</select> </div>";
      }else{
        echo'<input name="nameaut" type="hidden" value='.$_SESSION['id'].'>';
      }
      ?>
   
     
      <div class="form-group col-6">
        <label for="inputState">Catégorie</label>
        <select name="namecat"  id="categorie" class="form-control">
 
          <?php
    
          foreach($list_categories as $categorie){
            echo "<option value=".$categorie['id'].">".utf8_encode($categorie['name'])."</option>";
          }
          ?>
        </select>
      </div>
    </div>
    <?php echo"".$_SERVER['SCRIPT_URI'].""; ?>
    <button type="submit" class="btn btn-success">Envoyer</button>
    <div class="result"></div>

  </form>
</div>
<?php

        }
?>