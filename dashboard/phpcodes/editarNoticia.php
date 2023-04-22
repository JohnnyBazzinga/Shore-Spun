<?php
require 'verificalogin.php';
require 'BDi.php';

if(isset($_GET['submit'])) {

    $idNoticia = $_GET['idNoticia'];
    $noticia = $_GET['noticia'];
    $desc = $_GET['desc'];
    $noticiaEn = $_GET['noticiaEn'];
    $descEn = $_GET['descEn'];
  
    $stmt = $DB->prepare("UPDATE noticias SET noticia=?, descNoticia=?, noticiaEn=?, descNoticiaEn=? WHERE idNoticia=?");
    $stmt->bind_param('sssss',$noticia, $desc, $noticiaEn, $descEn, $idNoticia);
    $stmt->execute();
  
}
      $_SESSION['editarNoticia'] = 'teste1';
        header("Location: ../noticias");

?>