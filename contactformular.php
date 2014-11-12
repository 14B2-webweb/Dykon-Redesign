<!DOCTYPE html>
<html>
<head>
	<title>Boilerplate</title>
	<link href="css/reset.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<main>
		<header>
			<?php include 'includes/menu_inc.php'; ?>
		</header>
		<section>
			<h1>Kontakt formular</h1>
			<p>This is a test message, to test, if this test, will work when I test it. Hopefulle the test will test well, this time.. test.</p>
            
<?php
$field_name = $_POST['cf_name'];
$field_title = $_POST['cf_title'];
$field_company = $_POST['cf_company'];
$field_email = $_POST['cf_email'];
$field_tlf = $_POST['cf_tlf'];
$field_message = $_POST['cf_message'];

$mail_to = 'mikkelvba@gmail.com';
$subject = 'Besked fra Dykon-bruger '.$field_name; 

$body_message = 'From: '.$field_name."\n";
$body_message = 'From: '.$field_title."\n";
$body_message = 'From: '.$field_company."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message = 'Phone: '.$field_tlf."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers); 

if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
    alert('Tak for din besked. Vi vil besvare hurtigst muligt.');
    window.location = 'contact.php';
</script>
<?php
}
else { ?>
<script language ="javascript" type="text/javascript">
    alert('Fejl ved afsending af besked. I stedet venligst send en mail til mikkelvba@gmail.com');
    window.location = 'contact.php';
</script>
<?php
}
?>
            
                
		</section>
		<footer>
		</footer>
	</main>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>