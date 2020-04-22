<?php 
include "import.php"; 
?>

<form method="post" action="emploi.php">
Jour : <select name="jour">
			<?php foreach($jours as $j){
				echo "<option value='".$j."'>$j</option>"; 
			}
			?>
	   </select>
heure : 
<select name="heure">
	<?php
		foreach($heurs as $h){
			echo "<option value='".$h."'>$h</option>";
		}
	?>
</select>
matiere :<input type="text" name="matiere">
<input type="submit" value ="valider">
</form>