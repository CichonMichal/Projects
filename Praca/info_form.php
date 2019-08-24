<?php include('server.php') ?>
<div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  		<div class="form-group">
  			<input type="text" name="name" class="form-control" placeholder="Imię" maxlength = "30" >
  		</div>
  		<div class="form-group">
  		    <input type="text" name="lastname" class="form-control" placeholder="Nazwisko" maxlength = "30" >
        </div>
        <div class="form-group">
  			<input type="number" name="age" class="form-control" placeholder="Wiek" min="1" max="99" maxlength = "2"  
               onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)">
        </div>
        <div class="form-group">
  			<input type="text" name="state" class="form-control" placeholder="Województwo" maxlength = "30" >
        </div>
        <div class="form-group">
  			<input type="text" name="city" class="form-control" placeholder="Miasto zamieszkania" maxlength = "30" >
        </div>
        <div class="form-group">
          <label for="experience">Jakie masz doświadczenie z grami RPG?</label><br>
          <select name="experience" class="form-control" required>
            <option value="Żadne">Żadne</option>
            <option value="Podstawowe" selected>Podstawowe</option>
            <option value="Zaawansowane">Zaawansowane</option>
            <option value="Mistrzowskie">Mistrzowskie</option>
          </select>
        </div>
        <div class="form-group">
          <label for="role">Jakiej roli szukasz?</label><br>
          <select name="role" class="form-control" required>
            <option value="Gracz">Gracz</option>
            <option value="Mistrz gry">Mistrz gry</option>
            <option value="Gracz albo mistrz gry">Gracz albo mistrz gry</option>
          </select>
        </div>
        <label>Napisz coś o sobie!</label><br>
        <div class="form-group">
        <textarea rows="7" cols="50" maxlength = "3000" name="info" class="form-control" 
                  placeholder="Twoje oczekiwania, systemy jakie znasz, miejsca w których mógłbyś grać itp."></textarea>
  		</div>
  		<div class="form-group">
			<button type="submit" class="btn btn-form" name="user_info">Prześlij dane!</button>
		</div>
	</form>
</div>
  
<script>
  function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
    
  function isNumeric (evt) {
    var mainEvent = evt || window.event;
    var key = mainEvent.keyCode || mainEvent.which;
    key = String.fromCharCode (key);
    var range = /[0-9]|\./;
    if ( !range.test(key) ) {
      mainEvent.returnValue = false;
      if(mainEvent.preventDefault) mainEvent.preventDefault();
    }
  }
</script>