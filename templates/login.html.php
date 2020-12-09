<?php
  require_once __DIR__ . '/../includes/connect.php';
  session_start();
?>

<div id="wrapper">
  <form id="login" name="login" action="" method="POST">
    <div class="inputs">
      <label>Username:</label>
      <input class="login-input" id="uname" type="text" name="u_name" placeholder="Username"></input>
      <p class="error" id="error-name"></p>
	
      <label>Password:</label>
      <input class="login-input" id="upass" type="password" name="u_pass" placeholder="Password"></input>
      <p class="error" id="error-pass"></p>
      <p class="error" id="login-error"></p>
    </div>
    <input id="submit" type="submit" name="u_login" value="LOGIN">
  </form>
</div>

<script>
  var name = document.getElementById('uname');
  var pass = document.getElementById('upass');

  var loginError = document.getElementById('login-error');
  var nameError = document.getElementById('error-name');
  var passError = document.getElementById('error-pass');

  const submit = document.getElementById('submit');


</script>
