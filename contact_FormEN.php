<?php
if (isset($_POST['submit'])){
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$phone = $_POST['phone'];


$mailTo = "esra.varol@student.ap.be";
$headers = "From: ".$mailFrom;

mail($mailTo, $headers);



header("Location: KnokkeSpecialEN.html?mailsend")
}
?>
