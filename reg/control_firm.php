<?php
// connect db 
require 'db.php';
$d = new Db();


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



$name = isset($_POST['team_name1']) ? $_POST['team_name1'] : 'unknown';
$email = isset($_POST['team_email1']) ? $_POST['team_email1'] : 'info@createcap.in';

$json = [];

foreach ($_POST as $k => $v) :
    if (substr($k, 0, 2) == 'js') {
        $json[$k] = $v;
        unset($_POST[$k]);
    }
endforeach;



$_POST['json'] = json_encode($json);


// foreach ($_POST as $k => $v) {
//     if (!isset($k) or $v == '') {
//         unset($_POST[$k]);
//     }
// }







// echo json_encode($_POST);



//print_r($_POST);
if ($d->insert('firm', $_POST)) :
    $res['stat'] = true;
else :

    $res['stat'] = false;
    $res['err'] = $d->con->error;

endif;



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shabeer@signroots.com';                     //SMTP username
    $mail->Password   = 'roots4545';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    // $mail->addAddress('info@createcap.in');     
    //  $mail->addAddress('support@signroots.com', 'Jaseem');    
    $mail->addAddress($mail->Username);
    $mail->addReplyTo($email, $name);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'subject';
    $mail->Body    = "
    {$name } registered for firm.
    ";
    $mail->AltBody = '';

    $mail->send();
    $res['mail'] = true;
} catch (Exception $e) {
    $res['mail'] = false;
    $res['mail_err'] = $mail->ErrorInfo;
}


echo json_encode($res);
