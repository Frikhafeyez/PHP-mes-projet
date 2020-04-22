<div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<?php
echo '<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>

	<th>photo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
	<th>action</th>
</tr>
</thead>
<tbody>
';
foreach($inscrits as $inscrit){

	echo "<tr>";
		echo "
			<td><img src='photos/".$inscrit->photo."' height='150'></td>
			<td>".$inscrit->nom."</td>
			<td>".$inscrit->prenom."</td>
			<td>".$inscrit->email."</td>
			
			<td>".$inscrit->tel."</td>
			<td>".$inscrit->pays."</td>
			<td><a onclick=\"if(!confirm('Etes vous sure de supprimer?')) return false\" href='index.php?controller=inscrit&action=supp&id=".$inscrit->id."'>supp</a> <a href='index.php?controller=inscrit&action=edit1&id=".$inscrit->id."&photo_old=".$inscrit->photo."'>modif</a></td>
		";
	echo "</tr>";
	
}
echo "
</tbody>
<tfoot>
<tr>

	<th>photo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
	<th>action</th>
</tr>
</tfoot>

</table>";

?>
</div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->