<?php


namespace Source\Models;

use League\Plates\Engine;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    private $email_ownner;
    private $senha_ownner;
    private $name_ownner;
    private $db;
    private $templates;

    public function __construct()
    {
        $this->db = (new Config())->findById(1);
        $this->email_ownner = $this->db->email;
        $this->senha_ownner = $this->db->senha;
        $this->templates = new Engine(dirname(__DIR__, 1).'/views/includes');
    }

    public function sendMail($email_to, $name_to, $assunto, $msg, $link = ''){
        $mail = new PHPMailer(false); // should be false

        try {
            $mail->isSMTP();
            $mail->setLanguage("pt");
            $mail->CharSet = 'UTF-8';
            $mail->Host       = 'smtp.gmail.com';                      // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->email_ownner;                     // SMTP username
            $mail->Password   = $this->senha_ownner;                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($this->email_ownner, 'Curso');
            $mail->addAddress($email_to, $name_to);
            $mail->addReplyTo($this->email_ownner, 'Curso');

            // Content
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body    = $this->templates->render('mail', ['link' => $link, 'msg' => $msg]);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}