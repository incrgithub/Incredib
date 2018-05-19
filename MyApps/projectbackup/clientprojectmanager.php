<?php
include('/home/incredib/public_html/MyApps/projectbackup/phpmailer/class.phpmailer.php');

function create_zip($realPath,$fileName) {
	

// Get real path for our folder
$rootPath = realpath($realPath);

// Initialize archive object
$zip = new ZipArchive();
$zip->open($fileName, ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
     
	    if (!$file->isDir())
	    {
	        // Get real and relative path for current file
	        $filePath = $file->getRealPath();
	       
	        $relativePath = substr($filePath, strlen($rootPath) + 1);
	        $zip->addFile($filePath, $relativePath);
	      
	    }
   
}

// Zip archive will be created only after closing object
$zip->close();
}


create_zip('/home/incredib/public_html/MyApps/ClientManager','ClientManager');

sendMail('Client Project Manager Backup','Client Project Manager Backup','/home/incredib/ClientManager','ClientManager');

function sendMail($content,$subject,$file,$attachmentName)
       {
        $email = new PHPMailer();
        $email->From      = 'incredib@lin6.plreseller.com';
        $email->FromName  = 'Abhijit Shinde';
        $email->Subject   = $subject;
        $email->Body      = $content;
        $email->AddAddress( 'webprojectbackup@gmail.com' );
        $email->AddAttachment( $file, $attachmentName );
        $b=$email->Send();
        
	if($b == "true") 
	    { 	
	    include('sms.php');
	    sendSms('Client Project Manager Backup Done Successfully...');
	    echo "Client Project Manager Backup Done Successfully...";
	    unlink($file);
	    }
	 else
	    echo "Failed"."<br>"; 
	}
?>