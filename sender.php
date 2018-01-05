<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'masterbot.investment@gmail.com';
$siteName = "www.masterbot-investment.eu";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

$mail = $_POST['email'];


if (isset($mail)) {


	$mailSub = '[Contact] [' . $siteName . '] '. '';

	$body = 'Sender Name: ' . $mail . "\n\n";
	$body .= 'Sender Mail: ' . $mail . "\n\n";
	$body .= 'Message Subject: ' . 'want to be keeped informed' . "\n\n";
	$body .= 'Message: ' . 'L\'envoyeur de se mail désire etre tenu informer de l\'avancement du projet';

	$header = 'From: ' . $mail . "\r\n";
	$header .= 'Reply-To:  ' . $mail . "\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();

	echo mail($to, $mailSub, $body, $header);
	echo '<p>Mail envoyé avec succès</p>';
	echo "<script>window.location = 'http://www.masterbot-investment.eu'</script>";
	// header( "Location: http://www.masterbot-investment.eu" );
}else{
	echo '<p>Envoie du mail échoué</p>';
	echo "<script>window.location = 'http://www.masterbot-investment.eu'</script>";
	// header( "Location: http://www.masterbot-investment.eu" );
}
?>
