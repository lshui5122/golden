<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 587))
  ->setUsername('6d38990fb93bd51ad01237a14c82b892')
  ->setPassword('609c7ab845b1005f0af01b3b01d65d82')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['lshui5122@gmail.com' => 'ShiauHui'])
  ->setTo(['lshui5122@yahoo.com', 'lshui5122@yahoo.com' => 'TestShiauHui'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);
?>


  
          <form name="myForm" method="post" class="text-center">
              <div class="form-group">
          <input type="email" name="email" placeholder="Email" value="<?=$email?>" pattern=".{1,}" required title="Cannot be empty field" size="30"><?php echo $error_name?>
              </div>
      <br>
  
  <button type="submit" name="submitted" value="Submit" class="btn btn-primary" style="height:50px; width:80%;background-color: #2f8f83;
              color:white; border: 2px solid white;border-radius: 25px;">Reset Password</button>

          </form>