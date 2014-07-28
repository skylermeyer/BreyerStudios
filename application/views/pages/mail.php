<?php
// multiple recipients
$to  = 'andrew@breyerstudios.com' . ', '; // note the comma
$customerEmail = $_POST['customerEmail'] ;
$customer = $_POST['customerName'] ; 

// subject
$subject =  'Customer Inquiry ' .date("F j, Y, g:i a") ; 

// message
$message = '
<html>
<head>
  <title>Customer Inquiry</title>
</head>
<body>
	<p> From '.$customer.' at '.$customerEmail.'</p>
  '.$_POST["customerMessage"].'
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'Cc: skyler@bryerstudios.com' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);

  redirect('contact_success', 'location');
  
 

?>