<?php
echo"bonjour mr ".$_SESSION['login'];
?>

<h1>Inscription</h1>
<form method="post" action="controller.php?action=add" enctype="multipart/form-data">
<br>nom : <input type="text" name="nom" required>
<br>prenom : <input type="text" name="des" required>
<br>photo : <input type="file" name="Photo" required>
<br><input type="submit" name="submit" value="inscription">
<a href='logout.php'></a>
</form>