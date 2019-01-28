<?php
$datePost = gmdate("d/m/y", $articles[$_GET['id']]->date);
?>
<div class="container pb-5 mb-5 bg-secondary rounded">
  <h2>Editer votre article</h2>
  <form method="post" action="model/editarticle.php">
    <div class="form-group">
      <label for="sfrvsvdv">Titre</label>
      <input name="formtitre" type="text" class="form-control" id="formGroupExampleInput" placeholder="Exemple" value="<?php echo($articles[$_GET['id']]->title)?>" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Contenu</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ><?php echo($articles[$_GET['id']]->body)?></textarea>
    </div>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01"><?php echo($articles[$_GET['id']]->image)?></label>
  </div>
</div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Auteur</label>
        <input type="text" class="form-control" id="inputCity" value="<?php echo($articles[$_GET['id']]->auteur)?>" >
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Catégorie</label>
        <select id="inputState" class="form-control">
          <option selected><?php echo($articles[$_GET['id']]->catégorie)?></option>
          <option>Rock</option>
          <option>Funk</option>
          <option>Classique</option>
          <option>Jazz</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Date</label>
        <input type="text" class="form-control" id="inputZip" value="<?php  echo($datePost)?>" >
      </div>
    </div>
    <button type="submit" class="btn btn-warning">Envoyer</button>
  </form>
</div>
