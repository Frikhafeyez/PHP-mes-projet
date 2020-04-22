<h1>Modifier inscrit</h1>
<form method="post" action="index.php?controller=inscrit&action=edit" enctype="multipart/form-data">

<br>nom : <input type="text" name="nom" value="<?php echo $inscrit->nom;?>" required>

<br>prenom : <input type="text" name="prenom" value="<?php echo $inscrit->prenom;?>" required>

<br>email : <input type="text" name="email" value="<?php echo $inscrit->email;?>" required>
<br>
<img src="photos/<?php echo $inscrit->photo;?>" width="100">
<input type="hidden" name="photo_old" value="<?php echo $inscrit->photo;?>">

<br>photo : <input type="file" name="photo">

<br>pays : <select name="pays" required>
				<option value="tunisie"  <?php if($inscrit->pays=="tunisie") echo "selected";?>>tunisie</option>
				<option value="france" <?php if($inscrit->pays=="france") echo "selected";?>>france</option>
				<option value="algerie" <?php if($inscrit->pays=="algerie") echo "selected";?>>algerie</option>
			</select>

<br>Tel : <input type="number" name="tel" value="<?php echo $inscrit->tel;?>" required>

<input type="hidden" name="id" value="<?php echo $inscrit->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>