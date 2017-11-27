<?php
if (isset($_POST) && !empty($_POST)) {

	$uname = $_POST['uname'];
	$uemail = $_POST['uemail'];
	$uphone = $_POST['uphone'];
	$msg = $_POST['umessage'];

	// upload code

	/* $to =  Send mail to Inquiri Id's BD team + heads for BI*/

	$inqtype = "Enquiry";
	
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$to = "ahluwaliajyoti50@gmail.com";

	$subject = "Email From Jiya Pharma Website For" . " " . $inqtype;
	
	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($uname) . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($uemail) . "</td></tr>";
	$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($uphone) . "</td></tr>";
	$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($msg) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";
		
mail($to,$subject,$message,$headers);

}
header("Location: thankyou.php?message=contact");
die();
?>