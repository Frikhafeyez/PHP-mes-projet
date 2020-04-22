<h1>Modifier produit</h1>
<form method="post" action="produit.controller.php?action=edit" enctype="multipart/form-data">

<br>nom : <input type="text" name="nom" value="<?php echo $produit->nom;?>" required>

<br>prix unitaire : <input type="text" name="prixu" value="<?php echo $produit->prixu;?>" required>

<br>tva : <input type="text" name="tva" value="<?php echo $produit->tva;?>" required>
<br>
<img src="photos/<?php echo $produit->photo;?>" width="100">
<input type="hidden" name="photo_old" value="<?php echo $produit->photo;?>">

<br>photo : <input type="file" name="photo">

<input type="hidden" name="id" value="<?php echo $produit->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>