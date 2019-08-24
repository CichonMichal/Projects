<?php include('server.php') ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../index.php");
  }
?>
<div class="col-sm body-style side-body">
    <?php  if (isset($_SESSION['username'])) : ?>
    	<a href="index.php?logout='1'" style="color: red;"><button class="btn btn-form btn-logout">Wyloguj się!</button></a>
        <a href="welcome.php" style="color: red;"><button class="btn btn-form btn-logout">Zaaktualizuj swoje dane!</button></a>
    <?php endif ?>
    <?php  if (!isset($_SESSION['username'])) : ?>
    <div class="row">
                    <div class="col-xs-6 side-body-toggle">
                        <a class="side-body-link" id="login-form-link" style="font-size:120%; color: #E72C02;" onclick="loginIn()">Logowanie</a>
                    </div>
                    <div class="col-xs-6 side-body-toggle">
                        <a class="side-body-link" id="register-form-link" style="color: black;" onclick="registerIn()">Rejestracja</a>
                    </div>
                </div>
                <hr>   
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
    <?php endif ?>

</div>