<!DOCTYPE html>
<head>
	<title>Add event</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class ="content">
		<form method ="post" action="">
			Select the type of activity:<br/><select name ="eventtype">
				<option value="1">Extra-curricular</option>
				<option value="2">Co-curricular</option>
				
			</select>
			Select the society which organised the event:<br/><select name ="societytype">
				<option value="1">csi</option>
				<option value="2">ieee</option>
				<option value="3">iste</option>
			</select>
			Event conduced at :<br/><select >
				<option value="1">college</option>
				<option value="2">outside college</option>
			</select>			
			<input type ="submit" value ="Submit">
			Name of the activity:<br/><select name ="actname">
				<option value="1">business quiz</option>
				<option value="2">technozova</option>
				<option value="3">arduino tutorial</option>
				<option value="4">Cricket League</option>
			</select>
			<input type ="submit" value ="Submit"/>
		</form>
<?php
if(isset($_POST['eventtype'])&&isset($_POST['societytype'])&&($_POST['actname']))
{
	$eventtype= $_POST['eventtype'];
	$societytype= $_POST['societytype'];
	$actname= $_POST['actname'];
	
	/*$opt=$_POST['myoption'];
	switch($opt)
	{
		case '1':
			echo $input1.$input2;
			break;
		case '2':
			$a=strcmp($input1,$input2);
			if($a<0) echo "String 1 will come before string two";
			else if($a>0) echo "String two will come before string one";
			else echo "Both  are same";			
			break;
		case '3':
			$b=strrev($input1);
			echo "The reverse of the first input input string is :<br/><br/>";
			echo $b."<br/>";
			$c=strrev($input2);
			echo "The reverse of the second input input string is :<br/><br/>";
			echo $c;
			break;
		case '4':
			echo str_shuffle($input1);
			break;
		case '5':
			$d=strlen($input1);
			echo "The length of the first input input string is :<br/><br/>";
			echo $d."<br/>";
			$e=strlen($input2);
			echo "The length of the second input input string is :<br/><br/>";
			echo $e;
			break;
	}
}*/
?>
</div>
<body>