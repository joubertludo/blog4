<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><img src="img/logo.png" alt=""></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        if(isset($_SESSION['id']))
        {
          echo"Bonjour, ".$_SESSION['firstname'];

        }else {
          echo" <form name='connectForm' onsubmit='validateForm()' method='POST' action='index.php'  class='form-inline'>
          <div class='form-row'>
            <div class='form-group col-md-6'>
              <label for='userName'>Nom d'utilisateur</label>
              <input value='zreffee' name='usr' type='text' class='form-control' id='inputEmail4' placeholder='Georges'>
            </div>
            <div class='form-group col-md-6'>
              <label for='userPass'>Mot de passe</label>
              <input name='mdp' type='password' class='form-control' id='inputPassword4' placeholder='Password'>
            </div>

          </div>

      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fermer</button>
        <button type='submit' class='btn btn-primary'>Se connecter</button>
      </div>
    </form>";
        }

         ?>
        
    </div>
  </div>
</div>
