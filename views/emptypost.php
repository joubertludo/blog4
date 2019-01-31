<?php
if (isset($_SESSION{'id'})) {

?>

<div class="container pb-5 mb-5 bg-secondary rounded">
  <h2>Editer votre article</h2>
  <form method="post" action="index.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="sfrvsvdv">Titre</label>
      <input name="formtitre" type="text" class="form-control" id="formGroupExampleInput" placeholder="Exemple" value="" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Contenu</label>
      <textarea name="formcontent" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
    </div>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input name="uploadfile" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label  class="custom-file-label" for="inputGroupFile01"></label>
  </div>
</div>
    <div class="form-row">
     <div class="form-group col-md-4">
        <label for="inputState">Auteurs</label>
        <select name="nameaut"  id="inputState" class="form-control">
          <option selected></option>
          <?php
          foreach($list_authors as $author){
            echo "<option value=".$author['id'].">".$author['firstname']."</option>";
          }
          ?>
          
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Catégorie</label>
        <select name="namecat"  id="inputState" class="form-control">
          <option selected></option>
          <?php
    
          foreach($list_categories as $categorie){
            echo "<option value=".$categorie['id'].">".$categorie['name']."</option>";
          }
          ?>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-warning">Envoyer</button>
  </form>
</div>
<?php

        }
?>