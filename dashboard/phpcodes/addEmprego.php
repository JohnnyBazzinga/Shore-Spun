<?php
session_start();
require 'verificalogin.php';
require 'BDi.php';

if(isset($_GET['submit'])) {


    $emprego = $_GET['emprego'];
    $desc = $_GET['desc'];
    $requisitos = $_GET['requisitos'];
    $responsabilidade = $_GET["responsabilidades"];
    $infoAdicional = $_GET['infoAdicional'];

    $empregoEn = $_GET['empregoEn'];
    $descEn = $_GET['descEn'];
    $requisitosEn = $_GET['requisitosEn'];
    $responsabilidadeEn = $_GET["responsabilidadesEn"];
    $infoAdicionalEn = $_GET['infoAdicionalEn'];

    $stmt = $DB->prepare("INSERT INTO oportunidades (emprego,descritivo,requisitos,responsabilidades, informacaoAdicional, empregoEn, descritivoEn,requisitosEn,responsabilidadesEn, informacaoAdicionalEn) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssssss',$emprego, $desc, $requisitos, $responsabilidade, $infoAdicional, $empregoEn, $descEn, $requisitosEn,$responsabilidadeEn, $infoAdicionalEn);
    $stmt->execute();

}
      $_SESSION['adicionarOportunidade'] = 'teste1';
        header("Location: ../oportunidades");

?>
