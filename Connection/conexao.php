<?php 

#variaveis do banco de dados
$db = 'logins';
$usuario = 'root';
$passworddb = '';
$host = 'localhost';


#Defines
define('HOST', $host);
define('USUARIO', $usuario);
define('password', $passworddb);
define('db', $db);

$conexao = mysqli_connect(HOST, USUARIO, password, db) or die ('Não foi possível conectar');

// if ($conexao->connect_error) {
//      die("Connection failed: " . $conn->connect_error);
//    }
//    echo "Connected successfully";

