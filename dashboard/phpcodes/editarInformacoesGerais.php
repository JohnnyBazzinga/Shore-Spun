<?php
session_start();
require 'verificalogin.php';
require 'BDi.php';

if(isset($_POST['submit'])) {

  
    $email = $_POST['email'];
    $contacto = $_POST['contacto'];
    $morada = $_POST['morada'];


    $stmt = $DB->prepare("UPDATE informacoesgerais SET email=?, contacto=?,morada=? WHERE 1");
    $stmt->bind_param('sss',$email, $contacto, $morada);
    $stmt->execute();
  
}
      $_SESSION['editarInformacoesGerais'] = 'teste1';
        header("Location: ../informacoes");

?>