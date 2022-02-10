<?php

session_start();
include('Connection\conexao.php');

$newname = $_POST['Nome'];
$newemail = $_POST['E-mail'];
$newpassword = md5($_POST['Password']);

