<html>
<head>
	<title>Intro PHP - GetUWired</title>
</head>
<body>
	<?php


	// ALL VARIABLES IN PHP START WITH $
	// NAMES IN POST METHOD MUST MATCH NAMES OF INPUT FIELDS IN HTML FILE
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		


// mail(to,subject,message,headers,parameters);
		mail($email, $subject, $message);


	?>
</body>
</html>