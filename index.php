<html>
<head>
	<title>Intro PHP - GetUWired</title>
</head>
<body>
	<?php


	
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