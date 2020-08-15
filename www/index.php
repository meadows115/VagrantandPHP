<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<title>My database test page</title>
</head>
<body>

<h1>Test page for database </h1>
<p>Content from the users table:</p>

<table border="1">
<tr><th>First Name</th><th>Last Name</th></tr>

<?php
 
$db_host   = '127.0.0.1';
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

