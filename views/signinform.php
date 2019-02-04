<div class="container mb-5 bg-info">
<form onsubmit="return validateForm()" method="post" action="index.php" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01" class="text-white">First name</label>
      <input name="fname" type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Paul" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02" class="text-white">Last name</label>
      <input name="lname" type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Desrine" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label  for="validationCustomUsername" class="text-white">Email 
        <?php if($_SESSION['unvalidemail']=='true'){
            echo "<h3 class='text-danger'>déjà utilisé</h3>";
            $_SESSION['unvalidemail']='false';
          }
            ?></label>

      <div class="input-group">
        <div class="input-group-prepend">

          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input name="usremail" type="text" class="form-control" id="validationCustomUsername" placeholder="email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class='form-group col-md-6'>
              <label for='userPass' class="text-white" >Mot de passe</label>
              <input name='mdp' type='password' class='form-control' id='inputPassword1' placeholder='Password'>
            </div>
            <div class='form-group col-md-6'>
              <label for='userPass' class="text-white">confirmer mot de passe</label>
              <input name='mdptest' type='password' class='form-control' id='inputPassword2' placeholder='Password'>
            </div>
            <div class="result"></div>

  
  <div class="form-group">
    <div class="form-check">
      <input  class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>
</form>
