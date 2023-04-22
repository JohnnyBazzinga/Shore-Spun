<?php
session_start();
require 'verificalogin.php';
require 'BDi.php';

if(isset($_GET['submit'])) {

    $idServico = $_GET['idServico'];
    $titulo = $_GET['nomeServico'];
    $desc = $_GET['desc'];
    $tituloEn = $_GET['nomeServicoEn'];
    $descEn = $_GET['descEn'];
    
    
    $stmt = $DB->prepare("UPDATE servicos SET nomeServico=?, detalhesServico=?,nomeServicoEn=?,detalhesServicoEn=? WHERE idServico=?");
    $stmt->bind_param('sssss',$titulo, $desc, $tituloEn, $descEn, $idServico);
    $stmt->execute();
  
}
        $_SESSION['editarServico'] = 'teste1';
        header("Location: ../servicos");

?>