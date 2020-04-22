<h1>Produit</h1>
<form method="post" action="controller.produits².php?action=add" enctype="multipart/form-data">
<table border="0">
    <tr> <td> nom : </td> <td><input type="text" name="nom" required> </td></tr> 
    <tr> <td> prix :</td> <td><input type="text" name="prix" required> </td></tr>
    <tr> <td>TVA :</td> <td><input type="text" name="tva" required> </td></tr>
    <tr> <td>photo :</td> <td><input type="file" name="photo" required> </td></tr>
    <tr> <td> <input type="submit" name="submit" value="Créer"> </td></tr>
    
</table>

</form>