<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Import PHPMailer classes into the global namespace

// Include library files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

class MailConfig
{
    private $PHPMailer;

    public function __construct($mailForm = 'info@tigergentlemen.com')
    {
// Create an instance; Pass `true` to enable exceptions
        $this->PHPMailer = new PHPMailer;
// Server settings
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;    //Enable verbose debug output
        $this->PHPMailer->isSMTP();                            // Set mailer to use SMTP
        $this->PHPMailer->Host = 'smtp.gmail.com';           // Specify main and backup SMTP servers
        $this->PHPMailer->SMTPAuth = true;                     // Enable SMTP authentication
        $this->PHPMailer->Username = 'tigergentlemen.info@gmail.com';       // SMTP username
        $this->PHPMailer->Password = 'jkexpnjhbbymelco';         // SMTP password
        $this->PHPMailer->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
        $this->PHPMailer->Port = 465;                          // TCP port to connect to

// Sender info
        $this->PHPMailer->setFrom($mailForm, 'SenderName');
        $this->PHPMailer->addReplyTo($mailForm, 'SenderName');
    }

    public function sendMail($mailTo, $content = '', $subject = '', $isHTML = true)
    {
        $this->PHPMailer->addAddress($mailTo);
        $this->PHPMailer->isHTML($isHTML);
        $this->PHPMailer->Subject = "=?utf-8?b?".base64_encode($subject)."?=";
        $this->PHPMailer->Body = $content;

        if (!$this->PHPMailer->send()) {
			return false;
        } else {
			return true;
        }

    }
}

