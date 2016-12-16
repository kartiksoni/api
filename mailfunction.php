<?php
	
//class mailFunction{

	//Nirav
	function sendPHPMailer($to = NULL, $from = NULL, $subject = NULL, $msg = NULL){
		if($to == NULL && $from == NULL && $subject == NULL && $msg == NULL){
			return false;
		}
		else{
			include_once('PHPMailerAutoload.php');
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Host = "mail.acquaintsoft.com";
			$mail->SMTPDebug  = 0;       
			$mail->SMTPAuth   = true;    
			$mail->Host       = "mail.acquaintsoft.com";
			$mail->Port       = 465;             
			$mail->Username   = "mayur@acquaintsoft.com"; 
			$mail->Password   = "agc@2016"; 
			$mail->SetFrom($from, 'Acquaintsoft');
			$mail->Subject    = $subject;
			$mail->MsgHTML($msg);
			if (strpos($to, ',') !== false) {
			    $multiple = explode(',', $to);
			    foreach ($multiple as $key => $value) {
			    	$mail->AddAddress($value);
			    }
			}
			else{
				$mail->AddAddress($to);
			}
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
			if($from != ''){
				$from = $from;
			}
			else{
				$from = 'no-reply@acquaintsoft.com';
			}
			
			$headers .= 'From:'.$from."\r\n";
			
			// More headers
			//$headers .= 'From: <admin@acquaintsoft.com>' . "\r\n";

			//$headers = "From: " .  $from . "\r\n";
			//$headers = "From: <$from>" . '\r\n';

			$mail = mail($to, $subject, $msg, $headers);
			if($mail){
	echo 'send1';
				//$this->addMailToDB($to, $from, $subject, $msg, 'Y');
				return true;
			}
			else{
echo 'not send2';
				//$this->addMailToDB($to, $from, $subject, $msg, 'N');
				return false;
			}
			/*
			if($mail->Send()){
				$this->addMailToDB($to, $from, $subject, $msg, 'Y');
				return true;
			}
			else{
				$this->addMailToDB($to, $from, $subject, $msg, 'N');
				return false;
			}*/

		}
	}


	//Nirav
	/*function addMailToDB($to = NULL, $from = NULL, $subject = NULL, $msg = NULL, $sts = 0){
		global $objCon;
		$insQry = "INSERT INTO mails (to_email, from_email, subject, body, is_sent, sent_time)
			VALUES(
			'". $to ."', 
			'". $from ."', 
			'". $subject ."', 
			'". $msg ."', 
			'". $sts ."', 
			NOW()
			)";
		$result = mysqli_query($objCon->con,$insQry);
	}*/
//}
//$objMail = new mailFunction();
?>
