<div class="container pb-5 mb-5 bg-secondary rounded">
  <h2>Editer votre article</h2>
  <form method="get" action="index.php">
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
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label name="formfile" class="custom-file-label" for="inputGroupFile01"></label>
  </div>
</div>
    <div class="form-row">
     <div class="form-group col-md-4">
        <label for="inputState">Auteurs</label>
        <select id="inputState" class="form-control">
          <option selected></option>
          <?php
          foreach($list_authors as $author){
            echo "<option>".$author['firstname']."</option>";
          }
          ?>
          
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Catégorie</label>
        <select id="inputState" class="form-control">
          <option selected></option>
          <?php
          var_dump($list_categories);
          foreach($list_categories as $categorie){
            echo "<option>".$categorie['name']."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Date</label>
        <input type="text" class="form-control" id="inputZip" value="">
      </div>
    </div>
    <button type="submit" class="btn btn-warning">Envoyer</button>
  </form>
</div>
