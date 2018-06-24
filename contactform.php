<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $mailTo = "greenphantom@ufl.edu";
    $headers = "From: ".$mailFrom;
    $txt = $name." has sent you a message from your website!\nTheir phone number is: ".$phone.".\n\n".$message;
    
    mail($mailTo,$subject,$txt,$headers);
}
?>