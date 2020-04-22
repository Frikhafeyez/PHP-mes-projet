<?php session_start();
include "import.php"; 
//print_r($_POST);
//die;
/*$tab_mat=array("lundi"=>array("08-09"=>'math','09-10'=>'physique'),
"mardi"=>array("10-11"=>'math','15-16'=>'physique'));*/

$j=$_POST['jour'];
$h=$_POST['heure']; 
$m=$_POST['matiere'];

$_SESSION['tab_mat'][$j][$h]=$m;
$tab_mat=$_SESSION['tab_mat'];

?>
<table border="1">
	<tr>
		<th>Jour/heure</th>
		<?php foreach($heurs as $h)
		{	echo "<th>$h</th>";	}
		?>
	</tr>
	<?php foreach($jours as $j)
	{	echo "<tr>";
			echo "<th>$j</th>";
			foreach($heurs as $h)
			{   if(isset($tab_mat[$j][$h])){
					echo "<td>".$tab_mat[$j][$h]."</td>";
				}else
					echo "<td></td>";
			}
		echo "</tr>";
	}
	?>
</table>
<form action="ajout.php">
<input type="submit" value="ajouter" >
</form>

<form action="logout.php">
<input type="submit" value="log out" >
</form>

		