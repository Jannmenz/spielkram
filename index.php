<?php include 'db.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<title>TBD</Title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		
	</head>
	<body>

		<?php include 'header.php' ?>
	
		<table id="mytable">
		<tr>
			<td>Tid</td>
			<td>Mitarbeiter</td>
			<td>Ausgabedatum</td>
			<td>Rückgabedatum</td>
			<td>Differenz</td>
		</tr> 

		<?php 
		$lendings = getLendings();
		foreach ($lendings as $landing) :
		?>
			<tr>
				<td><?php echo $landing['transponder_id']; ?></td>
				<td><?php echo $landing['employee_id']; ?></td>
				<td><?php echo $landing['issue_date']; ?></td>
				<td><?php echo $landing['returning_date']; ?></td>
				<td>
					<?php 
					if (empty($landing['returning_date'])) {
						echo '-';
					} else {
						$endDate = strtotime($landing['returning_date']);
						$startDate = strtotime($landing['issue_date']);
						echo round(($endDate - $startDate)/60/60/24);
						echo ' Tage';
					} 
					?>
				</td>

			</tr>

		<?php endforeach; ?>
		</table>

		<?php include 'footer.php' ?>
	</body>
</html>