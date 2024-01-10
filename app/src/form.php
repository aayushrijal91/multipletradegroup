<?php
include __DIR__ . '/../functions.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Sorry something went wrong! Please try resubmitting the form again');
        }

        $to = $admin_email;
        $subject = "Message from " . $site;

        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['emailaddress']);
        $phone = strip_tags($_POST['phonenumber']);
        $service = strip_tags($_POST['service']);
        $suburb = strip_tags($_POST['suburb']);
        $enquiry = strip_tags($_POST['message']);

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . $name . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Phone</td>' .
            '<td><b>' . $phone . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . $email . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Service</td>' .
            '<td><b>' . $service . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Suburb</td>' .
            '<td><b>' . $suburb . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Message</td>' .
            '<td><b>' . $enquiry . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        _phpmailer($to, $site, $subject, $message, $no_reply_email);

        header('Location:/thank-you/');
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}

function _phpmailer($to_email, $site, $subject, $message, $no_reply_email, $cc = "", $bcc = "")
{
    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;
        $mail->Username = "info@multipletradegroup.com";
        $mail->Password = "uyik bphg nfvb qcjx";
        $mail->Host     = "smtp.gmail.com";
        $mail->Mailer   = "smtp";
        $mail->SetFrom($no_reply_email, $site);
        $mail->AddAddress($to_email);
        if ($cc != '') {
            $mail->addCC($cc);
        }
        if ($bcc != '') {
            $mail->addBCC($bcc);
        }
        $mail->Subject = $subject;
        $mail->WordWrap   = 80;
        $mail->MsgHTML($message);

        if ((isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)) {
            $file_name = $_FILES['uploadedFile']['name'];
            $file_path = $_FILES['uploadedFile']['tmp_name'];
            $mail->addAttachment($file_path, $file_name);
        }

        $mail->IsHTML(true);
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
