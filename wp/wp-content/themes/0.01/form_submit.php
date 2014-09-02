<?php
if(isset($_POST['name'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "kylie@strivehm.com";
    $email_subject = "Strive Health - Register Interest";     
    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$event = $_POST['event']; // required
	$link = $_POST['link']; // required
    
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
	
	 	$email_message .= "Someone would like to Register their interest in an event on the Strive Website"."\n";
		$email_message .= "\n";
	  	$email_message .= "Name: ".clean_string($name)."\n";
		$email_message .= "Email: ".clean_string($email)."\n";
		$email_message .= "The Event: ".clean_string($event)." at ".clean_string($link)."\n";
		$email_message .= "\n";
	 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in contact soon.
 
<?php
}else{?>
Apologies, there has been an error. Please try again.
<?php };
?>