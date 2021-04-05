<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$mobilenumber = $_POST['mobilenumber'];
$message= $_POST['message'];
$to = "gautham.hc@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number =" . $mobilenumber
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>