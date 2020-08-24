<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<title>MeasurementInformation</title>
</head>

<body>
<h1>Welcome to the best place to store your measurements! </h1>
<p>Please complete the following form and click save to store your information:</p>

<form>
<label>First Name:</label>
<input type="text" name="firstname" id="firstname" required="required" /><br /><br />
<label>Last Name :</label>
<input type="text" name="lastname" id="lastname" required="required"/><br /><br />
<label>Height:</label>
<input type="text" name="height" id="height" required="required" placeholder="cms"/><br /><br />
<label>Weight:</label>
<input type="text" name="weight" id="weight" required="required" placeholder="kgs"/><br /><br />
<label>Bodyfat:</label>
<input type="text" name="bodyfat" id="bodyfat" required="required" placeholder="Body fat percentage"/><br /><br />
<label>Exercise Level:</label>
<input type="text" name="exeriselevel" id="exerciselevel" required="required" placeholder="Times exercising per week"/><br /><br />
<label>Goal:</label>
<input type="checkbox" name="goal" value="Fat Loss"> Fat Loss
<input type="checkbox" name="goal" value="Maintenance"> Maintenance
<input type="checkbox" name="goal" value="Gain Weight"> Gain Weight 
<input type="submit" name="submit" value="Save">
</form>

<?php
if(isset($_POST["submit"])){ 
$db_host   = '192.168.2.12';
$db_name   = 'nikkidb';
$db_user   = 'webserviceuser';
$db_passwd = 'newpassword';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("INSERT INTO measurements (firstname, lastname, height, weight, bodyfat, exerciselevel, goal)
VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["height"]."','".$_POST["weight"]."','".$_POST["bodyfat"]."','".$_POST["exerciselevel"]."','".$_POST["goal"]."')");


}

?>
</table>
<p>View your most recent <a href="http://192.168.2.13"> measurements here</a></p>
</body>
</html>

