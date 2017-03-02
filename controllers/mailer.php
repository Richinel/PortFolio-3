<?php 

	$name		= $_POST['name'];
	$mail		= $_POST['mail'];
	$subject	= $_POST['subject'];
	$msg		= $_POST['msg'];
	$mymail		= 'richinel_jarbandhan@hotmail.com';

	//Send mail
	mail($mymail, $subject, $msg);

	echo "<div class='message success' data-component='message'> Mail succesvol verzonden! <span class='close small'></span></div>";
?>