<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';


$mail = new PHPMailer(true);

session_start();
require 'BDi.php';

if(isset($_POST['submitPT'])) {

    $stmt = $DB->prepare("SELECT email,pass_email FROM utilizadores WHERE 1");
    $stmt->execute();
    $stmt->bind_result($emailGeral, $pass_email);
    while ($stmt->fetch())
      global $emailGeral;
      global $pass_email;


    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $emailGeral;                     //SMTP username
    $mail->Password   = $pass_email;                                //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($emailGeral);
    $mail->addAddress($emailGeral);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensagem de Contacto';
    $mail->Body    = '<b>Nome:</b> '. $nome .'<br><b>Email:</b> ' .$email. '<br><b>Mensagem:</b> '. $mensagem;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //Success
    if ($mail->Send()) {
        $_SESSION['contactoEnviado'] = 'teste';
        header("Location: ../pt");
    }
} catch (Exception $e) {
    header("Location: ../pt");
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}

if(isset($_POST['submitEn'])) {
    $stmt = $DB->prepare("SELECT email,pass_email FROM utilizadores WHERE 1");
    $stmt->execute();
    $stmt->bind_result($emailGeral, $pass_email);
    while ($stmt->fetch())
      global $emailGeral;
      global $pass_email;


    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $emailGeral;                     //SMTP username
    $mail->Password   = $pass_email;                            //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($emailGeral);
    $mail->addAddress($emailGeral);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensagem de Contacto';
    $mail->Body    = '<b>Nome:</b> '. $nome .'<br><b>Email:</b> ' .$email. '<br><b>Mensagem:</b> '. $mensagem;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //Success
    if ($mail->Send()) {
        $_SESSION['contactoEnviadoEn'] = 'teste';
        header("Location: ../en");
    }
} catch (Exception $e) {
    header("Location: ../en");
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}


?>
