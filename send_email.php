<?php
//get data from form  
$name = $_POST['fname'];
$email= $_POST['candi-m'];
$phone= $_POST['candi-p'];
$resume= $_POST['resume'];

$to = "hist.ht05@mail.com";
$subject = "Mail From Zen Strategies";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone Number =" . $phone . "\r\n Resume =" . $resume;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>