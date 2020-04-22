<h1>Vente à la caisse</h1>
<form method="post" action="ticket.controller.php?action=add" enctype="multipart/form-data">
<br>Num ticket : <input type="text" name="num" required>

<br>produit : <select name="produit" required>
<?php foreach($produits as $produit){ ?>
<option value="<?php echo $produit->nom;?>"><?php echo $produit->nom;?></option>
<?php } ?>
</select>
<br>prix unitaire : <input type="text" name="prixu" required>
<br>tva : <input type="text" name="tva" required>
<br>qte : <input type="text" name="qte" required>
<br><input type="submit" name="submit" value="imprimer ticket">
</form>