<html>
<head>
<title>Result</title>
</head>
<body>



    <table border="1">
      <tr><th>First Name</th><th>Last Name</th><th>Height</th><th>Weight</th><th>Body Fat Percentage</th><th>Exercise Level</th><th>Goal</th></tr>

<?php 

$db_host   = '192.168.2.12';
$db_name   = 'nikkidb';
$db_user   = 'webserviceuser';
$db_passwd = 'newpassword';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
$q = $pdo->query("SELECT * FROM measurements");

while($row = $q->fetch()){
   echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["height"]."</td><td>".$row["weight"]."</td><td>".$row["bodyfat"]."</td><td>".$row["exerciselevel"]."</td><td>".$row["goal"]."</td></tr>\n";
}

?>
</table> 
</body>
</html>