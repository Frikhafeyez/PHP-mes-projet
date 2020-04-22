<h1>Liste des inscrits</h1>
<input type="button" value="nouveau produit" 
onclick="window.location.href='controller.produits.php?action=add1'">
<?php
echo "<table border=1>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>prix</th>
	<th>TVA</th>
</tr>";
foreach($inscrits as $inscrit){
	echo "<tr>";
		echo "
			<td><img src='photos/".$inscrit->photo."' height='150'></td>
			<td>".$inscrit->nom."</td>
			<td>".$inscrit->prix."</td>
			<td>".$inscrit->tva."</td>
			
			<td>
				<a href='controller.produits.php?action=supp&id=".$inscrit->id."'>	supprimer 	</a> 
				<a href='controller.produits.php?action=edit1&id=".$inscrit->id."&photo_old=".$inscrit->photo."'> modifier </a>
			</td>";
	echo "</tr>";
	
}
echo "</table>";
?>
