<div id="register-form" style="display: none;">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  	<div class="form-group">
  	  <label>Nazwa użytkownika</label>
  	  <input type="text" minlength="3" name="username" class="form-control" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Adres email</label>
  	  <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Hasło</label>
  	  <input type="password" minlength="6" name="password_1" class="form-control">
  	</div>
  	<div class="form-group">
  	  <label>Potwierdź hasło</label>
  	  <input type="password" minlength="6" name="password_2" class="form-control">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn btn-form" name="reg_user">Zarejestruj się!</button>
	</div>
	<?php include('errors.php'); ?>  
  </form>
  </div>