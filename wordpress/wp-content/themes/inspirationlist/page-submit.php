<!--dynamic-cached-content-->
<?php
$to = 'submit@theinspirationlist.com';
$subject = 'The Inspiration List - New Suggestion';
$message = '';

if (isset($_POST['suggestion_submit'])) {

	$message .= 'URL: ' . $_POST['suggestion_url'] . "\r\n";
	$message .= 'Name: ' . $_POST['suggestion_name'] . "\r\n";
	$message .= 'Email: ' . $_POST['suggestion_email'] . "\r\n";
	$message .= 'Twitter: ' . $_POST['suggestion_twitter'] . "\r\n";
	$message .= 'Message: ' . "\r\n";
	$message .= $_POST['suggestion_comment'] . "\r\n";
	
	if ( wp_mail($to, $subject, $message) ) {
		echo '{"response":"success"}';
	}

} else {
	echo '{"response":"error"}';
}

?><!--/dynamic-cached-content-->