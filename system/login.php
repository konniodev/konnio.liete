<?php
require_once 'util.php';
require_once 'config.inc';
session_start();

require_once 'sysheader.php';

?>
 <main>
  <form method="post">
    <label>Usuario</label><br>
    <input type="text" name="user"><br>
    <label>Senha</label><br>
    <input type="password" name="password"><br>
    <input type="submit"><br>
    <a href="forgottenpwd.php">Esqueci minha senha</a><br>
    <a href="createuser.php">Criar minha conta</a>
  </form>	
 </main>
<?php require_once 'sysfooter.php';?>