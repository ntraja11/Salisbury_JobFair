

<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comm = $_POST['additionalComments'];
$to = $_POST['to'];

$subject = "CCL";

$message = "
<html>
<head>
<title>CCL</title>
</head>
<body>

<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$email."</td>
<td>".$phone."</td>
<td>".$comm."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: $email" . "\r\n";


mail($to,$subject,$message,$headers);
header("location:../../DOR3379884.html");


?>