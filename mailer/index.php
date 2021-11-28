<?php 
    require_once "./mail.php";
    $mail->setFrom('yosr.bennagra@esprit.tn', 'Talos');   // email eli bch tabath bih
    $mail->addAddress('iberthing40@gmail.com');   // email leli theb tabaathloo

    $mail->Subject = 'New Class has been Created';
    $mail->Body    = 'Join the class now';
    $mail->send();

?>