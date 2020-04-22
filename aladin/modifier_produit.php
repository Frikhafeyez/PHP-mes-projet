<?php

session_start();
echo"bonjour mr ".$_SESSION['login'];
?>
<h1>Modifier inscrit</h1>
<form method="post" action="controller.php?action=edit" enctype="multipart/form-data">
<?php
foreach($produit as $prod){
	echo $prod[3];
	?>
<br>nom : <input type="text" name="nom" value="<?php echo $prod[1];?>" required>

<br>prenom : <input type="text" name="des" value="<?php echo $prod[2];?>" required>
<br>

<img src="photos/<?php echo $prod[3];?>" width="100">
<input type="hidden" name="photo_old" value="<?php echo $prod[3];?>">

<br>photo : <input type="file" name="Photo">

<input type="hidden" name="id" value="<?php echo $prod[0];?>">

<br><input type="submit" name="submit" value="Modifier">
<?php
}
	?>
</form>