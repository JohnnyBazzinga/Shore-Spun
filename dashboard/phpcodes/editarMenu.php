<?php
require 'verificalogin.php';
session_start();
require 'BDi.php';

if(isset($_GET['submit'])) {

    $idMenu = $_GET['idMenu'];
    $titulo = $_GET['titulo'];
    $desc = $_GET['desc'];
    $tituloEn = $_GET['tituloEn'];
    $descEn = $_GET['descEn'];
  
    
    $stmt = $DB->prepare("UPDATE menusgiratorios SET tituloMenu=?, descricaoMenu=?,tituloMenuEn=?,descricaoMenuEn=? WHERE idMenuG=?");
    $stmt->bind_param('sssss',$titulo, $desc, $tituloEn, $descEn, $idMenu);
    $stmt->execute();
  
}
        $_SESSION['editarInformacoes'] = 'teste1';
        header("Location: ../menus");

?>