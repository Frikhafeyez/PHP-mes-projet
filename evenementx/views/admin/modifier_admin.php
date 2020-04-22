<h1>Modifier admin</h1>
<form method="post" action="index.php?controller=admin&action=edit" enctype="multipart/form-data">

<br>nom : <input type="text" name="nom" value="<?php echo $admin->nom;?>" required>

<br>prenom : <input type="text" name="prenom" value="<?php echo $admin->prenom;?>" required>

<br>login : <input type="text" name="login" value="<?php echo $admin->login;?>" required>
<br>

<br>password : <input type="password" name="password" value="<?php echo $admin->password;?>" required>

<input type="hidden" name="id" value="<?php echo $admin->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>