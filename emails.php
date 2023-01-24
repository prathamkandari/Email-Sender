<?php

$to = "jsomya019@gmail.com";
$subject = "Mail successfully sent";
$body = "Hello This is your pc";
$headers = "From: prathamkandari123@gmail.com";

if(mail($to, $subject, $body, $headers)) {
    echo "Mail successfully sent";
}

else {
    echo "Error is there";
}

?>