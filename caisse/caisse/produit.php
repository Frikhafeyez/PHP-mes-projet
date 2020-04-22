<h1>Ajouter produit</h1>
<form method="post" action="produit.controller.php?action=add" enctype="multipart/form-data">
<br>nom : <input type="text" name="nom" required>
<br>prix unitaire : <input type="text" name="prixu" required>
<br>tva : <input type="text" name="tva" required>
<br>photo : <input type="file" name="photo" required>
<br><input type="submit" name="submit" value="Ajouter">
</form>