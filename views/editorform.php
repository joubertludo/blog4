
<?php
if (isset($_SESSION{'id'})) {

?>
<div class="container pb-5 mb-5 bg-secondary rounded">
  <h2>Editer votre article</h2>
  <form method="post" action="index.php" enctype="multipart/form-data">
    <div class="form-group">
      <input name="id" type="hidden" value="<?php echo($_GET['id']) ?>">
      <input name="oldfile" type="hidden" value="<?php echo($edit['file']) ?>">

      <label for="sfrvsvdv">Titre</label>
      <input name="formtitremodif" type="text" class="form-control" id="formGroupExampleInput" placeholder="Exemple" value="<?php echo(utf8_encode($edit['title']))?>" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Contenu</label>
      <textarea  name="formcontentmodif" class="form-control" id="exampleFormControlTextarea1" rows="3" ><?php echo($edit['content'])?></textarea>
    </div>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input name="uploadfile" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01"><?php echo $edit['file']?></label>
  </div>
</div>
    <div class="form-row">
    <?php
    if ($_SESSION['level']==1) {
      echo" <div class='form-group col-md-4'>
        <label for='inputState'>Auteurs</label>
        <select name='modifnameaut' id='inputState' class='form-control'>"; ?>
        <?php
        echo '<option value='.$edit['id_aut'].'>'.$edit['firstname'].'</option>'; ?>
          <?php
          $autchoose2=$edit['firstname'];
          foreach($list_authors as $author){
       
            if($autchoose2!=$author['firstname']){
              echo '<option value='.$author['id'].'>'.$author['firstname'].'</option>';
            }
          }
          ?>
        </select>
      </div>

<?php
    } else{
      echo"<input name='modifnameaut' type='hidden' value='".$edit['id_aut']."'>"; 
    }
   ?>
      <div class="form-group col-md-4">
        <label for="inputState">Catégorie</label>
        <select name="modifnamecat" id="inputState" class="form-control">
        <option value="<?php echo($edit['id_cat'])?>"><?php echo(utf8_encode($edit['name']))?></option>
          <?php
          $catchoose2=$edit['name'];
          foreach($list_categories as $categorie){          
            
            if($catchoose2!=$categorie['name']){
              echo "<option value=".$categorie['id'].">".utf8_encode($categorie['name'])."</option>";
            }
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