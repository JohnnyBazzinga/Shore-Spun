<?php
session_start();
require 'verificalogin.php';
require 'BDi.php';

if(isset($_GET['submit'])) {

    $idEmprego = $_GET['idEmprego'];
    $emprego = $_GET['emprego'];
    $desc = $_GET['desc'];
    $requisitos = $_GET['requisitos'];
    $responsabilidades = $_GET['responsabilidades'];
    $infoAdicional = $_GET['infoAdicional'];
    $empregoEn = $_GET['empregoEn'];
    $descEn = $_GET['descEn'];
    $requisitosEn = $_GET['requisitosEn'];
    $responsabilidadesEn = $_GET['responsabilidadesEn'];
    $infoAdicionalEn = $_GET['infoAdicionalEn'];

    $stmt = $DB->prepare("UPDATE oportunidades SET emprego=?, descritivo=?,requisitos=?,responsabilidades=?,informacaoAdicional=?,empregoEn=?,descritivoEn=?,requisitosEn=?,responsabilidadesEn=?,informacaoAdicionalEn=? WHERE id=?");
    $stmt->bind_param('sssssssssss',$emprego, $desc, $requisitos,$responsabilidades, $infoAdicional, $empregoEn, $descEn, $requisitosEn,$responsabilidadesEn, $infoAdicionalEn, $idEmprego);
    $stmt->execute();

}
      $_SESSION['editarOportunidade'] = 'teste1';
        header("Location: ../oportunidades");

?>
