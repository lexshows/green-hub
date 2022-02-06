<?php 
session_start();
include('Connection\conexao.php');


//anti ataque SQL Injection
if(empty($_POST['userlogin']) || empty($_POST['userpassword'])){
     header('Location: ./home.php');
     exit();


}

$userlogin = mysqli_real_escape_string($conexao, $_POST['userlogin']);
$userpassword = mysqli_real_escape_string($conexao, $_POST['userpassword']);

#query db - login

$query = "SELECT userbd from usuarios where userbd = '$userlogin' and senhabd = '$userpassword';";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1) {
	$_SESSION['userlogin'] = $userlogin;
	header('Location: ./painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ./home.php');
	exit();
}




?>