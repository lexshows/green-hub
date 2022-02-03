<?php 

require_once '/wamp64/www/php_iniciantes/config/dbconfig.php';



// Connecting, selecting database
$mysqli_connection = new MySQLi($host, $usuario, $password, $db); 


/*    if($mysqli_connection->connect_error){ 
        echo "Desconectado! Erro: " . $mysqli_connection->connect_error; 
    }else{
         echo "Voce está Conectado!"; 
        }
*/ 

?>