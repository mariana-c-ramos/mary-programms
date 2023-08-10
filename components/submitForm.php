<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);
        $userEmail = $_POST["email"];
        try{
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = 'mary.programms@gmail.com';
            $mail->Password = 'xxfqnrtnbsmbweiq';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $userName = $_POST["name"];
            $userEmail = $_POST["email"];
            $userMessage = $_POST["message"];
    
            $mail->setFrom($userEmail, 'lead');
            $mail->addAddress('mary.programms@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = $_POST["topic"];

            $mail->Body = "Name: " . $userName . "<br>" .
            "\r\n Email: " . $userEmail . "<br>" .
            "\r\n Message: " . $userMessage . "\r\n";
            
            $mail->send();
    
            header('location:../index.php');
        }
        catch(Exception $e){
            echo 'Message was not sent!';
        }
    }
?>