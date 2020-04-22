<h1>Liste des inscrits</h1>
<input type="button" value="nouveau produit" onclick="window.location.href='controller.php?action=add1'">
<?php

session_start();
echo"bonjour mr ".$_SESSION['login'];
echo "<table border=1>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>Desc</th>
	
	<th>action</th>
</tr>";
foreach($produits as $prod){

	echo "<tr>";
		echo "
			<td><img src='photos/".$prod[3]."' height='150'></td>
			<td>".$prod[1]."</td>
			<td>".$prod[2]."</td>
			
			
			<td><a href='controller.php?action=supp&id=".$prod[0]."'>supp</a> <a href='controller.php?action=edit1&id=".$prod[0]."&photo_old=".$prod[0]."'>modif</a></td>
		";
	echo "</tr>";
	
}
echo "</table>";
echo "<a href='logout.php'>logout</a>";

?>
