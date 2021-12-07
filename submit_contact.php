<?php
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name))
  {
    echo '<span class="ghgh_red">Name is required.</span><br><br>';
  }
  else if(empty($mobile))
  {
   echo '<span class="ghgh_red">Mobile Number is required.</span><br><br>';
  }
else if(empty($email))
  {
   echo '<span class="ghgh_red">Email is required.</span><br><br>';
  }
 else if(empty($message))
  {
   echo '<span class="ghgh_red">Message is required.</span><br><br>';
  }
else{
$to = "Receiver email address";
$subject = "Contact By ".$name;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers);
if($sent){
	echo '<span class="ghgh_green">Thank you for contacting us, we will reply to you as soon as possible.</span><br><br>';
}
else{
	echo '<span class="ghgh_red">
	Sorry! Your form submission is failed.
	</span><br><br>';
	}

}
?>