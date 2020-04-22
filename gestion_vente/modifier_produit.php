<h1>Modifier produit</h1>
<form method="post" action="controller.produits.php?action=edit" enctype="multipart/form-data">

<table border="0">

<tr> 
    <td> nom : </td>
    <td><input type="text" name="nom" value="<?php echo $inscrit->nom;?>" required> </tr>

<tr>
    <td>prix : </td>
    <td><input type="text" name="prix" value="<?php echo $inscrit->prix;?>" required> 
</tr>

<tr>
    <td>TVA : </td>
    <td><input type="text" name="tva" value="<?php echo $inscrit->tva;?>" required> 
</tr>

<tr>
    <td><img src="photos/<?php echo $inscrit->photo;?>" width="100"></td>
    <td><input type="hidden" name="photo_old" value="<?php echo $inscrit->photo;?>"> </td>
</tr>

<tr>
    <td>photo :</td>
    <td> <input type="file" name="photo"></td>
    <td><input type="hidden" name="id" value="<?php echo $inscrit->id;?>"> </td>
</tr>
<tr> <td> <input type="submit" name="submit" value="Modifier"> </td></tr>

</table>
</form>