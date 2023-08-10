<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'mary.programms@gmail.com';
        $mail->Password = 'xxfqnrtnbsmbweiq';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('mary.programms@gmail.com');
        $mail->addAdress($_POST["email"]);
        $mail->isHTML(true);
        $mail->Subject = $_POST["topic"];
        $mail->Body = $_POST["message"];

        $mail->send();

        header('location:../index.php');

    }

?>