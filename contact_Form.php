<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];

  $email_from ='esra.varol@student.ap.be'

  $email_subject = 'Knokke Special Aanvraag'

  $email_body = "User Name: $name.\n"
                  "User Email: $visitor_email.\n"
                    "User Phone: $phone.\n"

  $to = "esra.varol@telenet.be";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To $visitor_email \r\n"

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");
?>
