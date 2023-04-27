<?php

	$to = 'creativedesigner100@gmail.com';
	$siteName = "www.creatorshop.in";
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$mobile= $_POST['contact'];
	$services= $_POST['services'];
	$message = $_POST['mssg'];  
	$captcha= $_POST['secure'];
	$message = '

<html>
<head>
<title></title>
</head>
<body>
		Dear Creator Shop Team,<br/><br/>
		<b>Enquiry From Visitor</b><br/><br/>
		Name : '.$name.' <br/><br/>
		Email : '.$email.' <br/><br/>
		Mobile No. : '.$mobile.' <br/><br/>
		Subject :: '.$services.'<br/><br/>
		Message : '.$message.' <br/><br/>
		<strong>Creator Shop Team<br/>New Delhi INDIA 110024</strong>
</body>
</html>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Creator Shop Team <creativedesigner100@gmail.com>' . "\r\n";
			if($name && $email && $mobile && $services && $message){
			if(mail($to, $subject, $message, $headers))
			{
				$message= "Thank you for Contact US.";
				header("Location:http://creatorshop.in/");
			}else{
					$message="Please try again.";
				}
			}
			else{
					$message="All the fields marked by * should not be blank.";
				}
?>