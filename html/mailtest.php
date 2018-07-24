<?php

require 'Mail.php'
$mail = new Mail();

$headers=array(
	'From' => 'noreply@butts.com',
	'Subject => 'Hello'
);

$auth=array(
	'auth' =>true,
	'host' = '',
	'username' => 'admin+snazgirl.ca'
	'password' => 'TrashPand+88'
);

$smtp = $mail->factory('smtp', $auth);
$smtp->send('clsnazel@gmail.com',$headers, 'hello');

?>