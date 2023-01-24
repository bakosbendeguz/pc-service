<?php
if (isset($_POST['contact_submitButton'])) {
    ob_start();
    require_once('../phpmailer/PHPMailerAutoload.php');
    require_once('../phpmailer/class.phpmailer.php');
    require_once('inc_passwords.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (
        empty($name) ||
        empty($email) ||
        empty($phone) ||
        empty($message)
    ) {
        header("Location: contact.php?error=EmptyFields");
        exit;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=WrongEmailFormat");
        exit;
    } else {
        $address = $_POST['email'];  // címzett
        //$subject = $targy;  // üzenet tárgya
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
        $mail->CharSet = "UTF-8";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 465
        $mail->IsHTML(true);
        $mail->Username = EMAIL;
        $mail->Password = PASSWORD;
        $mail->SetFrom(EMAIL);
        $mail->Subject = "Új üzenet"; //Tárgy
        $mail->Body = '<h1 align="center">Név: ' . $name . '<br>E-mail: ' . $email . '<br>Telefonszám: ' . $phone . '<br>Üzenet: ' . $message . ''; // Kiküldeni való email
        $mail->AddAddress($address); // címzett
        //$mail->AddAttachment("test.pdf");   //csatolmány elérési útvonala (ha nem kell törlöd)

        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            header("Location: ../contact.php?MessageSend=failed");
        } else {
            header("Location: ../contact.php?MessageSend=success");
        }

        /* 
        Links that fix the problem (you must be logged into google account): Mind a hármat nézd meg, a másodikat engedélyezd, a harmadikat folytasd.
        
        https://security.google.com/settings/security/activity?hl=en&pli=1 //Activity access
        
        https://www.google.com/settings/u/1/security/lesssecureapps //Kevésbé biztonságos dolgok
        
        https://accounts.google.com/b/0/DisplayUnlockCaptcha // Captcha reset
        
        
        */
    }
    ob_end_flush();
    exit;
}