<div class="container pb-5 mb-5 bg-secondary rounded">
  <h2>Editer votre article</h2>
  <form method="get" action="index.php">
    <div class="form-group">
      <input name="id" type="hidden" value="<?php echo($_GET['id']) ?>">
      <label for="sfrvsvdv">Titre</label>
      <input name="formtitremodif" type="text" class="form-control" id="formGroupExampleInput" placeholder="Exemple" value="<?php echo($edit['title'])?>" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Contenu</label>
      <textarea  name="formcontentmodif" class="form-control" id="exampleFormControlTextarea1" rows="3" ><?php echo($edit['content'])?></textarea>
    </div>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01"><?php echo"https://picsum.photos/500/500".$edit['file']?></label>
  </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputState">Auteurs</label>
        <select name="nameaut" id="inputState" class="form-control">
        <option selected><?php echo($edit['firstname'])?></option>
          <?php
          foreach($list_authors as $author){
            if($edit['firstname']!=$author['firstname']){
              echo "<option value=".$author['id'].">".$author['firstname']."</option>";
            }
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Catégorie</label>
        <select name="namecat" id="inputState" class="form-control">
        <option selected><?php echo($edit['name'])?></option>
          <?php
          var_dump($list_categories);
          foreach($list_categories as $categorie){          
            
            if($edit['name']!=$categorie['name']){
              echo "<option value=".$categorie['id'].">".$categorie['name']."</option>";
            }
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Date</label>
        <input type="date" class="form-control" id="inputZip" value="<?php  echo($edit['updated_date'])?>" >
      </div>
    </div>
    <button type="submit" class="btn btn-warning">Envoyer</button>
  </form>
</div>
