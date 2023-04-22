<?php
session_start();
require 'verificalogin.php';
require 'BDi.php';

if(isset($_POST['submit'])) {

  
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $DB->prepare("UPDATE utilizadores SET email=?, pass_email=? WHERE 1");
    $stmt->bind_param('ss',$email, $password);
    $stmt->execute();
  
}
      $_SESSION['editarConfiguracoes'] = 'teste1';
        header("Location: ../configuracoes");
?>