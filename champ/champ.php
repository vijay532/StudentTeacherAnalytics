<html>
<head>
<style>
h1{
background-image: url(key.jpg);
background-position:  left top;
background-position: repeat;
color: white;
font-size:5em;
text-align: center;
text-shadow: 4px 4px black;
}
#amigo{

color:blue;
}
h4{color: white;
}
#sub{
text-align: center;

border: 10px solid transparent;
border-image: url(key.jpg) 10 round;
font-size:2em;
margin: auto;
color: white;
background color:#cc4400;
}
</style>
</head>
<header><h1>Event<span id="amigo">Participation</span></h1></header>
<body bgcolor="#4d88ff">
<form action="" method="post">
<br>Enter event name to be searched: <input type="text" name="val">
<input name="submit" type="submit" />
</form>
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
if(isset($_POST['submit']))
{
$eventname=$_POST['val'];
$query=mysql_query("select first_name,last_name FROM student_profile where id  In (select id from events where event_name='$eventname')") or die(mysql_error());
echo'<table border="1"><th >first_name</th><th>last_name</th><th>id</th>';
while($res=mysql_fetch_array($query))
{
	echo'<tr><td>'.$res['first_name'].'</td><td>'.$res['last_name'].'</td><td>'.$res['id'].'</td></tr>';
}
echo'</table>';
}
?>
</center
</body>
</html>