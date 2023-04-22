<?php
session_start();
include('BDi.php');

if(empty($_POST['username']) || empty($_POST['password'])) {
    echo 'erro';
	header('Location: ../login');
	exit();
}

$utilizador = mysqli_real_escape_string($DB, $_POST['username']);
$password = mysqli_real_escape_string($DB, $_POST['password']);

$query = "select username from utilizadores where username = '{$utilizador}' and password = md5('{$password}')";

$result = mysqli_query($DB, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['username'] = $utilizador;
  
  $_SESSION['logadoSucesso'] = 'teste';
	header('Location: ../inicio');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
 
  $_SESSION['logadoErro'] = 'teste';
	header('Location: ../login');
	exit();
}