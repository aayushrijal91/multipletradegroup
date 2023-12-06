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
            '<td>Message</td>' .
            '<td><b>' . $enquiry . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers = "From: " . $site . " <" . $no_reply_email . ">\r\n" .
            "Bcc: " . $bcc_email . "\r\n" .
            "MIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        $messagea = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

        function uploadFile($uploadedFile)
        {
            $fileTmpPath = $uploadedFile['tmp_name'];
            $fileName = $uploadedFile['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            $uploadFileDir = './../assets/uploads/';
            $allowedFileExtensions = array('jpeg', 'jpg', 'gif', 'png', 'pdf', 'webp', 'docx');

            global $mime_boundary, $messagea;

            if (in_array($fileExtension, $allowedFileExtensions)) {
                $dest_path = $uploadFileDir . $newFileName;

                if (move_uploaded_file($fileTmpPath, $dest_path)) {

                    if (is_file($dest_path)) {
                        $messagea .= "--{$mime_boundary}\n";
                        $fp =    @fopen($dest_path, "rb");
                        $data =  @fread($fp, filesize($dest_path));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $messagea .= "Content-Type: application/octet-stream; name=\"" . basename($dest_path) . "\"\n" .
                            "Content-Description: " . basename($dest_path) . "\n" .
                            "Content-Disposition: attachment;\n" . " filename=\"" . basename($dest_path) . "\"; size=" . filesize($dest_path) . ";\n" .
                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                } else {
                    throw new Exception('There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.');
                }
            } else {
                throw new Exception('Upload failed. Allowed file types: ' . implode(',', $allowedFileExtensions));
            }
        }

        if ((isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)) {
            uploadFile($_FILES['uploadedFile']);
            $messagea .= "--{$mime_boundary}--";
            // $result =  mail($to, $subject, $messagea, $headers);
            _phpmailer($to, $site, $subject, $messagea, $no_reply_email, "", "");


            // if ($result) {
            header('location:./../thankyou');
            // }
        } else {
            // $headers = "MIME-Version: 1.0\r\n" .
            //     "Content-type: text/html; charset=utf-8\r\n" .
            //     "From: " . $site . " <" . $no_reply_email . ">\r\n" .
            //     "Bcc: " . $bcc_email . "\r\n" .
            //     "Reply-To: " . $no_reply_email . "\r\n" .
            //     "X-Mailer: PHP/" . phpversion();

            // $result = mail($to, $subject, $message, $headers);

            _phpmailer($to, $site, $subject, $message, $no_reply_email, "", "");

            // if ($result) {
            header('location:./../thankyou');
            // } else {
            //     throw new Exception('Failed, please submit form again or call us directly.');
            // }
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}

function _phpmailer($to_email, $site, $subject, $message, $no_reply_email, $cc, $bcc)
{
    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port     = 465;
        $mail->Username = "";
        $mail->Password = "";
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
        $mail->IsHTML(true);
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
