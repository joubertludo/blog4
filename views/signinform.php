<div class="container pt-5 mb-5 bg-light">
  <h3 class="text-center">S'inscrire</h3>
  <form onsubmit="return validateForm()" method="post" action="index.php" class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-6">
        <label for="validationCustom01" class=" text-white  "></label>
        <input name="fname" type="text" class="form-control shadow p-3 mb-5" id="validationCustom01" placeholder="Prénom" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="text-white"></label>
        <input name="lname" type="text" class="form-control shadow p-3 mb-5" id="validationCustom02" placeholder="Nom" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-12 pb-5 ">
        <label  for="validationCustomUsername" class="text-white ">Email 
          <?php if($_SESSION['unvalidemail']=='true'){
            echo "<h3 class='text-danger '>déjà utilisé</h3>";
            $_SESSION['unvalidemail']='false';
          }
          ?></label>

          <div class="input-group ">
            <div class="input-group-prepend ">

              <span class="input-group-text " id="inputGroupPrepend">@</span>
            </div>
            <input name="usremail" type="text" class="form-control " id="validationCustomUsername" placeholder="email" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class='form-group col-md-6'>
          <label for='userPass' class="text-white" >Mot de passe</label>
          <input name='mdp' type='password' class='form-control' id='inputPassword1' placeholder='Mot de passe'>
        </div>
        <div class='form-group col-md-6'>
          <label for='userPass' class="text-white">confirmer mot de passe</label>
          <input name='mdptest' type='password' class='form-control' id='inputPassword2' placeholder='Confirmer mot de passe'>
        </div>
        <div class="result"></div>


        <div class="form-group">
          <div class="form-check">
            <input  class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">

            </label>
            <div class="invalid-feedback ">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="  mb-3">
        <button class="btn btn-success" type="submit">Envoyer</button>
      </div>
      </div>
    </div>
  </form>
