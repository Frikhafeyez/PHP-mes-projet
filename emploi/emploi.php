<?php
$tab_mat=array("lundi"=>array("08-09"=>'math','09-10'=>'physique'),
"mardi"=>array("10-11"=>'math','15-16'=>'physique'),
"mercredi"=>array("08-09"=>'math','09-10'=>'physique'));

$jours=array("lundi","mardi","mercredi","jeudi","vendredi","samedi");
$heurs=array("08-09","09-10","10-11","11-12","14-15","15-16","16-17");
//echo $tab_mat["lundi"]["08-09"];
?>

<table border="1">
	<tr>
		<th>Jour/heure</th>
		<?php foreach($heurs as $h)
			{
				echo "<th>$h</th>";
			}
		?>
	</tr>

	<?php 
	foreach($jours as $j)
	{
		echo "<tr>";
			echo "<th>$j</th>";
			foreach($heurs as $h)
			{
				if(isset($tab_mat[$j][$h]))
					echo "<td>".$tab_mat[$j][$h]."</td>";
				else
					echo "<td></td>";
			}
		echo "</tr>";
	}
	?>
</table>