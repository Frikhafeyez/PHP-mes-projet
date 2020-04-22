<h1>Liste des produits</h1>
<input type="button" value="nouveau produit" onclick="window.location.href='produit.controller.php?action=add1'">
<?php
echo "<table border=1>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>prix unit</th>
	<th>tva</th>
	<th>action</th>
</tr>";
foreach($produits as $produit){

	echo "<tr>";
		echo "
			<td><img src='photos/".$produit->photo."' height='150'></td>
			<td>".$produit->nom."</td>
			<td>".$produit->prixu."</td>
			<td>".$produit->tva."</td>
			
			<td><a href='produit.controller.php?action=supp&id=".$produit->id."'>supp</a> <a href='produit.controller.php?action=edit1&id=".$produit->id."&photo_old=".$produit->photo."'>modif</a></td>
		";
	echo "</tr>";
	
}
echo "</table>";
?>
