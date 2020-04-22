<?php 
include "connexion.php";

$query = 'SELECT * FROM produits'; 
$query2 = 'delete FROM produits where id=13';
$query3 = "update produits set description='description2222222' where id=14";  
//$query4 = "insert into produits (nom,description,photo) values('prod6','description6','photo6.jpg')";  

//$cnx->exec($query2);
$cnx->exec($query3);
//$cnx->exec($query4);


//$tab= $cnx->query($query); 
$tab= $cnx->query($query)->fetchAll(PDO::FETCH_OBJ); 
echo "<table border=1>
<tr>
	<th>nom</th>
	<th>description</th>
	<th>photo</th>
</tr>";
//while( $resultat = $tab->fetch(PDO::FETCH_OBJ)){ 
foreach($tab as $resultat){

	echo "<tr>";
		echo "
			<td>".$resultat->nom."</td>
			<td>".$resultat->description."</td>
			<td>".$resultat->photo."</td>
		";
	echo "</tr>";
	
}
echo "</table>";
?>
