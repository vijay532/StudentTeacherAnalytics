<!DOCTYPE html>
<head>
	<title>Add event</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class ="content">
		<form method ="post" action="AddEventController.php">
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
			<input type ="submit" value ="Submit" name ="submit" id="submit"/>
		</form>
</div>
<body>