<h1>Liste des inscrits</h1>
<input type="button" value="nouveau inscrit" onclick="window.location.href='controller.php?action=add1'">
<?php
echo "<table border=1>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
	<th>action</th>
</tr>";
foreach($inscrits as $inscrit){

	echo "<tr>";
		echo "
			<td><img src='photos/".$inscrit->photo."' height='150'></td>
			<td>".$inscrit->nom."</td>
			<td>".$inscrit->prenom."</td>
			<td>".$inscrit->email."</td>
			
			<td>".$inscrit->tel."</td>
			<td>".$inscrit->pays."</td>
			<td><a href='controller.php?action = supp&id=".$inscrit->id."'>supp</a> <a href='controller.php?action=edit1&id=".$inscrit->id."&photo_old=".$inscrit->photo."'>modif</a></td>
		";
	echo "</tr>";
	
}
echo "</table>";
?>
