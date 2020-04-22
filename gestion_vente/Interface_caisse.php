<h1>Ticket</h1>
<?php
$today = date("F j, Y, g:i a"); 
echo "<h2> Numero Ticket :  ".$caisse->num."    Date : ".$today." </h2> "
echo "<table border=1>
    <tr> 
        <td> Qte : ".$caisse->qte."</td> 
        <td> Produit : ".$caisse->mon."</td>
        <td> Prix_unitaire :".$caisse->prix_unitaire."</td>
        <td> TVA : "..$caisse->tva."</td>
$ttc = $pu *$qte *(1+$tva/100);
    </tr>";
    
echo "</table>";
?>
