<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'ssl://smtp.gmail.com', 
    'smtp_port' => 465,
    'smtp_user' => 'geetaverma6653@gmail.com',
    'smtp_pass' => '1234@Abcd#geeta',
    // 'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    // 'smtp_timeout' => '4', //in seconds
    'charset' => 'utf-8',
    // 'wordwrap' => TRUE
    'newline' => "\r\n"
);

?>