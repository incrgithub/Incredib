<?php

 include('/home/incredib/public_html/MyApps/Clientbackup/phpmailer/class.phpmailer.php');


include('takebackup.php');
include('createzip.php');
$files_to_zip = array(
'/home/incredib/public_html/MyApps/Clientbackup/backups/incredib_saptashree.sql',
'/home/incredib/public_html/MyApps/Clientbackup/backups/incredib_sangeet.sql',

'/home/incredib/public_html/MyApps/Clientbackup/backups/incredib_incredible.sql'
);


$result = create_zip($files_to_zip,'/home/incredib/public_html/MyApps/Clientbackup/backups.zip');

        $content = 'All Clients Database Backup Done Sucessfully....';

        $email = new PHPMailer();
        $email->From      = 'incredib@lin6.plreseller.com';
        $email->FromName  = 'Amit Bhalerao';
        $email->Subject   = 'Clients Database Backup';
        $email->Body      = $content;
        $email->AddAddress( 'incrcronmail@gmail.com' );
        
        $file = '/home/incredib/public_html/MyApps/Clientbackup/backups.zip';
        
        $email->AddAttachment( $file, 'backups.zip' );
        
        $b=$email->Send();
 



?>