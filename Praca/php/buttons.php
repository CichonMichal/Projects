<div class="row">
    <div class="col-sm"><a href="index.php" class="link"><button class="btn menu-button btn-hover" type="button">Strona Główna</button></a></div>
    <div class="col-sm"><a href="players.php" class="link"><button class="btn menu-button btn-hover" type="button">Szukaj Graczy</button></a></div>
    <div class="col-sm"><a href="faq.php" class="link"><button class="btn menu-button btn-hover" type="button">FAQ</button></a></div>
    <?php  if (isset($_SESSION['username'])) : ?>
    <div class="col-sm"><a href="user.php" class="link"><button class="btn menu-button btn-hover" type="button">Moje konto</button></a></div>
    <?php endif ?>
    
    <?php  if (!isset($_SESSION['username'])) : ?>
    <script> function alert() { alert('Najpierw musisz się zalogować!'); } </script>
    <div class="col-sm"><button class="btn menu-button btn-hover" type="button" onclick="alert()">Moje konto</button></div>
    <?php endif ?>
</div>
