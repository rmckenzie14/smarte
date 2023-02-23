<?php
class EmailUser{
    
    
    
    public function sendEmail($emailTilte, $emailMessage, $EmailAddress){
        
        $to = $EmailAddress;
        
        //$cc = $groupEmail;
		$subject = $emailTilte;
		$message = $emailMessage;
	    $message .= "<p>Regards, </p>";
		$message .= "<p>SmartE</p>";
		$headers = "From: Smart-E \r\n";
		$headers .= "Content-type: text/html\r\n";
        $headers .= "Reply-To: no-reply\r\n";
        
        
            
        
		
		if(mail($to, $subject, $message, $headers)){
		    
		    $_SESSION['emaiMes'] = " and email sent";
		}else{
		    $_SESSION['emaiMes'] = " email wasn't sent";
		}
    }
}

?>