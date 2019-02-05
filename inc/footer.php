
<footer>
			
  <div class="card-footer text-muted text-center bg-secondary ">
 <a class="text-white" href=""> Accueil</a>
   <p class="text-white">© <?php print date('d/m/y')?> - Tous droits réservés.</p>
   
</div>
</footer>
<?php 
require('inc/modal.php')?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<?php 
if (isset($_GET['page']) && ($_GET['page']=='emptypost' || $_GET['page']=='editorform')) {
  echo"<script src='https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js'></script>
  <script>$(document).ready(function () {
    bsCustomFileInput.init()
  })</script>";
}


?>
</html>