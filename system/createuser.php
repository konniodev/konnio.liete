<?php
use Konnio\Liete\Models\Realtor;
use Konnio\Liete\Database;

require_once 'util.php';
require_once 'config.inc';
session_start();

require_once 'sysheader.php';

if (isset($_POST['user'])){
    if ($_POST['password1'] != $_POST['password2']){
        echo "As senhas n&atilde;o conferem.";
        exit();
    }

    $realtor = new Realtor($_POST['user'], $_POST['password1'], $_POST['displayname'], $_POST['fullname'], 
    $_POST['email'], $_POST['mobile'], $_POST['creci']);
    $realtor->create();
}


?>
 <main>
  <h1>Crie sua conta</h1>
  <form method="post">
    <label>* Usuario:</label><br>
    <input type="text" name="user"><br>
    <label>* Senha:</label><br>
    <input type="password" name="password1"><br>
    <label>* Confirme sua Senha:</label><br>
    <input type="password" name="password2"><br>
    <label>* Nome de Exibi&ccedil;&atilde;:</label><br>
    <input type="text" name="displayname"><br>
    <label>* Nome Completo:</label><br>
    <input type="text" name="fullname"><br>
    <label>* Email:</label><br>
    <input type="text" name="email"><br>
    <label>* Celular:</label><br>
    <input type="text" name="mobile"><br>
    <label>* Creci:</label><br>
    <input type="text" name="creci"><br>
    <input type="submit"><br>
    <span>Campos com * s&atilde;o mandat&oacute;rios.</span>
  </form>	
 </main>
<?php require_once 'sysfooter.php';?>