<h1>Inscription</h1>
<form method="post" action="controller.php?action=add" enctype="multipart/form-data">
<br>nom : <input type="text" name="nom" required>
<br>prenom : <input type="text" name="prenom" required>
<br>email : <input type="text" name="email" required>
<br>photo : <input type="file" name="photo" required>
<br>pays : <select name="pays" required>
<option value="tunisie">tunisie</option>
<option value="france">france</option>
<option value="algerie">algerie</option>
</select>
<br>Tel : <input type="number" name="tel" required>
<br><input type="submit" name="submit" value="inscription">
</form>