<?php

	$to = 'creativedesigner100@gmail.com';
	$siteName = "www.iasgroup.in";
	$name = $_POST['qname'];
	$mobile= $_POST['qmobile'];
	$message = '

<html>
<head>
<title></title>
</head>
<body>
		Dear Creator Shop Team,<br/><br/>
		<b>Enquiry From Visitor</b><br/><br/>
		Name : '.$name.' <br/><br/>
		Mobile No. : '.$mobile.' <br/><br/>
		Regards<br/>
		<strong>Creator Shop Team<br/>New Delhi INDIA 110024</strong>
</body>
</html>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Creator Shop Team <creativedesigner100@gmail.com>' . "\r\n";
			if($name && $mobile){
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