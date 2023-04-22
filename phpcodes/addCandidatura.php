<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';


$mail = new PHPMailer(true);

session_start();
require 'BDi.php';
if(isset($_POST['submit'])) {


$stmt = $DB->prepare("SELECT email,pass_email FROM utilizadores WHERE 1");
                          $stmt->execute();
                          $stmt->bind_result($emailGeral, $pass_email);
                          while ($stmt->fetch())
                            global $emailGeral;
                            global $pass_email;


    $emprego = $_POST['empregoCandidatar'];
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $contacto = $_POST['contacto'];
    $residencia = $_POST['residencia'];
    $desc = $_POST['desc'];


if(isset($_FILES['uploadfile'])) {
      $errors     = array();
    $maxsize    = 8388608;
    $acceptable = array(
        'application/pdf',
        'image/jpeg',
        'image/jpg',
        'image/png'
    );


      if(($_FILES['uploadfile']['size'] >= $maxsize) || ($_FILES["uploadfile"]["size"] == 0)) {
        $errors[] = header("Location: ../oportunidade?idEmprego=".$_POST['idEmprego']);
    }

    if(!in_array($_FILES['uploadfile']['type'], $acceptable) && (!empty($_FILES["uploadfile"]["type"]))) {
      $_SESSION['erroType'] = 'teste';
    $errors[] = header("Location: ../oportunidade?idEmprego=".$_POST['idEmprego']);
}

if(count($errors) === 0) {
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $serie = generateRandomString(10);



	$target_dir = "../candidaturas/";
	$file = $_FILES['uploadfile']['name'];
	$path = pathinfo($file);
	$filename = $path['filename'];
	$ext = $path['extension'];
	$temp_name = $_FILES['uploadfile']['tmp_name'];
	$path_filename_ext = $target_dir.($filename)."$serie".".".$ext;

    $stmt = $DB->prepare("INSERT INTO candidaturas (emprego,nome,email,contacto,residencia,descricao,ficheiro) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssss',$emprego, $nome, $email, $contacto, $residencia, $desc, $path_filename_ext);
    $stmt->execute();

  // Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "Erro<br>";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "";
 }

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $emailGeral;                     //SMTP username
    $mail->Password   = $pass_email;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($emailGeral);
    $mail->addAddress($emailGeral);

    //Attachments
    $mail->addAttachment($path_filename_ext);

    //Content
    $mail->isHTML(true);
    $mail->Subject = "Candidatura: ". $emprego;
    $mail->Body    = '<b>Nome:</b> '. $nome .'<br><b>Email:</b> ' .$email. '<br><b>Contacto:</b> '. $contacto .'<br><b>Residência:</b> '. $residencia .  '<br><b>Descrição:</b> ' . $desc ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //Success
    if ($mail->Send()) {
        $_SESSION['candidaturaEnviada'] = 'teste';
        header("Location: ../pt");
    }
} catch (Exception $e) { // {$mail -> ErrorInfor}
    echo "Erro, Contacte um administrador{$mail -> ErrorInfor}";
}
} else {
    foreach($errors as $error) {
        echo '<script>alert("'.$error.'");</script>';
    }

    die(); //Ensure no more processing is done
}
}

}

if(isset($_POST['submitEn'])) {

  $stmt = $DB->prepare("SELECT email,pass_email FROM utilizadores WHERE 1");
                          $stmt->execute();
                          $stmt->bind_result($emailGeral, $pass_email);
                          while ($stmt->fetch())
                            global $emailGeral;
                            global $pass_email;

    $emprego = $_POST['empregoCandidatar'];
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $contacto = $_POST['contacto'];
    $residencia = $_POST['residencia'];
    $desc = $_POST['desc'];


if (($_FILES['uploadfile']['name']!="")){
    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $serie = generateRandomString(10);

	$target_dir = "../candidaturas/";
	$file = $_FILES['uploadfile']['name'];
	$path = pathinfo($file);
	$filename = $path['filename'];
	$ext = $path['extension'];
	$temp_name = $_FILES['uploadfile']['tmp_name'];
	$path_filename_ext = $target_dir.($filename)."$serie".".".$ext;

    $stmt = $DB->prepare("INSERT INTO candidaturas (emprego,nome,email,contacto,residencia,descricao,ficheiro) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssss',$emprego, $nome, $email, $contacto, $residencia, $desc, $path_filename_ext);
    $stmt->execute();

  // Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "Erro<br>";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Ficheiro carregado com sucesso<br>";
 }

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $emailGeral;                     //SMTP username
    $mail->Password   = $pass_email;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($emailGeral);
    $mail->addAddress($emailGeral);

    //Attachments
    $mail->addAttachment($path_filename_ext);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Candidatura: ".$emprego;
    $mail->Body    = '<b>Nome:</b> '. $nome .'<br><b>Email:</b> ' .$email. '<br><b>Contacto:</b> '. $contacto .'<br><b>Residência:</b> '. $residencia .  '<br><b>Descrição: ' . $desc ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //Success
    if ($mail->Send()) {
        $_SESSION['candidaturaEnviadaEn'] = 'teste';
        header("Location: ../en");
    }
} catch (Exception $e) {
    echo "Error, contact an Administrator: {$mail->ErrorInfo}";
}
}
}


?>
