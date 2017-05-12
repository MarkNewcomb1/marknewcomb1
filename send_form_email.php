<?php
 
if(isset($_POST['exampleEmailInput'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $vRAEdkGrkGXKfmNH = "mark.newcomb@marknewcomb1.com";
 
    $email_subject = "From contact form";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "There were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please <a href='index.php'>go back</a> and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['exampleEmailInput']) ||
 
        !isset($_POST['exampleRecipientInput']) ||
 
        !isset($_POST['exampleMessage'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $BqJLrDPvFUbewUJb = $_POST['exampleEmailInput']; // required
 
    $comments = $_POST['exampleMessage']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$BqJLrDPvFUbewUJb)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($comments) < 2 || strlen($comments) > 500) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href","<",":",";","'","\"","/",">","@");
 
      return str_replace($bad,"",$string);
 
    }
 
 
    $email_message .= "Email: ".clean_string($BqJLrDPvFUbewUJb)."\n";
 
    $email_message .= "Message: ".clean_string($comments)."\n";
 
        
 
// create email headers
 
$headers = 'From: '.$BqJLrDPvFUbewUJb."\r\n".
 
'Reply-To: '.$BqJLrDPvFUbewUJb."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($vRAEdkGrkGXKfmNH, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting me. I will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>