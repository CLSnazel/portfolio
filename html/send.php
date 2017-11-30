<?php
    $firstName = $_POST['first-name'];
	$lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Portfolio'; 
    $to = 'csnazel@sfu.ca'; 
    $subject = 'Hello';

    $body = "From: $firstName $lastName\n E-Mail: $email\n Message:\n $message";
?>