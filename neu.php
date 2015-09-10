<?php include 'db.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<title>TBD</Title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		
	</head>
	<body>
		<?php 
		$postwerte = $_POST; 
		$getwerte = $_GET; 

        
		$tid = '';
		$Mitarbeiter='';
		$ausgabedatum='';
		$rueckgabe='';
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    $tid = $_POST['Tid'];
		    $Mitarbeiter= $_POST['Mitarbeiter'];
		    $ausgabedatum= $_POST['ausgabedatum'];
		    $rueckgabe= $_POST['rueckgabe'];

		    
		     $result = saveLending($tid, $Mitarbeiter, $ausgabedatum, $rueckgabe);
		   
		    if ($result)
		    {
		    	echo 'Eintrag erstellt';
		    }
		     else
		    {
		    	echo'Fehler bei der Eingabe';
		    } 

		}

		?>
		
		<?php include 'header.php' ?>

		<form method="POST">
			<div>
				<label>TransponderID:</label>
				
				<select name="Tid" value="<?php echo $tid; ?>">
				<?php
				$alleTransponder= getTransponder();
		  		foreach ($alleTransponder as $tid):		  			
				?>
					<option value="<?php echo $tid['transponder_id']?>">
		  			<?php 
			  			echo $tid['transponder_id']; 
			  			
		  			?> 
		  			</option>
		  		<?php endforeach; ?>
		  		</select>

			</div>
			<div>
				<label>Mitarbeiter:</label>
		  		<select name="Mitarbeiter" value="<?php echo $Mitarbeiter; ?>">
		  		<?php
		  		$alleMitarbeiter = getEmployees();
		  		foreach ($alleMitarbeiter as $mitarbeiter):
		  		?>
		  			 
		  			<option value="<?php echo $mitarbeiter['employee_id']?>">
		  			<?php 
			  			echo $mitarbeiter['first_name']; 
			  			echo ' ';
			  			echo $mitarbeiter['last_name']; 
		  			?> 
		  			</option>
		  		<?php endforeach; ?>
		  		</select>

			</div>
		 	<div class="inlinerow">
		 		<label>Ausgabedatum:</label>  		 
		  		<input type="date" name="ausgabedatum" date="Ausgabedatum"value="<?php echo $ausgabedatum; ?>">
		 	</div>
		  	<div class="inlinerow">
		  		<label>Rückgabedatum:</label>
		  		<input type="date" name="rueckgabe" date="Rückgabedatum" value="<?php echo $rueckgabe; ?>">	
		  	</div>
            <div>
		  		<input type="submit" value="speichern">
		  	</div>
		 </form>
		 
   </body>
</html>