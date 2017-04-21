<?php
session_start();
$conn=new mysqli("localhost","root","","dcs");
if($conn->connect_error)
{
	die( "An unexpected error occurred.Please try again".$conn->conect_error);
}

$result=mysql_query("select * from  event1");
?>
<?php
if(isset($_POST['eventtype'])&&isset($_POST['societytype'])&&($_POST['actname']))
{
	$eventtype= $_POST['eventtype'];
	$societytype= $_POST['societytype'];
	$actname= $_POST['actname'];
	
	$opt=$_POST['actname'];
	switch($opt)
	{
		case '1':
			$result=mysql_query("insert into ");
			break;
		case '2':
			$result=mysql_query("insert into ");			
			break;
		case '3':
			$result=mysql_query("insert into ");
			break;
		case '4':
			$result=mysql_query("insert into ");
			break;
		
	}
}
?>
<?php
$conn->close();	
?>