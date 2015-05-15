<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>&lt;?php</p>
<p>$admin_email = &quot;macsolarcar@gmail.com&quot;</p>
<p>	$name = $_POST['name'];</p>
<p>$email = $_POST['email'];</p>
<p>$program = $_POST['program'];</p>
<p>$subteam = $_POST['subteam'];</p>
$skills = $_POST['skills'];
<p>$message = '$name';</p>
<p>$message = '$email';</p>
<p>$message = '$program';</p>
<p>$message = '$subteam';</p>
<p>$message = '$skills';</p>
<p></p>
<p>mail($admin_email, Join, $message, null)</p>
<p>?php&gt;</p>
</body>
</html>