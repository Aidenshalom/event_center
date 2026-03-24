<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require '/home/sakeenaclassyhal/public_html/PHPMailer/src/Exception.php';
require '/home/sakeenaclassyhal/public_html/PHPMailer/src/PHPMailer.php';
require '/home/sakeenaclassyhal/public_html/PHPMailer/src/SMTP.php';
 


 
    function sendUserRecord($useremail, $password){
        // Instantiation and passing [ICODE]true[/ICODE] enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'mail.sakeenaclassyhalls.com.ng';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'user@sakeenaclassyhalls.com.ng';                     // SMTP username
            $mail->Password   = 'Goodnews2024';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
         
            //Recipients
            $mail->setFrom('user@sakeenaclassyhalls.com.ng', 'Manager');
            $mail->addAddress($useremail);     // Add a recipient
            // $mail->addAddress('sakeenaclassyhall@gmail.com');               // Name is optional
            $mail->addReplyTo('user@sakeenaclassyhalls.com.ng', 'Manager');
            // $mail->addCC('sakeenaclassyhall@gmail.com');
            //$mail->addBCC('olamilekanmuhammed68@gmail.com');
            
                // Attachments
            // $mail->addAttachment('');         // Add attachments
            // $mail->addAttachment('');    // Optional name
         
            
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Sakeena Classy Halls';
            $mail->Body    = '<h1> New User </h1>
                        <h3> Here are your login details </h3>
                        <h2> Username :'. $useremail . ' </h2>
                        <h2> Password :' .$password . ' </h2>
                        <h3> <a href="http://localhost/Sakeena/dashboard/"> Visit Website </a> </h3>';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
            $mail->send();
            echo 'Message has been sent';
         
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    // function sendUserRecord($useremail, $password){
    //     $to      = $useremail;
    //     $subject = 'Sakeena Classy Halls';
    //     $message = '<h1> New User </h1>
    //             <h3> Here are your login details </h3>
    //             <h2> Username :'. $useremail . ' </h2>
    //             <h2> Password :' .$password . ' </h2>
    //             <h3> <a href="http://localhost/Sakeena/dashboard/"> Visit Website </a> </h3>';
    //     $headers = 'From: [sakeenaclassyhall]@gmail.com' . "\r\n" .
    //                 'MIME-Version:1.0' . "\r\n" . 
    //                 'Content-type: text/html; charset=utf-8';
    //     if(mail($to, $subject, $message, $headers))
    //         echo "Email sent";
    //     else
    //         echo "Email sending failed";

    // }

    function sendPasswordReset($useremail,$token){
        // Instantiation and passing [ICODE]true[/ICODE] enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'mail.sakeenaclassyhalls.com.ng';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'user@sakeenaclassyhalls.com.ng';                     // SMTP username
            $mail->Password   = 'Goodnews2024';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
         
            //Recipients
            $mail->setFrom('user@sakeenaclassyhalls.com.ng', 'Manager');
            $mail->addAddress($useremail);     // Add a recipient
            // $mail->addAddress('sakeenaclassyhall@gmail.com');               // Name is optional
            $mail->addReplyTo('user@sakeenaclassyhalls.com.ng', 'Manager');
            // $mail->addCC('sakeenaclassyhall@gmail.com');
            //$mail->addBCC('olamilekanmuhammed68@gmail.com');
            
                // Attachments
            // $mail->addAttachment('');         // Add attachments
            // $mail->addAttachment('');    // Optional name
         
            
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Sakeena Classy Halls';
            $mail->Body    = '<h1> Reset Password </h1>
                            <h3> Click the link below to reset your password </h3>
                            <h3> <a href="http://localhost/Sakeena/dashboard/passwordchange.php?token='.$token.'&email='.$useremail.'"> Password rest link </a> </h3>';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
            $mail->send();
            echo 'Message has been sent';
         
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    // function sendPasswordReset($useremail,$token){
    //     $to      = $useremail;
    //     $subject = 'Sakeena Classy Halls';
    //     $message = '<h1> Reset Password </h1>
    //             <h3> Click the link below to reset your password </h3>
    //             <h3> <a href="http://localhost/Sakeena/dashboard/passwordchange.php?token='.$token.'&email='.$useremail.'"> Password rest link </a> </h3>';
    //     $headers = 'From: [sakeenaclassyhall]@gmail.com' . "\r\n" .
    //                 'MIME-Version:1.0' . "\r\n" . 
    //                 'Content-type: text/html; charset=utf-8';
    //     if(mail($to, $subject, $message, $headers))
    //         echo "Email sent";
    //     else
    //         echo "Email sending failed";

    // }


?>