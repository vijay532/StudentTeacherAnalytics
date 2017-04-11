<html>
<body>
<center>
<style type="text/css">
table{
	border-collapse:collapse;
	text-align:center;
}
th,td{
border-width:0px 1px 1px 0px;
}
</style>
<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('db_modified')  or die(mysql_error());
$query=mysql_query("select first_name,last_name FROM student_profile") or die(mysql_error());
echo'<table border="1"><th >first_name</th><th>last_name</th>';
while($res=mysql_fetch_array($query))
{
  echo'<tr><td>'.$res['first_name'].'</td><td>'.$res['last_name'].'</td></tr>';
}
echo'</table>';
?>
</center
</body>
</html>