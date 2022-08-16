<?php

$user = 'root';
$password = '';
$database = 'student';
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$sql = " SELECT * FROM student_details ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Student Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
        button{
        
            position: fixed;
            left:45%;
            color:black;
            
        }
	</style>
</head>

<body>
	<section>
		<h1>Student Details</h1>
	
		<table>
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Mark1</th>
				<th>Mark2</th>
                <th>Mark3</th>
                <th>Total</th>
                <th>Rank</th>
			</tr>
			
			<?php
				
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
			
				<td><?php echo $rows['S.No'];?></td>
				<td><?php echo $rows['Name'];?></td>
				<td><?php echo $rows['Mark1'];?></td>
				<td><?php echo $rows['Mark2'];?></td>
                <td><?php echo $rows['Mark3'];?></td>
                <td><?php echo $rows['Total'];?></td>
                <td><?php echo $rows['Rank'];?></td>
			</tr>
			<?php
				}
			?>
		</table><br><br>
	</section>
    <section>
        <div class="button-container-div">
        <button onclick="addTable()">Add Table</button><br><br>
        <button onclick="saveData()">Save</button>
        </div>
    </section>
</body>

</html>
