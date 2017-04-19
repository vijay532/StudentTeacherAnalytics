<!DOCTYPE html>
<html>
<head>
</head>
<body>
<header>
	<h1>The Student List</h1>
</header>
<div class ="content">
<?php 
$db = new mysqli("localhost", "root", "", "test");
$classno=$_POST["classno"];
 ?>
<table border="1" align="center">
<tr>
<td>First Name</td>
<td>Last Name</td>
<td>Division</td>
</tr>
<tr>
<?php 
    $sql = "SELECT * FROM student_profile ";
    $result = $db->query($sql);
    while($row = mysqli_fetch_assoc($result)) {
        ?>
		<tr>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <!--
			<td><?php echo $row['classno']; ?></td>
		-->
		</tr>
        <?php
		
    }
 ?>
</tr>
</table>
</div>	
</body>
</html>