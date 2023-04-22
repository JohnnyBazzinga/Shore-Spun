<?php
session_start();
require 'BDi.php';

if(isset($_POST['submit'])) {

  
    $noticia = $_POST['noticia'];
    $desc = $_POST['desc'];
    $noticiaEn = $_POST['noticiaEn'];
    $descEn = $_POST['descEn'];
  
  
  if (($_FILES['teste']['name']!="")){
  $target_dir = "../../imagensNoticias/";
	$file = $_FILES['teste']['name'];
	$path = pathinfo($file);
	$filename = $path['filename'];
	$ext = $path['extension'];
	$temp_name = $_FILES['teste']['tmp_name'];
	$path_filename_ext = md5($filename).".".$ext;
  
    $stmt = $DB->prepare("INSERT INTO noticias (noticia,descNoticia,noticiaEn,descNoticiaEn,imagem) VALUES (?,?,?,?,?)");
    $stmt->bind_param('sssss',$noticia, $desc, $noticiaEn, $descEn,$path_filename_ext);
    $stmt->execute();
 
  if (file_exists($path_filename_ext)) {
 echo "Erro<br>";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Ficheiro carregado com sucesso<br>";
 }
  
} else {
        $stmt = $DB->prepare("INSERT INTO noticias (noticia,descNoticia,noticiaEn,descNoticiaEn) VALUES (?,?,?,?)");
    $stmt->bind_param('ssss',$noticia, $desc, $noticiaEn, $descEn);
    $stmt->execute();
  }
}
      $_SESSION['addNoticia'] = 'teste1';
        header("Location: ../noticias");

?>