<h1>Inscription</h1>
<form method="post" action="controller.php?action=add" enctype="multipart/form-data">

<table border="0">
    <tr>
        <td>nom :</td>
        <td><input type="text" name="nom" required></td> 
    </tr>
    <tr>
        <td>prenom :</td>
        <td><input type="text" name="prenom" required></td>
    </tr>
    <tr>
        <td>email :</td>
        <td><input type="text" name="email" required></td>
    </tr>
    <tr>
        <td>photo :</td>
        <td><input type="file" name="photo" required></td>
    </tr>
    <tr>
        <td>pays :</td>
        <td>
            <select name="pays" required>
                <option value="algerie">Algerie</option>
                <option value="allemagne">Allemagne</option>
                <option value="france">France</option>
                <option value="tunisie">Tunisie</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Télephone :</td>
        <td><input type="number" name="tel" required></td>
    </tr>

    <tr>
        <center>
           <td colspan="2"><input type="submit" name="submit" value="inscription"></td>
        </center> 
    </tr>

</table>

</form>