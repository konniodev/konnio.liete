<?php
require_once 'util.php';
require_once 'config.inc';
session_start();

require_once 'sysheader.php';

?>
 <main>
  <div id="loginForm" class="login">
    <form method="post" class="loginForm">
      <label for="user" class="loginLabel">Usuario</label>
      <input type="text" id="user" name="user" class="formField">
      <label for="password" class="loginLabel">Senha</label>
      <input type="password" id="password" name="password" class="formField">
      <input type="submit">
      <a href="forgottenpwd.php">Esqueci minha senha</a>
      <a href="createuser.php">Criar minha conta</a>
    </form>	
  </div>
 </main>
<?php require_once 'sysfooter.php';?>