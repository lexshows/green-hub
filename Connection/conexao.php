<?php 

#variaveis do banco de dados
$db = 'logins';
$usuario = 'root';
$password = '';
$host = 'localhost';


#Defines
define('HOST', $db);
define('USUARIO', $usuario);
define('password', $password);



#
if(empty($_POST['userlogin'])) || empty($_POST['senha']){
     header('Location: login.php');
     exit();


}

$userlogin = mysqli_real_escape_string($_POST['userlogin']);
$userpasswrod = mysqli_real_escape_string($_POST['userpassword']);








?>