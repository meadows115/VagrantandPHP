<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<title>Conversions</title>
</head>
<body>

<h1>Welcome to the best place for conversions! </h1>
<p>Unit to convert from:</p>

<table border="1">
<tr><th>First Name</th><th>Last Name</th></tr>

<?php
 
$db_host   = '192.168.2.12';
$db_name   = 'nikkidb';
$db_user   = 'webserviceuser';
$db_passwd = 'newpassword';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM user");

while($row = $q->fetch()){
  echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>\n";
}

?>

</table>
</body>
</html>

