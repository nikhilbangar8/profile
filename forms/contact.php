<?php
  $receiving_email_address = 'nikhilbangar8@gmail.com';

  $to = $receiving_email_address;
  $frommail = $_POST['email'];
  $subject = $_POST['subject'];
  $header = "From:{$frommail} \r\n";
  $message = $_POST['message'];

  $retval = mail ($to,$subject,$message,$header);
         
  if( $retval == true ) {
    echo "Message sent successfully...";
  }else {
    echo "Message could not be sent...";
  }

?>