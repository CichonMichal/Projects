<div id="login-form">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="login-from">
  		<div class="form-group">
  			<label>Nazwa użytkownika</label>
  			<input type="text" name="username" class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Hasło</label>
  			<input type="password" name="password" class="form-control">
  		</div>
  		<div class="form-group">
			<button type="submit" class="btn btn-form" name="login_user">Zaloguj się!</button>
		</div>
		<?php include('errors.php'); ?>
	</form>
</div>