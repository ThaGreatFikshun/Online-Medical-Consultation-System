<?php
include("header.php");
if(isset($_POST[submit]))
{  
	$message = "<strong>Dear $_POST[name],</strong><br />
				<strong>Your Email ID is :</strong> $_POST[email]<br />
				<strong>Message :-</strong> $_POST[comment]
				";
	
	sendmail("ngangajames1995@gmail.com","Mail from Appoint My Doctor",$message);
	
}
?>
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Request For a zoom Meeting</li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">

        <h6>Request for a meeting by entering following information</h6>
        <form class="submitphoto_form" action="contactform1.php " method="POST">
    
    <p class="username">
      <input type="text" class="wp-form-control wpcf7-text" placeholder="Enter Your name" name="name" id="name" required >
      <!-- <label for="name">Name</label> -->
    </p>
    
    <p class="useremail">
      <input type="text" class="wp-form-control wpcf7-text" placeholder="Enter Your Email address" name="email" id="email" required >
      <!-- <label for="email">Email</label> -->
    </p>
    
    <p class="usercontact">
      <input type="text" class="wp-form-control wpcf7-text" placeholder="Enter Subject of the Meeting" name="payt" id="payt" required >
      <!-- <label for="contact">Phone number</label> -->
    </p>    
  
    <p class="usertext">
      <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Paster Your Zoom Link Here!" name="text" required ></textarea>
                        <!-- <label for="text">Comments</label> -->
    </p>
    
    <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
      &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />

  </div>
  
</div>

    <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");
function sendmail($toaddress,$subject,$message)
{
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.dentaldiary.in';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'sendmail@dentaldiary.in';                 // SMTP username
	$mail->Password = 'fikshun/';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->From = 'sendmail@dentaldiary.in';
	$mail->FromName = 'Web Mall';
	$mail->addAddress($toaddress, 'Joe User');     // Add a recipient
	$mail->addAddress($toaddress);               // Name is optional
	$mail->addReplyTo('e.in', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');
	
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $subject;
	$mail->Body    = $message;
	$mail->AltBody = $subject;
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo '<center><strong><font color=green>Mail sent.</font></strong></center>';
	}
}
?>