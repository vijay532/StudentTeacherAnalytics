<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="dcs(1)";
$connection = new mysqli($servername, $username, $password,$db);
if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
}
mysql_select_db('dcs(1)');
if(isset($_POST['submit']))
{
$event_name = $_POST['event_name'];
$sql = "SELECT First_name,last_name FROM student_profile WHERE 
		id IN(select id from events where event_name='$event_name'
		)";
$record=mysql_query($sql);
}
else
{
	echo'give an appropiate event name';
}
?>
<html>
<head>
<style>
table{
	border-collapse:collapse;
}
</style>
</head>
<center>
<body>
<table border="1" cellspacing='1' cellpadding="1">
<tr>
<th>first name</th>
<th>last name</th>
<th>id</th>
</tr>
<?php 
while($student_profile = mysql_fetch_assoc($sql))
{
	echo"<tr>";
echo"<td>".$student_profile['first_name']."</td>";
echo"<td>".$student_profile['last_name']."</td>";
echo"</tr>";
}
?>
</center>
</table>
</body>
</html>